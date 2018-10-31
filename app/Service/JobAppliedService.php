<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 30/10/2018
 * Time: 5:54 PM
 */

namespace App\Service;


interface JobAppliedService
{
    public function getAllJobApplicants();

    public function getJobApplicantsByJobPosted($id);

    public function approveOrDisapproveJob($request);
}