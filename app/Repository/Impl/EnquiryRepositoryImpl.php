<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 01/11/2018
 * Time: 2:01 PM
 */

namespace App\Repository\Impl;


use App\Repository\EnquiryRepository;
use Doctrine\ORM\EntityRepository;

class EnquiryRepositoryImpl extends EntityRepository implements EnquiryRepository
{
    public function findAllEnquiries(){
        return $this->findAll();
    }

    public function findEnquiryById($id){
        return $this->find($id);
    }

}