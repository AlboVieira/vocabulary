<form name="formWord" novalidate method="POST" class="form" ng-submit="submit(formWord.$valid)">

{!! Form::hidden(\App\Constants\WordConstant::ID_FLD,null,['ng-model'=> 'data.id' , 'class' =>'form-control']) !!}

<div class="form-group"  ng-class="{'has-error': formWord.$submitted && formWord.word.$invalid}">
    {!! Form::label(\App\Constants\WordConstant::WORD_FLD,\App\Constants\WordConstant::WORD_LBL) !!}
    {!! Form::text(\App\Constants\WordConstant::WORD_FLD,null,['ng-model'=> 'data.word' ,'required' => true, 'class' =>'form-control']) !!}
    <span class="help-block" ng-show="formWord.$submitted && formWord.word.$error.required">* Nome é obrigatório</span>
</div>

<div class="form-group" ng-class="{'has-error': formWord.$submitted && formWord.id_tipo.$invalid}">
    {!! Form::label(\App\Constants\WordConstant::TyPE_WORD_FLD,\App\Constants\WordConstant::TyPE_WORD_LBL) !!}
    {!! Form::select(\App\Constants\WordConstant::TyPE_WORD_FLD,\App\Models\TypeWord::getTypes(false),null,['ng-model'=> 'data.id_tipo' ,'required' =>true,'class' =>'form-control']) !!}
    <span class="help-block" ng-show="formWord.$submitted && formWord.id_tipo.$error.required">* Tipo é obrigatório</span>
</div>

<div class="form-group" ng-class="{'has-error': formWord.$submitted && formWord.meanning.$invalid}">
    {!! Form::label(\App\Constants\WordConstant::MEANNING_FLD,\App\Constants\WordConstant::MEANNING_LBL) !!}
    {!! Form::text(\App\Constants\WordConstant::MEANNING_FLD,null,['ng-model'=> 'data.meanning' ,'required' =>true,'class' =>'form-control']) !!}
    <span class="help-block" ng-show="formWord.$submitted && formWord.meanning.$error.required">* Significado é obrigatório</span>
</div>

<div class="form-group" ng-class="{'has-error': formWord.$submitted && formWord.status.$invalid}">
    {!! Form::label(\App\Constants\WordConstant::STATUS_FLD,\App\Constants\WordConstant::STATUS_LBL) !!}
    {!! Form::select(\App\Constants\WordConstant::STATUS_FLD,\App\Models\Words::getStatus(),null,['ng-model'=> 'data.status','required' =>true,'class' =>'form-control']) !!}
    <span class="help-block" ng-show="formWord.$submitted && formWord.status.$error.required">* Status é obrigatório</span>

</div>

{!! Form::hidden(\App\Constants\WordConstant::ID_FLD,null,['ng-model'=> 'data.id_sentence' , 'class' =>'form-control']) !!}
<div class="form-group">
    {!! Form::label(\App\Constants\SentenceConstant::SENTENCE_FLD,\App\Constants\SentenceConstant::SENTENCE_LBL) !!}
    {!! Form::text(\App\Constants\SentenceConstant::SENTENCE_FLD,null,['ng-model'=> 'data.sentence','class' =>'form-control']) !!}
</div>


<div class="row">
    <div class="col-sm-6">
        {!! Form::submit(\App\Constants\FormConstant::BTN_SALVAR_LBL,['id'=> 'salvar','class' => 'btn btn-success form-control']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::button(\App\Constants\FormConstant::BTN_CANCELAR_LBL,['data-dismiss'=>"modal", 'class' => 'btn btn-danger form-control']) !!}
    </div>
</div>

</form>
