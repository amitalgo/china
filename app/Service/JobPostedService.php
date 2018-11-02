<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 08/10/2018
 * Time: 2:56 PM
 */

namespace App\Service;


interface JobPostedService{

    public function saveJob($request);

    public function getAllJobPosted();

    public function getJobPostedById($id);

    public function updateJob($request,$id);

    public function approveordisapprovejob($request);

    public function getApprovedJobPosted();
}