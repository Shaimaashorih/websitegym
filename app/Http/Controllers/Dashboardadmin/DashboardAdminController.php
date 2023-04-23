<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\diet_menus;
use App\Models\General_settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardAdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    
    // }
    public function index( )
    {


        $general_settings = General_settings::all();
        $articles = Article::all();

        if(Auth::id()){

            if(Auth::user()->roles_name == ["admin"]){

                return view('AdminDashboard.dashboardadmin' , compact('general_settings' , 'articles'));
            }else{

                return redirect()->back();
            }
        }
        else{

            return redirect('login');
        }

        // return view('AdminDashboard.dashboardadmin' , compact('general_settings' , 'articles'));
    }


}