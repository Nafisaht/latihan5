<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemTypeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [ItemController::class, "index"])->name("items.index");
Route::get("/create", [ItemController::class, "create"])->name("items.create");
Route::post("/store", [ItemController::class, "store"])->name("items.store");
Route::get("/edit/{id}", [ItemController::class, "edit"])->name("items.edit");
Route::patch("/update/{id}", [ItemController::class, "update"])->name("items.update");
Route::delete("/destroy/{id}", [ItemController::class, "destroy"])->name("items.destroy");

Route::get("items.create", function () {
    return view('items.index');
});

Route::resource('types', ItemTypeController::class);