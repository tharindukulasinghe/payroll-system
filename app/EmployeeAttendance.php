<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SalaryGroup;

class EmployeeAttendance extends Model
{
    public $fillable = ['employee_id','ot','month','attendance','allowances','deductions','epf','etf','total','approved','month','year'];

    public function salaryGroup()
    {
        return $this->belongsTo(SalaryGroup::class);
    }
}
