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
}