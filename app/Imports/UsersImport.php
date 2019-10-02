<?php

namespace App\Imports;

use App\EmployeeAttendance;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EmployeeAttendance([
            'user_id'     => $row[0],
            'attendance' => $row[1],
            'ot'        => $row[2],
            'month'    => $row[3], 
            'year'  => $row[4]

         ]);
    }
}
