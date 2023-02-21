<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Discount_code;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.discount.create' , ['courses' => $courses]);
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

            'discount_code' => 'required|min:2',
            'rate' => 'required',
        ]);

        $discount_code = new Discount_Code();
        $discount_code->course_id = $request->input('course_id');
        $discount_code->discount_code = $request->input('discount_code');
        $discount_code->rate = $request->input('rate');
        $discount_code->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount_code  $discount_code
     * @return \Illuminate\Http\Response
     */
    public function show(Discount_code $discount_code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount_code  $discount_code
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount_code $discount_code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount_code  $discount_code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount_code $discount_code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount_code  $discount_code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount_code $discount_code)
    {
        //
    }
}
