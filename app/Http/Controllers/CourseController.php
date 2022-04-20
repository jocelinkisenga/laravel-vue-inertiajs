<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;
use Inertia\Inertia;
class CourseController extends Controller
{
    public function index(){
        $courses = Course::with('user')->withcount('episodes')->get();
       
        return Inertia::render('course/index',
        ['courses'=>$courses]
    );
    }

    public function show ($id){
    	$course = Course::where('id',$id)->with('episodes')->first();
    	
    	return Inertia::render('course.show',['course'=>$course]);
    }
}
