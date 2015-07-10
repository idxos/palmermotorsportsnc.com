'use strict';

/* App Module */


var myApp = angular.module('myApp', [
  'ngRoute',
  'productAnimations',
  'productControllers',
  'productFilters',
  'productServices'
]);

myApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.

      when('/products', {
        templateUrl: 'partials/product-list.html',
        controller: 'ProductListController'
      }).
      when('/products/:productId', {
        templateUrl: 'partials/product-detail.html',
        controller: 'ProductDetailController'
      }).

      when('/dashboard', {
        templateUrl: 'partials/dashboard/dashboard.html',
        controller: 'DashboardCtrl'
      }).
      when('/aaf', {
        templateUrl: 'partials/dashboard/aaf.html',
        controller: 'DashboardCtrl'
      }).
      when('/operations', {
        templateUrl: 'partials/dashboard/operations.html',
        controller: 'DashboardCtrl'
      }).
      when('/reports', {
        templateUrl: 'partials/dashboard/reports.html',
        controller: 'DashboardCtrl'
      }).
      when('/daily-processing', {
        templateUrl: 'partials/dashboard/daily-processing.html',
        controller: 'DashboardCtrl'
      }).
      when('/rules', {
        templateUrl: 'partials/dashboard/daily-processing.html',
        controller: 'DashboardCtrl'
      }).


      otherwise({
        redirectTo: '/products'
      });
  }]);

