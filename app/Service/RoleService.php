<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:49 PM
 */

namespace App\Service;


interface RoleService{

    public function getActiveRoles();

    public function getActiveRoleById($id);

    public function updateRole($request,$id);

    public function saveRole($request);

}