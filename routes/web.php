<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.body.components.home');
});

// frontend
Route::controller(FrontendController::class)->group(function(){
    Route::get('/home','home_page')->name('home');
    Route::get('/about-us','about_us_page')->name('about_us');
    Route::get('/services','all_services_page')->name('all_services');
    Route::get('/product-research-and-development-service','service_1_page')->name('service_1');
    Route::get('/technical-staffing-solution-consulting-and-nationwide-training-service','service_2_page')->name('service_2');
    Route::get('/packaging-and-labelling-design-with-nutrition-fact-consulting-service','service_3_page')->name('service_3');
    Route::get('/production-planning-and-stock-management-consulting-service','service_4_page')->name('service_4');
    Route::get('/chemical-ingredient-and-production-equipment-consultation-service','service_5_page')->name('service_5');
    Route::get('/announcements','announcements_page')->name('announcements');
    Route::get('/contact-us','contact_page')->name('contact');
});
