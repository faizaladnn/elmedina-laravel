<?php

namespace App\Http\Controllers;

use App\Booking;
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
        //
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
    public function update(Request $request, Booking $booking)
    {
        //
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
        $packages = [
            '1' => 'VVIP A - Full Body (24 Cup) + Sport Massage (45 Minutes) + Air Relax (30 Minutes)',
            '2' => 'VVIP B - Full Body (24 Cup) + Sport Massage (30 Minutes)',
            '3' => 'PAKEJ 1 - Full Body (24 Cup)',
            '4' => 'PAKEJ 2 - Half Body (14 Cup)',
            '5' => 'PAKEJ 3 - Bekam Wajah (8 Cup)',
            '6' => 'PAKEJ 4 - Bekam Migrain (8 Cup)',
            '7' => 'PAKEJ 5 - Bekam Gout (12 Cup)',
            '8' => 'PAKEJ 6 - Bekam Angin (21 Cup)',
            '9' => 'PAKEJ 7 - Urutan Badan (8 Cup)',
            '10' => 'PAKEJ 8 - Sport Massage + Hypervolt Therapy',
            '11' => 'PAKEJ 9 - Sport Massage + Hypervolt Therapy + Air Relax',
            '12' => 'PAKEJ 10 - Sport Recovery',
        ];

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
