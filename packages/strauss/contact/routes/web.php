<?php

use Illuminate\Support\Facades\Route;
use Strauss\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'showForm']);
Route::post('contact', [ContactController::class, 'submitForm']);
