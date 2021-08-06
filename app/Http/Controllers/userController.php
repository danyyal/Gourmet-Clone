<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    public function Contact(Request $request){
        $user = new user;
       $user->user_name = $request->name;
       $user->user_email = $request->email;
       $user->user_subject = $request->subject;
       $user->user_message = $request->message;
       $user->save();
       return redirect('contact');

    }
    public function DB_Table()
    {
       $data= user::all();
       return view('DB_Table',['data'=>$data]);
    }
    
}
