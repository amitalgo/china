@extends('admin.layouts.admin')
@section('title')
    Sub Admin
@endsection

@section('content')
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Sub Admin</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Sub Admin</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb-->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add SubAdmin
                            <span class="pull-right">
                            <a class="btn btn-info m-b-10 m-l-5" href="{{ route('sub-admin.index') }}"><i class="fa fa-reply"></i> Back </a></span>
                        </h4>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="{{route('sub-admin.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="col-md-8 float-left">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="first-name">First Name<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Enter First Name" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="last-name">Last Name</label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="email">Email<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Id" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="password">Password<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="cpassword">Confirm Password<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="contact">Contact No<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="contact">Role<span class="text-danger">*</span></label>
                                                <div class="col-lg-6">
                                                    <select class="form-control" name="role" id="role">
                                                        @foreach($roles as $role)
                                                        <option value="{{ $role->getId() }}">{{ $role->getRole() }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="profile-pic">Profile Pic</label>
                                                <div class="col-lg-6">
                                                    <input type="file" class="form-control" id="profile-pic" name="profile-pic" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 float-left">
                                            <img src="  " id="image-preview" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group row">
                                        <div class="col-lg-8 ml-auto">
                                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('js/subadmin.js')}}"></script>
    <script type="text/javascript">
        $('document').ready(function () {
            SubAdmin.initControls();
        });
    </script>
@endpush