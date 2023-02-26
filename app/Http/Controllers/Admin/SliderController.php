<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index' ,['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'image' => 'required|mimes:jpeg,png,bmp,gif|max: 2000',
            'title'  => 'required',
            'active' => 'required',
        ]);

        $slider = new Slider();

        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/assets/upload/images/slider_img');
        $image->move($path ,  $input['imagename']);
        $slider->image = $input['imagename'];

        $slider->title = $request->input('title');
        $slider->active = $request->input('active');

        $slider->save();

        return redirect()->route('admin.sliders.index')->with('status','Add Slider Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,bmp,gif|max: 2000',
            'title'  => 'required',
            'active' => 'required',
        ]);

        if($request->hasFile('image'))
        {
            $path = public_path('/assets/upload/images/slider_img'.$slider->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/assets/upload/images/slider_img');
            $image->move($path ,  $input['imagename']);
            $slider->image = $input['imagename'];
        }

        $slider->title = $request->input('title');
        $slider->active = $request->input('active');

        $slider->update();

        return redirect()->route('admin.sliders.index')->with('status','Update Slider Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('status','Delete Slider Successfully');
    }
}
