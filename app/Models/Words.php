<?php

namespace App\Models;

use App\Constants\FormConstant;
use App\Constants\WordConstant;
use Illuminate\Database\Eloquent\Model;

class Words extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'word',
        'status',
        'id_tipo',
        'meanning'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function typeWord()
    {
        return $this->hasOne('App\Models\TypeWord', 'id','id_tipo');
    }

    /**
     * Get the comments for the blog post.
     */
    public function sentences()
    {
        return $this->hasMany('App\Models\Sentences','id_word');
    }

    public static function getStatus($forForm = true){
        return [
            '0' => FormConstant::SELECIONE,
            WordConstant::STATUS_KNOW_VAL => WordConstant::STATUS_KNOW_LBL,
            WordConstant::STATUS_ALMOST_VAL => WordConstant::STATUS_ALMOST_LBL,
            WordConstant::STATUS_DONT_KNOW_VAL => WordConstant::STATUS_DONT_KNOW_LBL
        ];
    }
}
