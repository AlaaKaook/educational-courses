<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        $lessons = Lesson::where('course_id', $course->id)->get();
        return view('frontend.lesson.lesson' , ['lessons' => $lessons , 'course' => $course]);
    }

}
