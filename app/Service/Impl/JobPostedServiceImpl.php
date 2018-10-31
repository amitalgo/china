<?php

namespace App\Service\Impl;

use App\Entities\JobPosted;
use App\Helper\FileUploadHelper;
use App\Repository\AdminRepository;
use App\Repository\JobPostedRepository;
use App\Repository\JobTypeRepository;
use App\Repository\UserRepository;
use App\Service\JobPostedService;

class JobPostedServiceImpl extends FileUploadHelper implements JobPostedService
{
    private $jobPostedRepository,$jobTypeRepository,$adminRepository,$userRepository;

    public function __construct(JobPostedRepository $jobPostedRepository,JobTypeRepository $jobTypeRepository,AdminRepository $adminRepository,UserRepository $userRepository)
    {
        $this->jobPostedRepository=$jobPostedRepository;
        $this->jobTypeRepository=$jobTypeRepository;
        $this->adminRepository=$adminRepository;
        $this->userRepository=$userRepository;
    }

    public function saveJob($request){
        $job = new JobPosted();
        $job->setJobTitle($request->get('job-title'));
        $job->setNoOfPosition($request->get('no-of-position'));
        $job->setExperience($request->get('experience'));
        $job->setJobLocation($request->get('job-location'));
        $job->setJobSkill($request->get('job-skill'));
        $job->setJobDescription($request->get('job-desc'));
        $jobtype=$this->jobTypeRepository->findJobTypeById($request->get('job-type'));
        $job->setJobTypeId($jobtype);
        $user=$this->userRepository->findUser($request->get('user'));
        $job->setUserId($user);
        $job->setIsClosed(0);
        $job->setIsActive(1);
        $job->setCreatedAt(new \DateTime(now()));
        $job->setUpdatedAt(new \DateTime(now()));

        return $this->jobPostedRepository->saveOrUpdateJob($job);
    }

    public function getAllJobPosted(){
        return $this->jobPostedRepository->findAllJobPosted();
    }

    public function getJobPostedById($id){
        return $this->jobPostedRepository->findJobPostedById($id);
    }

    public function updateJob($request,$id){
        $job = $this->jobPostedRepository->findJobPostedById($id);
        $job->setJobTitle($request->get('job-title'));
        $job->setNoOfPosition($request->get('no-of-position'));
        $job->setExperience($request->get('experience'));
        $job->setJobLocation($request->get('job-location'));
        $job->setJobSkill($request->get('job-skill'));
        $job->setJobDescription($request->get('job-desc'));
        $jobtype=$this->jobTypeRepository->findJobTypeById($request->get('job-type'));
        $job->setJobTypeId($jobtype);
        $user=$this->userRepository->findUser($request->get('user'));
        $job->setUserId($user);
        $job->setIsClosed(0);
        $job->setIsActive(1);
        $job->setCreatedAt(new \DateTime(now()));
        $job->setUpdatedAt(new \DateTime(now()));

        return $this->jobPostedRepository->saveOrUpdateJob($job);
    }

    public function approveordisapprovejob($request){
        $job= $this->jobPostedRepository->findJobPostedById($request->get('jobId'));
        $isActive= (null==$request->get('isActive'))?1:0;
        $job->setisActive($isActive);
        return $this->jobPostedRepository->saveOrUpdateJob($job);
    }
}