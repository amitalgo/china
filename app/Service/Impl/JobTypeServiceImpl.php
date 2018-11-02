<?php
namespace App\Service\Impl;

use App\Entities\JobType;
use App\Helper\FileUploadHelper;
use App\Repository\JobTypeRepository;
use App\Service\JobTypeService;

class JobTypeServiceImpl extends FileUploadHelper  implements JobTypeService {
    private $jobTypeRepository;

    public function __construct(JobTypeRepository $jobTypeRepository)
    {
        $this->jobTypeRepository=$jobTypeRepository;
    }

    public function saveJobType($request){
        $jobType= new JobType();
        $jobType->setJobType($request->get('jobType'));
        $jobType->setIsActive($request->get('status'));
        $jobType->setCreatedAt(new \DateTime());
        $jobType->setUpdatedAt(new \DateTime());
        return $this->jobTypeRepository->saveOrUpdateJobType($jobType);
    }

    public function getAllActiveJobType(){
        return $this->jobTypeRepository->findAllActiveJobType();
    }

    public function getJobTypebyId($id){
        return $this->jobTypeRepository->findJobTypeById($id);
    }

    public function updateJobType($request,$id){
        $jobType = $this->jobTypeRepository->findJobTypeById($id);
        $jobType->setJobType($request->get('jobType'));
        $jobType->setIsActive($request->get('status'));
        $jobType->setUpdatedAt(new \DateTime());
        return $this->jobTypeRepository->saveOrUpdateJobType($jobType);
    }

}