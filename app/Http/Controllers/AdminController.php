<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Categoru;
use Illuminate\Http\Request;
use App\Models\Course;

class AdminController extends Controller
{
    public function index() {

        $applications=Application::all();

        foreach($applications as $key=>$item) {
            $applications[$key]->course_id =$this -> get_course_from_id($item->course_id);
        }
      
        return view("admin.admin",[
            "all_applications"=>$applications,
            "categorus" => Categoru::all()
        ]);
    }

    protected function get_course_from_id($id_course) {
        return Course::find($id_course)->title;
    }
}
