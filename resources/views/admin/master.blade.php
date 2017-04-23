<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('public/admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{url('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
</head>
<body>

    <div id="wrapper">
     <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    @if(isset($user_login))
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> {{$user_login->name}}</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('admin/logout')}} "><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                      @endif()  
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
             <!-- /.navbar-top-links -->

          <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">List Category</a>
                                </li>
                                <li>
                                    <a href="#">Add Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/user')}}">List User</a>
                                </li>
                                <li>
                                    <a href="#">Add User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Loại Bộ môn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/bomon')}}">List loại bộ môn</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/bomon/add')}}">Add loại bộ môn</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Chi tiết Bộ môn<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/chitietbomon')}}">List bộ môn</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/chitietbomon/add')}}">Add bộ môn</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Quản lí thông tin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">List thông tin</a>
                                </li>
                                <li>
                                    <a href="#">Add thông tin</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- begin the loai tin tuc -->
                         <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Loại tin tức<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/theloaitintuc')}}">List loại tin tức</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/theloaitintuc/add')}}">Add loại tin tức</a>
                                </li>
                                <!--end the loai tin tuc  -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Tin tuc<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/tintuc')}}">List Tin tức</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/tintuc/add')}}">Add </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> giao an<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/giaoan')}}">List giao an</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/giaoan/add')}}">Add </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            <!-- /.navbar-top-links -->
            <div id="page-wrapper">
                <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12">
                                <h1 class="page-header">@yield('Controller')
                                    <small>@yield('action')</small>
                                </h1>
                        </div>
                        <div class="col-lg-12">
                         @if(Session::has('flash_massage'))
                            <div class="alert alert-danger">
                                    {!!Session::get('flash_massage')!!}
                            </div>
                         @endif
                        </div>
                             <!-- Đây là nơi chứa nội dung -->
                             @yield('content')
                             <!-- end đây là nơi chứa nội dung -->
                     </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            
    </div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{url('public/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('public/admin/dist/js/sb-admin-2.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{url('public/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
   
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>
</html>