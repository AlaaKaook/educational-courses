<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Course;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use PHPUnit\Framework\MockObject\Builder\Stub;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->limit(6)->get();
        $students = Student::latest()->limit(6)->get();
        // $courses = Course::latest()->limit(6)->orderby('id')->get();
        $courses = Course::all();
        // $students_count = Student::all()->count();
        return view('frontend.home_page.home' , ['courses' => $courses , 'students' => $students , 'sliders' => $sliders]);
    }

     public function about()
    {
        return view('frontend.about.about');
    }

    public function show_teachers()
    {
        $teachers = Teacher::all();
        return view('frontend.teacher.show_teacher' , ['teachers' => $teachers]);
    }

}
