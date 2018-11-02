<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 31/10/2018
 * Time: 2:50 PM
 */

namespace App\Service;


interface WordService
{
    public function getAllWords();

    public function saveWord($request);

    public function getWordById($id);

    public function updateWord($request,$id);
}