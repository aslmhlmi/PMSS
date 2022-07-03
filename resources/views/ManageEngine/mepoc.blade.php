<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ManageEngine - POC</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-infinity"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">10infinity</div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index') }}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Department
                    </div>

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item active">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-rocket"></i>
                            <span>ManageEngine</span>
                        </a>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Category:</h6>
                                <a class="collapse-item" href="{{url('projects') }}"       > Deployment</a>
                                <a class="collapse-item active" href="{{url('me_poc') }}"  > Proof-of-Concept</a>
                                <a class="collapse-item" href="{{url('me_demo') }}"        > Product Demo</a>
                            </div>
                        </div>
                    </li>

                    <!-- Nav Item - Net Team Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                            aria-expanded="true" aria-controls="collapseUtilities">
                            <i class="fas fa-fw fa-wifi"></i>
                            <span>Net Team</span>
                        </a>
                        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                            data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Category:</h6>
                                <a class="collapse-item" href="{{url('nt_deploy') }}"     >Deployment</a>
                                <a class="collapse-item" href="{{url('nt_poc') }}"     >Proof-of-Concept</a>
                                <a class="collapse-item" href="{{url('nt_demo') }}"     >Demo</a>
                                <!-- <a class="collapse-item" href="utilities-other.html">Other</a> belum guna -->
                            </div>
                        </div>
                    </li>

                    <!-- Nav Item - Binary Nexus Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                            aria-expanded="true" aria-controls="collapseUtilities1">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Binary Nexus</span>
                        </a>
                        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                            data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Category:</h6>
                                <a class="collapse-item" href="{{('bn_deploy') }}">Deployment</a>
                                <a class="collapse-item" href="{{('bn_poc') }}">Proof-of-Concept</a>
                                <a class="collapse-item" href="{{('bn_demo') }}">Demo</a>
                                <!-- <a class="collapse-item" href="utilities-other.html">Other</a> belum guna -->
                            </div>
                        </div>
                    </li>

                    <!-- Nav Item - Cabling Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                            aria-expanded="true" aria-controls="collapseUtilities2">
                            <i class="fas fa-fw fa-wrench"></i>
                            <span>Cabling Team</span>
                        </a>
                        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                            data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Category:</h6>
                                <a class="collapse-item" href="{{('ct_deploy') }}">Deployment</a>
                                <a class="collapse-item" href="{{('ct_poc') }}">Proof-of-Concept</a>
                                <a class="collapse-item" href="{{('ct_demo') }}">Demo</a>
                                <!-- <a class="collapse-item" href="utilities-other.html">Other</a> belum guna -->
                            </div>
                        </div>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Project
                    </div>

                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="true" aria-controls="collapseThree">
                            <i class="fas fa-shapes"></i>
                            <span>Project By</span>
                        </a>
                        <div id="collapseThree" class="collapse" aria-labelledby="collapseThree" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Category:</h6>
                                <a class="collapse-item" href="{{('staffs') }}">Account Manager</a>
                                <a class="collapse-item" href="{{('engineer') }}">Engineer</a>
                            </div>
                        </div>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

        <!-- tempat asal coding sebelah -->

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Reporting
                    </div>


                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="true" aria-controls="collapsePages">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Global Setting</span>
                        </a>
                        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Configuration</h6>
                                <a class="collapse-item" href="mail-server-setting.html">Mail Server Setting</a>
                                <a class="collapse-item" href="user-management-setting.html">User Management</a>
                                <a class="collapse-item" href="db-setting.html">DB Setting</a>
                                <!--<div class="collapse-divider"></div>
                                <h6 class="collapse-header">Other Pages:</h6>
                                <a class="collapse-item" href="404.html">404 Page</a>
                                <a class="collapse-item" href="blank.html">Blank Page</a> -->
                            </div>
                        </div>
                    </li>

                     <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{('engineer') }}">
                            <i class="fas fa-fw fa-chart-area"></i>
                            <span>Generate Report</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                    <!-- tempat asal iklan -->

                </ul>
                <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Proof-of-Concept</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Proof-of-Concept DataTables </h6>
                        </div>

                        <div class="card-header py-3">

                            {{-- <button  type="button" data-toggle="modal" data-target="#POCModal"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm " >

                            <i class="fas fa-plus-square fa-sm text-white-50"></i>  New Proof-of-Concept </button> --}}
<!--
                            <button  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="" onclick="exportTableToCSV('Attendance List.csv')" >
                            <i class="fas fa-plus-square fa-sm text-white-50" id="csv"></i> New Proof-of-Concept </button> -->

                            <button  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="" onclick="exportTableToCSV('Proof-of-Concept List.csv')" >
                            <i class="fas fa-file-download	" id="csv"></i> Export Table To CSV File </button>

                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Team</th>
                                            <th>POC/Demo/Tender</th>
                                            <th>End User</th>
                                            <th>Partner</th>
                                            <th>ME Product</th>
                                            <th>Acc Manager</th>
                                            <th>Assign Engineer</th>
                                            <th>Onsite/ Remote</th>
                                            <th>Status</th>
                                            <th>PO Status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>M/ Days</th>
                                            <th>POC Update by Engineers</th>
                                            <th>Remark</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Team</th>
                                            <th>POC/Demo/Tender</th>
                                            <th>End User</th>
                                            <th>Partner</th>
                                            <th>ME Product</th>
                                            <th>Acc Manager</th>
                                            <th>Assign Engineer</th>
                                            <th>Onsite/ Remote</th>
                                            <th>Status</th>
                                            <th>PO Status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>M/ Days</th>
                                            <th>POC Update by Engineers</th>
                                            <th>Remark</th>
                                            <th>Details</th>
                                        </tr>
                                    </tfoot> --}}
                                    <tbody>
                                        @foreach ($projects as $project)
                                        <tr>
                                            <td>{{ $project->id }}</td>
                                            <td>{{ $project->team }}</td>
                                            <td>{{ $project->presale }}</td>
                                            <td>{{ $project->enduser }}</td>
                                            <td>{{ $project->partner }}</td>
                                            <td>{{ $project->product }}</td>
                                            <td>{{ $project->staff_id }}</td>
                                            <td>{{ $project->workingstatus }}</td>
                                            <td>{{ $project->status }}</td>
                                            <td>{{ $project->postatus }}</td>
                                            <td>{{ $project->startdate }}</td>
                                            <td>{{ $project->enddate }}</td>
                                            <td>{{ $project->mdays }}</td>
                                            <td>{{ $project->pocupdate }}</td>
                                            <td>{{ $project->remark }}</td>
                                            <td>{{ $project->id }}</td>
                                            <td>
                                                <div class="dropdown mb-4">
                                        			<button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            		id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            		aria-expanded="false">
                                            		Dropdown
                                        			</button>
                                        		<div class="dropdown-menu animated--fade-in"
                                            		aria-labelledby="dropdownMenuButton">

                                            		<a class="dropdown-item EditPOCModal" role="button"
                                            		data-toggle="modal" data-target="#EditPOCModal"

                                            		data-sid		="${staff.staffid}"
                                            		data-sname		="${staff.sname }"
                                            		data-sgender	="${staff.sgender }"
                                            		data-snotel		="${staff.snotel }"
                                            		data-semail		="${staff.semail }"
                                            		data-sdepartment="${staff.sdepartment }"
                                            		data-sposition	="${staff.sposition }"
                                            		data-snric		="${staff.snric }"
                                            		data-srfid		="${staff.srfid }"
                                            		data-sstatus	="${staff.sstatus }"
                                            		data-sstartdate	="${staff.sstartdate }"

                                            		 >
                                            		 <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>Edit</a>

                                            		<a class="dropdown-item " href="/SCASA/StaffController?action=deleteStaff&id=${staff.staffid}"
                                            		onclick="return confirm('Are you sure you want to delete Staff ?')"
                                            		>

                                            		<!-- data-toggle="modal" data-target="#DeleteEmployeesModal" -->

                                            		<i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i>Delete</a>

                                        		</div>
                                    			</div>


                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Add New Admin  Modal-->
    <div class="modal fade" id="POCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> New Proof-of-Concept </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form  name="form1" method="post" id="create" action="/SCASA/AdminController?action=createAdmin">
                        <div class="pl-lg-10">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="addadminid" >Team<span class="small text-danger">*</span></label>
                                        {{-- <input type="text" id="team" class="form-control" name="team" placeholder="Team" value=""  > --}}
                                        <select id="team" class="form-control" name="team">
                                            <option value="" disabled selected>Choose Team</option>
                                                <option value="ManageEngine">	ManageEngine</option>
                                                <option value="Binary Nexus">	Binary Nexus</option>
                                                <option value="Network Team">	Network Team</option>
                                                <option value="Cabling Team">	Cabling Team</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="presale">PreSale<span class="small text-danger">*</span></label>
                                        {{-- <input type="text" id="aname" class="form-control" name="aname" placeholder="Full Name" value=""> --}}
                                        <select id="presale" class="form-control" name="presale">
                                            <option value="" disabled selected>Choose Team</option>
                                                <option value="POC">	POC</option>
                                                <option value="Demo">	Demo</option>
                                                <option value="Tender">	Tender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="enduser" >End User<span class="small text-danger">*</span></label>
                                        <input type="text" id="enduser" class="form-control" name="enduser" placeholder="End User" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="partner">Partner<span class="small text-danger">*</span></label>
                                        <input type="text" id="partner" class="form-control" name="partner" placeholder="Partner" value="">
                                        <!-- <input type="tel" id="anotel" class="form-control" name="anotel" pattern="[0-9]{11}" placeholder="No Tel 0122345678" value=""> -->
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="product">ME Product<span class="small text-danger">*</span></label>
                                        <select id="product" class="form-control" name="product">
                                            <option value="" disabled selected>Choose Product</option>
                                                <option value="MDM">		MDM</option>
                                                <option value="MDM Plus">	MDM Plus</option>
                                                <option value="OP">		    OP</option>
                                                <option value="OP Plus">	OP Plus</option>
                                                <option value="DC">		    DC</option>
                                                <option value="DC Plus">	DC Plus</option>
                                                <option value="PM">		    PM</option>
                                                <option value="PM Plus">	PM Plus</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="staff_id">Account Manager<span class="small text-danger">*</span></label>
                                        <input type="text" id="staff_id" class="form-control" name="staff_id" placeholder="Account Manager" value="">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="staff_id"> Assign Engineer<span class="small text-danger">*</span></label>
                                        <input type="text" id="staff_id" class="form-control" name="staff_id" placeholder="Engineer Name" value="">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="workingstatus">Working Status<span class="small text-danger">*</span></label>
                                        <select id="workingstatus" class="form-control" name="workingstatus">
                                        <option value="" disabled selected>Choose your option</option>
                                            <option value="Onsite">		Onsite</option>
                                            <option value="Remote">		Remote</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="status">Status<span class="small text-danger">*</span></label>
                                        <select id="status" class="form-control" name="status">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="postatus">PO Status</label>
                                        <select id="postatus" class="form-control" name="postatus">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="startdate">Start Date</label>
                                        <input type="date" class="form-control" id="startdate" name="startdate"/>
                                        <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="enddate">End Date</label>
                                        <input type="date" class="form-control" id="enddate" name="enddate"/>
                                        <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="mdays">M/day</label>
                                        <input type="text" class="form-control" id="mdays" name="mdays" placeholder="M/day">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="pocupdate">POC Update</label>
                                        <select id="pocupdate" class="form-control" name="pocupdate">
                                        <option value="" disabled selected>Choose your option</option>
                                            <option value="Due">	     Due</option>
                                            <option value="Pending">     Pending</option>
                                            <option value="In Progress"> In Progress</option>
                                            <option value="Completed">	 Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="remark">Remark</label>
                                        <input type="text" class="form-control" id="remark" name="remark" placeholder="Remark">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary submitaddadmin " id= submitaddadmin type="button" value="" onclick="event.preventDefault();document.getElementById('create').submit();" disabled> Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit POC Modal-->
    <div class="modal fade" id="EditPOCModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title"> Edit Proof-of-Concept </h5>
                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
               </div>
               <div class="modal-body">
               <form  name="form1" method="post" id="create" action="/SCASA/AdminController?action=createAdmin">
                       <div class="pl-lg-10">
                           <div class="row">
                           <div class="col-lg-2">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="addadminid" >No ID<span class="small text-danger">*</span></label>
                                       <input type="text" id="astaffid" class="form-control" name="astaffid" placeholder="No ID" value=""  >
                                   </div>
                               </div>
                               <div class="col-lg-10">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="addaname">POC/Demo/Tender<span class="small text-danger">*</span></label>
                                       <input type="text" id="aname" class="form-control" name="aname" placeholder="Full Name" value="">
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-6">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="agender" >End User<span class="small text-danger">*</span></label>
                                       <input type="text" id="aposition" class="form-control" name="aposition" placeholder="End User" value="">
                                   </div>
                               </div>
                               <div class="col-lg-6">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="addanotel">Partner<span class="small text-danger">*</span></label>
                                       <input type="text" id="aposition" class="form-control" name="aposition" placeholder="Partner" value="">
                                       <!-- <input type="tel" id="anotel" class="form-control" name="anotel" pattern="[0-9]{11}" placeholder="No Tel 0122345678" value=""> -->
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-lg-6">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="adepartment">Account Manager<span class="small text-danger">*</span></label>
                                       <input type="text" id="aposition" class="form-control" name="aposition" placeholder="Account Manager" value="">
                                   </div>
                               </div>
                               <div class="col-lg-6">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="aposition"> Assign Engineer<span class="small text-danger">*</span></label>
                                       <input type="text" id="aposition" class="form-control" name="aposition" placeholder="Engineer Name" value="">
                                   </div>
                               </div>

                           </div>
                           <div class="row">
                               <div class="col-lg-4">
                                   <div class="form-group">
                                       <label class="form-control-label" for="addaemail">ME Product<span class="small text-danger">*</span></label>
                                       <select id="role" class="form-control" name="role">
                                           <option value="" disabled selected>Choose Product</option>
                                               <option value="MDM">		MDM</option>
                                               <option value="MDM Plus">	MDM Plus</option>
                                               <option value="OP">		    OP</option>
                                               <option value="OP Plus">	OP Plus</option>
                                               <option value="DC">		    DC</option>
                                               <option value="DC Plus">	DC Plus</option>
                                               <option value="PM">		    PM</option>
                                               <option value="PM Plus">	PM Plus</option>
                                           </select>
                                   </div>
                               </div>
                               <div class="col-lg-4">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="role">Working Status<span class="small text-danger">*</span></label>
                                       <select id="role" class="form-control" name="role">
                                       <option value="" disabled selected>Choose your option</option>
                                           <option value="Onsite">		Onsite</option>
                                           <option value="Remote">		Remote</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-lg-4">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="anric">Status<span class="small text-danger">*</span></label>
                                       <select id="astatus" class="form-control" name="astatus">
                                           <option value="" disabled selected>Choose your option</option>
                                           <option value="Due">	     Due</option>
                                           <option value="Pending">     Pending</option>
                                           <option value="In Progress"> In Progress</option>
                                           <option value="Completed">	 Completed</option>
                                       </select>
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-lg-4">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="astatus">PO Status</label>
                                       <select id="astatus" class="form-control" name="astatus">
                                           <option value="" disabled selected>Choose your option</option>
                                           <option value="Due">	     Due</option>
                                           <option value="Pending">     Pending</option>
                                           <option value="In Progress"> In Progress</option>
                                           <option value="Completed">	 Completed</option>
                                       </select>
                                   </div>
                               </div>

                               <div class="col-lg-4">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="astartdate">Start Date</label>
                                       <input type="date" class="form-control" id="astartdate" name="astartdate"/>
                                       <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                       </span>
                                   </div>
                               </div>
                               <div class="col-lg-4">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="astartdate">End Date</label>
                                       <input type="date" class="form-control" id="astartdate" name="astartdate"/>
                                       <span class="input-group-addon glyphicon glyphicon-calendar" class="input-group-text" id="basic-addon2">
                                       </span>
                                   </div>
                               </div>

                           </div>

                           <div class="row">

                               <div class="col-lg-4">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="astatus">POC Update</label>
                                       <select id="astatus" class="form-control" name="astatus">
                                       <option value="" disabled selected>Choose your option</option>
                                           <option value="Due">	     Due</option>
                                           <option value="Pending">     Pending</option>
                                           <option value="In Progress"> In Progress</option>
                                           <option value="Completed">	 Completed</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="col-lg-2">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="apassword">M/day</label>
                                       <input type="text" class="form-control" id="apassword" name="apassword" placeholder="M/day">
                                   </div>
                               </div>
                               <div class="col-lg-6">
                                   <div class="form-group focused">
                                       <label class="form-control-label" for="arfid">Remark</label>
                                       <input type="text" class="form-control" id="remark" name="arfid" placeholder="Remark">
                                   </div>
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                       <button class="btn btn-primary submitaddadmin " id= submitaddadmin type="button" value="" onclick="event.preventDefault();document.getElementById('create').submit();" disabled> Submit</button>
               </div>
           </div>
       </div>
   </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

	<script type="text/javascript">
        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV file
            csvFile = new Blob([csv], {type: "text/csv"});

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = "none";

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }

        </script>

        <script>

        function exportTableToCSV(filename) {
            var csv = [];
            var rows = document.querySelectorAll("table tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
        }

    </script>

</body>

</html>
