<?php

namespace App\Repository;

use App\Models\TypeWord;
use App\Models\Words;
use App\Repository\Repository;
use App\Constants\WordConstant as Word;

class WordRepository extends Repository
{
    protected $model = 'App\\Models\\Words';

    public function saveWord($data, $id = null){

        $exist = $this->getWordsByWord($data['word']);
        if(empty($exist)){
            return parent::save($data,$id);
        }
        return false;
    }

    public function getAllWords(){
        $words = $this->all();
        return $this->getWordsAsArray($words);
    }

    public function getWordsByWord($word){
        $words = Words::where('word','LIKE', "%{$word}%")->get();
        return $this->getWordsAsArray($words);
    }

    public function getWordsAsArray($words){
        if($words){
            $wordsSeparated = [];
            /** @var Words $word */
            foreach($words as $word){
                $typeWord = $word->typeWord()->getResults();
                $wordsSeparated[$word->status][$word->id] = [
                    'id' => $word->id,
                    'word' => $word->word,
                    'status' => $word->status,
                    'meanning' => $word->meanning,
                    'typeId' => $typeWord->id,
                    'type' => $typeWord->desc
                ];
            }
            return $wordsSeparated;
        }
        return false;
    }

    public function getWordsKnow(){
       return  $this->findBy(Word::STATUS_FLD, Word::STATUS_KNOW_VAL);
    }

}