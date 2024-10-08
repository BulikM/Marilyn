<?php


use App\Http\Controllers\Backend\BController;
use App\Http\Controllers\Backend\BUsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get("/dashboard", [BController::class, "index"])->name(
    "dashboard"
);

Route::group(["prefix" => "dashboard", "middleware" => ['employee']], function () {
    Route::get("/", [BController::class, "index"])->name("dashboard");
//users
    Route::resource("users", BUsersController::class);
    Route::post("users/restore/{user}", [
        BUsersController::class,
        "restore",
    ])->name("users.restore");
//Employees
    Route::resource("employees", \App\Http\Controllers\Backend\BEmployeeController::class);
    Route::post("employees/restore/{user}", [
        \App\Http\Controllers\Backend\BEmployeeController::class,
        "restore",
    ])->name("employees.restore");
//Customers
    Route::resource("customers", \App\Http\Controllers\Backend\BCustomerController::class);
    Route::patch('customers/updatepreferences/{user}', [\App\Http\Controllers\Backend\BCustomerController::class, 'updatepreferences'])->name('customers.updatepreferences');
    Route::post("customers/restore/{user}", [
        \App\Http\Controllers\Backend\BCustomerController::class,
        "restore",
    ])->name("customers.restore");
    Route::resource('shipping-address', \App\Http\Controllers\Account\ShippingAddressController::class);
//shipping address
    Route::get("shipping-address/new/{user:name}", [
        \App\Http\Controllers\Account\ShippingAddressController::class,
        "create",
    ])->name("shipping-address.create");

//    products
    Route::resource("products", \App\Http\Controllers\Backend\BProductController::class);
});

