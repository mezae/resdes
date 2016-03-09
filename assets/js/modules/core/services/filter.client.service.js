'use strict';

//Letters service used for communicating with the agencies REST endpoints
angular.module('core').filter('to_trusted', ['$sce', 
	function( $sce ){
		return function( text ) {
			return $sce.trustAsHtml( text );
		}
	}
]);