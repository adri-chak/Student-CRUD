<?php

use Illuminate\Support\Facades\Route;
use Adrija\StudentCrud\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);