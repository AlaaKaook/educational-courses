<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();

        return view('admin.lesson.index' , ['lessons' => $lessons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_youtube()
    {
        $courses = Course::where('type', 'youtube')->get();

        return view('admin.lesson.create_youtube_lesson' , ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_inweb()
    {
        $courses = Course::where('type', 'web')->get();

        return view('admin.lesson.create_inweb_lesson' , ['courses' => $courses]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_youtube(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'course_id' => 'required',
            'content' => 'required',
            'description' => 'required|min:5',
        ]);


        $lesson = new Lesson();

        $lesson->name = $request->input('name');
        $lesson->course_id = $request->input('course_id');
        $lesson->content = $request->input('content');
        $lesson->description = $request->input('description');
        $lesson->save();

        return redirect()->route('admin.lessonsindex')->with('status','Add Lesson Successfully');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_with_video(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'course_id' => 'required',
            'content' => 'required',
            'description' => 'required|min:5',
        ]);


        $lesson = new Lesson();

        $video=$request->file('content');
        $input['videoname'] = time(). '.' . $video->getClientOriginalExtension();
        $path = public_path('/assets/upload/video/Lesson_video');
        $video->move($path ,  $input['videoname']);
        $lesson->content = $input['videoname'];

        $lesson->name = $request->input('name');
        $lesson->course_id = $request->input('course_id');
        $lesson->description = $request->input('description');
        $lesson->save();

        return redirect()->route('admin.lessons.index')->with('status','Add Lesson Video Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {

        if($lesson->course->type == 'youtube')
        {
            $courses = Course::where('type', 'youtube')->get();

            return view('admin.lesson.edit_youtube_lesson' , ['lesson' => $lesson , 'courses' => $courses]);
        }
        elseif($lesson->course->type == 'web')
        {
            $courses = Course::where('type', 'web')->get();

            return view('admin.lesson.edit_inweb_lesson' , ['lesson' => $lesson , 'courses' => $courses]);
        }
        else
        {
            return view('admin.lesson.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update_inweb(Request $request, Lesson $lesson)
    {
        $request->validate([
            'name' => 'required|min:2',
            'course_id' => 'required',
            'content' => 'required',
            'description' => 'required|min:5',
        ]);

        if($request->hasFile('content'))
        {
            $path = public_path('/assets/upload/video/Lesson_video'.$lesson->content);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $video = $request->file('content');
            $input['videoname'] = time(). '.' . $video->getClientOriginalExtension();
            $path = public_path('/assets/upload/video/Lesson_video');
            $video->move($path ,  $input['videoname']);
            $lesson->content = $input['videoname'];
        }

        $lesson->name = $request->input('name');
        $lesson->course_id = $request->input('course_id');
        $lesson->description = $request->input('description');
        $lesson->update();

        return redirect()->route('admin.lessons.index')->with('status','Update Lesson Video Successfully');

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        $request->validate([
            'name' => 'required|min:2',
            'course_id' => 'required',
            'content' => 'required',
            'description' => 'required|min:5',
        ]);


        $lesson->name = $request->input('name');
        $lesson->content = $request->input('content');
        $lesson->course_id = $request->input('course_id');
        $lesson->description = $request->input('description');
        $lesson->update();

        return redirect()->route('admin.lessons.index')->with('status','Update Lesson Video Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        return redirect()->route('admin.lessons.index')->with('status','Delete :Lesson Successfully');
    }
}
