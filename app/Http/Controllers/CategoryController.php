<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
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

    public function categories ($id) {
        $categories_find = Course::where("categoru_id" , $id)
        ->get()
        ;
        // dd ($categories_find);
       return view('categories' , ["courses" => $categories_find]) ;
        
    }
}
   

