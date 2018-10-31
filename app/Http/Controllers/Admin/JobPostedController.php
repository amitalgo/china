<?php

namespace App\Http\Controllers\Admin;

use App\Service\JobPostedService;
use App\Service\JobTypeService;
use App\Service\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobPostedController extends Controller
{
    private $jobPostedService,$jobTypeService,$userService;

    public function __construct(JobPostedService $jobPostedService,JobTypeService $jobTypeService,UserService $userService)
    {
        $this->jobPostedService=$jobPostedService;
        $this->jobTypeService=$jobTypeService;
        $this->userService=$userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobPosts=$this->jobPostedService->getAllJobPosted();
        return view('admin.list-job-posted',compact('jobPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobTypes= $this->jobTypeService->getAllActiveJobType();
        $users = $this->userService->getActiveUsers();
        return view('admin.job-posted',compact('jobTypes','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "job-title" =>"required",
            "job-type"=>"required",
            "no-of-position"=>"required",
            "experience"=>"required",
            "job-location"=>"required",
            "job-skill"=>"required",
            "job-desc"=>"required",
            "user"=>"required"
        ]);

        $result  = $this->jobPostedService->saveJob($request);
        if($result){
            return redirect()->route('jobposted.index')->with('success-msg','Job Posted SuccessFully');
        }else{
            return redirect()->route('jobposted.create')->with('error-msg','Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobDetail=$this->jobPostedService->getJobPostedById($id);
        $jobTypes= $this->jobTypeService->getAllActiveJobType();
        $users = $this->userService->getActiveUsers();
        return view('admin.job-posted',compact('jobDetail','jobTypes','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "job-title" =>"required",
            "job-type"=>"required",
            "no-of-position"=>"required",
            "experience"=>"required",
            "job-location"=>"required",
            "job-skill"=>"required",
            "job-desc"=>"required",
            "user"=>"required"
        ]);

        $result  = $this->jobPostedService->updateJob($request,$id);
        if($result){
            return redirect()->route('jobposted.index')->with('success-msg','Job Updated SuccessFully');
        }else{
            return redirect()->route('jobposted.create')->with('error-msg','Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approveJob(Request $request){
        $approveordisapprovejob= $this->jobPostedService->approveordisapprovejob($request);
        if($approveordisapprovejob){
            return 1;
        }else{
            return 'Something Went Wrong';
        }
    }
}
