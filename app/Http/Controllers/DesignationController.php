<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation;

class DesignationController extends Controller
{
    public function get(){
        $designation=Designation::get();

        return $designation;
    }
}
