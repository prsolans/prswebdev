(function() {
    'use strict';
    var app = angular.module('app', []);

    app.directive('headerLayout', function() {
        return {
            restrict: 'E',
            templateUrl: 'module/header.html'
        };
    });

    app.controller('ContactFormCtrl', ['$scope',
        function($scope) {
            $scope.contact = {

            };
        }
    ]);

    app.controller("ProjectsCtrl", function($scope, $http) {
        $scope.url = 'http://dev.prswebdev.com/symfony2/web/app_dev.php/project/api';
        $scope.projects = null;

        $http.get(url)
            .success(function(data) {
                $scope.projects = data;
                console.log('success');
            })
            .error(function(data, status, headers, config) {
                //  Do some error handling here
                console.log('error');
            });
    });

    $(document).ready(function() {});

})();