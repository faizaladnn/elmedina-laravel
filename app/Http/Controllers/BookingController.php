<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('Y-m-d');
        $bookings = Booking::where('booking_date', '>=', $today)->orderBy('booking_date', 'ASC')->paginate(20);
        $status = ['0' => 'Pending', '1' => 'Success', '2' => 'Cancel'];
        
        return view('admin.booking.index',[
            'bookings' => $bookings,
            'status' => $status,
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

        Booking::create($all);

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
