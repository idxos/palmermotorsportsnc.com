'use strict';

/* App Module */


var myApp = angular.module('myApp', [
  'ui.bootstrap',                           
  'ngRoute',
  'ngResource',
  'productAnimations',
  'productControllers',
//  'ItemAnimations',
//  'ItemControllers'
 // 'ItemFilters',
 // 'ItemServices' 
  'productFilters',
  'productServices',
  'dropdownControllers',
  'paginationControllers',
  'modalControllers',
  'dashboardControllers',
  'tabControllers'
]);



myApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'partials/product-list.html',
        controller: 'ProductListController'
      }).
      when('/products', {
        templateUrl: 'partials/product-list.html',
        controller: 'ProductListController'
      }).
      when('/products/:productId', {
        templateUrl: 'partials/product-detail.html',
        controller: 'ProductDetailController'
      }).
      when('/', {
        templateUrl: 'partials/dashboard-list.html',
        controller: 'DashboardController'
      })
  }]);

