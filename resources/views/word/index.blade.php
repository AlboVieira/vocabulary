@extends('layout.master')

@section('title', 'Inicio')

@section('content')
<div class="row" ng-controller="WordsController">

    <div class="container">
        <div class="row">
            <button class="btn btn-primary" ng-click="toggleModal()"><i class="glyphicon glyphicon-floppy-disk"></i> Nova Palavra</button>
        </div>
        <br>
        <div class="row">
            <div class="input-group">
                <input type="search" ng-model="searchText" ng-keyup="autocompleteWords()" class="form-control" placeholder="Buscar palavra...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                  </span>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3 class="">Know</h3></div>
                    <div class="panel-body">
                        <ul class="list-group">
                                <li ng-repeat="word in knowWords" class="list-group-item cursos-pointer" ng-click="toggleModal(word)">
                                    <i uib-popover="Tipo: {{word.type}} Significado: {{word.meanning}}"
                                       popover-is-open="popoverIsOpen"
                                       ng-mouseover="popoverIsOpen = !popoverIsOpen"
                                       ng-mouseleave="popoverIsOpen = !popoverIsOpen" type="button"
                                       class="glyphicon glyphicon-search"></i>
                                    <span class="text-success ">{{word.word}}</span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="panel panel-warning">
                    <div class="panel-heading"><h3 class="">Almost Sure</h3></div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li ng-repeat="word in almostWords" class="list-group-item cursos-pointer" ng-click="toggleModal(word)">
                                <i uib-popover="Tipo: {{word.type}} Significado: {{word.meanning}}"
                                   popover-is-open="popoverIsOpen"
                                   ng-mouseover="popoverIsOpen = !popoverIsOpen"
                                   ng-mouseleave="popoverIsOpen = !popoverIsOpen" type="button"
                                   class="glyphicon glyphicon-search"></i>
                                <span class="text-warning ">{{word.word}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel-heading"><h3 class="">Don't Know</h3></div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li ng-repeat="word in dontWords" class="list-group-item cursos-pointer"
                                ng-click="toggleModal(word)">
                                <i uib-popover="Tipo: {{word.type}} Significado: {{word.meanning}}"
                                   popover-is-open="popoverIsOpen"
                                   ng-mouseover="popoverIsOpen = !popoverIsOpen"
                                   ng-mouseleave="popoverIsOpen = !popoverIsOpen"
                                   type="button"
                                   class="glyphicon glyphicon-search"></i>
                                <span class="text-danger ">{{word.word}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <modal title="Palavra" visible="showModal">
        @include('word.incluir')
    </modal>

</div>
@stop