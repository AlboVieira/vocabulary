<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\WordRepository;
use Illuminate\Support\Facades\App;
use Mockery\CountValidator\Exception;

class WordsController extends Controller
{

    /**
     * @var WordRepository
     */
    private $wordRepository;

    public function __construct() {
        $this->wordRepository = App::make('WordRepository');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function know()
    {
        $words = $this->wordRepository->getAllWords();
        return response()->json(['know' => $words]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function words(Request $request)
    {
        $words = $this->wordRepository->getWordsByWord($request->word);
        return response()->json(['know' => $words]);
    }

    public function newWord(Request $request)
    {
        try{
            $words = $this->wordRepository->createWord($request->all());
            if($words){
                $json = response()->json(['success'=>true,'words' => $words]);
            }else{
                $json = response()->json(['success'=>false,'erro' => 'Palavra já Existe']);
            }
        }catch(Exception $e){
            $json = response()->json(['success'=>false,'erro' => $e->getMessage()]);
        }
        return $json;
    }

    public function updateWord(Request $request,$data)
    {
        try{
            $words = $this->wordRepository->updateWord($request->all(),$data);
            $json = response()->json(['success'=>true,'words' => $words]);
        }catch(Exception $e){
            $json = response()->json(['success'=>false,'erro' => $e->getMessage()]);
        }
        return $json;
    }
}
