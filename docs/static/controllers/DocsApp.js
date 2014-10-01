(function()
{
    'use strict';
    
    var app = angular.module('DocsApp', ["ngRoute", 'DocsApp.home', 'ui.router']);
    app.config(function myAppConfig($stateProvider, $urlRouterProvider) {
        $urlRouterProvider.otherwise('/home');
    });
    app.directive('docsHeader', function()
    {
        return {
            restrict: 'E',
            templateUrl: 'static/partials/menu-top.html',
        };
    });
    app.directive('docsSidebar', function()
    {
        return {
            restrict: 'E',
            templateUrl: 'static/partials/sidebar.html',
        };
    });
    app.directive('docsContent', function()
    {
        return {
            restrict: 'E',
            templateUrl: 'static/partials/content/main.html',
        };
    });
    /*
    app.factory('posts', [function()
    {
        var o = 'a';
        return o;
    }]);
    */
    app.controller('MainCtrl', [function($scope)
    {
        var self = this;
        
    }]);
    app.controller('HeaderCtrl', [function($scope)
    {
        var self = this;
    }]);
    app.controller('SideCtrl', [function($scope)
    {
        var self = this;
    }]);
    app.controller('ContentCtrl', [function($scope)
    {
        var self = this;
    }]);
})();