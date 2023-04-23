<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\General_settings;
use App\Models\workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workouts = workout::all();
        $general_settings = General_settings::all();
        
        return view('AdminDashboard.workouts.index' ,compact('general_settings' , 'workouts'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $general_settings = General_settings::all();

        return view('AdminDashboard.workouts.create' ,compact('general_settings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'Required', 
            'title' => 'Required', 
            'image' => 'mimes:jpeg,bmp,png,jpg'
        ]);

        $name = $request->file('image')->getClientOriginalName();

        $newImageName=time(). '-' . $name . '.'. $request->image->extension();
         $request->image->move(public_path('images') , $newImageName );

         $workouts= workout::create([
            'image' => $newImageName, 
            'title' => $request->get('title'),  
            'name' => $request->get('name'), 

        ]);
        $workouts->save();
        return redirect('workouts');
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
    public function edit(string $id)
    {
        $general_settings = General_settings::all();
        $workouts = workout::find($id);
        return view('AdminDashboard.workouts.edit',compact('general_settings' , 'workouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'Required', 
            'title' => 'Required', 
            'image' => 'mimes:jpeg,bmp,png,jpg'
        ]);

        $name = $request->file('image')->getClientOriginalName();

        $newImageName=time(). '-' . $name . '.'. $request->image->extension();
         $request->image->move(public_path('images') , $newImageName );

         workout::where('id' , $id)->update([
            'image' => $newImageName, 
            'title' => $request->get('title'),  
            'name' => $request->get('name'), 
        ]);
        return redirect('workouts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        workout::destroy($id);
        return  redirect('workouts');
    }
}
