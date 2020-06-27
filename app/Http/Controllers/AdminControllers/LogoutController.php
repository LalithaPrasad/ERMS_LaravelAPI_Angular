<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Admin;

class LogoutController extends Controller
{
    public function logout(Request $request){
        if($request->isMethod('get')){
            $admin=\App\Admin::find(1);
            $admin->invalidateToken();
            return ['message'=>'Loggedout'];
        }
        else{
            return ['message'=>'Incorrect method'];
        }
    }
}
