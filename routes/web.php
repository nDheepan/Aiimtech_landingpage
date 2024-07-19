<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Pages_route;

Route::controller(Pages_route::class)->group(function(){
    Route::get('/','home');
    // Route::get('about_us','about_us');
    // Route::get('consultants','consultants');
    // Route::get('facilities','facilities');
    // Route::get('our_services','our_services');
    // Route::get('contact_us','Contact_us');
});