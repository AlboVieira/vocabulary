<?php

namespace App\Models;

use App\Constants\WordConstant;
use Illuminate\Database\Eloquent\Model;

class Sentences extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_word',
        'sentence'
    ];

}
