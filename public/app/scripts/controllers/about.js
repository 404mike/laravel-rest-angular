'use strict';

/**
 * @ngdoc function
 * @name laravelApp.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the laravelApp
 */
angular.module('laravelApp')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
