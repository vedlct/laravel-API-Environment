<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getAlleducation(){
        $education = Education::select('*','degreeName','resultAchieved as result')
            ->leftjoin('hrmdegrees','hrmemployeeeducations.fkDegreeId','=','hrmdegrees.id')
            ->get();
        return $education;
    }
}
