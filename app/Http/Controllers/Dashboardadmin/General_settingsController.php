<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\General_settings;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class General_settingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $logo = General_settings::all();
        $general_settings = General_settings::all();
        return view('AdminDashboard.general_settings.index' , compact('general_settings' , 'logo' , 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $general_settings = General_settings::all();

        return view('AdminDashboard.general_settings.create' ,compact('general_settings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo_path' => 'Required|mimes:jpeg,bmp,png,jpg', 
            'phone2' => 'Required', 
            'facebook' => 'Required', 
            'twitter' => 'Required', 
            'instegram' => 'Required', 
            
        ]);

        // $name = Str::random(10);
        $name = $request->file('logo_path')->getClientOriginalName();

        $newImageName=time(). '-' . $name . '.'. $request->logo_path->extension();
         $request->logo_path->move(public_path('images') , $newImageName );

         $general_settings= General_settings::create([
            'logo_path' => $newImageName, 
            'phone2' => $request->get('phone2'),  
            'email2' => $request->get('email2'), 
            'facebook' => $request->get('facebook'), 
            'twitter' => $request->get('twitter'), 
            'instegram' => $request->get('instegram'), 

        ]);
        $general_settings->save();
        return redirect('general_settings');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($general_settings)
    {
        $articles = Article::all();
        $logo = General_settings::all();
        $general_settings = General_settings::find($general_settings);
        return view('AdminDashboard.general_settings.edit',compact('general_settings' , 'logo' , 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo_path' => 'Required|mimes:jpeg,bmp,png,jpg', 
            'phone2' => 'Required', 
            'facebook' => 'Required', 
            'twitter' => 'Required', 
            'instegram' => 'Required', 
            
        ]);

        // $name = Str::random(10);
        $name = $request->file('logo_path')->getClientOriginalName();

        $newImageName=time(). '-' . $name. '.'. $request->logo_path->extension();
        $request->logo_path->move(public_path('images') , $newImageName );

        $general_settings= General_settings::where('id', $id)->update([
           'logo_path' => $newImageName, 
           'phone2' => $request->get('phone2'),  
           'email2' => $request->get('email2'), 
           'facebook' => $request->get('facebook'), 
           'twitter' => $request->get('twitter'), 
           'instegram' => $request->get('instegram'), 

       ]);

    
        return redirect('general_settings')->with('success','update has been successfully.');
        // return redirect('general_settings/1/edit')->with('flash_message' , 'settings updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
