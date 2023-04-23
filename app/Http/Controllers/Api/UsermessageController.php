<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UsermessageResource;
use App\Models\user_message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 


class UsermessageController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $messages =UsermessageResource::collection( user_message::get());

        return $this->apiResponse( $messages , 'ok' , 200);
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->apiResponse(  null , $validator->errors() , 400);
        }

        $messages = user_message::create($request->all());

        if($messages){
            return $this->apiResponse(new UsermessageResource($messages) , ' the user message save ' , 201 );
        }
        else{
            return $this->apiResponse(  null ,'this post not save' , 400);
        }
    }
}
