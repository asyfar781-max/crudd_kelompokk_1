<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
  return redirect()->route('bukus.index');
});

Route::resource('bukus', BukuController::class);
