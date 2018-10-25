@extends('admin.layouts.admin')
@section('title')
    Dashboard
@endsection

@section('content')
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-check f-s-40 color-success"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>1178</h2>
                                <p class="m-b-0">Job Approved</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>25</h2>
                                <p class="m-b-0">Job Applied</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-globe f-s-40 color-primary"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>568120</h2>
                                <p class="m-b-0">Total Word</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>847</h2>
                                <p class="m-b-0">User</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body browser">
                        <p class="f-w-600">iMacs <span class="pull-right">85%</span></p>
                        <div class="progress ">
                            <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                        </div>

                        <p class="m-t-30 f-w-600">iBooks<span class="pull-right">90%</span></p>
                        <div class="progress">
                            <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                        </div>

                        <p class="m-t-30 f-w-600">iPhone<span class="pull-right">65%</span></p>
                        <div class="progress">
                            <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                        </div>

                        <p class="m-t-30 f-w-600">Samsung<span class="pull-right">65%</span></p>
                        <div class="progress">
                            <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-8"> <div class="card"> <div class="card-title"> <h4>Recent Job Applied </h4> </div> <div class="card-body"> <div class="table-responsive"> <table class="table"> <thead> <tr> <th>ID</th>
                                <th>Name</th>
                                <th>Job Title</th>
                                <th>Experience</th>
                                <th>Status</th> </tr> </thead> <tbody> <tr>
                                <td>
                                    <div class="round-img">
                                        <a href=""><img src="/documents/33704/0/avatar4.jpg/be6cb627-0e91-01b1-24e9-fbe3ff934618?t=1530337081815&amp;version=1.0" alt=""></a>
                                    </div>
                                </td>
                                <td>Aditya Rao</td>
                                <td><span>Java</span></td>
                                <td><span>3 yrs</span></td>
                                <td><span class="badge badge-success">Done</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="round-img"> <a href=""><img src="/documents/33704/0/avatar2.jpg/34e17ac0-cbb3-c693-188e-f6fecaa4a52e?t=1530337081726&amp;version=1.0" alt=""></a> </div>
                                </td>
                                <td>Amit Chaurasia</td>
                                <td><span>PHP Developer</span></td>
                                <td><span>1 yrs</span></td>
                                <td><span class="badge badge-success">Done</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="round-img">
                                        <a href=""><img src="/documents/33704/0/avatar3.jpg/ee52c330-23c0-f416-072f-d0c140691837?t=1530337081760&amp;version=1.0" alt=""></a>
                                    </div>
                                </td>
                                <td>Asim Sagir</td>
                                <td><span>PHP Developer</span></td>
                                <td><span>2 yrs</span></td>
                                <td><span class="badge badge-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="round-img">
                                        <a href=""><img src="/documents/33704/0/avatar4.jpg/be6cb627-0e91-01b1-24e9-fbe3ff934618?t=1530337081815&amp;version=1.0" alt=""></a>
                                    </div>
                                </td>
                                <td>Pandurang Gawde</td>
                                <td><span>HTML Developer</span></td>
                                <td><span>5 yrs</span></td>
                                <td><span class="badge badge-success">Done</span></td>
                            </tr> </tbody> </table> </div> </div> </div> </div>
        </div></div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
@endsection