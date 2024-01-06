<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return response()->json([
            $comments ,
        ], Response::HTTP_OK);
    }
    public function show($id){
        $comment = Comment::query()->where('id' ,$id)->first();
        return response()->json([
            $comment ,
        ], Response::HTTP_OK);
    }

    public function store(Request $request){
        $request->validate([
            'comment' => 'required' ,
            'post_id' => 'required|integer' ,
            'user_id' => 'required|integer'
        ]);
        
        Comment::query()->create([
            'comment' => $request->comment ,
            'post_id' => $request->post_id ,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'Add Comment Successfully'
        ], Response::HTTP_CREATED);
    }

    public function update(Request $request , $id){
        $request->validate([
            'comment' => 'required' ,
        ]);

        $response = Comment::query()->where('id' , $id)->update([
            'comment' => $request->comment ,
        ]);


        if($response){
            $comment = Comment::query()->where('comment' , $request->comment)->first();
            return response()->json([
                $comment ,
                'Update Comment Successfully'
            ] , Response::HTTP_OK);
        }else{
            return response()->json([
                'Comment Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

    }


    public function destroy($id)
    {
        $comment = Comment::query()->where('id' , $id);
        $response = Comment::query()->where('id' , $id)->delete();

        if($response){
            return response()->json([
                $comment,
                'message' => 'Comment Deleted Successfuly'
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Comment Not Found'
            ], Response::HTTP_NOT_FOUND); 
        }
    }

    
}
