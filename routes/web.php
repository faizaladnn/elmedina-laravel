<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('misc.under_construction',[
//         'nav' => 'Coming Soon',
//     ]);
// });
Route::get('testtesttest', function(){
    return view('email.user_booking_email')->with([
        'name' => 'Muhamad Faizal Bin Adnan',
        'phone_no' => '014-5188155',
        'email' => 'faizaladnan9@gmail.com',
        'gender' => 'Lelaki',
        'package' => 'PAKEJ 6 - Bekam Angin (21 Cup)',
        'booking_date' => '22-03-2020',
        'booking_time' => '03:00',
        'branch' => 'Kuantan',
        'status' => 0,
        'id' => 2,
    ]);
});
Auth::routes();

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::prefix('/v2')->name('v2.')->group(function () {
    Route::get('/type/{type}', function ($type) { 
        return redirect()->to(route('v2.home').'#' . strtolower($type));
      })->name('home-type');
    
    Route::get('/', function () {return view('v2.home', ['nav' => 'Home']); })->name('home');

    // Branch
    Route::get('/kuantan', function () {return view('v2.branch.kuantan', ['nav' => 'Kuantan']); })->name('kuantan');
    Route::get('/shah-alam', function () {return view('v2.branch.shah_alam', ['nav' => 'Shah Alam']); })->name('shah-alam');
    Route::get('/ulu-klang', function () {return view('v2.branch.ulu_kelang', ['nav' => 'Ulu Klang']); })->name('ulu-klang');
    // Services
    Route::get('/bekam-hijama', function () {return view('v2.services.bekam_hijama', ['nav' => 'Bekam/Hijama']); })->name('bekam-hijama');
    Route::get('/urutan-massage', function () {return view('v2.services.massage', ['nav' => 'Urutan/Massage']); })->name('urutan-massage');
    Route::get('/air-relax', function () { return view('v2.services.air_relax',[ 'nav' => 'Air Relax Therapy']); })->name('air-relax');
    Route::get('/hypervolt', function () { return view('v2.services.hypervolt',[ 'nav' => 'Hypervolt Therapy']); })->name('hypervolt');
    Route::get('/tens', function () { return view('v2.services.tens',[ 'nav' => 'Electro Therapy (TENS)']); })->name('tens');
    Route::get('/ultrasound', function () { return view('v2.services.ultrasound',[ 'nav' => 'Ultrasound Therapy']); })->name('ultrasound');
    Route::get('/kinesio', function () { return view('v2.services.kinesio',[ 'nav' => 'Kinesio Tapping']); })->name('kinesio');
    // Packages
    Route::get('/package', function () {return view('v2.packages', ['nav' => 'Packages']); })->name('package');

    
    
    Route::get('/booking', 'V2\BookingController@create')->name('getBooking');
    Route::get('/booking/availability/{type}', 'V2\BookingController@checkAvailability')->name('checkAvailability');
    Route::post('create-booking', 'V2\BookingController@storeBookingV2')->name('store-booking');
    Route::get('/thank-you/{id}', 'V2\BookingController@getBookingReceipt')->name('booking-list');
});

Route::get('/', function () {
    return view('home',[
        'nav' => 'Home',
    ]);
})->name('home');

Route::get('/about-us', function (){
    return view('about_us',[
        'nav' => 'About Us',
    ]);
})->name('about-us');

Route::get('/blog', function (){
    return view('blog',[
        'nav' => 'Blog',
    ]);
})->name('blog');

Route::prefix('branches')->name('branches.')->group(function () {
    
    // Main branches page
    Route::get('/', function () {
        return view('branches',[
            'nav' => 'Branch',
        ]);
    });
    //Other Branches
    Route::get('/kuantan', function () {
        return view('branches.kuantan');
    })->name('kuantan');
    Route::get('/shah-alam', function () {
        return view('branches.shah_alam');
    })->name('shah-alam');
    Route::get('/ulu-klang', function () {
        return view('branches.ulu_klang');
    })->name('ulu-klang');

    Route::get('/getBranchesByCountry/{country}', 'BranchController@getBranchesByCountry')->name('getBranchesByCountry');
});

Route::prefix('services')->name('services.')->group(function () {
    
    Route::get('/', function(){
        return view('services', [
            'nav' => 'Services',
        ]);
    });
    
    Route::get('/stretching', function(){
        return view('services.stretching');
    })->name('stretching');
    
    Route::get('/bekam', function(){
        return view('services.bekam');
    })->name('bekam');
    
    Route::get('/air-relax', function(){
        return view('services.air_relax');
    })->name('air-relax');
    
    Route::get('/hypervolt', function(){
        return view('services.hypervolt');
    })->name('hypervolt');
    
    Route::get('/kinesio-taping', function(){
        return view('services.kinesio_taping');
    })->name('kinesio-taping');
    
    Route::get('/electro-therapy', function(){
        return view('services.electro_therapy');
    })->name('electro-therapy');
    
    Route::get('/sport-massage', function(){
        return view('services.sport_massage');
    })->name('sport-massage');
    
    Route::get('/ultrasound', function(){
        return view('services.ultrasound');
    })->name('ultrasound');
    
    Route::get('/needling', function(){
        return view('services.needling');
    })->name('needling');
});

Route::prefix('packages')->name('packages.')->group(function () {
    
    Route::get('/', function(){
        return view('packages', [
            'nav' => 'Packages',
        ]);
    });
    
    // VVIP
    Route::get('/vvip-a', function () {
        return view('packages.vvip_a');
    })->name('pakej-a');
    
    Route::get('/vvip-b', function () {
        return view('packages.vvip_b');
    })->name('pakej-b');

    // Bekam sunnah
    Route::get('/full-body', function () {
        return view('packages.full_body');
    })->name('full-body');
    
    Route::get('/half-body', function () {
        return view('packages.half_body');
    })->name('half-body');

    // Terapi Khusus
    Route::get('/bekam-wajah', function () {
        return view('packages.bekam_wajah');
    })->name('bekam-wajah');

    Route::get('/bekam-kepala', function () {
        return view('packages.bekam_migrain');
    })->name('bekam-kepala');

    Route::get('/bekam-kaki', function () {
        return view('packages.bekam_gout');
    })->name('bekam-kaki');

    Route::get('/bekam-angin', function () {
        return view('packages.bekam_angin');
    })->name('bekam-angin');

    Route::get('/urutan-badan', function () {
        return view('packages.urutan_badan');
    })->name('urutan-badan');

    // Recovery
    Route::get('/pakej-8', function () {
        return view('packages.pakej_8');
    })->name('pakej-8');

    Route::get('/pakej-9', function () {
        return view('packages.pakej_9');
    })->name('pakej-9');
    
    Route::get('/pakej-10', function () {
        return view('packages.pakej_10');
    })->name('pakej-10');
    
});

Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', function(){
        return view('shop',[
            'nav' => 'Shop',
        ]);
    });
    // Products
    Route::get('/disposable-cup', function () {
        return view('shops.disposable_cup');
    })->name('disposable-cup');
    
    Route::get('/disposable-needle', function () {
        return view('shops.disposable_needle');
    })->name('disposable-needle');    
});

// User booking
Route::get('booking', 'BookingController@createBooking')->name('view-booking')->middleware('auth');
Route::post('create-booking', 'BookingController@storeBooking')->name('store-booking')->middleware('auth');

//Admin Site
Route::get('list', 'BookingController@listBooking')->name('booking-list');
// ->middleware('auth');


Route::get('admin', 'AdminController@loginPage')->name('admin.login-page');
Route::post('admin/login', 'AdminController@authenticate')->name('admin.login');

//Approve booking 
Route::get('booking/{id}', 'BookingController@getApproveBooking')->name('getApproveBooking');
Route::put('booking/{id}', 'BookingController@putApproveBooking')->name('putApproveBooking');

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {

    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    // Admin CRUD
    Route::get('index', 'AdminController@index')->name('index');
    Route::get('create', 'AdminController@create')->name('create');
    Route::post('store', 'AdminController@store')->name('store');
    Route::get('edit/{id}', 'AdminController@edit')->name('edit');
    Route::put('update/{id}', 'AdminController@update')->name('update');
    Route::delete('delete/{id}', 'AdminController@destroy')->name('delete');
    
    // Booking Management
    Route::prefix('booking')->name('booking.')->group(function (){
        Route::get('index', 'BookingController@index')->name('index');
        Route::get('create', 'BookingController@create')->name('create');
        Route::post('store', 'BookingController@store')->name('store');
        Route::get('edit/{id}', 'BookingController@edit')->name('edit');
        Route::put('update/{id}', 'BookingController@update')->name('update');
        Route::delete('delete/{id}', 'BookingController@destroy')->name('delete');

        //Approve booking to success/cancel/pending/
        Route::put('approve-booking/{id}', 'BookingController@approveBooking')->name('approve-booking');
    });

    // Blog/Article Management
    Route::prefix('blog')->name('blog.')->group(function (){
        Route::get('index', 'BlogController@index')->name('index');
        Route::get('create', 'BlogController@create')->name('create');
        Route::post('store', 'BlogController@store')->name('store');
        Route::get('edit/{id}', 'BlogController@edit')->name('edit');
        Route::put('update/{id}', 'BlogController@update')->name('update');
        Route::delete('delete/{id}', 'BlogController@destroy')->name('delete');
    });

    // Customer Management
    Route::prefix('customer')->name('customer.')->group(function (){
        Route::get('index', 'UserController@index')->name('index');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('store', 'UserController@store')->name('store');
        Route::get('edit/{id}', 'UserController@edit')->name('edit');
        Route::put('update/{id}', 'UserController@update')->name('update');
        Route::delete('delete/{id}', 'UserController@destroy')->name('delete');
    });

});
