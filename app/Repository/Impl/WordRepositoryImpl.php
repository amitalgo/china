<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 31/10/2018
 * Time: 2:51 PM
 */

namespace App\Repository\Impl;


use App\Repository\WordRepository;
use Doctrine\ORM\EntityRepository;

class WordRepositoryImpl extends EntityRepository implements WordRepository
{
    public function findAllWords(){
        return $this->findAll();
    }

}