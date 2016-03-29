<?php

/**
 * Created by PhpStorm.
 * User: albo-vieira
 * Date: 22/03/16
 * Time: 22:57
 */
namespace App\Constants;
interface WordConstant
{
    const REPOSITORY = 'WordRepository';
    const ID_FLD = 'id';
    const STATUS_FLD = 'status';
    const STATUS_LBL = 'Status';
    const WORD_FLD = 'word';
    const WORD_LBL = 'Palavra';
    const TyPE_WORD_FLD = 'id_tipo';
    const TyPE_WORD_LBL = 'Tipo';
    const MEANNING_FLD = 'meanning';
    const MEANNING_LBL = 'Significado';

    const STATUS_KNOW_VAL = 'K';
    const STATUS_KNOW_LBL = 'Know';
    const STATUS_ALMOST_VAL = 'A';
    const STATUS_ALMOST_LBL = 'Almost Sure';
    const STATUS_DONT_KNOW_VAL = 'N';
    const STATUS_DONT_KNOW_LBL = "Don't know";

}