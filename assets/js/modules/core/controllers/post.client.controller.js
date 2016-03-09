'use strict';

angular.module('core').controller('DetailCtrl', ['$scope', '$stateParams', 'Posts', 
	function( $scope, $stateParams, Posts ) {
		Posts.get( { ID: $stateParams.id}, function(res){
			$scope.post = res;
		})
	}
])

