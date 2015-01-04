'use strict';

/**
 * @ngdoc function
 * @name laravelApp.controller:UsersCtrl
 * @description
 * # UsersCtrl
 * Controller of the laravelApp
 */
angular.module('laravelApp')
  .controller('UsersCtrl', function ($scope , $http) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];

    // 

	$http.get('/api/v1/users/').
	  success(function(data, status, headers, config) {
	    // this callback will be called asynchronously
	    // when the response is available
	    $scope.userData = data;
            console.log(data)
	  }).
	  error(function(data, status, headers, config) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

  });
