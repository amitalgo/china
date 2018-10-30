<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 08/10/2018
 * Time: 2:56 PM
 */

namespace App\Repository;


interface JobTypeRepository{

    public function saveOrUpdateJobType($data);

    public function findAllActiveJobType();

    public function findJobTypeById($id);

}