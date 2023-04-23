<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\cource;
use App\Models\General_settings;
use App\Models\Trainer;
use App\Models\User;
use App\Models\user_message;
use App\Models\video;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users=User::all();
        $general_settings = General_settings::all();
        $video_shows = video::all();
        $courses = cource::all();
        $trainers = Trainer::all();
        $articles = Article::all();
       
        return view('index' , compact('users' , 'general_settings' , 'video_shows' , 'courses' , 'trainers' , 'articles'));
    }
  
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storemessage(Request $request)
    {
        // dd($request->all());
        $input = user_message::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
        ]);
        $input->save();
        // $input = $request->all();

        return redirect('home')->with('success','تم الارسال بنجاح');
      

    }

     public function about()
    {
        $general_settings = General_settings::all();
        $users=User::all();
        $trainers = Trainer::all();
        $articles = Article::all();
         
        return view('about' , compact('users' , 'general_settings' , 'trainers' , 'articles'));
    }
     public function blog()
    {
        $general_settings = General_settings::all();
        $users=User::all();
        $trainers = Trainer::all();
        $articles = Article::all();
         
        return view('blog' , compact('users' , 'general_settings' , 'trainers' , 'articles'));
    }
     public function contact()
    {
        $general_settings = General_settings::all();
        $users=User::all();
        $trainers = Trainer::all();
        $articles = Article::all();
         
        return view('contact' , compact('users' , 'general_settings' , 'trainers' , 'articles'));
    }
     public function courses()
    {
        $general_settings = General_settings::all();
        $users=User::all();
        $trainers = Trainer::all();
        $articles = Article::all();
         
        return view('courses' , compact('users' , 'general_settings' , 'trainers' , 'articles'));
    }
     public function schedule()
    {
        $general_settings = General_settings::all();
        $users=User::all();
        $trainers = Trainer::all();
        $articles = Article::all();
         
        return view('schedule' , compact('users' , 'general_settings' , 'trainers' , 'articles'));
    }
}
