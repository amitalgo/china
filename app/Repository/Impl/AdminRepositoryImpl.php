<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:41 PM
 */

namespace App\Repository\Impl;


use App\Repository\AdminRepository;
use Doctrine\ORM\EntityRepository;

class AdminRepositoryImpl extends EntityRepository implements AdminRepository{

    public function findUsers(){
        // TODO: Implement findUsers() method.
    }

    public function findActiveUsers(){
        return $this->findBy(['isActive'=>1]);
    }

    public function findUser($id){
        return $this->find($id);
    }

    public function saveOrUpdateUser($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

}