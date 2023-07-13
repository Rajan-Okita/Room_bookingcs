<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function Admin(){
        return view("admin");
    }
    public function add_subjects(Request $request){
        $request->validate([
            'subject'=>'required',
            'location'=>'required',
            'slots'=>'required',
        'days'=>'required',
        'start_time'=>'required',
        'end_time'=>'required'
        ]);
        $admin= new Admin();
        $admin->subject= $request->subject;
        $admin->location= $request->location;
        $admin->slots= $request->slots;
        $admin->days= $request->days;
        $admin->start_time= $request->start_time;
        $admin->end_time= $request->end_time;
        $res = $admin->save();
        if($res){
            return back()->with('success','You have added item successfully');
        }else{
            return back()->with('fail','Something wrong');
        }
    }
}
