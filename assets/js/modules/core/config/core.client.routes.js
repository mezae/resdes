'use strict';

// Setting up route
angular.module('core').config(['$stateProvider', '$urlRouterProvider',
    function($stateProvider, $urlRouterProvider) {
        // Redirect to home view when route not found
        $urlRouterProvider.otherwise('/');
        $stateProvider
            .state( 'list', {
                url: '/',
                controller: 'ListCtrl',
                templateUrl: appInfo.template_directory + 'templates/list.html'
            })
            .state( 'detail', {
                url: '/posts/:id',
                controller: 'DetailCtrl',
                templateUrl: appInfo.template_directory + 'templates/detail.html'
            })
    }
]);