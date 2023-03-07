<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $filenames = Gallery::all();
        return view('admin.gallery.index', ['filenames' => $filenames]);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasfile('filename')) {

            foreach ($request->file('filename') as $image) {
                $file = new Gallery();

                $name = time() . rand(1, 50) . '.' . $image->getClientOriginalExtension();
                $path = public_path('/assets/upload/images/gallery_img');
                $image->move($path, $name);
                $file->filename = $name;
                $file->save();
            }
        }

        return redirect()->route('admin.galleries.index')->with('status', 'Add Images Successfully');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', ['gallery' => $gallery]);
    }

    public function update(Request $request, Gallery $gallery)
    {

        if($request->hasFile('filename'))
        {
            // dd('in');
            $path = public_path('/assets/upload/images/gallery_img'.$gallery->filename);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('filename');
            $name = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/assets/upload/images/gallery_img');
            $image->move($path , $name);
            $gallery->filename = $name;
           
        }
        
        $gallery->active = $request->input('active')== True ? '1':'0';;
        $gallery->update();
        return redirect()->route('admin.galleries.index')->with('status', 'Update Image Successfully');
    }


    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('error', 'Delete Images Successfully');
    }
}
