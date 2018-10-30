<?php
namespace App\Service\Impl;

use App\Helper\FileUploadHelper;
use App\Repository\JobTypeRepository;
use App\Service\JobTypeService;

class JobTypeServiceImpl extends FileUploadHelper  implements JobTypeService {
    private $jobTypeRepository;

    public function __construct(JobTypeRepository $jobTypeRepository)
    {
        $this->jobTypeRepository=$jobTypeRepository;
    }

    public function saveJobType($data){

    }

    public function getAllActiveJobType(){
        return $this->jobTypeRepository->findAllActiveJobType();
    }

}