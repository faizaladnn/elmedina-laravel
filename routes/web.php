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
    return view('misc.under_construction',[
        'nav' => 'Coming Soon',
    ]);
});

// Route::get('/', function () {
//     return view('home',[
//         'nav' => 'Home',
//     ]);
// })->name('home');

// Route::get('/about-us', function (){
//     return view('about_us',[
//         'nav' => 'About Us',
//     ]);
// })->name('about-us');

// Route::prefix('branches')->name('branches.')->group(function () {
    
//     // Main branches page
//     Route::get('/', function () {
//         return view('branches',[
//             'nav' => 'Branch',
//         ]);
//     });
//     //Other Branches
//     Route::get('/kuantan', function () {
//         return view('branches.kuantan');
//     })->name('kuantan');
//     Route::get('/shah-alam', function () {
//         return view('branches.shah_alam');
//     })->name('shah-alam');
//     Route::get('/bangi', function () {
//         return view('branches.bangi');
//     })->name('bangi');
//     Route::get('/johor-bahru', function () {
//         return view('branches.johor_bahru');
//     })->name('johor-bahru');

//     Route::get('/getBranchesByCountry/{country}', 'BranchController@getBranchesByCountry')->name('getBranchesByCountry');
// });

// Route::prefix('services')->name('services.')->group(function () {
    
//     Route::get('/', function(){
//         return view('services', [
//             'nav' => 'Services',
//         ]);
//     });
    
//     Route::get('/stretching', function(){
//         return view('services.stretching');
//     })->name('stretching');
    
//     Route::get('/bekam', function(){
//         return view('services.bekam');
//     })->name('bekam');
    
//     Route::get('/air-relax', function(){
//         return view('services.air_relax');
//     })->name('air-relax');
    
//     Route::get('/hypervolt', function(){
//         return view('services.hypervolt');
//     })->name('hypervolt');
    
//     Route::get('/kinesio-taping', function(){
//         return view('services.kinesio_taping');
//     })->name('kinesio-taping');
    
//     Route::get('/electro-therapy', function(){
//         return view('services.electro_therapy');
//     })->name('electro-therapy');
    
//     Route::get('/sport-massage', function(){
//         return view('services.sport_massage');
//     })->name('sport-massage');
// });



// Route::prefix('packages')->name('packages.')->group(function () {
    
//     Route::get('/', function(){
//         return view('packages', [
//             'nav' => 'Packages',
//         ]);
//     });
    
//     // VVIP
//     Route::get('/pakej-a', function () {
//         return view('packages.vvip_a');
//     })->name('pakej-a');
    
//     Route::get('/pakej-b', function () {
//         return view('packages.vvip_b');
//     })->name('pakej-b');

//     // Bekam sunnah
//     Route::get('/full-body', function () {
//         return view('packages.full_body');
//     })->name('full-body');
    
//     Route::get('/half-body', function () {
//         return view('packages.half_body');
//     })->name('half-body');

//     // Terapi Khusus
//     Route::get('/bekam-wajah', function () {
//         return view('packages.bekam_wajah');
//     })->name('bekam-wajah');

//     Route::get('/bekam-migrain', function () {
//         return view('packages.bekam_migrain');
//     })->name('bekam-migrain');

//     Route::get('/bekam-gout', function () {
//         return view('packages.bekam_gout');
//     })->name('bekam-gout');

//     Route::get('/bekam-angin', function () {
//         return view('packages.bekam_angin');
//     })->name('bekam-angin');

//     Route::get('/urutan-badan', function () {
//         return view('packages.urutan_badan');
//     })->name('urutan-badan');

//     // Recovery
//     Route::get('/pakej-8', function () {
//         return view('packages.pakej_8');
//     })->name('pakej-8');

//     Route::get('/pakej-9', function () {
//         return view('packages.pakej_9');
//     })->name('pakej-9');
    
//     Route::get('/pakej-10', function () {
//         return view('packages.pakej_10');
//     })->name('pakej-10');
    
// });

// Route::get('login', function() {
//     return view('auth.login');
// })->name('login');

// Route::get('sign-up', function() {
//     return view('auth.register');
// })->name('sign-up');

// Route::get('/{locale}', function ($locale) {
//     $locale = App::getLocale();

//     if (App::isLocale('en')) {
//         App::setLocale($locale);
//     }
// });
