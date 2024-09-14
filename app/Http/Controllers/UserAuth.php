<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserAuth extends Controller
{
    //
    function userLogin(Request $req){

        

        $data = $req->input();
        $users = User::where('idnum', $req->idnum)->get();

        if(!$users->isEmpty()){

         foreach($users as $userss){
            if($userss['idnum'] == $req->idnum && $userss['password'] == $req->password ){
                echo "The same";
                if($userss['role']=='coordinator'){
                    // echo "<pre>";
                     var_dump($users);
                    // echo "</pre>";
                    //return redirect('coordinator/dashboard')->with('userdata',$userss);
                }elseif($userss['role']=='admin'){
                    echo "admin";
                    return redirect('admin/dashboard');
                }elseif($userss['role']=='student'){
                    //echo "student";
                    $req->session()->put('idnum', $userss['idnum']);
                     echo $userss['idnum'];
                     echo "<pre>";
                     var_dump($userss);
                     echo "<pre>";
                     //return redirect('student/dashboard', $userss);
                    //return redirect('student/dashboard')->with('userdata',$userss);
                }

            }else{
                echo "Not the same";
            }
            
         }

        }else{
            echo "not found";
        }
    
        

    }
}

