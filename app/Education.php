<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'hrmemployeeeducations';
}
