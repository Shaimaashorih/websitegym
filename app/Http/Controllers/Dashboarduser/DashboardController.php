<?php

namespace App\Http\Controllers\Dashboarduser;

use App\Http\Controllers\Controller;
use App\Models\diet_menus;
use App\Models\General_settings;
use App\Models\User;
use App\Models\user_timetable;
use App\Models\user_workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    
    // }

 /////////////////////////////////**********  User Dashboard ***********//////////////////////////////////////

    public function index()
    {
        $general_settings = General_settings::all();
        if(Auth::id()){


            if(Auth::user()->roles_name == ["user"]){
                // User::where('id', Auth::id())->with('email')->get();
                $user = User::find(auth()->user()->id);
                $user_dietmenus = DB::table('user_timetables')
                ->join('users' , 'user_timetables.user_id' , '=' , 'users.id')
                ->join('diet_menuses' , 'user_timetables.diet_id' , '=' , 'diet_menuses.id')
                -> where('users.id', Auth::id())
                ->select('user_timetables.id','diet_menuses.name', 'title','description','image' , 'ingridients' , 'times')
                ->get();

                $groups=DB::table('user_workouts')
                ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
                ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
                ->where('users.id', Auth::id())
                ->whereMonth('date', Carbon::now()->month)
                ->select('workouts.name',  DB::raw('sum(duration) as duration')) 
                ->groupBy('name')
                ->get();
                return view('UserDashboard.dashboard' , compact('general_settings' , 'user_dietmenus' , 'groups'));
                
            }else{

                return redirect()->back();
            }
        }
        else{

            return redirect('login');
        }

        // return view('UserDashboard.dashboard' , compact('general_settings'));
    }

/////////////////////////////////********** Distance Map  ***********//////////////////////////////////////

    public function distance(){
        $general_settings = General_settings::all();
        $distances =DB::table('user_workouts')
        ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
        ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
        ->where('users.id', Auth::id())
        ->select('workouts.name', 'image',  DB::raw('sum(distance) as distance'))
        ->groupBy('name' , 'image')
        ->get();
        $active =DB::table('user_workouts')
        ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
        ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
        ->where('users.id', Auth::id())
        ->whereMonth('date', Carbon::now()->month)
        ->select('workouts.name', 'image',  DB::raw('monthname(date) as date') , DB::raw('sum(distance) as distance') )
        ->groupBy('name' , 'image' , 'date')
        ->get();
        $charts =DB::table('user_workouts')
        ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
        ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
        ->where('users.id', Auth::id())
        ->select('workouts.name', 'image',  DB::raw('monthname(date) as date') , DB::raw('sum(distance) as distance') )
        ->groupBy('name' , 'image' , 'date')
        ->get();
        return view('UserDashboard.distance-map' , compact('general_settings' , 'distances' , 'active' , 'charts'));
    }

/////////////////////////////////********** Food Menu ***********//////////////////////////////////////

    public function food(){
        $general_settings = General_settings::all();
        $user_dietmenus = DB::table('user_timetables')
                ->join('users' , 'user_timetables.user_id' , '=' , 'users.id')
                ->join('diet_menuses' , 'user_timetables.diet_id' , '=' , 'diet_menuses.id')
                -> where('users.id', Auth::id())
                ->select('user_timetables.id','diet_menuses.name', 'title','description','image' , 'ingridients' , 'times')
                ->get();
        $otherdiets =diet_menus::all();
        return view('UserDashboard.food-menu' , compact('general_settings' , 'user_dietmenus', 'otherdiets' ));
    }
/////////////////////////////////********** Personal Record ***********//////////////////////////////////////

    public function personal(){
        $general_settings = General_settings::all();
        $personal = DB::table('user_workouts')
        ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
        ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
        ->where('users.id', Auth::id())
        ->whereDay('date', Carbon::now()->day)
        ->select('workouts.name', 'duration','date','image', DB::raw('dayname(date) as day'),  'distance')
        ->groupBy('name' , 'date' , 'duration' , 'distance' , 'image')
        ->get();
        return view('UserDashboard.personal-record' , compact('general_settings','personal'));
    }
/////////////////////////////////********** Workout Plan ***********//////////////////////////////////////

    public function workoutplan(){
        $general_settings = General_settings::all();

        return view('UserDashboard.workout-plan' , compact('general_settings'));
    }
/////////////////////////////////********** Workout Statistic ***********//////////////////////////////////////

    public function workoutstatic(){
        $general_settings = General_settings::all();
        $user_workouts = DB::table('user_workouts')
        ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
        ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
        ->where('users.id', Auth::id())
        ->selecT('workouts.name',DB::raw('monthname(date) as month'), 'date','title', DB::raw('sum(distance) as distance'))
        ->groupBy('name' , 'date' , 'title')
        ->get();

        $groups=DB::table('user_workouts')
        ->join('workouts' , 'user_workouts.workout_id' , '=' , 'workouts.id')
        ->join('users' , 'user_workouts.user_id' , '=' , 'users.id')
        ->where('users.id', Auth::id())
        ->whereMonth('date', Carbon::now()->month)
        ->select('workouts.name',  DB::raw('sum(duration) as duration')) 
        ->groupBy('name')
        ->get();
        
        return view('UserDashboard.workout-statistic' , compact('general_settings' , 'user_workouts' , 'groups' ));
    }
}

