<?php

namespace App\Repository\Impl;

use App\Repository\AdminRoleRepository;
use Doctrine\ORM\EntityRepository;
class AdminRoleRepositoryImpl extends EntityRepository implements AdminRoleRepository{

    public function getActiveAdminRoles(){
        return $this->findBy(['isActive'=>1]);
    }
}
