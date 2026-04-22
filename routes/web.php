<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas de Supplier
Route::get("/suppliers", [SupplierController::class, "index"])->name("suppliers.index");
Route::post("/suppliers", [SupplierController::class, "store"])->name("suppliers.store");
Route::get("/suppliers/{id}", [SupplierController::class, "edit"])->name("suppliers.edit");
Route::delete("/suppliers/{id}", [SupplierController::class, "destroy"])->name("suppliers.destroy");
Route::put("/suppliers/{id}", [SupplierController::class, "update"])->name("suppliers.update");

//Rutas de Product
Route::get("/products", [ProductController::class, "index"])->name("products.index");
Route::post("/products", [ProductController::class, "store"])->name("products.store");
Route::get("/products/{id}", [ProductController::class, "edit"])->name("products.edit");
Route::delete("/products/{id}", [ProductController::class, "destroy"])->name("products.destroy");
Route::put("/products/{id}", [ProductController::class, "update"])->name("products.update");

//Rutas de Purchase
Route::get("/purchases", [PurchaseController::class, "index"])->name("purchases.index")->middleware("auth");
Route::post("/purchases", [PurchaseController::class, "store"])->name("purchases.store");
Route::get("/purchases/{id}", [PurchaseController::class, "edit"])->name("purchases.edit");
Route::delete("/purchases/{id}", [PurchaseController::class, "destroy"])->name("purchases.destroy");
Route::put("/purchases/{id}", [PurchaseController::class, "update"])->name("purchases.update");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
