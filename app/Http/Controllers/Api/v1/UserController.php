<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::all();

        return response()->json($users, Response::HTTP_OK);
    }

    public function show($id){
        $user = User::query()->where('id' , $id)->get();

        if($user->count() > 0){
            return response()->json($user[0], Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'User Not Found'
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public function register(Request $request){
        $data = Validator::make($request->all(), [
            'name' =>  'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
        if($data->fails()){
            return response()->json([
                'errors' => $data->errors()
            ]);
        }

        $user = new User();
        $user->name = $request->name ;
        $user->email = $request->email ;
        // $user->password = Hash::make($request->password);  // if want to use hash the password
        $user->password = $request->password;
        // $user->save();


        return response()->json([
            'user'=> [
                'name' => $user->name ,
                'email' => $user->email,
                'password' => $user->password
            ] ,
            'message' => 'User Register Successfully'
        ], Response::HTTP_CREATED);

    }


    public function login(Request $request){

        $data = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($data->fails()){
            return response()->json([
                'errors' => $data->errors()
            ]);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json([
                'user'=>User::query()->where('email' , $request->email)->first() ,
                'message'=> 'Login Success'
            ]);
        }else{
            return response()->json([
                'message' => 'Login Failed'
            ], Response::HTTP_FORBIDDEN);
        }
    }

    public function logout(){
        Auth::logout();
        return response()->json([
            'message' => "Logout Successfully"
        ], Response::HTTP_OK);
    }

    public function delete($user_id){
        $user = User::query()->where('id' , $user_id)->first();
        // $response = User::query()->where('id' , $user_id)->delete();

        if($user != null){
            return response()->json([
                'user'=>$user,
                'message' => 'User Deleted Successfuly'
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'User Not Found'
            ], Response::HTTP_NOT_FOUND); 
        }

    }
}
