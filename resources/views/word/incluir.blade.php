<form method="POST" class="form" ng-submit="submit()">

{!! Form::hidden(\App\Constants\WordConstant::ID_FLD,null,['ng-model'=> 'data.id' , 'class' =>'form-control']) !!}

<div class="form-group">
    {!! Form::label(\App\Constants\WordConstant::WORD_FLD,\App\Constants\WordConstant::WORD_LBL) !!}
    {!! Form::text(\App\Constants\WordConstant::WORD_FLD,null,['ng-model'=> 'data.word' , 'class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label(\App\Constants\WordConstant::TyPE_WORD_FLD,\App\Constants\WordConstant::TyPE_WORD_LBL) !!}
    {!! Form::select(\App\Constants\WordConstant::TyPE_WORD_FLD,\App\Models\TypeWord::getTypes(false),null,['ng-model'=> 'data.id_tipo' ,'class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label(\App\Constants\WordConstant::MEANNING_FLD,\App\Constants\WordConstant::MEANNING_LBL) !!}
    {!! Form::text(\App\Constants\WordConstant::MEANNING_FLD,null,['ng-model'=> 'data.meanning' ,'class' =>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label(\App\Constants\WordConstant::STATUS_FLD,\App\Constants\WordConstant::STATUS_LBL) !!}
    {!! Form::select(\App\Constants\WordConstant::STATUS_FLD,\App\Models\Words::getStatus(),null,['ng-model'=> 'data.status','class' =>'form-control']) !!}
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
