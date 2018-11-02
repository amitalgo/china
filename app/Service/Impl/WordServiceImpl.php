<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 31/10/2018
 * Time: 2:50 PM
 */

namespace App\Service\Impl;


use App\Entities\Word;
use App\Entities\WordMeaning;
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

    public function saveWord($request)
    {
        $word = new Word();
        $word->setWord($request->get('word'));
        $word->setPinyinWord($request->get('pinyin-word'));
        $word->setIsActive($request->get('status'));
        $word->setCreatedAt(new \DateTime());
        $word->setUpdatedAt(new \DateTime());
        $wordTypes=$request->get('word-type');
        foreach($wordTypes as $key=>$wordType){
            $wordMeaning= new WordMeaning();
            $wordMeaning->setType($wordType);
            $wordMeaning->setMeaning($request->get('word-mean')[$key]);
            $wordMeaning->setSynonyms($request->get('word-synonyms')[$key]);
            $wordMeaning->setExample($request->get('word-desc')[$key]);
            $wordMeaning->setIsActive($request->get('status'));
            $wordMeaning->setCreatedAt(new \DateTime());
            $wordMeaning->setUpdatedAt(new \DateTime());
            $word->addWordMeaning($wordMeaning);
        }

        return $this->wordRepository->saveOrUpdateWord($word);
    }

    public function updateWord($request,$id){
        $words = $this->wordRepository->findWordById($id);
        $words->setWord($request->get('word'));
        $words->setPinyinWord($request->get('pinyin-word'));
        $words->setIsActive($request->get('status'));
        $this->wordRepository->deleteExistingWordMeaning($id);
        $wordTypes=$request->get('word-type');
        foreach($wordTypes as $key=>$wordType){
            $wordMeaning= new WordMeaning();
            $wordMeaning->setType($wordType);
            $wordMeaning->setMeaning($request->get('word-mean')[$key]);
            $wordMeaning->setSynonyms($request->get('word-synonyms')[$key]);
            $wordMeaning->setExample($request->get('word-desc')[$key]);
            $wordMeaning->setIsActive($request->get('status'));
            $wordMeaning->setCreatedAt(new \DateTime());
            $wordMeaning->setUpdatedAt(new \DateTime());
            $words->addWordMeaning($wordMeaning);
        }
        return $this->wordRepository->saveOrUpdateWord($words);
    }

    public function getWordById($id){
        return $this->wordRepository->findWordById($id);
    }

}