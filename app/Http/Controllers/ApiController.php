<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function showUser($id=null){
        if($id==''){
            $users= User::get();
            return response()->json(['users'=>$users], 200);
        }else{
            $users=User::find($id);
            return response()->json(['users'=>$users], 200);
        }
    }

    public function addUser(Request $req){
        if($req->isMethod('post')){
            $data=$req->all();
            // return $data;
            $user=new User();
            $user->name=$data['name'];
            $user->email=$data['email'];
            $user->password=$data['password'];
            $user->save();
            $message='User Succesfully Added';
            return response()->json(['message'=>$message], 201);
        }
    }
}
