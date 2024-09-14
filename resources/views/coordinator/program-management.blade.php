<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Course Management</title>

    <style>

        .modal-backdrop {
        z-index: -1;
        }

    </style>

@include('header')
</head>

<body class="layout-default">


    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
                    <div class="container-fluid pr-0 ">

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar" type="button" data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>


                        <div class="d-flex sidebar-account flex-shrink-0 mr-auto mr-lg-0">
                            <a href="index.html" class="flex d-flex align-items-center text-underline-0">
                                <span class="mr-1  text-white">
                                    <!-- LOGO 
                                    <img src="{{ asset('/images/logos/crmclogo.png') }}" class="rounded float-left" alt="...">-->
                                </span>
                                <span class="flex d-flex flex-column text-white">
                                    <strong class="sidebar-brand">CRMC</strong>
                                </span>
                            </a>
                        </div>


                        <form class="search-form search-form--light d-none d-sm-flex flex ml-3" action="index.html">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn" type="submit"><i class="material-icons">search</i></button>
                        </form>


                        <ul class="nav navbar-nav d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <span class="nav-icon navbar-notifications-indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="25" height="25">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path d="M21.5,12.254c0.003-5.247-4.248-9.502-9.494-9.506C6.759,2.745,2.503,6.996,2.5,12.243 c-0.002,2.915,1.335,5.669,3.625,7.471l-2.332,2.333c-0.39,0.39-0.39,1.024,0,1.414c0.394,0.383,1.02,0.383,1.414,0L7.863,20.8 c2.613,1.267,5.661,1.267,8.274,0l2.656,2.657c0.394,0.383,1.02,0.383,1.414,0c0.39-0.39,0.39-1.024,0-1.414l-2.332-2.333 C20.163,17.912,21.499,15.164,21.5,12.254z M11.25,5.754c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75V11.5h2.75 c0.414,0,0.75,0.336,0.75,0.75S15.914,13,15.5,13H12c-0.414,0-0.75-0.336-0.75-0.75V5.754z M7.4,2.27 c0.251-0.115,0.361-0.412,0.246-0.663c-0.028-0.061-0.067-0.115-0.117-0.16C5.711-0.236,2.873-0.127,1.19,1.691 c-1.593,1.72-1.593,4.376,0,6.096C1.285,7.89,1.418,7.948,1.558,7.948c0.195-0.001,0.371-0.114,0.454-0.29 C3.11,5.278,5.02,3.368,7.4,2.27z M19.5,0.254c-1.125,0.003-2.207,0.429-3.033,1.193c-0.204,0.187-0.217,0.503-0.031,0.706 c0.045,0.049,0.099,0.089,0.16,0.117c2.38,1.098,4.29,3.008,5.388,5.388c0.085,0.174,0.26,0.286,0.454,0.29 c0.14,0,0.273-0.058,0.368-0.161c1.683-1.818,1.573-4.657-0.245-6.339C21.728,0.677,20.634,0.251,19.5,0.254z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <!-- <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                        <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                    </div>
                                    <div class="navbar-notifications-menu__content" style="position:relative" data-perfect-scrollbar>

                                        <div class="dropdown-item d-flex py-2">
                                            <div class="mr-3">
                                                <div class="avatar avatar-xs">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>


                                        <div class="dropdown-item d-flex py-2">
                                            <div class="mr-3">
                                                <div class="avatar avatar-xs">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>


                                        <div class="dropdown-item d-flex py-2">
                                            <div class="mr-3">
                                                <div class="avatar avatar-xs">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs">
                                                        <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>





                                        <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                    </div>
                                </div> -->
                            </li>
                            <li class="nav-item">
                                <a href="#events-drawer" data-toggle="sidebar" class="nav-link d-flex align-items-center">
                                    <span class=" nav-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="25" height="25">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path d="M21.5,3h-2.75c-0.138,0-0.25-0.112-0.25-0.25V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v4.75c0,0.414-0.336,0.75-0.75,0.75 S15,6.164,15,5.75V3.5C15,3.224,14.776,3,14.5,3H8.25C8.112,3,8.001,2.889,8,2.751V1c0-0.552-0.448-1-1-1S6,0.448,6,1v4.75 C6,6.164,5.664,6.5,5.25,6.5S4.5,6.164,4.5,5.75V3.5C4.5,3.224,4.276,3,4,3H2.5c-1.105,0-2,0.895-2,2v17c0,1.105,0.895,2,2,2h19 c1.105,0,2-0.895,2-2V5C23.5,3.895,22.605,3,21.5,3z M21.5,21.5c0,0.276-0.224,0.5-0.5,0.5H3c-0.276,0-0.5-0.224-0.5-0.5v-12 C2.5,9.224,2.724,9,3,9h18c0.276,0,0.5,0.224,0.5,0.5V21.5z M18.185,13.111l-6-2.383c-0.119-0.046-0.251-0.046-0.37,0l-6,2.383 c-0.193,0.077-0.319,0.266-0.315,0.474c0,0.034,0,3.38,0,3.38c0,0.414,0.336,0.75,0.75,0.75S7,17.379,7,16.965v-2.506l4.834,1.706 c0.107,0.038,0.225,0.038,0.332,0l6-2.118c0.26-0.092,0.397-0.377,0.305-0.638C18.423,13.273,18.319,13.164,18.185,13.111z M15.263,15.829L12,16.981l-3.263-1.152c-0.26-0.092-0.546,0.045-0.638,0.306c-0.019,0.053-0.028,0.11-0.028,0.166v2.145 c0,0.212,0.134,0.402,0.334,0.472l2.574,0.908c0.661,0.232,1.381,0.232,2.042,0l2.574-0.908c0.2-0.07,0.334-0.26,0.334-0.472V16.3 c0-0.276-0.223-0.5-0.5-0.5c-0.057,0-0.113,0.01-0.166,0.028L15.263,15.829z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </li>

                
                            <!-- <li class="nav-item nav-item-circle">
          <a href="#" class="nav-link d-flex align-items-center navbar-circle-link">
          <span class="rounded-circle">
            <span class="material-icons text-primary">flag</span>
          </span>
        </a>
      </li> -->
                        </ul>

                        <!-- <div class="dropdown">
                            <a href="#account_menu" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar" data-toggle="dropdown">
                                <img src="assets/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted">
                                <span class="ml-1 d-flex-inline">
                                    <span class="text-light">Adrian D.</span>
                                </span>
                            </a>
                            <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

                                    <span class="mr-3">
                                        <img src="assets/images/frontted-logo-blue.svg" width="43" height="43" alt="avatar">
                                    </span>
                                    <span class="flex d-flex flex-column">
                                        <strong class="h5 m-0">Adrian D.</strong>
                                        <small class="text-muted text-uppercase">STUDENT</small>
                                    </span>

                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center py-2" href="student-edit-account.html">
                                    <span class="material-icons mr-2">account_circle</span> Edit Account
                                </a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                    <span class="material-icons mr-2">settings</span> Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="login.html">
                                    <span class="material-icons mr-2">exit_to_app</span> Logout
                                </a>
                            </div>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">


                    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


                    <div class="container-fluid page__container">
                       
                         <h2 class="bold m-4 text-center p-4">Program Management</h2>
                         @if(session('success'))
                         <div class="alert alert-success" role="alert">
                            <strong>Success! </strong> you have created a new Program!
                        </div>
                         @endif


                         <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">Department Programs</h4>
                                        <div>
                                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#modal-large" data-backdrop="false">
                                            <i class="fa fa-user-plus"></i>
                                        </button>
                                        </div>
                                    </div>
                                    <!-- <div class="card-header card-header-tabs-basic nav" role="tablist">
                                        <a href="#activity_all" class="active" data-toggle="tab" role="tab" aria-controls="activity_all" aria-selected="true">BSIT</a>
                                    </div> -->
                                    <div class="card-body tab-content">
                                        <div class="tab-pane active show fade" id="activity_all">
                                            <table id="BSIT" class="dtable mb-0 thead-border-top-0">
                                                <thead  class="card-header__title flex m-0">
                                                    <tr>
                                                    <th scope="col">COURSE CODE</th>
                                                    <th scope="col">DESCRIPTIVE TITLE</th>
                                                    <th scope="col">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($progs as $prog)
                                                    <tr>
                                                    <th scope="row">{{$prog->pr_code}}</th>
                                                    <td>{{$prog->pr_descr}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="material-icons">settings</i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="manage-program/{{$prog->id}}">Manage</a>
                                                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#delete{{$prog->id}}">Delete</a>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <!-- Delete Modal -->
                                                        <div class="modal fade" id="delete{{$prog->id}}" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete {{$prog->pr_code}}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete {{$prog->pr_code}} ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a type="button" class="btn btn-primary" href="program-management/{{$prog->id}}">Save changes</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                  @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                        

                    </div>


                    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

                    <script>
                        AOS.init();
                    </script>


                </div>
                <!-- // END drawer-layout__content -->



                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left bg-white" data-perfect-scrollbar>


                            <div class="sidebar-block p-0 m-0">
                                <div class="d-flex align-items-center sidebar-p-a border-bottom bg-light">
                                    <a href="#" class="flex d-flex align-items-center text-body text-underline-0">
                                        <span class="avatar avatar-sm mr-2">
                                            <span class="avatar-title rounded-circle bg-soft-secondary text-muted">AD</span>
                                        </span>
                                        <span class="flex d-flex flex-column">
                                            <strong>John Doe</strong>
                                            <small class="text-muted text-uppercase">Administrator</small>
                                        </span>
                                    </a>
                                    <div class="dropdown ml-auto">
                                        <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="student-dashboard.html">Dashboard</a>
                                            <a class="dropdown-item" href="student-profile.html">My profile</a>
                                            <a class="dropdown-item" href="student-edit-account.html">Edit account</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" rel="nofollow" data-method="delete" href="login.html">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-block p-0">
                            
                                <!-- <div class="sidebar-heading">Student</div> -->


                                @include('coordinator/navigation')

                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->


    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




                <small class="text-dark-gray px-3 py-1">
                    <strong>Thursday, 28 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Marketing Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Wednesday, 27 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>07:48 PM</small>
                                <small class="text-dark-gray">30 min</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Alex</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Tuesday, 26 Feb</strong>
                </small>

                

                <small class="text-dark-gray px-3 py-1">
                    <strong>Monday, 25 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col d-flex">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Wendy</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>


                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    

    <!-- App Settings FAB -->
    <!-- <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-index.html',
      'fluid': 'fluid-index.html',
      'mini': 'mini-index.html'
    }"></app-settings>
    </div> -->
    <script>
        var options = {
            valueNames: [ 'name', 'born' ]
            };

            var userList = new List('users', options);
    </script>
    @include('footer')


    <div id="modal-large" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-large-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-large-title">Add new Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- // END .modal-header -->
                <div class="modal-body">
                <div class="col-lg-12 card-body">
                            <form method="post" action="program-management">
                                    @csrf
                                  
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <label for="exampleInputPassword1">Program Code:</label>
                                                    <input type="text" name="pr_code" class="form-control" id="exampleInputPassword1" placeholder="">
                                                </div>
                                                <div class="col-12">
                                                     <label for="exampleInputPassword1">Program Description:</label>
                                                    <input type="textarea" name="pr_descr" class="form-control" id="exampleInputPassword1" placeholder="">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-12 ">
                                                     <label for="exampleInputPassword1">Department:</label>
                                                    <input type="text" name="pr_dept" value="College of Computer Studies" class="form-control" id="exampleInputPassword1" disabled>
                                                </div>
                                            </div>
                                        
                </div> <!-- // END .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div> <!-- // END .modal-footer -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div> <!-- // END .modal -->

    <div id="modal-course-sub" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-large-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-large-title">Add new course subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- // END .modal-header -->
                <div class="modal-body">
                <div class="col-lg-12 card-body">
                                    <form method="post" action="accounts">
                                    @csrf
                                    <div class="form-row">
                                                <div class="col-12 col-md-6 mb-3">
                                                        <label for="exampleInputEmail1">ID number:</label>
                                                        <input type="number" name="idnum" class="form-control"  placeholder="Enter your ID number">
                                                </div>
                                                <div class="col-12 col-md-6 mb-3">
                                                <label for="select01">Account type:</label>
                                                <select id="user_role" name="role" data-toggle="select" class="form-control">
                                                    <option id="admin_fields" value="admin">Administrator</option>
                                                    <option id="coord_fields" value="coordinator">Coordinator</option>
                                                    <option id="teacher_fields" value="teacher">Teacher</option>
                                                    <option class="stud_f" id="stud_f" value="student">Student</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 col-md-4 mb-3">
                                                    <label for="exampleInputPassword1">First Name:</label>
                                                    <input type="text" name="fname" class="form-control" id="exampleInputPassword1" placeholder="eg. Juan">
                                                </div>
                                                <div class="col-12 col-md-4 mb-3">
                                                     <label for="exampleInputPassword1">Last Name:</label>
                                                    <input type="text" name="lname" class="form-control" id="exampleInputPassword1" placeholder="eg.. Dela Cruz">
                                                </div>
                                                <div class="col-12 col-md-4 mb-3">
                                                     <label for="exampleInputPassword1">Middle Name:</label>
                                                    <input type="text" name="mname" class="form-control" id="exampleInputPassword1" placeholder="eg.. Santos">
                                                </div>
                                            </div>


                                        <div id="disp_course" class="form-group">
                                                <label for="select01">Course: </label>
                                                <select id="select01" name="course" data-toggle="select" class="form-control">
                                                    <option value="dept here" selected>BSIT</option>
                                                </select>                  
                                        </div>

                                        <div id="disp_course" class="form-group">
                                                <label for="select01">Type: </label>
                                                <span id="#enterhere"></span>                 
                                        </div>

                                       
                                    
                                </div>
                </div> <!-- // END .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div> <!-- // END .modal-footer -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div> <!-- // END .modal -->

    <div id="subjgroups" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-large-title" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-large-title">Manage Groups for GE 1</h5>
                    <div class="text-left">
                        <button type="button" class="btn btn-primary text-left"  data-toggle="modal" data-target="#modal-large" data-backdrop="false">
                                            <i class="fa fa-plus"></i>Add Group
                         </button>
                    </div>                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- // END .modal-header -->
                <div class="modal-body">
                <div class="col-lg-12 card-body">
                                            <table id="BSIT" class="dtable mb-0 thead-border-top-0">
                                                <thead  class="card-header__title flex m-0">
                                                    <tr>
                                                    <th scope="col">COURSE NO</th>
                                                    <th scope="col">GROUP</th>
                                                    <th scope="col">TERM</th>
                                                    <th scope="col">TEACHER</th>
                                                    <th scope="col">ENROLLEES</th>
                                                    <th scope="col">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">GE 1</th>
                                                    <td>1</td>
                                                    <td>1st sememester 2022-2023</td>
                                                    <td>PETRA MAHALIMUYAK</td>
                                                    <td>0/30</td>
                                                    <td>
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#editGroup" data-backdrop="false">
                                                        <i class="material-icons">settings</i>
                                                        </button>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">GE 2</th>
                                                    <td>2</td>
                                                    <td>1st sememester 2022-2023</td>
                                                    <td>JAKE FORBES</td>
                                                    <td>0/30</td>
                                                    <td>
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#" data-backdrop="false">
                                                        <i class="material-icons">settings</i>
                                                        </button>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">AE 2</th>
                                                    <td>1</td>
                                                    <td>1st sememester 2022-2023</td>
                                                    <td>DANIELLE MULACH</td>
                                                    <td>0/30</td>
                                                    <td>
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#" data-backdrop="false">
                                                        <i class="material-icons">settings</i>
                                                        </button>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                </div> <!-- // END .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
               
                </div> <!-- // END .modal-footer -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div> <!-- // END .modal -->

    <div id="editGroup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-large-title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-large-title">Edit G1 GROUP 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- // END .modal-header -->
                <div class="modal-body">
                <div class="col-lg-12 card-body">
                                    <form method="post" action="accounts">
                                    @csrf


                                        <div id="teacher" class="form-group">
                                                <label for="select01">TEACHER: </label>
                                                <select id="select01" name="course" data-toggle="select" class="form-control">
                                                    <option value="dept here" selected>ERIC MANANSALA</option>
                                                    <option value="dept here" selected>DANIELLE MULACH</option>
                                                </select>                  
                                        </div>

                                        <div id="enrollees" class="form-group">
                                                <label for="select01">ENROLLEES: </label>
                                                <input type="number" name="enrollees" class="form-control"  placeholder="Enter your ID number">               
                                        </div>

                                       
                                    
                                </div>
                </div> <!-- // END .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div> <!-- // END .modal-footer -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div> <!-- // END .modal -->
</body>
<script>
          var selected_role = $("#user_role").val();
      $("#enterhere").innerHTML = selected_role;

</script>
</html>
