<?php

use App\Models\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('add_test_data', function () {
    for ($i=1; $i <= 9 ; $i++) {
        Test::create([
            'name' => "Moshiur Rahman$i",
            'email' => "moshiur$i@gmail.com",
            'number' => "0174578455$i",
        ]);
    }
});


Route::get('/tests', [TestController::class,'index'])->name('tests');
Route::post('/store', [TestController::class,'store'])->name('store');
Route::get('/edit/{id}', [TestController::class,'edit'])->name('edit');
Route::post('/edit/{id}', [TestController::class,'update'])->name('update');
Route::get('/delete/{id}', [TestController::class,'destroy'])->name('delete');
