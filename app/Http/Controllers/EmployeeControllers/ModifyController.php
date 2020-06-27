<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Employee;

class ModifyController extends Controller
{
    public function modifyEmployee(Request $request){
        if($request->isMethod('put')){
            $tmp=$request->id;
            if(empty($tmp)){
                return ['message'=>'Invalid input'];
            }
            else{
                $id=(int)$tmp;
                $employee=\App\Employee::find($id);
                $ed=$request->ed;
                $role=$request->role;
                if(!empty($ed))$employee->ed=$ed;
                if(!empty($role))$employee->role=$role;
                $employee->save();
                return ['message'=>'EmployeeModified'];
            }
        }
        else{
            return ['message'=>'Incorrect method'];
        }
    }
}
