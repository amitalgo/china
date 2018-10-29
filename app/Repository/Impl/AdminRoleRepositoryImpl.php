<?php

namespace App\Repository\Impl;

use App\Repository\AdminRoleRepository;
use Doctrine\ORM\EntityRepository;
class AdminRoleRepositoryImpl extends EntityRepository implements AdminRoleRepository{

    public function findActiveAdminRoleById($id){
        return $this->find($id);
    }

    public function findExistingAdminRole($id){
//        dd($this->findBy(['id'=>2])[0]->getAdminId());
    }
}
