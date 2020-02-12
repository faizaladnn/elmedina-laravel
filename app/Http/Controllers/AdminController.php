<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Booking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->back()->withInput()->withErrors('Credentials is wrong. Please try again.');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        $today = date('Y-m-d');
        $bookings = Booking::where('booking_date', '>=', $today)->paginate(20);
        $status = ['0' => 'Pending', '1' => 'Success', '2' => 'Cancel'];
        $johor_bahru = Booking::where('branch','JOHOR BAHRU')->get();
        $kuantan = Booking::where('branch','KUANTAN')->get();
        $shah_alam = Booking::where('branch','SHAH ALAM')->get();
        $bangi = Booking::where('branch','BANGI')->get();

        $users = User::all();

        return view('admin.dashboard',[
            'bookings' => $bookings,
            'status' => $status,
            'users' => $users,
            'johor_bahru' => $johor_bahru,
            'kuantan' => $kuantan,
            'shah_alam' => $shah_alam,
            'bangi' => $bangi,
        ]);
    }

    public function index()
    {
        $admins = Admin::all();

        return view('admin.index',[
            'admins' => $admins,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = new Admin();
        $branches = ['ALL' => 'ALL', 'KUANTAN' => 'KUANTAN', 'SHAH ALAM' => 'SHAH ALAM', 'BANGI' => 'BANGI', 'JOHOR BAHRU' => 'JOHOR BAHRU'];

        return view('admin.create', [
            'admin' => $admin,
            'branches' => $branches,
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
        $all = $request->all();
        $this->validate($request, Admin::getValidationRules());
        
        $all['password'] = Hash::make($request->input('password'));
        $admin = Admin::create($all);

        return redirect()->route('admin.edit', [$admin->id])->with('success', 'New Admin successfully created !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        $branches = ['ALL' => 'ALL', 'KUANTAN' => 'KUANTAN', 'SHAH ALAM' => 'SHAH ALAM', 'BANGI' => 'BANGI', 'JOHOR BAHRU' => 'JOHOR BAHRU'];

        return view('admin.edit', [
            'admin' => $admin,
            'branches' => $branches,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $all = $request->all();

        $admin->fill($all)->save();
        return redirect()->route('admin.edit', [$admin])->with('success', 'Saved successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Delete successfully!');
    }
}
