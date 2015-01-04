'use strict';

/**
 * @ngdoc overview
 * @name laravelApp
 * @description
 * # laravelApp
 *
 * Main module of the application.
 */
angular
  .module('laravelApp', [
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngMessages',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: '/app/views/main.html',
        controller: 'MainCtrl'
      })
      .when('/about', {
        templateUrl: '/app/views/about.html',
        controller: 'AboutCtrl'
      })
      .when('/users', {
        templateUrl: '/app/views/users.html',
        controller: 'UsersCtrl'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
