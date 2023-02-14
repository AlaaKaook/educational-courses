<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        $users = User::all();
        return view('admin.teacher.index' , ['teachers' => $teachers , 'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
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
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required|min:2',
            'birthdate' => 'required',
            'gender' => 'required',
            'username' => 'required|min:2',
            'password' => 'required|min:8',
        ]);


        $user = new User();

        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->type = "Teacher";
        $user->save();


        $teacher = new Teacher();
        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/assets/upload/images/teacher_img');
        $image->move($path ,  $input['imagename']);
        $teacher->image = $input['imagename'];
        $teacher->user_id = $user->id;
        $teacher->fname = $request->input('fname');
        $teacher->lname = $request->input('lname');
        $teacher->phone = $request->input('phone');
        $teacher->email = $request->input('email');
        $teacher->gender = $request->input('gender');
        $teacher->birthdate = $request->input('birthdate');
        $teacher->country = $request->input('country');
        $teacher->notes = $request->input('notes');
        $teacher->save();


        return redirect()->route('teachers.show' , $teacher)->with('status','Add Teacher Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teacher.show' , ['teacher'=>$teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required|min:2',
            'birthdate' => 'required',
            'gender' => 'required',
            'username' => 'required|min:2',
            'password' => 'required|min:8',
        ]);

        if($request->hasFile('image'))
        {
            $path = public_path('/assets/upload/images/teacher_img'.$teacher->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/assets/upload/images/teacher_img');
            $image->move($path ,  $input['imagename']);
            $teacher->image = $input['imagename'];
        }

        $teacher->fname = $request->input('fname');
        $teacher->lname = $request->input('lname');
        $teacher->phone = $request->input('phone');
        $teacher->email = $request->input('email');
        $teacher->country = $request->input('country');
        $teacher->gender = $request->input('gender');
        $teacher->birthdate = $request->input('birthdate');
        $teacher->notes = $request->input('notes');
        $teacher->update();


        $teacher->user->email = $request->input('email');
        $teacher->user->username = $request->input('username');
        $teacher->user->password = Hash::make($request->input('password'));
        $teacher->user->type = "Teacher";
        $teacher->user->update();

        return redirect()->route('teachers.show' , $teacher)->with('status','Update Teacher Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {

        $teacher->delete();
        $teacher->user->delete();

        return redirect()->route('teachers.index')->with('status', 'Delete Teacher Successfully');
    }
}
