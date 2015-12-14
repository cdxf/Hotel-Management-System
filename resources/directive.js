/* global app */
(function () {
	var resourcesDir = 'resources/';
	app = angular.module('directive', []);
	app.directive('HelloWord',function(){})
	app.directive('header', function () {
		return {
			restrict: 'E',
			templateUrl: resourcesDir + 'header.html'
		}
	});
})();