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



// Route::get('dashboard', function () {
//     return view('Admin/Dashboard/dashboard');
// });
Route::get("dashboard","DashboardController@dashboard");

// /////////////// //////////// //////////////

// Expenses

Route::get("add-expense","ExpenseController@create");
Route::post("save-add-expense","ExpenseController@store");

Route::get("view-expenses","ExpenseController@index");
Route::get("delete-expense/{id}","ExpenseController@destroy");


//////////////////////////////////////////////////////

// Profile Update

Route::get("profile","ProfileController@edit");
Route::post("update-profile/{id}","ProfileController@update");
// Route::get('profile', function () {
//     return view('Admin/Profile/profile');
// });


Route::get('change-password', function () {
    return view('Admin/ChangePassword/change_password');
});

Route::post("update-password","ProfileController@update_password");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
