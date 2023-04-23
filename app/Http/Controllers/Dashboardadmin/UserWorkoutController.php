<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\General_settings;
use App\Models\User;
use App\Models\user_workout;
use App\Models\workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserWorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  
    public function index()
    {

        $workouts = workout::all();
        $general_settings = General_settings::all();
        $user_workouts = user_workout::all();
        $articles = Article::all();
       

        $user_workouts = DB::table('user_workouts')
        ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
        ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
        ->select('user_workouts.id','duration','distance','date' , 'users.name' , 'workouts.title') 
        ->get();
        return view('AdminDashboard.user_workouts.index' ,compact('general_settings' , 'workouts' , 'user_workouts' , 'articles'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $users = User::where('roles_name','=','["user"]')->get();
        $workouts = workout::all();
        $general_settings = General_settings::all();
        $user_workouts = user_workout::all();
        $articles = Article::all();
        return view('AdminDashboard.user_workouts.create' ,compact('general_settings' , 'workouts' , 'user_workouts' , 'articles' , 'users'));  

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'user_id' => 'Required' ,
            'workout_id'=>'Required',
            'distance'=> 'Required' ,
            'duration'=>'Required',
            'date'=>'Required',
        ]);

    
        foreach($request->workout_id as $key=>$workout_id){ 
            $user_workouts =new user_workout();

            $user_workouts->user_id = $request->user_id;
            $user_workouts->distance = $request->distance[$key];
            $user_workouts->workout_id = $workout_id;
            $user_workouts->duration = $request->duration[$key];
            $user_workouts->date = $request->date[$key];

            $user_workouts->save();
        }
           return redirect('user_workouts');


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
        $users = User::where('roles_name','=','["user"]')->get();
        $workouts = workout::all();
        $general_settings = General_settings::all();
        $user_workouts = user_workout::find($id);
        $articles = Article::all();
        return view('AdminDashboard.user_workouts.edit' ,compact('general_settings' , 'workouts' , 'user_workouts' , 'articles' , 'users'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        user_workout::where(['id'=> $id])->delete();
        foreach($request->workout_id as $key=>$workout_id){ 
            $user_workouts =new user_workout();

            $user_workouts->user_id = $request->user_id;
            $user_workouts->distance = $request->distance[$key];
            $user_workouts->workout_id = $workout_id;
            $user_workouts->duration = $request->duration[$key];
            $user_workouts->date = $request->date[$key];
            
            $user_workouts->save();
        }
           return redirect('user_workouts');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        user_workout::destroy($id);
        return redirect('user_workouts');
    }
}
