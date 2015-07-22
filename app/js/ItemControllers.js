'use strict';

/* Controllers */

var ItemControllers = angular.module('ItemControllers', []);

myApp.controller('ItemsController', function($scope, $http) {
    $scope.items = [];
    $scope.totalItems = 0;
    $scope.itemsPerPage = 25; // this should match however many results your API puts on one page
    getResultsPage(1);

    $scope.pagination = {
        current: 1
    };

    $scope.pageChanged = function(newPage) {
        getResultsPage(newPage);
    };

    function getResultsPage(pageNumber) {
        // this is just an example, in reality this stuff should be in a service
        $http.get('http://api.wpswebservices.com/item?page=' + pageNumber)
            .then(function(result) {
                $scope.items = result.data.Items;
                $scope.totalItems = result.data.Count
            });
    }
})