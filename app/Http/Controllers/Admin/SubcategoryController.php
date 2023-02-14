<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::paginate(7);
        $subcategories = Subcategory::all();
        return view('admin.subcategory.index' , ['subcategories' => $subcategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create' , ['categories' => $categories]);
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
            'description' => 'required|min:5',
        ]);

        $subcategory = new Subcategory();

        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/assets/upload/images/subcategory_img');
        $image->move($path ,  $input['imagename']);
        $subcategory->image = $input['imagename'];

        $subcategory->name = $request->input('name');
        $subcategory->category_id = $request->input('category_id');
        $subcategory->description = $request->input('description');

        $subcategory->save();

        return redirect()->route('subcategories.show' , $subcategory)->with('status','Add Sub Category Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('admin.subcategory.show' ,  ['subcategory' => $subcategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('admin.subcategory.edit', ['subcategory' => $subcategory , 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required|min:2',
            'category_id' => 'required',
            'description' => 'required|min:5',
        ]);

        if($request->hasFile('image'))
        {
            $path = public_path('/assets/upload/images/subcategory_img' . $subcategory->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/assets/upload/images/subcategory_img');
            $image->move($path ,  $input['imagename']);
            $subcategory->image = $input['imagename'];
        }

        $subcategory->category_id = $request->input('category_id');
        $subcategory->name = $request->input('name');
        $subcategory->description = $request->input('description');

        $subcategory->update();

        return redirect()->route('subcategories.show' , $subcategory)->with('status','Update Sub Category Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();

        return redirect()->route('subcategories.index')->with('status','Delete Sub Sub Category Successfully');
    }
}
