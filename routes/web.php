<?php

use Illuminate\Support\Facades\Route;
use App\Models\Phone;
use App\Models\User;

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

    $phone = User::find(3);
    $phone = User::find(3)->phone;
    // return $phone;

    $user = Phone::find(2);
    $user = Phone::find(2)->user;
    // return $user;

    $users = User::all();
    // return $users;

    return view('welcome', compact('users'));
});
