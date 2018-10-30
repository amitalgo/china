<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 30/10/2018
 * Time: 2:30 PM
 */

namespace App\Repository\Impl;


use App\Repository\JobTypeRepository;
use Doctrine\ORM\EntityRepository;

class JobTypeRepositoryImpl extends EntityRepository implements JobTypeRepository
{
    public function saveOrUpdateJobType($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
//            return false;
            dd($e);
        }
    }

    public function findAllActiveJobType(){
        return $this->findBy(['isActive'=>1]);
    }

    public function findJobTypeById($id){
        return $this->find($id);
    }
}