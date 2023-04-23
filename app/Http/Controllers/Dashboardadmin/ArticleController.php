<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\General_settings;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $general_settings = General_settings::all();

        return view('AdminDashboard.articles.index' ,compact('general_settings' , 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $general_settings = General_settings::all();

        return view('AdminDashboard.articles.create' ,compact('general_settings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articles = Article::create([
            'title_span' => $request->get('title_span'),
            'title_article' => $request->get('title_article'),
            'abotus_span' => $request->get('abotus_span'),
            'abotus_article' => $request->get('abotus_article'),
            'courses_span' => $request->get('courses_span'),
            'courses_article' => $request->get('courses_article'),
            'trainer_span' => $request->get('trainer_span'),
            'trainer_article' => $request->get('trainer_article'),
            'ourblog_span' => $request->get('ourblog_span'),
            'ourblog_article' => $request->get('ourblog_article'),
            'timetable_span' => $request->get('timetable_span'),
            'timetable_article' => $request->get('timetable_article'),
        ]);
        $articles->save();
        return redirect('articles');
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
        $id = Article::all();
        $general_settings = General_settings::all();
        $articles = Article::find($id);
        return view('AdminDashboard.articles.edit',compact('general_settings' , 'articles' , 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articles = Article::where('id' , $id)->update([
            'title_span' => $request->get('title_span'),
            'title_article' => $request->get('title_article'),
            'abotus_span' => $request->get('abotus_span'),
            'abotus_article' => $request->get('abotus_article'),
            'courses_span' => $request->get('courses_span'),
            'courses_article' => $request->get('courses_article'),
            'trainer_span' => $request->get('trainer_span'),
            'trainer_article' => $request->get('trainer_article'),
            'ourblog_span' => $request->get('ourblog_span'),
            'ourblog_article' => $request->get('ourblog_article'),
            'timetable_span' => $request->get('timetable_span'),
            'timetable_article' => $request->get('timetable_article'),
        ]);
        return redirect('articles/' . $id .'/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::destroy($id);
        return redirect('articles' .$id .'edit');
    }
}
