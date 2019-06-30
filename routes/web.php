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

Route::any('{all}', function () {
    return view('app')->with(
        'app',
        [
            // commit git config username and email.
            // change title web
            'title' => 'Shop Đồ Sáng Tạo'
        ]
    );
})->where(['all' => '.*']);
