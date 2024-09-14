<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

@include('header')

<style>
    .rotate {
        -moz-transition: all .5s linear;
        -webkit-transition: all .5s linear;
        transition: all .5s linear;
    }
    .rotate.down {
        -moz-transform:rotate(90deg);
        -webkit-transform:rotate(90deg);
        transform:rotate(90deg);
    }
    </style>
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



                <div class="container-fluid page__heading-container">
                        <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                            <div>
                                <h1 class="m-lg-0">IT 1101 - Learn Vue JS > Modules</h1>
                                <div class="d-inline-flex align-items-center">
                                 <small class="text-muted ml-1 mr-1">GROUP 1</small>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="btn btn-success">
                                <i class="fa fa-plus"></i>
                                    <strong>Module</strong>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid page__container">
                        <div class="row">
                            <div class="col-md-8">
                
                                <!-- <div class="card">
                                    <div class="card-header">
                                        <div class="media align-items-center"> -->
                                            <!-- <div class="media-left">
                                                <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="About Adrian" width="40" class="rounded-circle">
                                            </div> -->
                                            <!-- <div class="media-body">
                                                <div class="card-title mb-0"><a href="student-profile.html" class="text-body"><strong>Adrian Demian</strong></a></div>
                                                <p class="text-muted mb-0">Instructor</p>
                                            </div>
                                            <div class="media-right">
                                                <a href="" class="btn btn-facebook btn-sm"><i class="fab fa-facebook"></i></a>
                                                <a href="" class="btn btn-twitter btn-sm"><i class="fab fa-twitter"></i></a>
                                                <a href="" class="btn btn-light btn-sm"><i class="fab fa-github"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        Having over 12 years exp. Adrian is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.
                                    </div>
                                </div> -->



                                <div class="card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                    <div class="flex">
                                            <h4 class="card-header__title"><a href="#"><div data-id="1" id="arrow1" class="fa fa-chevron-right rotate"></div></a> Chapter 2: Installation</h4>
                                        </div>
                                    </div>
                                    <ul id="mod_items1" class="mylist list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                </div> 

                                <div class="card">
                                <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title"><a href="#"><div data-id="2" id="arrow2" class="fa fa-chevron-right rotate"></div></a> Chapter 1: Requirements</h4>
                                        </div>
                                    </div>
                                        <ul id="mod_items2" class="mylist list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                 </div>

                            </div>
                            

                            <div class="col-md-4">

                                <!-- Lessons -->
                                <div class="card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">1st Semester 2022-2023</h4>
                                        </div>
                                    </div>

                                    <ul class="list-group list-group-fit">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted">1.</div>
                                                </div>
                                                <div class="media-body">
                                                    <a href="teacher-subject">Home</a>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">2.</div>
                                                <div class="media-body">
                                                    <a href="sub-announcement">Announcements</a>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item active">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted">3.</div>
                                                </div>
                                                <div class="media-body">
                                                    <a class="text-white" href="subject-modules">Modules</a>

                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted">4.</div>
                                                </div>
                                                <div class="media-body">
                                                    <a href="sub-assignment">Assignments</a>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted">5.</div>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Quizzes</a>
                                                    
                                                </div>

                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted">6.</div>
                                                </div>
                                                <div class="media-body">
                                                    <a href="#">Grades</a>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <!-- <div class="card ">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Related Courses</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="card card__course clear-shadow border">
                                            <div class=" d-flex justify-content-center">
                                                <a class="" href="#">
                                                    <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=clamp&amp;w=800&amp;h=250" style="width:100%" alt="...">
                                                </a>
                                            </div>
                                            <div class="p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <a class="text-body mb-1" href="#"><strong>Basics of Social Media</strong></a><br>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-blue mr-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="16" height="16" style="position:relative; top:-2px">
                                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                        <path d="M2.5,16C2.224,16,2,15.776,2,15.5v-11C2,4.224,2.224,4,2.5,4h14.625c0.276,0,0.5,0.224,0.5,0.5V8c0,0.552,0.448,1,1,1 s1-0.448,1-1V4c0-1.105-0.895-2-2-2H2C0.895,2,0,2.895,0,4v12c0,1.105,0.895,2,2,2h5.375c0.138,0,0.25,0.112,0.25,0.25v1.5 c0,0.138-0.112,0.25-0.25,0.25H5c-0.552,0-1,0.448-1,1s0.448,1,1,1h7.625c0.552,0,1-0.448,1-1s-0.448-1-1-1h-2.75 c-0.138,0-0.25-0.112-0.25-0.25v-1.524c0-0.119,0.084-0.221,0.2-0.245c0.541-0.11,0.891-0.638,0.781-1.179 c-0.095-0.466-0.505-0.801-0.981-0.801L2.5,16z M3.47,9.971c-0.303,0.282-0.32,0.757-0.037,1.06c0.282,0.303,0.757,0.32,1.06,0.037 c0.013-0.012,0.025-0.025,0.037-0.037l2-2c0.293-0.292,0.293-0.767,0.001-1.059c0,0-0.001-0.001-0.001-0.001l-2-2 c-0.282-0.303-0.757-0.32-1.06-0.037s-0.32,0.757-0.037,1.06C3.445,7.006,3.457,7.019,3.47,7.031l1.293,1.293 c0.097,0.098,0.097,0.256,0,0.354L3.47,9.971z M7,11.751h2.125c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75H7 c-0.414,0-0.75,0.336-0.75,0.75S6.586,11.751,7,11.751z M18.25,16.5c0,0.276-0.224,0.5-0.5,0.5s-0.5-0.224-0.5-0.5v-5.226 c0-0.174-0.091-0.335-0.239-0.426c-1.282-0.702-2.716-1.08-4.177-1.1c-0.662-0.029-1.223,0.484-1.252,1.146 c-0.001,0.018-0.001,0.036-0.001,0.054v7.279c0,0.646,0.511,1.176,1.156,1.2c1.647-0.011,3.246,0.552,4.523,1.593 c0.14,0.14,0.33,0.219,0.528,0.218c0.198,0.001,0.388-0.076,0.529-0.215c1.277-1.044,2.878-1.61,4.527-1.6 c0.641-0.023,1.15-0.547,1.156-1.188v-7.279c-0.001-0.327-0.134-0.64-0.369-0.867c-0.236-0.231-0.557-0.353-0.886-0.337 c-1.496,0.016-2.963,0.411-4.265,1.148c-0.143,0.092-0.23,0.251-0.23,0.421V16.5z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <a href="take-course.html" class="small">Social Media</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-primary ml-auto">$99</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card__course clear-shadow border">
                                            <div class=" d-flex justify-content-center">
                                                <a class="" href="#">
                                                    <img src="https://images.unsplash.com/photo-1470478626242-c4f9af4585f9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=clamp&amp;w=800&amp;h=250" style="width:100%" alt="...">
                                                </a>
                                            </div>
                                            <div class="p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <a class="text-body mb-1" href="#"><strong>UI/UX Basics</strong></a><br>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-blue mr-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="16" height="16" style="position:relative; top:-2px">
                                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                        <path d="M2.5,16C2.224,16,2,15.776,2,15.5v-11C2,4.224,2.224,4,2.5,4h14.625c0.276,0,0.5,0.224,0.5,0.5V8c0,0.552,0.448,1,1,1 s1-0.448,1-1V4c0-1.105-0.895-2-2-2H2C0.895,2,0,2.895,0,4v12c0,1.105,0.895,2,2,2h5.375c0.138,0,0.25,0.112,0.25,0.25v1.5 c0,0.138-0.112,0.25-0.25,0.25H5c-0.552,0-1,0.448-1,1s0.448,1,1,1h7.625c0.552,0,1-0.448,1-1s-0.448-1-1-1h-2.75 c-0.138,0-0.25-0.112-0.25-0.25v-1.524c0-0.119,0.084-0.221,0.2-0.245c0.541-0.11,0.891-0.638,0.781-1.179 c-0.095-0.466-0.505-0.801-0.981-0.801L2.5,16z M3.47,9.971c-0.303,0.282-0.32,0.757-0.037,1.06c0.282,0.303,0.757,0.32,1.06,0.037 c0.013-0.012,0.025-0.025,0.037-0.037l2-2c0.293-0.292,0.293-0.767,0.001-1.059c0,0-0.001-0.001-0.001-0.001l-2-2 c-0.282-0.303-0.757-0.32-1.06-0.037s-0.32,0.757-0.037,1.06C3.445,7.006,3.457,7.019,3.47,7.031l1.293,1.293 c0.097,0.098,0.097,0.256,0,0.354L3.47,9.971z M7,11.751h2.125c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75H7 c-0.414,0-0.75,0.336-0.75,0.75S6.586,11.751,7,11.751z M18.25,16.5c0,0.276-0.224,0.5-0.5,0.5s-0.5-0.224-0.5-0.5v-5.226 c0-0.174-0.091-0.335-0.239-0.426c-1.282-0.702-2.716-1.08-4.177-1.1c-0.662-0.029-1.223,0.484-1.252,1.146 c-0.001,0.018-0.001,0.036-0.001,0.054v7.279c0,0.646,0.511,1.176,1.156,1.2c1.647-0.011,3.246,0.552,4.523,1.593 c0.14,0.14,0.33,0.219,0.528,0.218c0.198,0.001,0.388-0.076,0.529-0.215c1.277-1.044,2.878-1.61,4.527-1.6 c0.641-0.023,1.15-0.547,1.156-1.188v-7.279c-0.001-0.327-0.134-0.64-0.369-0.867c-0.236-0.231-0.557-0.353-0.886-0.337 c-1.496,0.016-2.963,0.411-4.265,1.148c-0.143,0.092-0.23,0.251-0.23,0.421V16.5z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <a href="take-course.html" class="small">Social Media</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-primary ml-auto">$99</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card__course clear-shadow border">
                                            <div class=" d-flex justify-content-center">
                                                <a class="" href="#">
                                                    <img src="https://images.unsplash.com/photo-1542690563-ca10289ac117?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=clamp&amp;w=800&amp;h=250" style="width:100%" alt="...">
                                                </a>
                                            </div>
                                            <div class="p-3">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <a class="text-body mb-1" href="#"><strong>Learn Ruby on Rails</strong></a><br>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-blue mr-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="16" height="16" style="position:relative; top:-2px">
                                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                                        <path d="M2.5,16C2.224,16,2,15.776,2,15.5v-11C2,4.224,2.224,4,2.5,4h14.625c0.276,0,0.5,0.224,0.5,0.5V8c0,0.552,0.448,1,1,1 s1-0.448,1-1V4c0-1.105-0.895-2-2-2H2C0.895,2,0,2.895,0,4v12c0,1.105,0.895,2,2,2h5.375c0.138,0,0.25,0.112,0.25,0.25v1.5 c0,0.138-0.112,0.25-0.25,0.25H5c-0.552,0-1,0.448-1,1s0.448,1,1,1h7.625c0.552,0,1-0.448,1-1s-0.448-1-1-1h-2.75 c-0.138,0-0.25-0.112-0.25-0.25v-1.524c0-0.119,0.084-0.221,0.2-0.245c0.541-0.11,0.891-0.638,0.781-1.179 c-0.095-0.466-0.505-0.801-0.981-0.801L2.5,16z M3.47,9.971c-0.303,0.282-0.32,0.757-0.037,1.06c0.282,0.303,0.757,0.32,1.06,0.037 c0.013-0.012,0.025-0.025,0.037-0.037l2-2c0.293-0.292,0.293-0.767,0.001-1.059c0,0-0.001-0.001-0.001-0.001l-2-2 c-0.282-0.303-0.757-0.32-1.06-0.037s-0.32,0.757-0.037,1.06C3.445,7.006,3.457,7.019,3.47,7.031l1.293,1.293 c0.097,0.098,0.097,0.256,0,0.354L3.47,9.971z M7,11.751h2.125c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75H7 c-0.414,0-0.75,0.336-0.75,0.75S6.586,11.751,7,11.751z M18.25,16.5c0,0.276-0.224,0.5-0.5,0.5s-0.5-0.224-0.5-0.5v-5.226 c0-0.174-0.091-0.335-0.239-0.426c-1.282-0.702-2.716-1.08-4.177-1.1c-0.662-0.029-1.223,0.484-1.252,1.146 c-0.001,0.018-0.001,0.036-0.001,0.054v7.279c0,0.646,0.511,1.176,1.156,1.2c1.647-0.011,3.246,0.552,4.523,1.593 c0.14,0.14,0.33,0.219,0.528,0.218c0.198,0.001,0.388-0.076,0.529-0.215c1.277-1.044,2.878-1.61,4.527-1.6 c0.641-0.023,1.15-0.547,1.156-1.188v-7.279c-0.001-0.327-0.134-0.64-0.369-0.867c-0.236-0.231-0.557-0.353-0.886-0.337 c-1.496,0.016-2.963,0.411-4.265,1.148c-0.143,0.092-0.23,0.251-0.23,0.421V16.5z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                            <a href="take-course.html" class="small">Social Media</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-primary ml-auto">$99</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> -->
                                <!--
                <div class="rating text-warning">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i>
                    <i class="material-icons">star_border</i>
                </div>
                <small class="text-muted">20 ratings</small>
            </div>
        </div> -->
                            </div>
                        </div>
                    </div>


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
                                            <strong>Ted Manansala</strong>
                                            <small class="text-muted text-uppercase">Teacher</small>
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


                                @include('teacher/navigation')

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

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>03:13 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Design Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

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

    <!-- <a href="#" class="float">
                            <i class="fa fa-plus my-float"></i>
                            </a> -->
                            <!-- <span type="button" class="floating-btn" data-toggle="modal" data-target="#modal-large" data-backdrop="false"><a class="material-icons">add</a></span> -->
    <!-- App Settings FAB -->
    <!-- <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-index.html',
      'fluid': 'fluid-index.html',
      'mini': 'mini-index.html'
    }"></app-settings>
    </div> -->

    @include('footer')

    <div id="modal-large" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-large-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-large-title">Create Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- // END .modal-header -->
                <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        <input type="text" class="form-control" placeholder="Create a subject">
                    </div>
                    <div id="editor">
                    </div>
                </div> <!-- // END .modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </form>
                </div> <!-- // END .modal-footer -->
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div> <!-- // END .modal -->


</body>

<script>

$(document).ready(function(){
  $(".mylist ").hide();
  $(".rotate").click(function () {

      $(this).toggleClass("down");
      var id = $(this).attr("data-id");

      var className = $("#arrow"+id).attr("class");
        if($("#arrow"+id).attr("class")=="fa fa-chevron-right rotate down"){
          $("#mod_items"+id).show();
        }else{
          $("#mod_items"+id).hide();
        }



  });









});


</script>


</html>


