<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MembersController extends Controller
{
    function show()
    {
        $data=User::paginate(5);
        return view('list',['members'=>$data]);
    }
    function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('members');
    }
    function edit($id)
    {
        $data= User::find($id);
        return view('edit',['data'=>$data]);
    }
    function update (Request $req)
    {
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return redirect('members');
    }


}
