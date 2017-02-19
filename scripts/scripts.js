// var w = window,
//     d = document,
//     e = d.documentElement,
//     g = d.getElementsByTagName('body')[0],
//     x = w.innerWidth || e.clientWidth || g.clientWidth,
//     y = w.innerHeight|| e.clientHeight|| g.clientHeight;
// console.log(x + ' by ' + y);

// var header = angular.element(document).find('header');
// header.css('height', y + 'px');

var app = angular.module('bikeBytesApp', []);

app.factory('dataFeed', ['$http', function($http) {
	function getFeed() {
		return $http.get('https://docs.google.com/spreadsheets/d/1a4LB1LTsIxV5vGZDo2-mIHak6bnTbeiR6AQE1VQx0-M/pub?gid=0&single=true&output=csv');
	};

	return {
		getFeed: getFeed()
	}
}]);

app.controller('bikeBytes', ['$scope', '$http', 'dataFeed', function($scope, $http, dataFeed) {

	dataFeed.getFeed.then(
		function success(response) {
			// console.log(response.data);
			var feed = response.data;
			var items = feed.split(',');
			// console.log(items);
			
			$scope.pushups = items[3];
			$scope.book = items[5];
			$scope.parkrunpb = items[7];
		},
		function error(response) {
			console.log(response);
		}
	);

}]);



