<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 31/10/2018
 * Time: 2:51 PM
 */

namespace App\Repository;


interface WordRepository
{
    public function findAllWords();

    public function saveOrUpdateWord($word);

    public function findWordById($id);

    public function deleteExistingWordMeaning($id);
}