<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Academicyear;
use App\Models\Student;
use App\Models\Coordinator;
use App\Models\Teacher;
use App\Models\Admin;
use App\Models\Programs;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    function addNewUser(Request $req){

        //  echo "outside case:".$req->role."<br>";   

            switch($req->role){
                case('student'):
                $student = new Student;
                $student->stfname = $req->fname;
                $student->stlname = $req->lname;
                $student->stmname = $req->lname;
                $student->course = $req->course;
                $student->dept = $req->act_dept;
                $student->acadyr = 0;  
                $student->idnum = $req->idnum;
                $student->acctinfo = 0;
                $student->status = "active";
                $student->save();

                // echo "student";
                
                $st_user = new User;
                $st_user->idnum = $req->idnum;
                $st_user->role = $req->role;
                $st_user->password = $req->idnum;
                $st_user->name = $req->lname.", ".$req->fname;
                
                $st_user->save();
                $req->session()->flash('success','<div class="alert alert-success" role="alert">
            <strong>Success - </strong> A simple success alert - check it out!</div>');
                break;
            
            
           
        
                case('coordinator'):

      
                $coordinator = new Coordinator;
                $coordinator->co_fname = $req->fname;
                $coordinator->co_lname = $req->lname;
                $coordinator->co_mname = $req->lname;
                $coordinator->co_dept = $req->act_dept;
                $coordinator->acctinfo = 0;
                $coordinator->idnum = $req->idnum;
                $coordinator->acadyr = 0;  
             
               
                $coordinator->save();

                $co_user = new User;
                $co_user->idnum = $req->idnum;
                $co_user->role = $req->role;
                $co_user->password = $req->idnum;
                $co_user->name = $req->lname.", ".$req->fname;
                
                $co_user->save();
                $req->session()->flash('success','<div class="alert alert-success" role="alert">
                <strong>Success - </strong> A simple success alert - check it out!</div>');
                break;
 
          
                case('teacher'):
     
                $teacher = new Teacher;
                $teacher->t_fname = $req->fname;
                $teacher->t_lname = $req->lname;
                $teacher->t_mname = $req->mname;
                $teacher->t_dept = $req->act_dept;
                $teacher->acctinfo = 0;
                $teacher->status = "Active";
                $teacher->idnum = $req->idnum;
                $teacher->acadyr = 0;  
                    
                $teacher->save();

                $t_user = new User;
                $t_user->idnum = $req->idnum;
                $t_user->role = $req->role;
                $t_user->password = $req->idnum;
                $t_user->name = $req->lname.", ".$req->fname;
                
                $t_user->save();

                $req->session()->flash('success','<div class="alert alert-success" role="alert">
            <strong>Success - </strong> teacher!!</div>');
                break;
            
           

            case('admin'):
                $admin = new Admin;
                $admin->a_lname = $req->fname;
                $admin->a_fname = $req->lname;
                $admin->a_mname = $req->mname;
                $admin->a_dept = $req->act_dept;
                $admin->acctinfo = 0;
                $admin->status = "Active";
                $admin->idnum = $req->idnum;
                $admin->acadyr = 0;  
                    
                $admin->save();

                $a_user = new User;
                $a_user->idnum = $req->idnum;
                $a_user->role = $req->role;
                $a_user->password = $req->idnum;
                $a_user->name = $req->lname.", ".$req->fname;
                
                $a_user->save();
                $req->session()->flash('success','<div class="alert alert-success" role="alert">
                <strong>Success - </strong> admin!!</div>');
                break;
            
           
          
        }   
            
        
        

        return redirect('admin/accounts');

        
        
    }

    function getdata(){
        $depts =  Department::all();
        //$ddata = Department::all();
        //return view('admin/accounts', ['depts'=>$ddata]);
        $selectedDept = 1;
        $acads = Academicyear::all();
        
        $coords = DB::table('coordinators')
         ->leftJoin('departments', 'coordinators.co_dept', '=', 'departments.id')
         ->get();

         $teacher = DB::table('teachers')
         ->leftJoin('departments', 'teachers.t_dept', '=', 'departments.id')
         ->get();

         $admin = DB::table('admin')
         ->leftJoin('departments', 'admin.a_dept', '=', 'departments.id')
         ->get();

         $student = DB::table('students')
         ->leftJoin('departments', 'dept', '=', 'departments.id')
         ->leftJoin('programs', 'students.course', '=', 'programs.id')
         ->get();
        
         $progs =  Programs::all();

         return view('admin/accounts', ['depts'=>$depts, 
                                        'acads'=>$acads,
                                        'coords'=>$coords, 
                                        'teacher' => $teacher,
                                        'admin' => $admin,
                                        'student' => $student,
                                        'progs' => $progs,
                                        'selectedDept' => $selectedDept]);
        
    }

    // function showAcads(){
        
    //     // echo "<pre>";
    //     //  var_dump($mdata);
    //     //  echo "</pre>";
    //     echo "acads";
        
        
    // }

    // function showcoords(){
    //     $data = DB::table('coordinators')
    //     ->leftJoin('departments', 'coordinators.co_dept', '=', 'departments.id')
    //     ->get();
    //    //return view('admin/accounts', ['coords'=>$data]);

    //      //echo "<pre>";
    //      //var_dump($data);
    //      //echo "</pre>";
    //      echo "coords";
         
    // }



}
