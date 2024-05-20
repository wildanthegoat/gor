<?php

use Illuminate\Support\Facades\Route;

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
    //     return view('pages.home-page', ['type_menu' => '']);
    // });
    Route::get('/admin-home-page', function () {
        return view('pages.home-page', ['type_menu' => '']);
    });
    Route::get('/blank-page', function () {
        return view('pages.blank-page', ['type_menu' => '']);
    });
    Route::get('/data-lapangan-page', function () {
        return view('pages.lapangan-page', ['type_menu' => '']);
    });
    Route::get('/data-admin-page', function () {
        return view('pages.admin-page', ['type_menu' => '']);
    });
    Route::get('/data-pesanan-page', function () {
        return view('pages.pesanan-page', ['type_menu' => '']);
    });
    Route::get('/data-member-page', function () {
        return view('pages.member-page', ['type_menu' => '']);
    });


    Route::get('/', function () {
        return view('pages.users.home');
    });
    Route::get('/home', function () {
        return view('pages.users.home');
    });

    Route::get('/login', function () {
        return view('pages.users.login');

    });
    Route::get('/register', function () {
        return view('pages.users.register');

    });