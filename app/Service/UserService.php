<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 05/10/2018
 * Time: 3:49 PM
 */

namespace App\Service;


interface UserService{

    public function getUsers();

    public function getActiveUsers();

    public function getUser($id);

    public function saveUser($request);

    public function updateUser($request, $id);

    public function updatePassword($request, $id);

}