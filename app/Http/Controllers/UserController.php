<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('user.index');
    }

    public function data()
    {
        return Datatables::of(user::query())->toJson();
    }

    public function export(Request $request) 
    {
        // return [
        //     (new UsersExport)->withFilename('users-' . time() . '.xlsx'),
        // ];
        
        return Excel::download(new UsersExport, 'data-user-'.now().'.xlsx');
        // return Excel::download(new UserExport, 'siswa.xlsx');
    }

}
