<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programs;
use DB;

class ProgramsController extends Controller
{
    //
    function addPrograms(Request $req){
        $acad = new Programs;
        $acad->pr_code = $req->pr_code;
        $acad->pr_descr = $req->pr_descr;
        $acad->pr_dept = 1;
        $acad->save();

        $req->session()->flash('success','<div class="alert alert-success" role="alert">
        <strong>Success - </strong> A simple success alert - check it out!
    </div>');
        return redirect('coordinator/program-management');
        
    }

    function showPrograms(Request $req){
        $data = Programs::all();
        return view('coordinator/program-management', ['progs'=>$data]);
    }

    function deleteProgram($id){

        //echo $id;
      DB::table('programs')->where('id', $id)->delete();

      return redirect('coordinator/program-management');


    }
}
