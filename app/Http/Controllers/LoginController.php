<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(auth()->attempt(['email'=>$input["email"], 'password'=>$input['password']]))
        {
          if(auth()->user->role == 'admin')
          {
              return redirect()->route('adminDashboard');
          }
          elseif (auth()->user->role == 'editor')
          {
              return redirect()->route('adminDashboard');
          }
          else
          {
              return redirect()->route('dashboard');
          }
        }
        else
        {
            return redirect()->route("login")->with("error","Incorrect email or password");
        }

    }
}
