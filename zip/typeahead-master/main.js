"use strict";
/*global angular,console*/
angular.module('customTypeahead', ['ui.bootstrap', 'ui.bootstrap.tpls'])

.controller('TypeaheadCtrl', ['$scope', '$http', '$timeout', '$q', function($scope, $http, $timeout, $q) {

	$scope.selected = undefined;
	let typeaheadLastValue = "";

	//Remove mutiple spaces from the ng-model(selected) of the input and
	//append the selected word along with a trailing space for user-friendly typing
	$scope.typeaheadOnSelect = (item) => {
		let words = typeaheadLastValue.split(" ");
		words[words.length - 1] = item;
		$scope.selected = words.join(" ") + " ";
	};
	
	$scope.$watch('selected', (newVal, oldVal) => {
		typeaheadLastValue = oldVal || "";
	});

	$scope.getSuggestion = word => {

		if (word.length > 0) {
			let deferred = $q.defer();
			getSuggestions(word).then(words => {
				deferred.resolve(words);
				$scope.$digest();//update typeahead popup with the latest matches
			}, () => {
				deferred.reject([]);
				$scope.loadingTypeahead = false;
				$scope.$digest();				
			});
			return deferred.promise;
		} else {
			$scope.loadingTypeahead = false;
			return [];
		}
	};


	// ================================= Mock Server Start =============================
	var FAILURE_COEFF = 10;
	var MAX_SERVER_LATENCY = 200;

	function getRandomBool(n) {
		var maxRandomCoeff = 1000;
		if (n > maxRandomCoeff) n = maxRandomCoeff;
		return Math.floor(Math.random() * maxRandomCoeff) % n === 0;
	}

	function getSuggestions(text) {
		var pre = 'pre';
		var post = 'post';
		var results = [];
		if (getRandomBool(2)) {
			results.push(pre + text);
		}
		if (getRandomBool(2)) {
			results.push(text);
		}
		if (getRandomBool(2)) {
			results.push(text + post);
		}
		if (getRandomBool(2)) {
			results.push(pre + text + post);
		}

		return new Promise((resolve, reject) => {
			var randomTimeout = Math.random() * MAX_SERVER_LATENCY;
			setTimeout(() => {
				if (getRandomBool(FAILURE_COEFF)) {
					reject();
				} else {
					resolve(results);
				}
			}, randomTimeout);
		});
	}
	// ================================= Mock Server End =============================


}]);