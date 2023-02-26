<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Discount_Code;
use App\Models\Subcategory;
use App\Models\Teacher;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $teachers = Teacher::all();
        $discounts = Discount_Code::all();

        return view(
            'admin.course.create',
            ['categories' => $categories, 'subcategories' => $subcategories, 'teachers' => $teachers , 'discounts' => $discounts]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'teacher_id' => 'required',
            'start' => 'required|date|before:end',
            'end' => 'required|date|after:start',
            'cost' => 'required|numeric',
            'type' => 'required',
            'description' => 'required|min:5',
        ]);


        $course = new Course();
        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/assets/upload/images/course_img');
        $image->move($path ,  $input['imagename']);
        $course->image = $input['imagename'];

        $course->name = $request->input('name');
        $course->category_id = $request->input('category_id');
        $course->subcategory_id = $request->input('subcategory_id');
        $course->teacher_id = $request->input('teacher_id');
        $course->start = $request->input('start');
        $course->end = $request->input('end');
        $course->cost = $request->input('cost');
        $course->type = $request->input('type');
        $course->description = $request->input('description');
        $course->save();


        return redirect()->route('admin.courses.show' , $course)->with('status','Add Course Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
       return view('admin.course.show' , ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $teachers = Teacher::all();
        return view('admin.course.edit' , ['course' => $course , 'categories' => $categories , 'subcategories' => $subcategories , 'teachers' => $teachers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|min:2',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'teacher_id' => 'required',
            'start' => 'required|date|before:end',
            'end' => 'required|date|after:start',
            'cost' => 'required|numeric',
            'type' => 'required',
            'description' => 'required|min:5',
        ]);


        if($request->hasFile('image'))
        {
            $path = public_path('/assets/upload/images/course_img'.$course->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/assets/upload/images/course_img');
            $image->move($path ,  $input['imagename']);
            $course->image = $input['imagename'];
        }
        $course->name = $request->input('name');
        $course->category_id = $request->input('category_id');
        $course->subcategory_id = $request->input('subcategory_id');
        $course->teacher_id = $request->input('teacher_id');
        $course->start = $request->input('start');
        $course->end = $request->input('end');
        $course->cost = $request->input('cost');
        $course->type = $request->input('type');
        $course->description = $request->input('description');
        $course->update();

        return redirect()->route('admin.courses.show' , $course)->with('status','Update Course Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {

        foreach($course->lessones as $lesson)
        {
            $lesson->delete();
        }

        $course->delete();

        return redirect()->route('admin.courses.index')->with('status','Delete Course Successfully');
    }
}
