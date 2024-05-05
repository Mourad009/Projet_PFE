<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DeveloperController;
use App\Http\Middleware\Role;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\DevelopersController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DevelopeurController;
use App\Http\Controllers\LocalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::middleware(['auth','role:user'])->group(function(){

    // routes language
    //Route::post('/locale', [LocalController::class, 'setLocale']);

    Route::get('/dashboard-page/user', [UserController::class, 'DashboardPage2'])->name('dashboardpage2');
    Route::get('/logout-page/user', [UserController::class, 'LogoutPage'])->name('logoutpage2');
    Route::get('/exit-page/user', [UserController::class, 'ExitPage'])->name('exitpage2');
    Route::get('/profile-page/user', [UserController::class, 'ProfilePage'])->name('profilepage2');
    Route::post('/profile-page/store/user', [UserController::class, 'ProfileStore'])->name('profilestore2');

    ////// components routes /////

    Route::get('/alerts/page/user', [UserController::class, 'AlertsPage'])->name('alerts2');
    Route::get('/badges/page/user', [UserController::class, 'Badges'])->name('badges2');
    Route::get('/buttons/page/user', [UserController::class, 'Buttons'])->name('buttons2');
    Route::get('/cards/page/user', [UserController::class, 'Cards'])->name('cards2');
    Route::get('/list-group/page/user', [UserController::class, 'ListGroup'])->name('listgroup2');
    Route::get('/navbar/page/user', [UserController::class, 'Navbar'])->name('navbar2');
    Route::get('/progress/page/user', [UserController::class, 'Progress'])->name('progress2');
    

    // advanced ui routes


     Route::get('/sortable/page/user', [UserController::class, 'Sortable'])->name('sortable2');
     Route::get('/Sweet-Alert/page/user', [UserController::class, 'SweetAlert'])->name('sweetalert2');

        // forms routes

        Route::get('/basic-forms/page/user', [UserController::class, 'Basic'])->name('basic2');
        Route::get('/advanced-forms/page/user', [UserController::class, 'Advanced'])->name('advanced2');
        Route::get('/editor-forms/page/user', [UserController::class, 'Editor'])->name('editor2');

        // routes charts

        Route::get('/apex/page/user', [UserController::class, 'Apex'])->name('apex2');
        Route::get('/chartjs/page/user', [UserController::class, 'Chartjs'])->name('chartjs2');
        Route::get('/flot/page/user', [UserController::class, 'Flot'])->name('flot2');

        Route::get('/about-us/page/user', [UserController::class, 'AboutUs'])->name('aboutus2');

            //////// tables routes ////////////
        Route::get('/basic/table/user', [UserController::class, 'BasicTable'])->name('basictable2');
        Route::get('/data/table/user', [UserController::class, 'DataTable'])->name('datatable2');

        /////////////////////// icons routes /////////////

        Route::get('/feather-icons/page/user', [UserController::class, 'Feather'])->name('feather2');
        Route::get('/flag-icons/page/user', [UserController::class, 'Flag'])->name('flag2');


        ///// mail message
        Route::post('/send_message', [MessageController::class, 'sendMessage'])->name('sendmessage');

        
        
    


});









/////////////////////////////////////////////////////////////////////////////////

Route::middleware(['auth','role:developer'])->group(function(){



});


////////////////////////////////////////////////////////////////////////////////////











Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/dashboard-page', [AdminController::class, 'DashboardPage'])->name('dashboardpage');
    Route::get('/logout-page', [AdminController::class, 'LogoutPage'])->name('logoutpage');
    Route::get('/exit-page', [AdminController::class, 'ExitPage'])->name('exitpage');
    Route::get('/profile-page', [AdminController::class, 'ProfilePage'])->name('profilepage');
    Route::post('/profile-page/store', [AdminController::class, 'ProfileStore'])->name('profilestore');


    ////// components routes /////

    Route::get('/alerts/page', [AdminController::class, 'AlertsPage'])->name('alerts');
    Route::get('/badges/page', [AdminController::class, 'Badges'])->name('badges');
    Route::get('/buttons/page', [AdminController::class, 'Buttons'])->name('buttons');
    Route::get('/cards/page', [AdminController::class, 'Cards'])->name('cards');
    Route::get('/list-group/page', [AdminController::class, 'ListGroup'])->name('listgroup');
    Route::get('/navbar/page', [AdminController::class, 'Navbar'])->name('navbar');
    Route::get('/progress/page', [AdminController::class, 'Progress'])->name('progress');
    

    // advanced ui routes


     Route::get('/sortable/page', [AdminController::class, 'Sortable'])->name('sortable');
     Route::get('/Sweet-Alert/page', [AdminController::class, 'SweetAlert'])->name('sweetalert');

        // forms routes

        Route::get('/basic-forms/page', [AdminController::class, 'Basic'])->name('basic');
        Route::get('/advanced-forms/page', [AdminController::class, 'Advanced'])->name('advanced');
        Route::get('/editor-forms/page', [AdminController::class, 'Editor'])->name('editor');

        // routes charts

        Route::get('/apex/page', [AdminController::class, 'Apex'])->name('apex');
        Route::get('/chartjs/page', [AdminController::class, 'Chartjs'])->name('chartjs');
        Route::get('/flot/page', [AdminController::class, 'Flot'])->name('flot');


        ////////// tables routes ////////////
        Route::get('/basic/table', [AdminController::class, 'BasicTable'])->name('basictable');
        Route::get('/data/table', [AdminController::class, 'DataTable'])->name('datatable');

        /////////////////////// icons routes /////////////

        Route::get('/feather-icons/page', [AdminController::class, 'Feather'])->name('feather');
        Route::get('/flag-icons/page', [AdminController::class, 'Flag'])->name('flag');






        Route::get('/about-us/page', [AdminController::class, 'AboutUs'])->name('aboutus');

        /// message route ////

        Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');



    
    Route::controller(DevelopersController::class)->group(function(){
        Route::get('/all/developers', 'AllDevelopers')->name('alldevelopers');
        Route::get('/add/developer', 'AddDeveloper')->name('adddeveloper');
        Route::get('/edit/developer/{id}', 'EditDeveloper')->name('editdeveloper');
        Route::get('/delete/developer/{id}', 'DeleteDeveloper')->name('deletedeveloper');
        Route::post('/store/developer', 'StoreDeveloper')->name('storedeveloper');
        Route::post('/update/developer', 'UpdateDeveloper')->name('updatedeveloper');
        
    
    
    });


});





