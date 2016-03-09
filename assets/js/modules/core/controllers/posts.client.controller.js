'use strict';

angular.module('core').controller('ListCtrl', ['$scope', 'Posts', 
    function( $scope, Posts ) {

        Posts.query(function( res ) {
            $scope.posts = res;
        });

    }
])
