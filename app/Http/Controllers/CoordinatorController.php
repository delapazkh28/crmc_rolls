<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordinator;
use App\Models\Academicyear;
use App\Models\Department;
use App\Models\Subjects;

class CoordinatorController extends Controller
{
    //
    function addNewAcadyr(Request $req){
        $acad = new Academicyear;
        $acad->acad_year = $req->acad_year;
        $acad->period = $req->period;
        $acad->status = "unused";
        $acad->save();

        $req->session()->flash('success','<div class="alert alert-success" role="alert">
        <strong>Success - </strong> A simple success alert - check it out!
    </div>');
        return redirect('admin/academicyear');
        
    }

    function showAcadyrs(){
        $data = Academicyear::all();
        return view('admin/accounts', ['acadyrs'=>$data]);
    }

    function showDepartments(){
        $data = Department::all();
        return view('admin/accounts', ['depts'=>$data]);
    }

    function addNewSubject(Request $req){
        $acad = new Subjects;
        $acad->sub_code = $req->sub_code;
        $acad->sub_desc = $req->sub_desc;
        $acad->ay_id = $req->ay_id;
        $acad->sub_max_studs = $req->sub_max_studs;
        $acad->save();

        $req->session()->flash('success','<div class="alert alert-success" role="alert">
        <strong>Success - </strong> A simple success alert - check it out!
    </div>');
        return redirect('admin/academicyear');
        
    }

    // function addCoordinator(Request $req){
    //     $coor = new Coordinator;
    //     $coor->co_fname = $req->fname;
    //     $coor->co_lname = $req->lname;
    //     $coor->co_mname = $req->mname;
    //     $coor->co_dept = $req->dept;
    //     $coor->idnum = $req->idnum;
    //     $coor->acadyr = 

    //     $req->session()->flash('success','<div class="alert alert-success" role="alert">
    //     <strong>Success - </strong> Added new coordinator!
    //     </div>');
    //     return redirect('admin/accounts');
    // } 

    // function showAcadData($id){
    //     $data = Academicyear::find($id);
    //     return view('admin/academicyear', ['data' => $data]);
    // }
}
