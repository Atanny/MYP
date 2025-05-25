<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\ArtworkController;

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/data', [SoftwareController::class, 'index'])->name('software.index');
Route::get('/home/development', [SoftwareController::class, 'index2'])->name('software.index2');
Route::get('/home/Artworks', [ArtworkController::class, 'index'])->name('software.index');



Route::post('/admin/store/artworks', [ArtworkController::class, 'store'])->name('store.artworks');
Route::post('/admin/store', [SoftwareController::class, 'store'])->name('store.software');
Route::post('/admin/development', [SoftwareController::class, 'storeDev'])->name('store.sofwareDev');


Route::get('/{any}', function () {return view('layouts.app');})->where('any', '.*');

Route::get('/healthz', function () {
    return response()->json(['status' => 'ok']);
});

Route::get('/check-storage-link', function () {
    return is_link(public_path('storage')) ? 'Storage link exists' : 'Storage link missing';
});
