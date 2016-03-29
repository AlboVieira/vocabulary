<?php

namespace App\Models;

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
            $dados = [];
            foreach($types as $type){
                $dados[$type->id] = $type->desc;
            }
            if($forForm){
                array_unshift($dados, '-- Selecione --');
            }
            return $dados;
        }

        return $types;
    }

}
