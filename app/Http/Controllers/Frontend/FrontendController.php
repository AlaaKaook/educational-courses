<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        $courses = Course::latest()->limit(3)->get();
        return view('frontend.home_page.home' , ['courses' => $courses , 'students' => $students , 'sliders' => $sliders]);
    }
}
