<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->limit(3)->get();
        return view('frontend.home_front' , ['courses' => $courses]);
    }
}
