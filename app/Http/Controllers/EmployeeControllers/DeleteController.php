<?php

namespace App\Http\Controllers\EmployeeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Employee;

class DeleteController extends Controller
{
    public function deleteEmployee(Request $request){
        if($request->isMethod('delete')){
            $tmp=$request->id;
            if(empty($tmp)){
                return ['message'=>'Invalid input'];
            }
            else{
                $id=(int)$tmp;
                \App\Employee::destroy($id);
                return ['message'=>'EmployeeDeleted'];
            }
        }
        else{
            return ['message'=>'Incorrect method'];
        }
    }
}
