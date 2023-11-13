<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        // $courses = Course::all();
        // return view("index",[
        //     "courses"=>$courses
        // ]);
        $courses = Course::paginate(4   );
        return view('index', compact('courses'));
    }
    public function create(Request $request) 
    {
        $request->validate([
            "title" => "required",
            "description" => "required|string",
            "cost" => "required|min:500",
            "duration" => "required|min:1",
            "image" => "required",
         ], [
            "title.required" => "Поле обязательно для заполнения!",
            "description.required" => "Поле обязательно для заполнения!",
            "cost.required" => "Поле обязательно для заполнения!",
            "cost.min" => "Минимальное значение 500",
            "duration.required" => "Поле обязательно для заполнения!",
            "duration.min" => "Введите недели",
         ]);
        $course_info =  $request->all();

        $file = $request ->file("image");

        $file_name = md5($file->getClientOriginalName().time()). "." .$file->getClientOriginalExtension();

        Storage::putFileAs("public/image",$file,$file_name);

        Course::create([
            "title" => $course_info["title"],
            "description" => $course_info["description"],
            "duration" => $course_info["duration"],
            "cost" => $course_info["cost"],
            "categoru_id" => $course_info["category_id"],
            "img" =>$file_name
        ]);
        
        return redirect() -> back();

    }
}

?>