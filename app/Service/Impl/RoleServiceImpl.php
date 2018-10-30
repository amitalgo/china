<?php


namespace App\Service\Impl;

use App\Entities\Role;
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

    public function getActiveRoleById($id){
        return $this->roleRepository->findActiveRoleById($id);
    }

    public function updateRole($request,$id){
        $role = $this->roleRepository->findActiveRoleById($id);
        $role->setRole($request->get('role-name'));
        $role->setIsActive(1);
        return $this->roleRepository->saveOrUpdateRole($role);
    }

    public function saveRole($request){
        $role = new Role();
        $role->setRole($request->get('role-name'));
        $role->setIsActive(1);
        $role->setPermission('later');
        return $this->roleRepository->saveOrUpdateRole($request);
    }
}