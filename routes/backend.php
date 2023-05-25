<?php


use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\BackendUsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get("/dashboard", [BackendController::class, "index"])->name(
"dashboard"
);

Route::group(["prefix" => "dashboard","middleware"=> ['employee','auth']], function () {
Route::resource("users", BackendUsersController::class);
Route::post("users/restore/{user}", [
BackendUsersController::class,
"userRestore",
])->name("backend.userrestore");
});

