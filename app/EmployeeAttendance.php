<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    public $fillable = ['user_id','ot','month','attendance','month','year'];
}
