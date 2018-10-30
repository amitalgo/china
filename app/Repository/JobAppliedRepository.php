<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 30/10/2018
 * Time: 5:55 PM
 */

namespace App\Repository;


interface JobAppliedRepository
{
    public function findAllJobApplicants();
}