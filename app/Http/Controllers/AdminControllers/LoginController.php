<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Admin;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $un=$request->username;
            $pw=$request->password;
            if(empty($un)||empty($pw)){
                return ['message'=>'Invalid input'];
            }
            $admin=\App\Admin::find(1);
            if(!$admin){
                return ['message'=>'Admin does not exist'];
            }
            else{
                if(Hash::check($pw,$admin->password_hash)){
                    $token=$admin->setToken();
                    return ['message'=>'Success','token'=>$token];
                }
                else{
                    return['message'=>'Invalid user'];
                }
            }
        }
        else{
            return ['message'=>'Incorrect method'];
        }
    }
}
