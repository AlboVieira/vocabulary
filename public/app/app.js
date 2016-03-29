var app = angular.module('controleDespesa', ['ui.bootstrap','ngNotify'])
.constant('API_URL', 'http://localhost:8000/api/')
.run(function(ngNotify) {
    ngNotify.config({
        theme: 'pure',
        position: 'top',
        duration: 2000,
        type: 'success',
        sticky: false,
        button: true,
        html: false
    });

});