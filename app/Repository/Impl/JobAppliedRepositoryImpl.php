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

    public function findJobApplicantsByJobPosted($id){
        return $this->findBy(['jobPostedId'=>$id,'isActive'=>1]);
    }

    public function findJobApplicantsById($id){
        return $this->find($id);
    }

    public function saveOrUpdateJobApplicants($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
            return false;
//            dd($e);
        }
    }
}