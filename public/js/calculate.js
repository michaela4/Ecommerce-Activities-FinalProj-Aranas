console.log("functional");
var app = angular.module('Calculate', []);
app.controller('CalculateCtrl', CalculateCtrl);

function CalculateCtrl($scope, $log){
	$scope.qty = 0;
	$scope.prc = 0;
	
	$scope.calculatePrice = function() {
		$scope.qty =  $scope.quantity;		
		$scope.prc =  $scope.price;			 
	}
}
