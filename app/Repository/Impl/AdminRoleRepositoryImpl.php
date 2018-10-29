<?php

namespace App\Repository\Impl;

use App\Repository\AdminRoleRepository;
use Doctrine\ORM\EntityRepository;
class AdminRoleRepositoryImpl extends EntityRepository implements AdminRoleRepository{

    public function findActiveAdminRoleById($id){
        return $this->find($id);
    }

    public function deleteExistingAdminRole($id){
        $adminRoles = $this->findBy(['adminId'=>$id]);
        foreach($adminRoles as $adminRole){
            $this->remove($adminRole);
        }

    }
}
