<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return response()->json($comments, Response::HTTP_OK);
    }
    public function show($id){
        $comment = Comment::query()->where('id' ,$id)->get();
        if($comment->count()>0){
            return response()->json($comment[0], Response::HTTP_OK); 
        }else{
            return response()->json([
                'message' => 'Comment Not Found'
            ], Response::HTTP_NOT_FOUND);      
        }

    }

    public function store(Request $request){

        $data = Validator::make($request->all(), [
            'comment' => 'required' ,
            'post_id' => 'required|integer' ,
            'user_id' => 'required|integer'
        ]);
        if($data->fails()){
            return response()->json([
                'errors' => $data->errors()
            ]);
        }
        
        // Comment::query()->create([
        //     'comment' => $request->comment ,
        //     'post_id' => $request->post_id ,
        //     'user_id' => $request->user_id
        // ]);

        return response()->json([
            'comment'=> [
                'body' => $request->comment ,
                'post_id' => $request->post_id ,
                'user_id' => $request->user_id
            ] ,
            'message'=>'Add Comment Successfully'
        ], Response::HTTP_CREATED);
    }

    public function update(Request $request , $id){

        $data = Validator::make($request->all(), [
            'comment' => 'required' ,
        ]);
        if($data->fails()){
            return response()->json([
                'errors' => $data->errors()
            ]);
        }

        // $response = Comment::query()->where('id' , $id)->update([
        //     'comment' => $request->comment ,
        // ]);

        $comment = Comment::query()->where('id' , $id)->first();
        if($comment != null){
            return response()->json([
                'orginal_comment'=>$comment ,
                'updated_comment'=>[
                    'body' => $request->comment ,
                ] ,
                'message'=>'Update Comment Successfully'
            ] , Response::HTTP_OK);
        }else{
            return response()->json([
                'message'=>'Comment Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

    }


    public function destroy($id)
    {
        $comment = Comment::query()->where('id' , $id)->first();
        // $response = Comment::query()->where('id' , $id)->delete();

        if($comment != null){
            return response()->json([
                'comment'=>$comment,
                'message' => 'Comment Deleted Successfuly'
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Comment Not Found'
            ], Response::HTTP_NOT_FOUND); 
        }
    }

    
}
