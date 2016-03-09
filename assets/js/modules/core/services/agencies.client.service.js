'use strict';

//Letters service used for communicating with the agencies REST endpoints
angular.module('core').factory('Posts', ['$resource',
    function($resource) {
        return $resource( appInfo.api_url + 'posts/:ID', {
		ID: '@id'
	})
    }
]);