<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Employee;

class AddController extends Controller
{
    public function addEmployee(Request $request){
        if($request->isMethod('post')){
            $employee=new \App\Employee;
            $n=$request->name;
            $a=$request->age;
            $e=$request->ed;
            $r=$request->role;
            if(empty($n)||empty($a)||empty($e)||empty($r)){
                return ['message'=>'Invalid input'];
            }
            else{
                $employee->name=$n;
                $employee->age=$a;
                $employee->ed=$e;
                $employee->role=$r;
                $employee->save();
                return ['message'=>'EmployeeAdded'];
            }
        }
        else{
            return ['message'=>'Incorrect method'];
        }
    }
}
