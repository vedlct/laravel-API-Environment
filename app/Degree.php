<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'hrmdegrees';
}
