<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class ImportAttendancesController extends Controller
{
    public function index()
    {
        if (! Gate::allows('import_attendance_access')) {
            return abort(401);
        }
        return view('admin.import_attendances.index');
    }
}
