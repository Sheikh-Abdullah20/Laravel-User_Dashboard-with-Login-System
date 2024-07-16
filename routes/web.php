<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;


Route::controller(UserController::class)->group(function(){

    Route::get('/','home')->name('home');

    Route::get('/signup','signup')->name('signup');
    Route::post('/add','addUser')->name('addUser');

    Route::get('/signin','signin')->name('signin');
    Route::post('/get','getUser')->name('getUser');;

    Route::get('/users','users')->name('users');

    Route::get('/createUserPage','createUserPage')->name('createUserPage');
    Route::post('/createUser','createUser')->name('createUser');

    Route::get('/editpage/{id}','editPage')->name('edit.Page');


    Route::post('/update/{id}','update')->name('update');

    Route::get('/delete/{id}','delete')->name('delete');

    Route::get('/signout','signOut')->name('signout');

    Route::get('/editprofile','editProfile')->name('editProfile');
    Route::get('/updateprofilepage','updateprofilepage')->name('updateprofilepage');

    Route::post('updateprofile','updateprofile')->name('updateprofile');

});