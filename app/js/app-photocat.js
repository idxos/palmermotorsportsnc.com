'use strict';

/* App Module */


var phonecatApp = angular.module('phonecatApp', [
  'ngRoute',
  'phonecatAnimations',

  'phonecatControllers',
  'phonecatFilters',
  'phonecatServices'
]);

phonecatApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.

      when('/phones', {
        templateUrl: 'partials/phone-list.html',
        controller: 'PhoneListCtrl'
      }).
      when('/phones/:phoneId', {
        templateUrl: 'partials/phone-detail.html',
        controller: 'PhoneDetailCtrl'
      }).

      when('/no-ui-slider', {
        templateUrl: 'partials/no-ui-slider.html',
        controller: 'RangeSliderController'
      }).

      when('/product', {
        templateUrl: 'partials/phone-list.html',
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
        redirectTo: '/phones'
      });
  }]);
