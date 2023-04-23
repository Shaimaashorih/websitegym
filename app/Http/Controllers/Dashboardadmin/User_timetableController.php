<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\diet_menus;
use App\Models\General_settings;
use App\Models\User;
use App\Models\user_timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User_timetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $general_settings = General_settings::all();
        $articles = Article::all();
        $users = User::all();
        $diet_menus = diet_menus::all();
        $user_dietmenus = user_timetable::all();
        $user_dietmenus = DB::table('user_timetables')
                ->join('users' , 'user_timetables.user_id' , '=' , 'users.id')
                ->join('diet_menuses' , 'user_timetables.diet_id' , '=' , 'diet_menuses.id')
                ->select('user_timetables.id','users.name', 'diet_menuses.title')
                ->get();

        return view('AdminDashboard.user_dietmenus.index' ,compact('user_dietmenus','diet_menus','general_settings' , 'articles' , 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('roles_name','=','["user"]')->get();
        $general_settings = General_settings::all();
        $articles = Article::all();
        $diet_menus = diet_menus::all();

        return view('AdminDashboard.user_dietmenus.create' ,compact('diet_menus','general_settings' , 'articles' , 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $user_dietmenus=user_timetable::create([
            'user_id' => $request->get('user_id'),
            'diet_id' => $request->get('diet_id'),
        ]);
        $user_dietmenus->save();
        return redirect('user_dietmenus');

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
        $articles = Article::all();
        $users = User::where('roles_name','=','["user"]')->get();
        $diet_menus = diet_menus::all();
        
        $user_dietmenus = user_timetable::find($id);

        return view('AdminDashboard.user_dietmenus.edit' ,compact('user_dietmenus','diet_menus','general_settings' , 'articles' , 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       user_timetable::where('id' , $id)->update([
            'user_id' => $request->get('user_id'),
            'diet_id' => $request->get('diet_id'),
        ]);
        return redirect('user_dietmenus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_dietmenus=user_timetable::destroy($id);
        return redirect('user_dietmenus');
    }
}
