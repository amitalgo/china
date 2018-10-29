<?php


namespace App\Service\Impl;

use App\Helper\FileUploadHelper;
use App\Repository\RoleRepository;
use App\Service\RoleService;

class RoleServiceImpl extends FileUploadHelper implements RoleService{

    private $roleRepository;

    public function __construct(RoleRepository $roleRepository){
        $this->roleRepository=$roleRepository;
    }

    public function getActiveRoles(){
        return $this->roleRepository->getActiveRoles();
    }
}