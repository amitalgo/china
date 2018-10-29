<?php

namespace App\Repository\Impl;

use App\Repository\RoleRepository;
use Doctrine\ORM\EntityRepository;
class RoleRepositoryImpl extends EntityRepository implements RoleRepository {

    public function getActiveRoles(){
        return $this->findBy(['isActive'=>1]);
    }

    public function findActiveAdminRoleById($id){
        return $this->find($id);
    }

    public function findExistingAdminRole($id){
        dd($this->findBy(['id'=>2])[0]->getAdminId());
    }
}
