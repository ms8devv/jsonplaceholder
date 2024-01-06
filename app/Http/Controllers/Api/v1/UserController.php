<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function getAllUsers(){
        $users = User::all();

        return response()->json([
            $users
        ], Response::HTTP_OK);
    }

    public function show($id){
        $user = User::query()->where('id' , $id)->get();
        return response()->json([
            $user
        ], Response::HTTP_OK);
    }

    public function register(Request $request){
        $request->validate([
            'name' =>  'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        User::query()->create([
            'name' =>  $request->name ,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // if want to use hash the password
            // 'password' => $request->password,
        ]);

        return response()->json([
            'message' => 'User Created Successfully'
        ], Response::HTTP_CREATED);

    }


    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json([
                User::query()->find(auth()->user()->id)->get() ,
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
        $user = User::query()->where('id' , $user_id)->get();
        $response = User::query()->where('id' , $user_id)->delete();

        if($response){
            return response()->json([
                $user,
                'message' => 'User Deleted Successfuly'
            ], Response::HTTP_OK);
        }else{
            return response()->json([
                $user,
                'message' => 'User Not Found'
            ], Response::HTTP_NOT_FOUND); 
        }

    }
}
