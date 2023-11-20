<?php

namespace App\Http\Controllers\V2;

use App\Booking;
use App\Http\Controllers\Controller;
use App\Mail\UserBookingMail;
use App\Package;
use App\User;
use Illuminate\Http\Request;
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
        dd('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v2.booking.create',[
            'nav' => 'Booking Form',
        ]);
    }
    public function checkAvailability($type)
    {
        // dd($type);
        return view('v2.booking.check-availability',[
            'type' => $type,
            'nav' => 'Availability',
        ]);
    }

    public function storeBookingV2(Request $request)
    {
        $all = $request->all();

        // validate input
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'branch' => 'required',
            'time' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $user = User::create([
                'name' => $request->name, // 
                'email' => $request->email, // 
                'phone_no' => $request->phone_no, // 
                'password' => bcrypt($request->phone_no),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        $package = $request->package;
        // ENUM('KUANTAN', 'SHAH ALAM')
        $branch = strtoupper(str_replace("-", " ", $request->branch));

        $package = Package::where('title', 'LIKE', $package . "%")->first();

        $all['user_id'] = $user->id;
        $all['package_id'] = $package->id;
        $all['booking_date'] = $request->date . " " . date('H:i:00', strtotime($request->time));
        $all['branch'] = $branch;
        $all['gender'] = $request->gender == "MALE" ? "L" : "P";
        $all['status'] = 0;
        $all['created_at'] = date('Y-m-d H:i:s');
        $all['updated_at'] = date('Y-m-d H:i:s');

        $booking = Booking::create($all);

        // Booking Information
        $data = [
            'name' => $user->name,
            'phone_no' => $user->phone_no,
            'email' => $user->email,
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
            default:
                $email = 'system@elmedina.com.my';
                break;
        }

        // //Email to admin that user have booking. system@elmedina.com.my
        Mail::to($email)->send(new UserBookingMail($data));
        Log::info($user->name. '-ID ('.$user->id. ') has successfull email the booking to admin at '. date('Y-m-d h:i A')); //Store log info 

        $success = "Thank you, your booking is successfully created. Please wait for confirmation and we will send you by email";
        return redirect()->route('v2.booking-list', [$booking->id])->with('success', $success);
    }

    public function getBookingReceipt($bookingId)
    {
        $booking = Booking::where('id', $bookingId)->first();

        // For branch information only
        switch ($booking->branch) {
            case 'KUANTAN':
                $phoneNo = "+6010 838 7030";
                $address = "A75, Level 1, Jln IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang";
                $facebookUrl = "https://www.facebook.com/elmedinaspabekamkuantan";
                break;
            case 'SHAH ALAM':
                $phoneNo = "+6018 249 7030";
                $address = "No. 17, 1, Jalan Plumbum R 7/R, Seksyen 7, 40000 Shah Alam, Selangor";
                $facebookUrl = "https://www.facebook.com/elmedinaspabekamshahalam";
                break;
            default:
            $phoneNo = "+6010 838 7030";
            $address = "A75, Level 1, Jln IM 7/1, Bandar Indera Mahkota, 25200 Kuantan, Pahang";
            $facebookUrl = "https://www.facebook.com/elmedinaspabekamkuantan";
                break;
        }

        return view('v2.booking.booking-receipt',[
            'booking' => $booking,
            'phoneNo' => $phoneNo,
            'address' => $address,
            'facebookUrl' => $facebookUrl,
            'nav' => 'Booking Receipt',
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
