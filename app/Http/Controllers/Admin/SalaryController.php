<?php

namespace App\Http\Controllers\Admin;

use App\EmployeeAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class SalaryController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = EmployeeAttendance::all();
        return view('admin.salaries.index', compact('salaries'));
    }

}
