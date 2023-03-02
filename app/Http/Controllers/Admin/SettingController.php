<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index' , ['settings' => $settings]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit' , ['setting' => $setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'about' => 'required|min:10',
            'search' => 'required',
            'phone' => 'required|numeric|min:10',
            'email' => 'required|email',
            'logo_name' => 'required'
        ]);


        if($request->hasFile('logo'))
        {
            $path = public_path('/assets/upload/images/logo'.$setting->logo);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $logo = $request->file('logo');
            $input['logoname'] = time(). '.' . $logo->getClientOriginalExtension();
            $path = public_path('/assets/upload/images/logo');
            $logo->move($path ,  $input['logoname']);
            $setting->logo = $input['logoname'];
        }

        $setting->about = $request->input('about');
        $setting->search = $request->input('search');
        $setting->phone = $request->input('phone');
        $setting->email = $request->input('email');
        $setting->logo_name = $request->input('logo_name');
        $setting->location = $request->input('location');
        $setting->update();

        return redirect()->route('admin.settings.index')->with('status','Update Settings Successfully');
    }

}
