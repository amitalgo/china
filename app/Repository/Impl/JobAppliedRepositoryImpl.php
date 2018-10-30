<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 30/10/2018
 * Time: 5:57 PM
 */

namespace App\Repository\Impl;


use App\Repository\JobAppliedRepository;
use Doctrine\ORM\EntityRepository;

class JobAppliedRepositoryImpl extends EntityRepository implements JobAppliedRepository
{
    public function findAllJobApplicants(){
        return $this->findAll();
    }
}