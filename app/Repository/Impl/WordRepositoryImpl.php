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

    public function saveOrUpdateWord($word){
        try{
            $this->_em->persist($word);
            $this->_em->flush();
            return true;
        }catch (\Exception $e){
//            return false;
            dd($e);
        }
    }

    public function findWordById($id){
        return $this->find($id);
    }

    public function deleteExistingWordMeaning($id){
        $wordMeanings= $this->find($id);
        foreach($wordMeanings->getWordId() as $wordMeaning){
            $this->_em->remove($wordMeaning);
        }
        $this->_em->flush();
    }

}