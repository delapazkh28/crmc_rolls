<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcadyrController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepartmentSingleController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\ProspectusController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\UserAuth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

Route::post("user", [UserAuth::class, 'userLogin']);
Route::view("/",'login');

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('admin/messages', function () {
    return view('admin/messages');
});

//  Route::get('admin/accounts', function () {
//      return view('admin/accounts');
//  });

Route::post('admin/accounts', [UserController::class, 'addNewUser']);
Route::get('admin/accounts', [UserController::class, 'getdata']);


// Route::get('admin/departments', function () {
//     return view('admin/departments');
// });

Route::post('admin/departments', [DepartmentController::class, 'createDepartment']);
Route::get('admin/departments', [DepartmentController::class, 'showDepartments']);

 Route::get('admin/departments/{id}', function () {
     return view('admin/dept-single');
 });
Route::get('admin/departments/{id}', [DepartmentSingleController::class,'getdepartment']);

Route::get('admin/academicyear', function () {
    return view('admin/academicyear');
});

Route::get('teacher/teacher-subject', function () {
    return view('teacher/teacher-subject');
});

Route::get('teacher/subject-modules', function () {
    return view('teacher/subject-modules');
});

Route::get('teacher/sub-announcement', function () {
    return view('teacher/sub-announcement');
});

Route::get('teacher/sub-assignment', function () {
    return view('teacher/sub-assignment');
});

Route::get('teacher/sub-assignment-new', function () {
    return view('teacher/sub-assignment-new');
});

Route::get('teacher/sub-assignment-view', function () {
    return view('teacher/sub-assignment-view');
});

Route::get('teacher/messages', function () {
    return view('teacher/messages');
});





Route::post('admin/academicyear', [AcadyrController::class, 'addNewAcadyr']);
Route::get('admin/academicyear', [AcadyrController::class, 'showAcadyrs']);




Route::get('coordinator/dashboard', function () {
    return view('coordinator/dashboard');
});

Route::get('teacher/dashboard', function () {
    return view('teacher/dashboard');
});



//Students routes

Route::get('student/dashboard', function () {
    return view('student/dashboard');
});

Route::get('student/student-subject', function () {
    return view('student/student-subject');
});

Route::get('student/subject-modules', function () {
    return view('student/subject-modules');
});

Route::get('student/sub-announcement', function () {
    return view('student/sub-announcement');
});

Route::get('student/sub-assignment', function () {
    return view('student/sub-assignment');
});


Route::get('student/sub-assignment-view', function () {
    return view('student/sub-assignment-view');
});

Route::get('student/messages', function () {
    return view('student/messages');
});

//Coordinator routes

Route::get('coordinator/subj-management', function () {
    return view('coordinator/subj-management');
});

Route::post('coordinator/program-management', [ProgramsController::class, 'addPrograms']);
Route::get('coordinator/program-management', [ProgramsController::class, 'showPrograms']);
Route::get('coordinator/program-management/{id}', [ProgramsController::class, 'deleteProgram']);

// Route::get('coordinator/program-management', function () {
//     return view('coordinator/program-management');
// });
Route::post('coordinator/manage-program/{id}/add', [ProspectusController::class, 'addCourse']);
Route::get('coordinator/manage-program/{id}', [ProspectusController::class, 'getProspectus']);
Route::get('coordinator/manage-program/{id}', [ProspectusController::class, 'getsubs']);


// Route::get('coordinator/manage-program', function () {
//     return view('coordinator/manage-program');
// });