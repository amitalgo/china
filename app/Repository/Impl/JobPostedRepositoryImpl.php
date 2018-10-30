<?php

namespace App\Repository\Impl;

use App\Repository\JobPostedRepository;
use Doctrine\ORM\EntityRepository;

class JobPostedRepositoryImpl extends EntityRepository implements JobPostedRepository {

    public function saveOrUpdateJob($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
//            return false;
            dd($e);
        }
    }

    public function findAllJobPosted(){
        return $this->findAll();
    }

    public function findJobPostedById($id){
        return $this->find($id);
    }
}
