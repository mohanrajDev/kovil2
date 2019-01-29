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

Route::redirect('/', '/dashboard');

Auth::routes();
Route::redirect('/home', '/dashboard');

Route::get('dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('settings', 'Dashboard\DashboardController@settings')->name('settings');

Route::resource('donors', 'Donor\DonorController');

Route::post('donors/import/excel', 'Donor\DonorController@import')->name('donors.import');
Route::get('donors/{donor}/donations', 'Donor\DonorController@donations')->name('donations');
Route::get('donors/{donor}/donation-form', 'Donor\DonorController@donationForm')->name('donation-form');
Route::post('donors/{donor}/donate', 'Donor\DonorController@donate')->name('donate');


