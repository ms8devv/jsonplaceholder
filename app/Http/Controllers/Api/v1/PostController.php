<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            'title' => 'required' ,
            'body' => 'required' ,
            'category_id' => 'required|integer' ,
            'user_id' =>  'required|integer'
        ]);
        if($data->fails()){
            return response()->json([
                'errors' => $data->errors()
            ]);
        }

        // Post::query()->create([
        //     'title' => $request->title ,
        //     'body' => $request->body ,
        //     'image' => 'test-image',
        //     'category_id' => $request->category_id ,
        //     'user_id' =>  $request->user_id ,
        // ]);


        return response()->json([
            'post'=>[
                'title' => $request->title ,
                'body' => $request->body ,
                'image' => 'test-image',
                'category_id' => $request->category_id ,
                'user_id' =>  $request->user_id ,
            ] ,
            'message' => 'Post Created Successfully'
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::query()->where('id' , $id)->get();
        if($post->count()>0){
            return response()->json($post[0], Response::HTTP_OK);  
        }else{
            return response()->json([
                'message' => 'Post Not Found'
            ], Response::HTTP_NOT_FOUND);     
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $data = Validator::make($request->all(), [
            'title' => 'required' ,
            'body' => 'required' ,
        ]);
        if($data->fails()){
            return response()->json([
                'errors' => $data->errors()
            ]);
        }

        $orginalPost = Post::query()->where('id' , $id)->first();
        // $response = Post::query()->where('id' , $id)->update([
        //     'title' => $request->title ,
        //     'body' => $request->body ,

        // ]);


        if($orginalPost != null){
            return response()->json([
                'orginal_post'=> $orginalPost ,
                'updated_post' => [
                    'title' => $request->title ,
                    'body' => $request->body ,
                    'category_id' => $orginalPost->category_id ,
                    'user_id' => $orginalPost->user_id ,
                ] ,
                'message' => 'Post Updated Successfully'
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Post Not Found'
            ], Response::HTTP_NOT_FOUND); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::query()->where('id' , $id)->first();
        // $response = Post::query()->where('id' , $id)->delete();

        if($post != null){
            return response()->json([
                'post'=>$post,
                'message' => 'Post Deleted Successfuly'
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Post Not Found'
            ], Response::HTTP_NOT_FOUND); 
        }
    }
}
