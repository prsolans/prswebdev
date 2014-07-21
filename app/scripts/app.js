(function() {
    'use strict';
    var app = angular.module('prswebdevHome', []);

    app.directive("pageHeader", function() {
        return {
            restrict: 'E',
            templateUrl: '/modules/header.html'
        };
    });

    app.directive("pageMenu", function() {
        return {
            restrict: 'E',
            templateUrl: '/modules/menu.html'
        };
    });

    app.directive("pageFooter", function() {
        return {
            restrict: 'E',
            templateUrl: '/modules/footer.html'
        };
    });

    app.controller('MenuController', function() {
        this.menuList = menuItems;
    });

    var menuItems = [{
        name: "Home",
        link: "/"
    },{
        name: "About",
        link: "/about/"
    }, {
        name: "Demos",
        link: "/demos/"
    }, {
        name: "Portfolio",
        link: "/portfolio/"
    }];

})();
