<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mail\AdminBookingConfirmMail;
use App\Mail\UserBookingMail;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('Y-m-d');
        
        $bookings = Booking::orderBy('booking_date', 'DESC')->paginate(20);
        $status = ['0' => 'Belum Selesai', '1' => 'Selesai', '2' => 'Cancel'];
        $pending_count = Booking::where('status', 0)->count();
        $success_count = Booking::where('status', 1)->count();
        $cancel_count = Booking::where('status', 2)->count();
        
        return view('admin.booking.index',[
            'bookings' => $bookings,
            'status' => $status,
            'pending_count' => $pending_count,
            'success_count' => $success_count,
            'cancel_count' => $cancel_count,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $status = ['0' => 'Belum Selesai', '1' => 'Selesai', '2' => 'Cancel'];

        return view('admin.booking.edit',[
            'booking' => $booking,
            'status' => $status,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $all =  $request->all();
        $booking = Booking::where('id', $id)->firstOrFail();

        // 1 - success, 2 - cancel, 0 - pending
        // if admin approve status to success, notify to user that admin have approved their booking through email
        if ($all['status'] == 1) {
            $data = [
                'name' => $booking->user ? $booking->user->name : '-',
                'phone_no' => $booking->user ? $booking->user->phone_no : '-',
                'email' => $booking->user ? $booking->user->email : '-',
                'gender' => $booking->gender == 'L' ? 'LELAKI' : 'WANITA',
                'package' => $booking->package ? $booking->package->title : '-',
                'booking_date' => date('d/m/Y', strtotime($booking->booking_date)),
                'booking_time' => date('h:i A', strtotime($booking->booking_date)),
                'branch' => $booking->branch,
            ];
    
            //Email to admin that user have booking. system@elmedina.com.my
            Mail::to('faizaladnan9@gmail.com')->send(new AdminBookingConfirmMail($data));
        }
        
        $booking->fill($all)->save();

        return back()->with('success', 'Booking is successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function createBooking()
    {
        $branches = ['KUANTAN' => 'Kuantan', 'SHAH ALAM' => 'Shah Alam', 'BANGI' => 'Bangi', 'JOHOR BAHRU' => 'Johor Bahru'];
        $gender = ['L' => __('common.men'), 'P' => __('common.women')];
        $packages = Package::pluck('title','id');

        return view('booking.create',[
            'branches' => $branches,
            'gender' => $gender,
            'packages' => $packages,
        ]);
    }

    public function storeBooking(Request $request)
    {
        $all = $request->all();
        $this->validate($request, Booking::getValidationRules());

        $all['user_id'] = Auth::user()->id;
        $all['booking_date'] = date('Y-m-d', strtotime($request->input('date'))).' '.date('H:i:00', strtotime($request->input('time')));
        $all['status'] = 0;

        Log::info(Auth::user()->name. '-ID ('.Auth::user()->id. ') has made booking at '. date('Y-m-d h:i A')); //Store log info 
        $booking = Booking::create($all);

        $data = [
            'name' => Auth::user()->name,
            'phone_no' => Auth::user()->phone_no,
            'email' => Auth::user()->email,
            'gender' => $booking->gender == 'L' ? 'LELAKI' : 'WANITA',
            'package' => $booking->package ? $booking->package->title : '-',
            'booking_date' => date('d-m-Y', strtotime($booking->booking_date)),
            'booking_time' => date('h:i A', strtotime($booking->booking_date)),
            'branch' => $booking->branch,
            'status' => $booking->status,
            'id' => $booking->id,
        ];
        //Default email
        $email = 'system@elmedina.com.my';
        switch ($booking->branch) {
            case 'KUANTAN':
                $email = 'kuantan@elmedina.com.my';
                break;
            case 'SHAH ALAM':
                $email = 'shahalam@elmedina.com.my';
                break;
            case 'BANGI':
                $email = 'bangi@elmedina.com.my';
                break;
            case 'JOHOR BAHRU':
                $email = 'johorbahru@elmedina.com.my';
                break;
            default:
                $email = 'system@elmedina.com.my';
                break;
        }

        //Email to admin that user have booking. system@elmedina.com.my
        Mail::to($email)->send(new UserBookingMail($data));
        Log::info(Auth::user()->name. '-ID ('.Auth::user()->id. ') has successfull email the booking to admin at '. date('Y-m-d h:i A')); //Store log info 

        $success = "Thank you, your booking is successfully created. Please wait for confirmation and we will send you by email";
        return redirect()->route('booking-list')->with('success', $success);
    }

    public function listBooking()
    {
        $booking = Booking::where('user_id', Auth::user()->id)->where('status', 0)->orderBy('created_at','DESC')->limit(1)->first();
        
        return view('booking.list',[
            'booking' => $booking,
        ]);
    }
}
