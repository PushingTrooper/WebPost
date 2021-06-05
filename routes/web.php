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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/track', function () {
    return view('tracking_page');
});

/*Route::get('/home', function () {
    return view('client.homepage');
})->name('home');*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

/** ONLY ADMIN **/

Route::get('/admin', function () {
    return view('admin.admin_dashboard');
});

Route::get('/admin/changePassword', function () {
    return view('admin.change_password');
});

Route::get('/admin/locatePostmen', function () {
    return view('admin.locate_all_postmen');
});

Route::get('/admin/createUser', function () {
    return view('admin.create_new_user');
});

Route::get('/admin/editUser', function () {
    return view('admin.change_pay_and_role');
});

/** EMPLOYEES **/

Route::get('/packages', function () {
    return view('packages_list');
});

Route::get('/packageDetails', function () {
    return view('package_details');
});

Route::get('/editPackage', function () {
    return view('edit_package');
});

Route::get('/post/warehouses', function () {
    return view('postmen.warehouses_location');
});

Route::get('/warehouse/logistics', function () {
    return view('warehouse.logistics');
});

Route::get('/warehouse/reportLost', function () {
    return view('warehouse.report_lost_package');
});

Route::get('/requestPasswordChange', function () {
    return view('request_password_change');
});

/** ONLY COSTUMERS **/

Route::get('/client/createPackage', function () {
    return view('client.create_new_package');
});

Route::get('/client/editPackage', function () {
    return view('client.edit_package_details');
});

Route::get('/client/deletePackage', function () {
    return view('client.delete_package');
});

Route::get('/client/makePayment', function () {
    return view('client.make_payment');
});
