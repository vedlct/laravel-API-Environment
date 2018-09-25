<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeType;

class EmployeeTypeController extends Controller
{
    public function get(){
        $empType=EmployeeType::get();

        return $empType;
    }
}
