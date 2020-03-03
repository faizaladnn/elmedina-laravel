<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mail\AdminBookingConfirmMail;
use App\Mail\UserBookingMail;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $status = ['0' => 'Pending', '1' => 'Success', '2' => 'Cancel'];
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
    public function edit(Booking $booking)
    {
        //
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
            dd($all);
            //email to user
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

        $booking = Booking::create($all);

        $data = [
            'name' => Auth::user()->name,
            'phone_no' => Auth::user()->phone_no,
            'email' => Auth::user()->email,
            'gender' => $booking->gender == 'L' ? 'LELAKI' : 'WANITA',
            'package' => $booking->package ? $booking->package->title : '-',
            'booking_date' => date('d/m/Y', strtotime($booking->booking_date)),
            'booking_time' => date('h:i A', strtotime($booking->booking_date)),
            'branch' => $booking->branch,
        ];

        //Email to admin that user have booking. system@elmedina.com.my
        // Mail::to('faizaladnan9@gmail.com')->send(new UserBookingMail($data));

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
