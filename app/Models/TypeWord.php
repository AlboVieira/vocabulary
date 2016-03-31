<?php

namespace App\Models;

use App\Constants\FormConstant;
use Illuminate\Database\Eloquent\Model;

class TypeWord extends Model
{
    protected $fillable = [
        'id',
        'desc'
    ];


    public static function getTypes($forForm = false, $isArray = true){

        $types = self::all();
        if($isArray){
            $dados = ['0' => FormConstant::SELECIONE];
            foreach($types as $type){
                $dados[$type->id]= $type->desc;
            }
            return $dados;
        }

        return $types;
    }

}
