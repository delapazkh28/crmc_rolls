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





                        <!-- <ul class="nav navbar-nav d-none d-lg-flex pl-2">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <span class="mr-1"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path d="M24,4.75c0-1.657-1.343-3-3-3H3c-1.657,0-3,1.343-3,3v14.5c0,1.657,1.343,3,3,3h18c1.657,0,3-1.343,3-3V4.75z M21.75,6.75 C21.888,6.75,22,6.862,22,7v5.5c0,0.138-0.112,0.25-0.25,0.25h-12c-0.138,0-0.25-0.112-0.25-0.25V7c0-0.138,0.112-0.25,0.25-0.25 H21.75z M9.65,3.75c0.258-0.467,0.845-0.637,1.312-0.38c0.16,0.088,0.292,0.22,0.38,0.38c0.096,0.149,0.149,0.322,0.154,0.5 c-0.005,0.178-0.058,0.351-0.154,0.5c-0.258,0.467-0.845,0.637-1.312,0.38C9.87,5.042,9.738,4.91,9.65,4.75 c-0.096-0.149-0.149-0.322-0.154-0.5c0.006-0.178,0.06-0.351,0.158-0.5H9.65z M6.15,3.75c0.258-0.467,0.845-0.637,1.312-0.38 c0.16,0.088,0.292,0.22,0.38,0.38C7.94,3.899,7.994,4.072,8,4.25c-0.005,0.178-0.058,0.351-0.154,0.5 C7.588,5.217,7.001,5.387,6.534,5.13c-0.16-0.088-0.292-0.22-0.38-0.38C6.058,4.601,6.005,4.428,6,4.25 c0.005-0.178,0.058-0.351,0.154-0.5H6.15z M2.588,3.842C2.749,3.482,3.106,3.25,3.5,3.25c0.351,0.004,0.673,0.195,0.846,0.5 C4.442,3.899,4.495,4.072,4.5,4.25c-0.005,0.178-0.058,0.351-0.154,0.5C4.088,5.217,3.501,5.387,3.034,5.13 c-0.16-0.088-0.292-0.22-0.38-0.38C2.558,4.601,2.505,4.428,2.5,4.25c0.001-0.141,0.032-0.28,0.092-0.408H2.588z M8,20 c0,0.138-0.112,0.25-0.25,0.25H3c-0.552,0-1-0.448-1-1V7c0-0.138,0.112-0.25,0.25-0.25h5.5C7.888,6.75,8,6.862,8,7V20z M22,19.25 c0,0.552-0.448,1-1,1H9.75c-0.138,0-0.25-0.112-0.25-0.25v-5.5c0-0.138,0.112-0.25,0.25-0.25h12c0.138,0,0.25,0.112,0.25,0.25 V19.25z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg></span>
                                    Switch Layout</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item active" href="index.html">Admin</a>
                                    <a class="dropdown-item" href="fluid-index.html">Full Width</a>
                                    <a class="dropdown-item" href="fixed-index.html">Fixed</a>
                                </div>
                            </li>
                        </ul> -->



                        <!-- <ul class="ml-auto nav navbar-nav mr-2 d-none d-lg-flex">
                            <li class="nav-item"><a href="#" class="nav-link">Get Help</a></li>
                        </ul> -->


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
                       
                         <h2 class="bold m-4 text-center p-4">Dashboard</h2>
                        

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
                                            <strong>Mico Tabasa</strong>
                                            <small class="text-muted text-uppercase">Student</small>
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


                                <ul class="sidebar-menu mt-0">


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-dashboard.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M7.652,14.05v-0.6C7.65,12.373,6.777,11.501,5.7,11.5H4.5c-0.414,0-0.75,0.336-0.75,0.75v6C3.75,18.664,4.086,19,4.5,19 h1.2c1.077-0.001,1.949-0.873,1.951-1.95v-0.6C7.65,16.117,7.564,15.79,7.4,15.5c-0.089-0.155-0.089-0.345,0-0.5 C7.564,14.71,7.651,14.383,7.652,14.05z M6.152,17.05c-0.017,0.249-0.231,0.437-0.48,0.42c-0.225-0.015-0.405-0.195-0.42-0.42v-0.6 c0.017-0.249,0.231-0.437,0.48-0.42c0.225,0.015,0.405,0.195,0.42,0.42V17.05z M6.152,14.05c-0.017,0.249-0.231,0.437-0.48,0.42 c-0.225-0.015-0.405-0.195-0.42-0.42v-0.6c0.017-0.249,0.231-0.437,0.48-0.42c0.225,0.015,0.405,0.195,0.42,0.42V14.05z M7.652,4.95C7.618,3.873,6.716,3.028,5.64,3.062C4.611,3.095,3.785,3.921,3.752,4.95v4.8c0,0.414,0.336,0.75,0.75,0.75 s0.75-0.336,0.75-0.75v-1.2c-0.017-0.249,0.171-0.463,0.42-0.48c0.249-0.017,0.463,0.171,0.48,0.42c0.001,0.02,0.001,0.04,0,0.06 v1.2c0,0.414,0.336,0.75,0.75,0.75s0.75-0.336,0.75-0.75V4.95z M6.152,6.15c-0.017,0.249-0.231,0.437-0.48,0.42 c-0.225-0.015-0.405-0.195-0.42-0.42v-1.2c0.017-0.249,0.231-0.437,0.48-0.42c0.225,0.015,0.405,0.195,0.42,0.42V6.15z M11.2,4H9.7 C9.286,4,8.95,4.336,8.95,4.75S9.286,5.5,9.7,5.5h1.5c0.414,0,0.75-0.336,0.75-0.75S11.614,4,11.2,4z M11.951,12.75 c0-0.414-0.336-0.75-0.75-0.75c0,0-0.001,0-0.001,0H9.7c-0.414,0-0.75,0.336-0.75,0.75S9.286,13.5,9.7,13.5h1.5 c0.414,0.001,0.75-0.335,0.751-0.749C11.951,12.751,11.951,12.75,11.951,12.75z M8.5,20h-6C2.224,20,2,19.776,2,19.5v-17 C2,2.224,2.224,2,2.5,2h8.672c0.265,0,0.52,0.105,0.707,0.293l2.828,2.828C14.895,5.308,15,5.563,15,5.828V12c0,0.552,0.448,1,1,1 c0.552,0,1-0.448,1-1V5.414c0.001-0.531-0.21-1.04-0.586-1.414L13,0.586C12.624,0.212,12.116,0.001,11.586,0H2C0.895,0,0,0.895,0,2 v18c0,1.105,0.895,2,2,2h6.5c0.552,0,1-0.448,1-1S9.052,20,8.5,20z M23.685,16.61l-6-2.382c-0.119-0.047-0.251-0.047-0.37,0 l-6,2.382c-0.194,0.077-0.319,0.266-0.315,0.475v3.13c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-2.08 c0-0.138,0.111-0.249,0.248-0.25c0.029,0,0.057,0.005,0.085,0.015l5,1.765c0.108,0.037,0.224,0.037,0.332,0l6-2.118 c0.261-0.091,0.398-0.376,0.307-0.637C23.924,16.773,23.819,16.663,23.685,16.61L23.685,16.61z M20.763,19.829l-2.93,1.034 c-0.215,0.076-0.451,0.076-0.666,0l-2.93-1.034c-0.26-0.092-0.546,0.045-0.638,0.306c-0.019,0.053-0.028,0.11-0.028,0.166v2.145 c0,0.212,0.134,0.401,0.334,0.471l2.574,0.909c0.661,0.232,1.382,0.232,2.043,0l2.573-0.909c0.2-0.07,0.334-0.259,0.334-0.471V20.3 c0-0.276-0.223-0.5-0.5-0.5c-0.057,0-0.113,0.01-0.166,0.028L20.763,19.829z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Dashboard</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-series.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M23,14.5H1c-0.552,0-1,0.448-1,1V16c0,0.684,0.462,1.282,1.125,1.453C1.346,17.51,1.5,17.709,1.5,17.937V23 c0,0.552,0.448,1,1,1s1-0.448,1-1v-1c0-0.276,0.224-0.5,0.5-0.5h16c0.276,0,0.5,0.224,0.5,0.5v1c0,0.552,0.448,1,1,1s1-0.448,1-1 v-5.063c0-0.228,0.154-0.427,0.375-0.484C23.538,17.282,24,16.684,24,16v-0.5C24,14.948,23.552,14.5,23,14.5z M20.5,19 c0,0.276-0.224,0.5-0.5,0.5H4c-0.276,0-0.5-0.224-0.5-0.5v-1c0-0.276,0.224-0.5,0.5-0.5h16c0.276,0,0.5,0.224,0.5,0.5V19z M7.522,5.717l0.75,0.385c0.143,0.073,0.313,0.073,0.456,0l0.75-0.385C9.645,5.631,9.75,5.46,9.75,5.272V4.334 c0-0.189-0.107-0.362-0.276-0.447l-0.75-0.375c-0.141-0.071-0.307-0.071-0.448,0l-0.75,0.375C7.357,3.972,7.25,4.145,7.25,4.334 v0.938C7.25,5.46,7.355,5.631,7.522,5.717z M14.522,9.217l0.75,0.385c0.143,0.073,0.313,0.073,0.456,0l0.75-0.385 c0.167-0.086,0.272-0.257,0.272-0.445V7.834c0-0.189-0.107-0.362-0.276-0.447l-0.75-0.375c-0.141-0.071-0.307-0.071-0.448,0 l-0.75,0.375c-0.169,0.085-0.276,0.258-0.276,0.447v0.938C14.25,8.96,14.355,9.131,14.522,9.217z M2.5,13h19 c0.276,0,0.5-0.224,0.5-0.5v-11C22,0.672,21.328,0,20.5,0h-17C2.672,0,2,0.672,2,1.5v11C2,12.776,2.224,13,2.5,13z M5.75,3.871 C5.749,3.397,6.017,2.964,6.441,2.753L7.941,2c0.352-0.175,0.766-0.175,1.118,0l1.5,0.75c0.424,0.211,0.692,0.644,0.691,1.118v1.4 c0,0.188,0.106,0.36,0.273,0.445l1.275,0.649c0.162,0.082,0.355,0.07,0.505-0.031c0.107-0.071,0.118-0.068,1.171-0.6 c0.169-0.085,0.276-0.258,0.276-0.447V3.5c0-0.414,0.336-0.75,0.75-0.75c0.414,0,0.75,0.336,0.75,0.75v1.79 c0,0.189,0.107,0.362,0.276,0.447l1.033,0.516c0.424,0.211,0.692,0.644,0.691,1.118V9.23c0.001,0.469-0.262,0.899-0.68,1.112 l-1.5,0.77c-0.358,0.184-0.784,0.184-1.142,0l-1.5-0.77c-0.417-0.213-0.68-0.643-0.678-1.112v-0.9c0-0.188-0.106-0.36-0.273-0.445 l-1.748-0.889c-0.143-0.073-0.312-0.073-0.455,0L9.522,7.383C9.355,7.468,9.25,7.64,9.25,7.827v2.237c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75V7.825c0-0.187-0.105-0.359-0.272-0.444L6.429,6.842C6.011,6.629,5.749,6.199,5.75,5.73V3.871z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Series</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-courses.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M2.5,16C2.224,16,2,15.776,2,15.5v-11C2,4.224,2.224,4,2.5,4h14.625c0.276,0,0.5,0.224,0.5,0.5V8c0,0.552,0.448,1,1,1 s1-0.448,1-1V4c0-1.105-0.895-2-2-2H2C0.895,2,0,2.895,0,4v12c0,1.105,0.895,2,2,2h5.375c0.138,0,0.25,0.112,0.25,0.25v1.5 c0,0.138-0.112,0.25-0.25,0.25H5c-0.552,0-1,0.448-1,1s0.448,1,1,1h7.625c0.552,0,1-0.448,1-1s-0.448-1-1-1h-2.75 c-0.138,0-0.25-0.112-0.25-0.25v-1.524c0-0.119,0.084-0.221,0.2-0.245c0.541-0.11,0.891-0.638,0.781-1.179 c-0.095-0.466-0.505-0.801-0.981-0.801L2.5,16z M3.47,9.971c-0.303,0.282-0.32,0.757-0.037,1.06c0.282,0.303,0.757,0.32,1.06,0.037 c0.013-0.012,0.025-0.025,0.037-0.037l2-2c0.293-0.292,0.293-0.767,0.001-1.059c0,0-0.001-0.001-0.001-0.001l-2-2 c-0.282-0.303-0.757-0.32-1.06-0.037s-0.32,0.757-0.037,1.06C3.445,7.006,3.457,7.019,3.47,7.031l1.293,1.293 c0.097,0.098,0.097,0.256,0,0.354L3.47,9.971z M7,11.751h2.125c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75H7 c-0.414,0-0.75,0.336-0.75,0.75S6.586,11.751,7,11.751z M18.25,16.5c0,0.276-0.224,0.5-0.5,0.5s-0.5-0.224-0.5-0.5v-5.226 c0-0.174-0.091-0.335-0.239-0.426c-1.282-0.702-2.716-1.08-4.177-1.1c-0.662-0.029-1.223,0.484-1.252,1.146 c-0.001,0.018-0.001,0.036-0.001,0.054v7.279c0,0.646,0.511,1.176,1.156,1.2c1.647-0.011,3.246,0.552,4.523,1.593 c0.14,0.14,0.33,0.219,0.528,0.218c0.198,0.001,0.388-0.076,0.529-0.215c1.277-1.044,2.878-1.61,4.527-1.6 c0.641-0.023,1.15-0.547,1.156-1.188v-7.279c-0.001-0.327-0.134-0.64-0.369-0.867c-0.236-0.231-0.557-0.353-0.886-0.337 c-1.496,0.016-2.963,0.411-4.265,1.148c-0.143,0.092-0.23,0.251-0.23,0.421V16.5z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Courses</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-course.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M12.619,8.412c-0.001-0.41-0.333-0.742-0.743-0.742H5.938c-0.41,0.015-0.73,0.36-0.715,0.77 c0.014,0.389,0.326,0.701,0.715,0.715h5.938C12.286,9.155,12.619,8.822,12.619,8.412L12.619,8.412z M9.586,19 c-0.02-0.115-0.119-0.199-0.236-0.2H3.464c-0.276,0-0.5-0.224-0.5-0.5V5.443c0.003-0.274,0.226-0.495,0.5-0.495h10.887 c0.272,0.003,0.491,0.223,0.494,0.495v4.039c-0.002,0.135,0.106,0.245,0.241,0.247c0.018,0,0.037-0.002,0.054-0.005 c0.807-0.152,1.623-0.249,2.443-0.29c0.131-0.007,0.232-0.116,0.231-0.247V3.464c0.001-0.82-0.663-1.484-1.483-1.485 c0,0-0.001,0-0.001,0h-3.957c-0.085,0-0.163-0.046-0.205-0.119C11.103,0.059,8.78-0.537,6.979,0.528 C6.43,0.853,5.972,1.311,5.647,1.86c-0.042,0.073-0.12,0.118-0.205,0.119H1.485C0.665,1.979,0,2.644,0,3.464c0,0,0,0,0,0v16.825 c0.001,0.82,0.665,1.484,1.485,1.484h8.847c0.135,0,0.244-0.109,0.244-0.244c0-0.046-0.013-0.092-0.038-0.131 C10.091,20.657,9.769,19.846,9.586,19z M11.035,12.523c0.286-0.376,0.604-0.726,0.951-1.046c0.085-0.079,0.028-0.343-0.11-0.343 H5.938c-0.41,0.015-0.73,0.36-0.715,0.77c0.014,0.389,0.326,0.701,0.715,0.715h4.907C10.92,12.619,10.99,12.583,11.035,12.523z M5.938,14.6c-0.41,0-0.742,0.331-0.743,0.741c0,0.41,0.331,0.742,0.741,0.743c0,0,0.001,0,0.001,0h3.37 c0.117,0,0.216-0.085,0.235-0.2c0.061-0.337,0.145-0.669,0.251-0.995c0.032-0.1,0.055-0.29-0.129-0.29L5.938,14.6z M17.32,10.639 c-3.69-0.001-6.681,2.99-6.682,6.68s2.99,6.681,6.68,6.682c3.69,0.001,6.681-2.99,6.682-6.68c0,0,0-0.001,0-0.001 C23.996,13.632,21.008,10.643,17.32,10.639z M17.32,22.021c-2.596,0-4.7-2.104-4.7-4.7s2.104-4.7,4.7-4.7s4.7,2.104,4.7,4.7 C22.017,19.915,19.914,22.018,17.32,22.021z M19.3,16.33h-0.742c-0.137,0-0.248-0.111-0.248-0.248v-1.237 c-0.017-0.546-0.474-0.975-1.021-0.958c-0.522,0.017-0.941,0.436-0.958,0.958v2.475c0,0.546,0.443,0.989,0.989,0.989 c0,0,0.001,0,0.001,0H19.3c0.546,0.017,1.004-0.412,1.021-0.958s-0.412-1.004-0.958-1.021C19.342,16.329,19.321,16.329,19.3,16.33z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Course Lessons</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-take-course.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M6.354,8.984C5.64,8.853,4.854,8.75,3.909,8.659C3.497,8.619,3.195,8.252,3.235,7.84c0.04-0.412,0.407-0.714,0.819-0.674 C5.362,7.274,6.66,7.486,7.935,7.8c0.161,0.042,0.332,0.001,0.456-0.109c0.813-0.716,1.755-1.27,2.776-1.633 c0.2-0.071,0.333-0.26,0.333-0.472V2.517c0-0.171-0.088-0.33-0.232-0.422C9.235,0.8,5.417,0.11,1.789,0 C1.32-0.018,0.866,0.16,0.534,0.492C0.193,0.823,0.001,1.278,0,1.753v12.833c0,0.952,0.761,1.729,1.713,1.748 c1.156,0.031,2.309,0.124,3.454,0.279c0.273,0.039,0.526-0.152,0.565-0.425C5.741,16.125,5.738,16.062,5.723,16 C5.575,15.367,5.5,14.72,5.5,14.07c0-0.349,0.021-0.698,0.064-1.045c0.034-0.273-0.159-0.522-0.432-0.557 c-0.379-0.049-0.784-0.094-1.223-0.137c-0.412-0.04-0.714-0.407-0.674-0.819c0.04-0.412,0.407-0.714,0.819-0.674 c0.58,0.056,1.109,0.118,1.6,0.188c0.224,0.031,0.441-0.092,0.529-0.3c0.147-0.344,0.317-0.678,0.508-1 C6.833,9.489,6.755,9.182,6.518,9.04C6.467,9.01,6.411,8.989,6.352,8.978L6.354,8.984z M4.054,3.493 c1.763,0.129,3.504,0.471,5.185,1.02c0.393,0.132,0.604,0.557,0.472,0.95s-0.557,0.604-0.95,0.472 C7.189,5.422,5.559,5.103,3.909,4.986c-0.412-0.04-0.714-0.407-0.674-0.819S3.642,3.453,4.054,3.493z M23.466,0.492 C23.132,0.164,22.679-0.013,22.211,0c-3.628,0.11-7.446,0.8-9.479,2.1C12.588,2.192,12.5,2.351,12.5,2.522v2.603 c-0.002,0.276,0.221,0.501,0.497,0.503c0.019,0,0.039-0.001,0.058-0.003C13.369,5.59,13.684,5.571,14,5.57 c0.165,0,0.329,0,0.492,0.014c0.073,0.004,0.145-0.024,0.195-0.078c0.051-0.053,0.076-0.127,0.067-0.2 c-0.039-0.351,0.173-0.682,0.508-0.794c1.677-0.593,3.416-0.992,5.184-1.19c0.412-0.04,0.779,0.262,0.819,0.674 s-0.262,0.779-0.674,0.819c-1.269,0.135-2.523,0.391-3.743,0.766c-0.132,0.04-0.207,0.179-0.168,0.311 c0.023,0.076,0.081,0.137,0.156,0.164c0.707,0.252,1.378,0.596,1.994,1.024c0.107,0.074,0.239,0.103,0.367,0.082 C19.599,7.094,20.015,7.04,20.446,7c0.411-0.036,0.775,0.264,0.819,0.674c0.046,0.336-0.159,0.655-0.483,0.754 c-0.129,0.049-0.194,0.194-0.145,0.323c0.009,0.024,0.022,0.046,0.038,0.066c1.598,2.025,2.188,4.667,1.605,7.18 c-0.03,0.135,0.054,0.268,0.189,0.299c0.034,0.008,0.07,0.008,0.104,0.001c0.83-0.144,1.434-0.868,1.427-1.711V1.753 C23.999,1.278,23.807,0.823,23.466,0.492z M16,10.751h-4c-0.69,0.001-1.248,0.559-1.25,1.249v0.445 c-0.011,0.414,0.315,0.759,0.729,0.771s0.759-0.315,0.771-0.729c0.007-0.132,0.117-0.236,0.249-0.236H13 c0.138,0,0.25,0.112,0.25,0.25V16c0.001,0.138-0.11,0.249-0.248,0.25c-0.001,0-0.001,0-0.002,0c-0.414,0-0.75,0.336-0.75,0.75 s0.336,0.75,0.75,0.75h2c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75c-0.138,0.001-0.249-0.11-0.25-0.248 c0-0.001,0-0.001,0-0.002v-3.5c0-0.138,0.112-0.25,0.25-0.25h0.5c0.132,0,0.241,0.103,0.249,0.234 c0.011,0.414,0.355,0.741,0.769,0.731c0.414-0.011,0.741-0.355,0.731-0.769V12C17.247,11.311,16.689,10.753,16,10.751z M19.9,18.489c-0.168-0.168-0.195-0.431-0.064-0.629c2.132-3.225,1.245-7.568-1.98-9.699s-7.568-1.245-9.699,1.98 s-1.245,7.568,1.98,9.699c2.341,1.547,5.379,1.547,7.719,0c0.198-0.131,0.461-0.105,0.629,0.063l3.806,3.806 c0.391,0.39,1.024,0.39,1.415,0c0.39-0.391,0.39-1.024-0.001-1.415l0,0L19.9,18.489z M14,19c-2.761,0-5-2.239-5-5s2.239-5,5-5 s5,2.239,5,5C18.997,16.76,16.76,18.997,14,19z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Take Course</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-take-quiz.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M11.75,4.5C11.888,4.5,12,4.612,12,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75c0-0.138,0.112-0.25,0.25-0.25h1 c0.138,0,0.25,0.112,0.25,0.25v4.7c0,0.135,0.11,0.245,0.246,0.244c0.018,0,0.036-0.002,0.054-0.006 c0.48-0.108,0.969-0.171,1.46-0.188c0.133-0.002,0.239-0.11,0.24-0.243V4.5c0-1.105-0.895-2-2-2h-1.25C14.112,2.5,14,2.388,14,2.25 V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v1.25c0,0.138-0.112,0.25-0.25,0.25h-1.5C10.112,2.5,10,2.388,10,2.25V1c0-0.552-0.448-1-1-1 S8,0.448,8,1v1.25C8,2.388,7.888,2.5,7.75,2.5h-1.5C6.112,2.5,6,2.388,6,2.25V1c0-0.552-0.448-1-1-1S4,0.448,4,1v1.25 C4,2.388,3.888,2.5,3.75,2.5H2c-1.105,0-2,0.895-2,2v13c0,1.105,0.895,2,2,2h7.453c0.135,0,0.244-0.109,0.245-0.243 c0-0.019-0.002-0.038-0.007-0.057c-0.109-0.48-0.173-0.968-0.191-1.46c-0.002-0.133-0.11-0.239-0.243-0.24H2.25 C2.112,17.5,2,17.388,2,17.25V4.75C2,4.612,2.112,4.5,2.25,4.5h1.5C3.888,4.5,4,4.612,4,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1 V4.75C6,4.612,6.112,4.5,6.25,4.5h1.5C7.888,4.5,8,4.612,8,4.75V5c0,0.552,0.448,1,1,1s1-0.448,1-1V4.75 c0-0.138,0.112-0.25,0.25-0.25H11.75z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M17.5,22.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S18.052,22.5,17.5,22.5z M18.439,18.327c-0.118,0.037-0.196,0.15-0.189,0.273v0.15c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75V18.2 c0.003-0.588,0.413-1.096,0.988-1.222c0.607-0.131,0.993-0.73,0.862-1.338c-0.131-0.607-0.73-0.993-1.338-0.862 c-0.517,0.112-0.887,0.57-0.887,1.099c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75c0-1.45,1.176-2.625,2.626-2.624 c1.45,0,2.625,1.176,2.624,2.626c0,1.087-0.671,2.062-1.686,2.451V18.327z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Take Quiz</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-billing.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M3,15c-0.552,0-1-0.448-1-1V8c0-0.276,0.224-0.5,0.5-0.5h17C19.776,7.5,20,7.724,20,8v1.151 c0,0.403,0.247,0.766,0.623,0.913l0.021,0.008c0.504,0.205,1.079-0.038,1.283-0.541C21.975,9.413,22,9.286,22,9.159V3 c0-1.657-1.343-3-3-3H3C1.343,0,0,1.343,0,3v11c0,1.657,1.343,3,3,3h5.547c0.435-0.011,0.806-0.317,0.9-0.742L9.462,16.2 c0.154-0.485-0.116-1.004-0.601-1.157C8.775,15.016,8.685,15.001,8.594,15H3z M2,3c0-0.552,0.448-1,1-1h16c0.552,0,1,0.448,1,1v1 c0,0.276-0.224,0.5-0.5,0.5h-17C2.224,4.5,2,4.276,2,4V3z M8,11H5c-0.552,0-1,0.448-1,1s0.448,1,1,1h3c0.552,0,1-0.448,1-1 S8.552,11,8,11z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5S21.09,11,17.5,11z M16.416,16.294 l2.71,1.015c1.02,0.527,1.42,1.781,0.893,2.801c-0.309,0.599-0.89,1.011-1.558,1.105c-0.122,0.019-0.211,0.124-0.211,0.247V22 c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-0.5c0-0.138-0.112-0.25-0.25-0.25h-1c-0.414,0-0.75-0.336-0.75-0.75 s0.336-0.75,0.75-0.75H18c0.5,0,0.75-0.173,0.75-0.514c0.015-0.191-0.044-0.381-0.166-0.53l-2.71-1.015 c-0.733-0.352-1.178-1.115-1.124-1.927c0.033-1.009,0.793-1.845,1.794-1.974c0.119-0.021,0.206-0.125,0.206-0.246V13 c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v0.5c0,0.138,0.112,0.25,0.25,0.25h1c0.414,0,0.75,0.336,0.75,0.75 s-0.336,0.75-0.75,0.75H17c-0.406,0-0.75,0.235-0.75,0.514C16.235,15.955,16.294,16.145,16.416,16.294z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Billing</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-edit-account.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M16.1,13.071c0.085-0.085,0.097-0.218,0.03-0.317c-0.649-0.959-2.342-1.584-4.633-2.426l-0.628-0.23 c-0.076-0.088-0.124-0.196-0.138-0.311c-0.093-0.431-0.073-0.879,0.058-1.3c1.076-1.166,1.609-2.733,1.466-4.314 C12.257,1.756,10.677,0,8.5,0S4.745,1.756,4.745,4.174C4.603,5.747,5.131,7.308,6.2,8.471C6.343,8.895,6.368,9.35,6.272,9.787 c-0.015,0.114-0.061,0.221-0.134,0.309l-0.631,0.232c-2.448,0.9-4.215,1.55-4.754,2.626C0.269,14.074,0.013,15.28,0,16.5 C0,16.776,0.224,17,0.5,17h11.569c0.066,0,0.13-0.026,0.177-0.073L16.1,13.071z M15.086,22.74c0.044-0.172-0.006-0.354-0.131-0.479 l-2.215-2.215c-0.195-0.195-0.512-0.195-0.707,0c-0.06,0.06-0.104,0.134-0.127,0.216l-0.886,3.1 c-0.076,0.265,0.077,0.542,0.343,0.619C11.407,23.993,11.454,24,11.5,24c0.046,0,0.093-0.006,0.137-0.02l3.1-0.885 C14.908,23.047,15.041,22.912,15.086,22.74z M21.772,16.936c0.195-0.195,0.195-0.512,0-0.707l-3-3 c-0.195-0.195-0.512-0.195-0.707,0l-5.011,5.01c-0.195,0.195-0.195,0.512,0,0.707l3,3c0.195,0.195,0.512,0.195,0.707,0 L21.772,16.936z M19.48,11.813c-0.196,0.195-0.196,0.512-0.001,0.707c0,0,0.001,0.001,0.001,0.001l3,3 c0.105,0.088,0.24,0.132,0.377,0.124c0.142-0.009,0.276-0.069,0.377-0.17c1.022-1.024,1.022-2.683,0-3.707 C22.185,10.744,20.504,10.764,19.48,11.813z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Edit Account</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-profile.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M11.979,17.125c4.052,0,6.875-5.1,6.875-9.67c-0.001-0.95-0.136-1.895-0.4-2.808l0,0c-0.828-2.841-3.522-4.723-6.475-4.522 C9.029-0.063,6.342,1.818,5.51,4.654v0.009c-0.26,0.911-0.395,1.853-0.4,2.8C5.105,12.035,7.929,17.125,11.979,17.125z M16.617,11.281c-0.048,0.125-0.185,0.19-0.312,0.148c-1.395-0.412-2.846-0.599-4.3-0.554c-1.469-0.045-2.936,0.144-4.346,0.559 c-0.127,0.043-0.265-0.022-0.312-0.147c-0.42-1.088-0.664-2.235-0.722-3.4C6.619,7.818,6.642,7.751,6.689,7.7 c0.047-0.049,0.112-0.077,0.18-0.077H17.09c0.138,0,0.25,0.112,0.25,0.25c0,0.004,0,0.008,0,0.012 C17.28,9.048,17.036,10.194,16.617,11.281z M21.632,18.127c0.123,0.065,0.274,0.018,0.339-0.105C21.99,17.986,22,17.946,22,17.906 v-1.531c0-0.138,0.112-0.25,0.25-0.25H23c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75h-0.75c-0.138,0-0.25-0.112-0.25-0.25 v-3c0-0.828-0.672-1.5-1.5-1.5s-1.5,0.672-1.5,1.5v3c0,0.138-0.112,0.25-0.25,0.25H18c-0.414,0-0.75,0.336-0.75,0.75 s0.336,0.75,0.75,0.75h0.75c0.138,0,0.25,0.112,0.25,0.25v0.2c0,0.092,0.051,0.177,0.132,0.22L21.632,18.127z M23.033,19.792 c-0.759-0.561-1.581-1.031-2.45-1.4c-0.119-0.052-0.258-0.005-0.32,0.109l-1.181,1.667l-2.367,3.338 c-0.066,0.121-0.022,0.273,0.099,0.339c0.037,0.02,0.078,0.031,0.12,0.031H23.5c0.276,0,0.5-0.224,0.5-0.5V21.77 C24.007,20.995,23.648,20.263,23.033,19.792z M11.079,21.4l-3.527-3.968c-0.117-0.132-0.294-0.193-0.467-0.16 c-2.206,0.358-4.3,1.221-6.118,2.52C0.351,20.262-0.007,20.995,0,21.77v1.605c0,0.276,0.224,0.5,0.5,0.5h7.326 c0.073,0,0.142-0.032,0.19-0.087l3.066-2.06C11.162,21.633,11.161,21.493,11.079,21.4z M18.31,17.837 c-0.029-0.07-0.088-0.123-0.161-0.145c-0.244-0.069-0.5-0.136-0.76-0.2c-0.091-0.022-0.187,0.009-0.249,0.08l-0.633,0.586 l-5.731,5.305c-0.09,0.105-0.078,0.263,0.027,0.353c0.045,0.039,0.103,0.06,0.162,0.06h3.191c0.092,0,0.176-0.05,0.22-0.13 l3.068-4.452l0.855-1.24C18.335,17.987,18.339,17.907,18.31,17.837z M8.489,8.826C8.185,9.108,8.168,9.583,8.45,9.887 c0.282,0.304,0.757,0.321,1.061,0.039l0,0c0.173-0.097,0.384-0.097,0.557,0c0.304,0.282,0.779,0.265,1.061-0.039 c0.282-0.304,0.265-0.779-0.039-1.061C10.339,8.192,9.24,8.192,8.489,8.826z M13.421,10.125c0.19,0.001,0.372-0.071,0.511-0.2 c0.173-0.097,0.384-0.097,0.557,0c0.304,0.282,0.779,0.265,1.061-0.039c0.282-0.304,0.265-0.779-0.039-1.061 c-0.751-0.633-1.849-0.633-2.6,0c-0.304,0.282-0.322,0.756-0.04,1.06C13.013,10.038,13.213,10.125,13.421,10.125L13.421,10.125z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Profile</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="login.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M23,0.5H10c-0.552,0-1,0.448-1,1V4c0,0.552,0.448,1,1,1s1-0.448,1-1V3c0-0.276,0.224-0.5,0.5-0.5h10 C21.776,2.5,22,2.724,22,3v18c0,0.276-0.224,0.5-0.5,0.5h-10c-0.276,0-0.5-0.224-0.5-0.5v-1c0-0.552-0.448-1-1-1s-1,0.448-1,1v2.5 c0,0.552,0.448,1,1,1h13c0.552,0,1-0.448,1-1v-21C24,0.948,23.552,0.5,23,0.5z M11.652,14h0.641l0.853,0.854 C13.24,14.948,13.367,15,13.5,15c0.133,0,0.26-0.053,0.354-0.146L14.707,14h0.586l0.853,0.854c0.195,0.196,0.512,0.196,0.707,0.001 c0,0,0.001-0.001,0.001-0.001L17.707,14H19c0.133,0,0.26-0.052,0.354-0.146l1.5-1.5c0.195-0.195,0.195-0.512,0-0.707l-1.5-1.5 C19.26,10.053,19.133,10,19,10h-7.348c-1.105-3.124-4.533-4.761-7.657-3.657S-0.766,10.876,0.338,14s4.533,4.761,7.657,3.657 C9.704,17.053,11.048,15.709,11.652,14z M5.5,12c0,0.828-0.672,1.5-1.5,1.5S2.5,12.828,2.5,12s0.672-1.5,1.5-1.5S5.5,11.172,5.5,12 z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Login</span>
                                        </a>
                                    </li>



                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="sign-up.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M12.631,11.158c0.109-0.084,0.13-0.241,0.046-0.351c-0.028-0.037-0.066-0.065-0.11-0.081 c-0.339-0.128-0.694-0.26-1.069-0.4l-0.628-0.23c-0.075-0.088-0.123-0.196-0.138-0.311c-0.092-0.431-0.072-0.879,0.058-1.3 c1.076-1.166,1.609-2.733,1.466-4.314C12.256,1.756,10.677,0,8.5,0S4.744,1.756,4.744,4.174C4.602,5.748,5.131,7.308,6.2,8.471 C6.344,8.895,6.369,9.35,6.273,9.787c-0.015,0.114-0.062,0.221-0.135,0.309l-0.631,0.232c-2.447,0.9-4.215,1.55-4.754,2.626 C0.269,14.074,0.013,15.28,0,16.5C0,16.776,0.224,17,0.5,17h8.794c0.129,0,0.237-0.099,0.249-0.227 C9.745,14.553,10.864,12.518,12.631,11.158z M17.5,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5 C23.996,13.912,21.088,11.004,17.5,11z M22,17.5c0,0.552-0.448,1-1,1h-2c-0.276,0-0.5,0.224-0.5,0.5v2c0,0.552-0.448,1-1,1 s-1-0.448-1-1v-2c0-0.276-0.224-0.5-0.5-0.5h-2c-0.552,0-1-0.448-1-1s0.448-1,1-1h2c0.276,0,0.5-0.224,0.5-0.5v-2 c0-0.552,0.448-1,1-1s1,0.448,1,1v2c0,0.276,0.224,0.5,0.5,0.5h2C21.552,16.5,22,16.948,22,17.5z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Sign Up</span>
                                        </a>
                                    </li>
                                </ul>


                               

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

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-index.html',
      'fluid': 'fluid-index.html',
      'mini': 'mini-index.html'
    }"></app-settings>
    </div>

    @include('footer')




</body>

</html>
