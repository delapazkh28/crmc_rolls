<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentSingle;
use Illuminate\Support\Facades\DB;
class DepartmentSingleController extends Controller
{
    //
    function getDepartment($id){
        $data = DepartmentSingle::find($id);
        $teacher = DB::table('teachers')
        ->whereIn("t_dept", [$id])
        ->get();
        $coords = DB::table('coordinators')
        ->whereIn("co_dept", [$id])
        ->get();
          //echo "<pre>";
          //echo var_dump($data);
          //echo "</pre>";

        return view('admin/dept-single', ['data'=>$data, 
                                          'teacher'=>$teacher,
                                          'coords'=>$coords]);
    }



}
