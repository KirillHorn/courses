<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function reg() {
        return view('auth/Register');
    }
    public function reg_valid(Request $request) {
        $request->validate([
            "email"=> "required|unique:users|email",
            "name"=> "required",
            "password"=> "required",
            "confirm_password"=>"required|same:password"]
            ,[ 
                "email.required" => "Поле обязательно для заполнения!",
            "email.email" => "Введите корректный email",
            "email.unicue" => "Данный email уже занят",

            "password.required" => "Поле обязательно для заполнения!",
            "confirm_password.required" => "Поле обязательно для заполнения!",
        ]);
        $userInfo=$request->all();
       $user_create= User::create([
      "email"=> $userInfo["email"],
      "name"=> $userInfo["name"],
      "password"=> Hash::make($userInfo["password"]),
        ]);
        if ($user_create)
        return redirect("/login")->with("success","");
        return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
    }
    
}
