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
    Route::get('/bangi', function () {
        return view('branches.bangi');
    })->name('bangi');
    Route::get('/johor-bahru', function () {
        return view('branches.johor_bahru');
    })->name('johor-bahru');

    Route::get('/getBranchesByCountry/{country}', 'BranchController@getBranchesByCountry')->name('getBranchesByCountry');
});




Route::prefix('packages')->name('packages.')->group(function () {
    
    Route::get('/', function(){
        return view('packages', [
            'nav' => 'Packages',
        ]);
    });

    //Other Packages
    Route::get('/bekam-angin', function () {
        return view('packages.bekam_angin');
    })->name('bekam-angin');

    Route::get('/bekam-wajah', function () {
        return view('packages.bekam_wajah');
    })->name('bekam-wajah');
});

Route::get('/{locale}', function ($locale) {
    $locale = App::getLocale();

    if (App::isLocale('en')) {
        App::setLocale($locale);
    }
});
