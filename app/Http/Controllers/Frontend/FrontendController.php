<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Course;
use App\Models\Lesson;
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
        $teachers = Teacher::latest()->limit(6)->get();
        // $courses = Course::latest()->limit(6)->orderby('id')->get();
        $courses = Course::all();
        // $students_count = Student::all()->count();
        return view('frontend.pages.home' , ['courses' => $courses , 'teachers' => $teachers , 'sliders' => $sliders]);
    }

    public function subscribe()
    {
        return redirect()->route('home.front')->with('status' , 'Thank you, news will be sent exclusively');
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

    public function result_search(Request $request)
    {
        $courses = Course::latest();
        $lessons = Lesson::latest();


         //Search
        if ($request->filled('search')) {
            $courses->where('name', 'like', "%$request->search%")->orWhere('description', 'like', "%$request->search%")->orderBy('created_at', 'desc')->get();
            $lessons->where('name', 'like', "%$request->search%")->orWhere('description', 'like', "%$request->search%")->orderBy('created_at', 'desc')->get();
        }

        $courses =  $courses->paginate(15);
        $lessons =  $lessons->paginate(15);

        return view('frontend.pages.result_search', ['courses' => $courses , 'lessons'=>$lessons]);
    }

}
