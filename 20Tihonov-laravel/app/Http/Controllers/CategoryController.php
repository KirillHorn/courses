<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoru;

class CategoryController extends Controller
{
    public function index () {
        $categories = Categoru::all();
        return view("index",[
            "categorus" => $categories
        ]);
    }

    public function create(Request $request)
    {
        $category_info = $request->all();
        Categoru::create ([
            "title" => $category_info["title"],
        ]);


        return redirect()->back();
    }
}
