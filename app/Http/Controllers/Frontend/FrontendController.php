<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->limit(6)->get();
        $students = Student::latest()->limit(6)->get();
        // $courses = Course::latest()->limit(6)->orderby('id')->get();
        $courses = Course::all();
        return view('frontend.home_page.home' , ['courses' => $courses , 'students' => $students , 'sliders' => $sliders]);
    }

     public function about()
    {
        return view('frontend.about.about');
    }
}
