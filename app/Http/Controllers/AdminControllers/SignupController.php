<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use \App\Admin;

class SignupController extends Controller
{
    public function signup(Request $request){
        $admin=\App\Admin::find(1);
        if($admin!=null){
            return ['message'=>'Admin already exists'];
        }
        else{
            if($request->isMethod('post')){
                $un=$request->username;
                $pw=$request->password;
                if(empty($un)||empty($pw)){
                    return ['message'=>'Invalid credentials'];
                }
                else{
                    $admin=new \App\Admin;
                    $admin->username=$un;
                    $admin->password_hash=Hash::make($pw);
                    $admin->save();
                    return ['message'=>'AdminCreated'];
                }
            }
            else{
                return ['message'=>'Incorrect method'];
            }
        }
    }
}
