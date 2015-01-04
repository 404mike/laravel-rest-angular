'use strict';

/**
 * @ngdoc function
 * @name laravelApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the laravelApp
 */
angular.module('laravelApp')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });

