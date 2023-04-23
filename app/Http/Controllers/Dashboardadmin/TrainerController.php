<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\General_settings;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();
        $general_settings = General_settings::all();

        return view('AdminDashboard.trainers.index' ,compact('general_settings' , 'trainers'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $general_settings = General_settings::all();

        return view('AdminDashboard.trainers.create' ,compact('general_settings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'Required', 
            'job' => 'Required', 
            'phone' => 'Required', 
            'email' => 'Required',   
            'image' => 'mimes:jpeg,bmp,png,jpg'         
        ]);

        $name = $request->file('image')->getClientOriginalName();

        $newImageName=time(). '-' . $name . '.'. $request->image->extension();
         $request->image->move(public_path('images') , $newImageName );

         $trainers= Trainer::create([
            'image' => $newImageName, 
            'phone' => $request->get('phone'),  
            'email' => $request->get('email'), 
            'name' => $request->get('name'), 
            'job' => $request->get('job'), 
            'description' => $request->get('description'), 

        ]);
        $trainers->save();
        return redirect('trainers');
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

        $trainers=Trainer::find($id);

        return view('AdminDashboard.trainers.edit' ,compact('general_settings' , 'trainers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'Required', 
            'job' => 'Required', 
            'phone' => 'Required', 
            'email' => 'Required',   
            'image' => 'mimes:jpeg,bmp,png,jpg'         
        ]);
        $name = $request->file('image')->getClientOriginalName();

        $newImageName=time(). '-' . $name . '.'. $request->image->extension();
         $request->image->move(public_path('images') , $newImageName );

         $trainers= Trainer::where('id' , $id)->update([
            'image' => $newImageName, 
            'phone' => $request->get('phone'),  
            'email' => $request->get('email'), 
            'name' => $request->get('name'), 
            'job' => $request->get('job'), 
            'description' => $request->get('description'), 

        ]);
        return redirect('trainers')->with('success','trainer has been successfully update.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Trainer::destroy($id);
        return redirect('trainers')->with('success','trainer has been successfully deleted.');

    }
}
