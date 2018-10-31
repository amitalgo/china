<html>
    <head>
        <title>Yeh China - @yield('title')</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('css/helper.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-toggle.css') }}" rel="stylesheet">

        <style>
            .alertify{
                position: fixed;
                z-index: 99999;
                right: 22px;
                top: 62px;
                min-width: 200px;
                text-align: center;
                color:#fee;
            }
            .r{
                background-color: #f05050 !important;
                border: 1px solid #f05050 !important;
            }
            .s{
                background-color: #5fbeaa !important;
                border: 1px solid #5fbeaa !important;
            }
           .top-pdn{ margin-top: 15px;}
        </style>



        @stack('styles')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
        <!--[if lt IE 9]>
        <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header">
            @include('admin.includes.header')
        </div>
        @section('sidebar')
            <div class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-home"></i>Dashboard </a></li>
                            <li class="nav-label">Manage Jobs</li>

                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-globe"></i>
                                    <span>Job Type</span>
                                </a>
                            </li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="{{ url('admin/jobposted') }}" aria-expanded="false">
                                    <i class="icon-item2 fa fa-suitcase"></i>
                                    <span>Jobs</span>
                                </a>
                            </li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="{{ url('admin/jobapplicants') }}" aria-expanded="false">
                                    <i class="icon-item2 fa fa-tasks"></i>
                                    <span>Job Applications</span>
                                </a>
                            </li>
                            <li class="nav-label">Content Management</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-book"></i>
                                    <span>About Us</span>
                                </a>
                            </li>

                            <li class="nav-label">Manage Users</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-users"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li class="nav-label">Dictionary</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="{{ url('admin/word') }}" aria-expanded="false">
                                    <i class="icon-item2 fa fa-globe"></i>
                                    <span>Words</span>
                                </a>
                            </li>
                            <li class="nav-label">General</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-envelope"></i>
                                    <span>Enquiries</span>
                                </a>
                            </li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-wrench"></i>
                                    <span>Email Configuration</span>
                                </a>
                            </li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-bell"></i>
                                    <span>Notifications</span>
                                </a>
                            </li>
                            <li class="nav-label">Manage Admin</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="{{ url('admin/role') }}" aria-expanded="false">
                                    <i class="icon-item2 fa fa-cogs"></i>
                                    <span>Roles</span>
                                </a>
                            </li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="{{url('admin/sub-admin')}}" aria-expanded="false">
                                    <i class="icon-item2 fa fa-user-secret"></i>
                                    <span>Admin</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </div>
        @show
        <div class="page-wrapper">
            @yield('content')
            <!-- footer -->
            <footer class="footer">
                @include('admin.includes.footer')
            </footer>
            <!-- End footer -->
        </div>
        <!-- All Jquery -->
        <script src="{{asset('js/lib/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset('js/lib/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-toggle.js') }}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{asset('js/sidebarmenu.js')}}"></script>
        <!--stickey kit -->
        <script src="{{asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

        <!--Custom JavaScript -->
        <script src="{{asset('js/custom.min.js')}}"></script>
        <!-- Common Javascript -->
        <script src="{{asset('js/common.js')}}"></script>

        {{--Datatables--}}
        <script src="{{asset('js/lib/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('js/lib/datatables/datatables-init.js')}}"></script>

        @stack('scripts')
    </body>
</html>