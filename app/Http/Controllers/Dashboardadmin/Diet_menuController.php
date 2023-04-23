<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\cource;
use App\Models\diet_menus;
use App\Models\General_settings;
use Illuminate\Http\Request;

class Diet_menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diet_menus=diet_menus::all();
        $articles = Article::all();
        $general_settings = General_settings::all();

        return view('AdminDashboard.diet_menus.index' ,compact('general_settings' , 'diet_menus' , 'articles'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $general_settings = General_settings::all();
        $articles = Article::all();

        return view('AdminDashboard.diet_menus.create' ,compact('general_settings' , 'articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'Required', 
        'title' => 'Required', 
        'ingridients' => 'Required', 
        'description' => 'Required', 
        'times' => 'Required', 
        'image' => 'mimes:jpeg,bmp,png,jpg'
    ]);

    $name = $request->file('image')->getClientOriginalName();

    $newImageName=time(). '-' . $name . '.'. $request->image->extension();
     $request->image->move(public_path('images') , $newImageName );

     $diet_menus= diet_menus::create([
        'image' => $newImageName, 
        'title' => $request->get('title'),  
        'name' => $request->get('name'), 
        'ingridients' => $request->get('ingridients'), 
        'description' => $request->get('description'), 
        'times' => $request->get('times'), 
    ]);
    $diet_menus->save();
    return redirect('diet_menus');
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
        $diet_menus = diet_menus::find($id);
        $articles = Article::all();
        return view('AdminDashboard.diet_menus.edit',compact('general_settings' , 'diet_menus' , 'articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'Required', 
            'title' => 'Required', 
            'ingridients' => 'Required', 
            'description' => 'Required', 
            'times' => 'Required', 
            'image' => 'mimes:jpeg,bmp,png,jpg'
        ]);
    
        $name = $request->file('image')->getClientOriginalName();
    
        $newImageName=time(). '-' . $name . '.'. $request->image->extension();
         $request->image->move(public_path('images') , $newImageName );
         if ($request->has('image'))
         {
          diet_menus::where('id' , $id)->update([
            'image' => $newImageName, 
            'title' => $request->get('title'),  
            'name' => $request->get('name'), 
            'ingridients' => $request->get('ingridients'), 
            'description' => $request->get('description'), 
            'times' => $request->get('times'), 
        ]);
        return redirect('diet_menus');
    }
    else{
        $name ='noimage.jpg';
        diet_menus::where('id' , $id)->update([
            'image' => $name, 
            'title' => $request->get('title'),  
            'name' => $request->get('name'), 
            'ingridients' => $request->get('ingridients'), 
            'description' => $request->get('description'), 
            'times' => $request->get('times'), 
        ]);
        return redirect('diet_menus');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        diet_menus::destroy($id);
        return  redirect('diet_menus');
    }
}
