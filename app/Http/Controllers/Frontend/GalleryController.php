<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
       public function index()
       {
           $images = Gallery::where('active',1)->orderby('id' , 'asc')->get();
           return view('frontend.gallery.index' ,['images' => $images]);
       }
}
