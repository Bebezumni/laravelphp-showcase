<?php

use App\Models\Devices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;

//all devices
Route::get('/', [DeviceController::class, 'index']);
//device create form
Route::get('/devices/create', [DeviceController::class, 'create']);
//store device data
Route::post('/devices', [DeviceController::class, 'store']);
//edit form
Route::get('/devices/{device}/edit', [DeviceController::class, 'edit']);
//edit submit to update
Route::put('/devices/{device}', [DeviceController::class, 'update']);
//delete device
Route::delete('/devices/{device}', [DeviceController::class, 'destroy']);


//Single  device
Route::get('/devices/{device}', [DeviceController::class, 'show']);

//Show register/create form
Route::get('/register', [UserController::class, 'create']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


