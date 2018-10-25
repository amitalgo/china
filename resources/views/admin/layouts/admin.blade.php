<html>
    <head>
        <title>Yeh China - @yield('title')</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('css/helper.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

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
                            <li><a href=""><i class="fa fa-home"></i>Dashboard </a></li>
                            <li class="nav-label">General</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-users"></i>
                                    <span>Contact Details</span>
                                </a>
                            </li>
                            <li class="nav-label">Manage Jobs</li>

                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Jobs</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="form-basic.html">Job Type</a></li>
                                    <li><a href="form-layout.html">Jobs</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Manage Users</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-user"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li class="nav-label">Dictionary</li>
                            <li class="item2" id="layout_3" role="presentation">
                                <a href="#" aria-expanded="false">
                                    <i class="icon-item2 fa fa-user"></i>
                                    <span>Words</span>
                                </a>
                            </li>
                            {{--<li><a href="{{route('admin.page')}}"><i class="fa fa-file"></i>Page </a></li>--}}
                            {{--<li><a href="{{route('admin.customui')}}"><i class="fa fa-file-code-o"></i>Custom UI </a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-image"></i>Slider </a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-th-large"></i>Content Block </a></li>--}}
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

        @stack('scripts')
    </body>
</html>