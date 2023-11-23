<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\autoController;
use App\Http\Controllers\PersonalController;

use Illuminate\Support\Facades\Route;


Route::get('/',[CourseController::class,'index']);

Route::post("/enroll",[ApplicationController::class,"new_application"]);

Route::get("/admin",[AdminController::class,"index"]);

Route::get("/register",[RegisterController::class, 'reg']);

Route::get("/login",[autoController::class, 'login']);

Route::post("/reg_valid", [RegisterController::class,'reg_valid']);

Route::post("/login_user", [autoController::class,'login_user']);

Route::get("/signout",[autoController::class, 'signout'] );

Route::get("/personal",[PersonalController::class, 'personalCab']);

Route::get("/application/{id_application}/confirm", [ApplicationController::class,"confirm"]);

Route::post("/course/create",[CourseController::class,"create"]);

Route::post("/categoru/create", [CategoryController::class,"create"]);

Route::get("index/{id}/categories", [CategoryController::class, "categories"]);
