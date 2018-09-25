<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Department;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function get(){
        $company=Company::first();

        return $company;
    }

    public function getDepartment(){
        $department=Department::where('fkCompany',1)->get();

        return $department;
    }

    public function updateInfo(Request $r){
        $company=Company::findOrFail($r->id);

        $company->companyName=$r->companyName;
        $company->companyAddress=$r->companyAddress;
        $company->phone=$r->phone;
        $company->fax=$r->fax;
        $company->email=$r->email;
        $company->webSite=$r->webSite;

        if($r->hasFile('image')){
            $images = $r->file('image');
            foreach ($images as $image){
                $name = time().'.'.$image->getClientOriginalName();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);

                $company->logo=$destinationPath.'/'.$name;
            }


        }
        $company->save();


        return response()->json(['message' => 'Successfully Image Uploaded','flag'=>'true']);



    }
}
