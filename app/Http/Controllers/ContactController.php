<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }


    public function message(Request $request){
        $request->validate([
            'name' => 'required' ,
            'email' => 'required|email' ,
            'subject' => 'required' ,
            'message' => 'required'
        ]);

        // dd($request->all());

        $result = Message::query()->create([
            'name' => $request->name ,
            'email' => $request->email ,
            'subject' => $request->subject ,
            'message' => $request->message ,
        ]);

        if($result){
            session()->flash('result', "success");
        }else{
            session()->flash('result', "failed");
        }

        return redirect('contact');
    }
}
