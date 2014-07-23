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
                first: 'first',
                last: 'last',
                email: 'email'
            };
        }
    ]);

    $(document).ready(function() {});

})();