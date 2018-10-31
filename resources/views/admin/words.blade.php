@extends('admin.layouts.admin')
@section('title')
    {{ (isset($jobDetail)) ? 'Edit Job' : 'Add Words' }}
@endsection

@section('content')
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ (isset($jobDetail)) ? 'Edit Job' : 'Add Words' }}</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">{{ (isset($jobDetail)) ? 'Edit Job' : 'Add Words' }}</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb-->
    <!-- Container fluid  -->
    <div class="container-fluid">
    @include('admin.includes.alert')
    <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ (isset($jobDetail)) ? 'Edit Job' : 'Add Words' }}
                            <span class="pull-right">
                            <a class="btn btn-info m-b-10 m-l-5" href="{{ route('word.index') }}"><i class="fa fa-reply"></i> Back </a></span>
                        </h4>
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="@if(isset($jobDetail)) {{route('word.update',['admins' => $jobDetail->getId()] )}} @else{{route('word.store')}} @endif" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if(isset($jobDetail))
                                        <input type="hidden" name="_method" value="PUT">
                                    @endif
                                    <div class="col-md-12">
                                        <div class="col-md-12 float-left">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="word">Word<span class="text-danger">*</span></label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control" required id="word" name="word" placeholder="Enter Word" value="@if(isset($jobDetail)){{$jobDetail->getJobTitle()}} @endif">
                                                </div>
                                            </div>
                                            <div class="form-group row box-append">
                                                <div class="col-lg-11"><h4 class="card-title">Meaning</h4></div>
                                                <div class="float-right"><a href="javascript:void(0)"><i class="fa fa-plus-square add-meaning-box"></i></a></div>
                                                    <div class="col-lg-4 top-pdn">
                                                        <input type="text" class="form-control" id="job-skill" name="job-skill" placeholder="Enter Type" value="@if(isset($jobDetail)){{$jobDetail->getJobSkill()}} @endif">
                                                        <input type="text" class="form-control" id="job-skill" name="job-skill" placeholder="Enter Synonyms" value="@if(isset($jobDetail)){{$jobDetail->getJobSkill()}} @endif">
                                                        <textarea class="form-control" style="height: 20%;" rows="5" cols="5" id="job-desc" name="job-desc" placeholder="Enter Meaning">@if(isset($jobDetail)){{$jobDetail->getJobDescription()}} @endif</textarea>
                                                        <textarea class="form-control" style="height: 20%;" rows="5" cols="5" id="job-desc" name="job-desc" placeholder="Enter Example">@if(isset($jobDetail)){{$jobDetail->getJobDescription()}} @endif</textarea>
                                                    </div>



                                            </div>


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
<script type="text/javascript" src="{{asset('js/words.js')}}"></script>
<script type="text/javascript">
    $('document').ready(function () {
        Words.initControls();
    });
</script>
@endpush