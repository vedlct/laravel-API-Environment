<?php

namespace App\Http\Controllers;

use App\EmployeeInfo;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth:api');
    }

    public function storeBasicInfo(Request $r){

        return $r;
    }

    public function getAllEmployee(){
        $employee = EmployeeInfo::select('*', 'employeeinfo.id as empid')
            ->leftjoin('hrmdesignations','hrmdesignations.id','=','employeeinfo.fkDesignation')
            ->leftjoin('hrmdepartments','hrmdepartments.id','=','employeeinfo.fkDepartmentId')
            ->where('employeeinfo.fkCompany' , auth()->user()->fkCompany)
            ->get();

        return $employee;
    }

    public function getBasicinfo(Request $r){


        $basicinfo = EmployeeInfo::select('firstName', 'middleName', 'lastName', 'fkEmployeeType','email' ,'gender', 'birthdate','contactNo','fkDesignation','fkDepartmentId','departmentName', 'title')
            ->leftjoin('hrmdesignations','hrmdesignations.id','=','employeeinfo.fkDesignation')
            ->leftjoin('hrmdepartments','hrmdepartments.id','=','employeeinfo.fkDepartmentId')
            ->leftjoin('employeetypes','employeetypes.id','=','employeeinfo.fkEmployeeType')
            ->where('employeeinfo.id', $r->empid)
            ->first();

        return $basicinfo;
    }

    public function test(){

    }

}
