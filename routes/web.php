<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/suppliers", [SupplierController::class, "index"])->name("suppliers.index");
Route::post("/suppliers", [SupplierController::class, "store"])->name("suppliers.store");
Route::get("/suppliers/{id}", [SupplierController::class, "edit"])->name("suppliers.edit");
Route::delete("/suppliers/{id}", [SupplierController::class, "destroy"])->name("suppliers.destroy");
Route::put("/suppliers/{id}", [SupplierController::class, "update"])->name("suppliers.update");
