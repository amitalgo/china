<?php

namespace App\Repository\Impl;

use App\Repository\RoleRepository;
use Doctrine\ORM\EntityRepository;

class RoleRepositoryImpl extends EntityRepository implements RoleRepository {

    public function getActiveRoles(){
        return $this->findBy(['isActive'=>1]);
    }

    public function findActiveRoleById($id){
        return $this->find($id);
    }

    public function saveOrUpdateRole($data){
        try{
            $this->_em->persist($data);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
//            return false;
            dd($e);
        }
    }
}
