<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 31/10/2018
 * Time: 2:50 PM
 */

namespace App\Service\Impl;


use App\Helper\FileUploadHelper;
use App\Repository\WordRepository;
use App\Service\WordService;

class WordServiceImpl extends FileUploadHelper implements WordService
{
    private $wordRepository;

    public function __construct(WordRepository $wordRepository){
        $this->wordRepository=$wordRepository;
    }

    public function getAllWords(){
        return $this->wordRepository->findAllWords();
    }

}