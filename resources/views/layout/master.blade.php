<!DOCTYPE html>
<html lang="pt-br" ng-app="controleDespesa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= asset('app/lib/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('app/lib/angular-ui-bootstrap/dist/ui-bootstrap-csp.css') ?>" rel="stylesheet">
    <link href="<?= asset('app/lib/ng-notify/dist/ng-notify.min.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>App Name - @yield('title')</title>
</head>
<body>

<!-- Fixed navbar -->
@include('layout.menu')



<!-- Begin page content -->
<div class="container-fluid" style="margin-top: 5%">

    <div class="row">
        <div class="col-sm-12">
            @yield('content')
        </div>
    </div>
</div>

<footer class="footer">
    @include('layout.footer')
</footer>

<!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
<script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
<script src="<?= asset('app/lib/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js') ?>"></script>
<script src="<?= asset('app/lib/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= asset('app/lib/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?= asset('app/lib/ng-notify/dist/ng-notify.min.js') ?>"></script>

<!-- AngularJS Application Scripts -->
<script src="<?= asset('app/app.js') ?>"></script>
<script src="<?= asset('app/services/service.js') ?>"></script>
<script src="<?= asset('app/controllers/home.js') ?>"></script>
<script src="<?= asset('app/directives/modal.js') ?>"></script>
<script src="<?= asset('app/controllers/words.js') ?>"></script>

</body>
</html>


