<?php

namespace App\Models;

use App\Constants\WordConstant;
use Illuminate\Database\Eloquent\Model;

class Sentences extends Model
{
    protected $table = 'sentence';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'id_word',
        'sentence'
    ];

}
