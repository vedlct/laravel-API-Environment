<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'employeeId';
    protected $table = 'employeeinfo';
}
