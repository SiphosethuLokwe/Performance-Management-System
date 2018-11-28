<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Performanace Management</title>
    <!-- plugins:css -->
    <link rel="" href ="../../vendors/css/vendor.bundle.base.css">
    <link rel="" href ="../../vendors/css/vendor.bundle.addons.css">
    <link rel="" href ="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">

    {{-- <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css"> --}}
    {{-- <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css"> --}}
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .box {

            width: 1270px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">

                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">

                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <!-- <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span> -->
                        <!-- </a> -->
                    </li>
                    <!-- <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-elevation-rise"></i>Reports</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-bookmark-plus-outline"></i>Scores</a>
                    </li> -->
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text">Hello, Zamxaka Nosisa !</span>
                            <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <a class="dropdown-item p-0">
                                <div class="d-flex border-bottom">
                                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                        <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                    </div>
                                    <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                        <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                    </div>
                                    <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                        <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
                            <a class="dropdown-item">
                Change Password
              </a>
                            <a class="dropdown-item">
                Check Inbox
              </a>
                            <a class="dropdown-item">
                Sign Out
              </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
            </div>
        </nav>
        <div>
        </div>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="user-wrapper">
                                <div class="profile-image">
                                    <img src="images/faces/face1.jpg" alt="profile image">
                                </div>
                                <div class="text-wrapper">
                                    <p class="profile-name">Siphosethu Lokwe</p>
                                    <div>
                                        <small class="designation text-muted">Admin</small>
                                        <span class="status-indicator online"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-content-copy"></i>
                            <span class="menu-title">Classes</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item" style="color:#87ceeb;">
                                    <a class="nav-link" style="color:#87ceeb;" href="addclass.html">Add Class</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="grade12asubjects.html">Grade 12a</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="grade12bsubjects.html">Grade 12b</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/typography.html">Grade 12c</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/typography.html">Grade 11a</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/typography.html">Grade 11b</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/typography.html">Grade 10b</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="menu-icon mdi mdi-restart"></i>
                            <span class="menu-title">Students</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item" style="color:#87ceeb">
                                    <a class="nav-link" href="pages/samples/addStudent.html"> Add Student </a>

                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="menu-icon mdi mdi-restart"></i>
                            <span class="menu-title">Teachers</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="authe">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item" style="color:#87ceeb">
                                    <a class="nav-link" href="pages/samples/addStudent.html"> Add Student </a>

                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <i class="menu-icon mdi mdi-backup-restore"></i>
                            <span class="menu-title">Form elements</span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="menu-icon mdi mdi-restart"></i>
                            <span class="menu-title">Reports</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="authep">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item" style="color:#87ceeb">
                                    <a class="nav-link" href="pages/samples/addStudent.html"> Add Student </a>

                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                            <i class="menu-icon mdi mdi-table"></i>
                            <span class="menu-title">Tables</span>
                        </a>
                    </li> -->


                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-cube text-danger icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Pass Rate</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">78%</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Percent has increased by 3% from last year
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-receipt text-warning icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Subjects</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">26</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Offered Subjects
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-account-location text-info icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Learners</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">798</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-reload mr-1" aria-hidden="true"></i>Enrolled Learners
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <i class="mdi mdi-account-location text-info icon-lg"></i>
                                        </div>
                                        <div class="float-right">
                                            <p class="mb-0 text-right">Teachers</p>
                                            <div class="fluid-container">
                                                <h3 class="font-weight-medium text-right mb-0">16</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3 mb-0">
                                        <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Teachers Registered
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 grid-margin stretch-card">
                            <!--weather card-->
                            <div class="card card-weather">
                                <div class="card-body">
                                    <!-- <div class="weather-date-location">
                                        <h3>My Anouncements</h3>
                                        <p class="text-gray">
                                            <span class="weather-date">25 October, 2016</span>
                                        </p>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <!-- <textarea rows="7" cols="80" name="anouncements" id="anouncements" class="form-control" placeholder="Here type anouncement to make"></textarea> -->
                                        </div>
                                        <!-- <button type="submit" class="btn btn-success mr-2">Submit</button>
                                        <button class="btn btn-light">Clear</button> -->
                                    </div>
                                </div>
                            </div>
                            <!--weather card ends-->
                        </div>
                        <div class="col-lg-5 grid-margin stretch-card">
                            <div class="card " style="float:left;">
                                <div class="card-body">
                                    <h3>All Subjects</h3>


                                    <div class="wrapper d-flex justify-content-between">
                                        <div class="side-left">
                                            <a href="#" class="mb-2">Mathematics</a>
                                        </div>
                                        <!-- <div class="side-right">
                      <small class="text-muted">2017</small>
                    </div> -->
                                    </div>
                                    <div class="wrapper d-flex justify-content-between">
                                        <div class="side-left">
                                            <a href="#" class="mb-2">Physical Science</a>
                                        </div>
                                        <!-- <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div> -->
                                    </div>
                                    <div class="wrapper d-flex justify-content-between">
                                        <div class="side-left">
                                            <a href="#" class="mb-2">Geography</a>
                                        </div>
                                        <!-- <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div> -->
                                    </div>
                                    <div class="wrapper d-flex justify-content-between">
                                        <div class="side-left">
                                            <a href="#" class="mb-2">Life Science</a>
                                        </div>
                                        <!-- <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div> -->
                                    </div>
                                    <div class="wrapper d-flex justify-content-between">
                                        <div class="side-left">
                                            <a href="#" class="mb-2">Agricultural Science</a>
                                        </div>
                                        <!-- <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div> -->
                                    </div>
                                    <div class="wrapper d-flex justify-content-between">
                                        <div class="side-left">
                                            <a href="#" class="mb-2">Accounting</a>
                                        </div>
                                        <!-- <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div> -->
                                    </div>
                                    <div class="wrapper d-flex justify-content-between">
                                        <div class="side-left">
                                            <a href="#" class="mb-2">History</a>
                                        </div>
                                        <!-- <div class="side-right">
                      <small class="text-muted">2015</small>
                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Top Teachers</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th>
                                                        First name
                                                    </th>
                                                    <th>
                                                        Last name
                                                    </th>
                                                    <th>
                                                        Progress
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="font-weight-medium">
                                                        1
                                                    </td>
                                                    <td>
                                                        Catar
                                                    </td>
                                                    <td>
                                                        Sethu
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-medium">
                                                        2
                                                    </td>
                                                    <td>
                                                        Mxo
                                                    </td>
                                                    <td>
                                                        Poni
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-medium">
                                                        3
                                                    </td>
                                                    <td>
                                                        Baxo
                                                    </td>
                                                    <td>
                                                        Ndzo
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 74%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-medium">
                                                        4
                                                    </td>
                                                    <td>
                                                        Jafta
                                                    </td>
                                                    <td>
                                                        Zpeks
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-medium">
                                                        5
                                                    </td>
                                                    <td>
                                                        Sarz
                                                    </td>
                                                    <td>
                                                        Rzn
                                                    </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Performance Management</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Coded with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <script src="../../vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <!-- End custom js for this page-->
</body>

</html>
