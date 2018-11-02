<?php

namespace App\Service;

interface JobTypeService{

    public function saveJobType($data);

    public function getAllActiveJobType();

    public function getJobTypebyId($id);

    public function updateJobType($request,$id);

}