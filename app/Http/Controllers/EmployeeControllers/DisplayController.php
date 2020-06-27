<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Employee;

class DisplayController extends Controller
{
    public function displayEmployees(Request $request){
        if($request->isMethod('get')){
            $records=\App\Employee::all();
            if($records->isEmpty()){
                return ['message'=>'Empty'];
            }
            else{
                $employees=array();
                foreach($records as $record){
                    $employees[]=$record;
                }
                return ['message'=>'NotEmpty','employees'=>$employees];
            }
        }
        else{
            return ['message'=>'Incorrect method'];
        }
    }
}
