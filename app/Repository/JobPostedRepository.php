<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 08/10/2018
 * Time: 2:56 PM
 */

namespace App\Repository;


interface JobPostedRepository{

    public function saveOrUpdateJob($data);

    public function findAllJobPosted();

    public function findJobPostedById($id);

    public function findApprovedJobPosted();
}