<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\BackendUsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Auth::routes();

Route::get("/home", [
    App\Http\Controllers\HomeController::class,
    "index",
])->name("home");

//Backend
Route::get("/dashboard", [BackendController::class, "index"])->name(
    "dashboard"
);

Route::group(["prefix" => "dashboard", "middleware" => "auth"], function () {
    Route::resource("users", BackendUsersController::class);
    Route::post("users/restore/{user}", [
        BackendUsersController::class,
        "userRestore",
    ])->name("backend.userrestore");
    Route::patch("users/UpdateInterests/{user}", [
        BackendUsersController::class,
        "UpdateInterests",
    ])->name("backend.UpdateInterests");
});
