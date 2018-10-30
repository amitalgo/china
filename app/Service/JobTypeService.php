<?php

namespace App\Service;

interface JobTypeService{

    public function saveJobType($data);

    public function getAllActiveJobType();

}