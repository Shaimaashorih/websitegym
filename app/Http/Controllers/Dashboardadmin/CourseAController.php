<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\cource;
use App\Models\General_settings;
use Illuminate\Http\Request;

class CourseAController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = cource::all();
        $articles = Article::all();
        $general_settings = General_settings::all();

        return view('AdminDashboard.coursesa.index' ,compact('general_settings' , 'courses' , 'articles'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $general_settings = General_settings::all();
        $articles = Article::all();

        return view('AdminDashboard.coursesa.create' ,compact('general_settings' , 'articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'Required', 
            'title' => 'Required', 
            'description' => 'Required', 
            'times' => 'Required',   
            'image' => 'nullable|sometimes|image|mimes:jpeg,png',

        ]);
        if ($request->has('image'))
        {
        $name = $request->file('image')->getClientOriginalName();

        $newImageName=time(). '-' . $name . '.'. $request->image->extension();
         $request->image->move(public_path('images') , $newImageName );

         $courses= cource::create([
            'image' => $newImageName, 
            'title' => $request->get('title'),  
            'times' => $request->get('times'), 
            'name' => $request->get('name'), 
            'description' => $request->get('description'), 

        ]);
        $courses->save();
        return redirect('coursesa');
    }
    else{
        $name ='noimage.jpg';
        $courses= cource::create([
            'image' => $name, 
            'title' => $request->get('title'),  
            'times' => $request->get('times'), 
            'name' => $request->get('name'), 
            'description' => $request->get('description'), 
        ]);
        $courses->save();
        return redirect('coursesa');
    }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $general_settings = General_settings::all();
        $courses = cource::find($id);
        return view('AdminDashboard.coursesa.show',compact('courses', 'general_settings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $general_settings = General_settings::all();
        $courses = cource::find($id);
        $articles = Article::all();
        return view('AdminDashboard.coursesa.edit',compact('general_settings' , 'courses' , 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'Required', 
            'title' => 'Required', 
            'times' => 'Required', 
            'description' => 'Required',   
            'image' => 'mimes:jpeg,bmp,png,jpg'
        ]);
    

        if ($request->has('image'))
        {
        $name = $request->file('image')->getClientOriginalName();

        $newImageName=time(). '-' . $name . '.'. $request->image->extension();
         $request->image->move(public_path('images') , $newImageName );
            cource::where('id' , $id)->update([
            
            'image' => $newImageName, 
            'title' => $request->get('title'),  
            'times' => $request->get('times'), 
            'name' => $request->get('name'), 
            'description' => $request->get('description'), 

        ]);
        return redirect('coursesa');
    }
    else{
        $name ='noimage.jpg';
        cource::where('id' , $id)->update([
            
            'image' => $name, 
            'title' => $request->get('title'),  
            'times' => $request->get('times'), 
            'name' => $request->get('name'), 
            'description' => $request->get('description'), 

        ]);
        return redirect('coursesa');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        cource::destroy($id);
        return  redirect('coursesa');
    }
}
