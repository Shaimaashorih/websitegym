<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Validator; 

use Illuminate\Http\Request;

class PostController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        // $posts = Post::get();
        $posts =PostResource::collection( Post::get());

        return $this->apiResponse( $posts , 'ok' , 200);
    }

    public function show($id){

        // $posts =new PostResource(Post::find($id));
        $posts =Post::find($id);
        if($posts){
            return $this->apiResponse(new PostResource(Post::find($id)) , 'ok' , 200);
        }
        else{ 
            return $this->apiResponse(  null ,'this post not found' , 404);
        }
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->apiResponse(  null , $validator->errors() , 400);
        }

        $posts = Post::create($request->all());

        if($posts){
            return $this->apiResponse(new PostResource($posts) , 'the post save' , 201);
        }
        else{
            return $this->apiResponse(  null ,'this post not save' , 400);
        }
    }

    public function update(Request $request , $id){

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        // if ($validator->fails()) {
        //     return $this->apiResponse(  null , $validator->errors() , 400);
        // }

        $posts=Post::find($id);
        if(!$posts){

            return $this->apiResponse(  null ,'this post not found' , 400);
        }

        $posts->update($request->all());

        if($posts){
            return $this->apiResponse(new PostResource($posts) , 'the post updated' , 201);
        }
    }

    public function destroy($id){
        $posts = Post::find($id);
        if(!$posts){
            return $this->apiResponse(  null ,'this post not found' , 400);
        }

        // Post::destroy($id);
        $posts->delete($id);

        if($posts){
            return $this->apiResponse(null , 'the post deleted' , 201);
        }

    }

}
