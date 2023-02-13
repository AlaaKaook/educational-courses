<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $users = User::all();
        return view('admin.student.index' , ['students' => $students , 'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
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
        $user->save();


        $student = new Student();
        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/assets/upload/images/student_img');
        $image->move($path ,  $input['imagename']);
        $student->image = $input['imagename'];
        $student->user_id = $user->id;
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->gender = $request->input('gender');
        $student->birthdate = $request->input('birthdate');
        $student->country = $request->input('country');
        $student->notes = $request->input('notes');
        $student->save();


        return redirect()->route('students.index')->with('status','Add Student Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.student.show' , ['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
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
            $path = public_path('/assets/upload/images/student_img'.$student->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/category_img');
            $image->move($path ,  $input['imagename']);
            $student->image = $input['imagename'];
        }

        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->country = $request->input('country');
        $student->gender = $request->input('gender');
        $student->birthdate = $request->input('birthdate');
        $student->notes = $request->input('notes');
        $student->update();


        $student->user->email = $request->input('email');
        $student->user->username = $request->input('username');
        $student->user->password = Hash::make($request->input('password'));
        $student->user->update();

        return redirect()->route('students.index')->with('status','Update Student Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('status', 'Delete Student Successfully');
    }
}
