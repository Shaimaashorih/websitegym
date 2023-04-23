<?php

namespace App\Http\Controllers\Dashboardadmin;

use App\Http\Controllers\Controller;
use App\Models\General_settings;
use App\Models\video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video_shows = video::all();
        $general_settings = General_settings::all();
        return view('AdminDashboard.video_shows.index' , compact('general_settings' , 'video_shows'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $video_shows = video::all();
        $general_settings = General_settings::all();
        return view('AdminDashboard.video_shows.create' , compact('general_settings' , 'video_shows'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'path' => 'required|file|mimetypes:video/mp4',
        ]);

 
        $fileName = $request->path->getClientOriginalName();
        $filePath = 'videos/' . $fileName;
 
        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->path));
 
        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
 
        if ($isFileUploaded) {
            $video = new video();
            $video->title = $request->title;
            $video->path = $filePath;
            $video->save();
 
            return redirect('video_shows')
            ->with('success','Video has been successfully uploaded.');
        }
 
        return back()
            ->with('error','Unexpected error occured');


            
 
        // $file=$request->file('path');
        // $file->move('upload',$file->getClientOriginalName());
        // $file_name=$file->getClientOriginalName();
 
        // $insert=new video();
        // $insert->path = $file_name;
        // $insert->title = $request->title;
        // $insert->save();
        // return redirect('video_shows');
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
    public function edit( $id)
    {
        $video_shows = video::find($id);
        $general_settings = General_settings::all();
        return view('AdminDashboard.video_shows.edit' , compact('general_settings' , 'video_shows'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'path' => 'required|file|mimetypes:video/mp4',
        ]);
        
 
        $fileName = $request->path->getClientOriginalName();
        $filePath = 'videos/' . $fileName;
 
        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->path));
 
        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
     
        if ($isFileUploaded) {
        
            $video_shows= video::where('id', $id)->update([
                'path' => $filePath, 
                'title' => $request->get('title')
     
            ]);
 
            return redirect('video_shows')
            ->with('success','Video has been successfully uploaded.');
        }
 
        return back()
            ->with('error','Unexpected error occured');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
