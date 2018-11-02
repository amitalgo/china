<?php

namespace App\Http\Controllers\Admin;

use App\Service\JobTypeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobTypeController extends Controller
{
    private $jobTypeService;
    public function __construct(JobTypeService $jobType)
    {
        $this->jobTypeService=$jobType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $jobTypes= $this->jobTypeService->getAllActiveJobType();
        return view('admin.list-jobType', compact('jobTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job-type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "jobType" => "required"
        ]);

        $result = $this->jobTypeService->saveJobType($request);
        if ($result) {
            return redirect()->route('jobtype.create')->with('success-msg', 'Job Type Added SuccessFully');
        } else {
            return redirect()->route('jobtype.create')->with('error-msg', 'Something Went Wrong');
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
        $jobTypes = $this->jobTypeService->getJobTypebyId($id);
        return view('admin.job-type', compact('jobTypes'));
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
        $this->validate($request, [
            "jobType" => "required"
        ]);

        $result = $this->jobTypeService->updateJobType($request,$id);
        if ($result) {
            return redirect()->route('jobtype.index')->with('success-msg', 'Job Type Updated SuccessFully');
        } else {
            return redirect()->route('jobtype.create')->with('error-msg', 'Something Went Wrong');
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
}
