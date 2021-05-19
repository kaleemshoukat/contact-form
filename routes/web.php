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

    //when web is on server clear cashe by the fllowing line
    Route::get('/clearCache', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        return 'FINISHED';
    });

    Route::get('/','contactFormController@contactForm');
    Route::post('/submitContactForm','contactFormController@submitContactForm');
