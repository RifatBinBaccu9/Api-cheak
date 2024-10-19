<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 

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

    // public function addUser(Request $req){

    //     if($req->isMethod('post')){
    //         $data=$req->all();

    //         $rules=[
    //             'name'=>'required',
    //             'email'=>'required|email|unique:users',
    //             'password'=>'required',
    //         ];

    //         $customMessage=[
    //             'name.required'=>'Name is required',
    //             'email.required'=>'email is required',
    //             'email.email'=>'email must be a valid email',
    //             'password.required'=>'password is required',
    //         ];
    //         $validator=Validator::make($data,$rules,$customMessage );
    //         if($validator->fails()){
    //             return response()->json($validator->errors(),422);
    //         }
    //         // return $data;
    //         $user=new User();
    //         $user->name=$data['name'];
    //         $user->email=$data['email'];
    //         $user->password=$data['password'];
    //         $user->save();
    //         $message='User Succesfully Added';
    //         return response()->json(['message'=>$message], 201);
    //     }
    // }
}
