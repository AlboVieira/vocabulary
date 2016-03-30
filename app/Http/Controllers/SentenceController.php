<?php

namespace App\Http\Controllers;

use App\Despesa;
use App\Repository\SentenceRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SentenceController extends Controller
{
    /**
     * @var SentenceRepository
     */
    private $sentenceRepository;

    public function __construct() {
        $this->sentenceRepository = App::make('SentenceRepository');
    }

    public function newSentence(){

    }
}
