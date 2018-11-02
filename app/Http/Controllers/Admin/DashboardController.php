<?php

namespace App\Http\Controllers\Admin;

use App\Service\JobAppliedService;
use App\Service\JobPostedService;
use App\Service\UserService;
use App\Service\WordService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $jobPostedService,$jobAppliedService,$wordService,$userService;

    public function __construct(JobPostedService $jobPostedService,JobAppliedService $jobAppliedService,WordService $wordService,UserService $userService)
    {
        $this->jobPostedService=$jobPostedService;
        $this->jobAppliedService=$jobAppliedService;
        $this->wordService=$wordService;
        $this->userService=$userService;
    }

    public function index(){
        $jobsApproved=count($this->jobPostedService->getApprovedJobPosted());
        $jobApplied=$this->jobAppliedService->getAllJobApplicants();
        $words=count($this->wordService->getAllWords());
        $users=count($this->userService->getActiveUsers());
        return view('admin.dashboard',compact('jobsApproved','jobApplied','words','users'));
    }
}
