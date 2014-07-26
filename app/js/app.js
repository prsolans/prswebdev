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
        var url = 'http://dev.prswebdev.com/prswebdev/app/admin/web/app_dev.php/project/api.json';
        $scope.projects = null;
        $http.get(url)
            .success(function(data) {
                $scope.projects = data;
            })
            .error(function(data, status, headers, config) {
                //  Do some error handling here
                console.log('error' + status);
            });
    });

    $(document).ready(function() {});

})();
