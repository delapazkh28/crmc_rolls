<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospectus;
use App\Models\Programs;
use DB;

class ProspectusController extends Controller
{
    //
    function getProspectus($id){
        //$data = Programs::find($id);
        $data = Programs::where('id',$id)->first();
        //$subjs = Prospectus::all($id);
        $subjs = DB::select('SELECT * FROM subjects WHERE prog='.$id);
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        return view('coordinator/manage-program', ['datas'=>$data, 'subjs'=>$subjs]);
    }

    // function getsubs($id){
    //     $subjs = Programs::find($id);
    //     // echo "<pre>";
    //     // var_dump($data);
    //     // echo "</pre>";
    //     return view('coordinator/manage-program', ['subjs'=>$subjs]);
    // }

    function addCourse(Request $req, $id){

        $prospect = new Prospectus;
        $prospect->co_code = $req->co_code;
        $prospect->co_desc = $req->co_desc;
        $prospect->type = $req->type;
        $prospect->units = $req->units;
        $prospect->yr_level = $req->yr_level;
        $prospect->semester = $req->semester;
        $prospect->prereq = $req->prereq;
        $prospect->prog = $req->prog;
        $prospect->save();

        $req->session()->flash('success','<div class="alert alert-success" role="alert">
        <strong>Success - </strong> A simple success alert - check it out!
    </div>');
        return redirect('coordinator/manage-program/'.$id);

    }
}
