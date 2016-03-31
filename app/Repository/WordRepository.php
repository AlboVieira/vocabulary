<?php

namespace App\Repository;

use App\Constants\SentenceConstant;
use App\Constants\WordConstant;
use App\Models\Sentences;
use App\Models\TypeWord;
use App\Models\Words;
use App\Repository\Repository;
use App\Constants\WordConstant as Word;

class WordRepository extends Repository
{
    protected $model = 'App\\Models\\Words';

    public function createWord($data){

        $exist = $this->getWordsByWord($data[WordConstant::WORD_FLD]);
        if(empty($exist)){

            $arrSentence = $data[SentenceConstant::SENTENCE_FLD];

            unset($data[SentenceConstant::SENTENCE_FLD]);
            unset($data['id_sentence']);

            /** @var Words $model */
            $model = parent::save($data);
            if($model){
                $this->createSentence($arrSentence,$model->id);
                return $model;
            }
        }
    }

    public function updateWord($data, $id = null){

        if($id){
            $arrSentence = $data[SentenceConstant::SENTENCE_FLD];

            unset($data[SentenceConstant::SENTENCE_FLD]);
            unset($data['id_sentence']);

            /** @var Words $model */
            $model = parent::save($data,$id);

            $this->createSentence($arrSentence,$id);
            return $model;
        }
        return false;
    }

    public function createSentence($data,$idWord = null){

        if(!empty($data[SentenceConstant::ID_FLD])){
            $sentence = Sentences::where('id', '=', $data[SentenceConstant::ID_FLD]);
        }else{
            $sentence = new Sentences();
        }

        $sentenceArr = [
            SentenceConstant::SENTENCE_FLD => $data,
            SentenceConstant::WORD_FLD  => $idWord
        ];
        $sentence::create($sentenceArr);
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

                /** @var Sentences $sentences */
                $sentences = null;
                if($word->sentences()->getResults()->count() > 0){
                    $result = $word->sentences()->getResults();
                    //trocar depois
                    $sentences = $result->first();
                }

                $typeWord = $word->typeWord()->getResults();
                $wordsSeparated[$word->status][$word->id] = [
                    'id' => $word->id,
                    'word' => $word->word,
                    'status' => $word->status,
                    'meanning' => $word->meanning,
                    'typeId' => $typeWord->id,
                    'type' => $typeWord->desc,
                    'id_sentence' => !empty($sentences) ? $sentences->id : '',
                    'sentence' => !empty($sentences) ? $sentences->sentence : ''
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