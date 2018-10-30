<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:41 PM
 */

namespace App\Repository;


interface RoleRepository{

    public function findActiveRoleById($id);

    public function getActiveRoles();

    public function saveOrUpdateRole($data);
}