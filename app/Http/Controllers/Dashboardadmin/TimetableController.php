<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\General_settings;
use App\Models\timetable;
use App\Models\workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timetables = timetable::all();
        $general_settings = General_settings::all();
        $articles = Article::all();

        $timetables = DB::table('timetables')
                ->join('workouts' , 'timetables.workout_id' , '=' , 'workouts.id')
                ->select( 'day','time' , 'workout_id' , 'title' , 'name' , 'image')
                ->orderBy('day')   
                // ->groupBy('day')  
                ->get();

        return view('AdminDashboard.timetables.index' ,compact('general_settings' , 'timetables' ,'articles'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $timetables = timetable::all();
        $general_settings = General_settings::all();
        $articles = Article::all();
        $workouts = workout::all();


        return view('AdminDashboard.timetables.create' ,compact('general_settings' , 'timetables' ,'articles' , 'workouts')); 
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'day'=>'required',
            'workout_id'=>'required',
            'time'=>'required'
        ]);
        // $timetables = timetable::create([
        //     'day'=>$request->get('day'),
        //     'workout_id'=>$request->get('workout_id'),
        //     'time'=>$request->get('time')
        // ]);
        // $timetables->save();

            
           
        foreach($request->time as $key=>$time){ 
            $timetables =new timetable();
            $timetables->day =$request->day;
            $timetables->time =$time;
            $timetables->workout_id =$request->workout_id[$key];


            $timetables->save(); 
        }        


        return redirect('timetables\create');
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
        $timetables = timetable::find($id);
        $general_settings = General_settings::all();
        $articles = Article::all();
        $workouts = workout::all();


        return view('AdminDashboard.timetables.edit' ,compact('general_settings' , 'timetables' ,'articles' , 'workouts')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'workout_id'=>'required',
            'day'=>'required',
            'time'=>'required'
        ]);
         timetable::where('id' , $id)->update([
            'workout_id'=>$request->get('workout_id'),
            'day'=>$request->get('day'),
            'time'=>$request->get('time')
        ]);

        return redirect('timetables');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        timetable::destroy($id);

        return redirect('timetables');
    }
}
