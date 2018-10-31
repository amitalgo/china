<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 30/10/2018
 * Time: 5:55 PM
 */

namespace App\Service\Impl;


use App\Repository\JobAppliedRepository;
use App\Service\JobAppliedService;

class JobAppliedServiceImpl implements JobAppliedService
{
    private $jobAppliedRepository;

    public function __construct(JobAppliedRepository $jobAppliedRepository)
    {
        $this->jobAppliedRepository=$jobAppliedRepository;
    }

    public function getAllJobApplicants(){
        return $this->jobAppliedRepository->findAllJobApplicants();
    }

    public function getJobApplicantsByJobPosted($id){
        return $this->jobAppliedRepository->findJobApplicantsByJobPosted($id);
    }

    public function approveOrDisapproveJob($request){
        $job= $this->jobAppliedRepository->findJobApplicantsById($request->get('jobappliedid'));
        $isActive= (null==$request->get('isActive') || empty($request->get('isActive')))?1:0;
        $job->setisActive($isActive);

        return $this->jobAppliedRepository->saveOrUpdateJobApplicants($job);
    }
}