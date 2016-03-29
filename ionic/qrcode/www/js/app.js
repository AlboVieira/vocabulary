// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
angular.module('starter', ['ionic','ngCordova'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    if(window.cordova && window.cordova.plugins.Keyboard) {
      // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
      // for form inputs)
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);

      // Don't remove this line unless you know what you are doing. It stops the viewport
      // from snapping when text inputs are focused. Ionic handles this internally for
      // a much nicer keyboard experience.
      cordova.plugins.Keyboard.disableScroll(true);
    }
    if(window.StatusBar) {
      StatusBar.styleDefault();
    }
  });
})

.controller('QrCodeCtrl', ['$scope','$cordovaBarcodeScanner','$http', function ($scope,$cordovaBarcodeScanner,$http) {

  $scope.result = false;
  $scope.scan = function () {
    $cordovaBarcodeScanner.scan()
        .then(function(barcodeData) {

          $scope.checkCupom(barcodeData.text)

        }, function(error) {
        });
  };

  $scope.checkCupom = function (cumpo) {
    $http.get('http://192.168.2.8:8000/api/cupom/'+cumpo)
        .then(function(data){
          if(data.data.result == true){
            $scope.result = true;
          }


        }, function(error){

        })
  };


}]);
