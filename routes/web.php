<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('modulos.users.ingresar');
});
Route::get('/createusers', [UsersController::class, 'create'])->name('users.create');