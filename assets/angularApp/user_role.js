
var ispManager=angular.module('ispManager',[]);

ispManager.controller('user_role', ['$scope','$http',  '$location', function($scope,$http, $location) {
	$scope.baseUrl = $location.protocol() + "://" + location.host+"/isp/";
 	$scope.newUserRole={};
 	$scope.clickedUserRole={};
	$scope.permissions=[];
	$scope.user_roles=[];

 	// Init
 	init();

 	$scope.clicked_addnew=function(){
 		getPages();
 		$scope.newUserRole={};
 	}

 	$scope.saveUserRole=function(permissions,newUserRole){
 		$scope.user_roles.push($scope.newUserRole);
 		var data = [$scope.newUserRole, permissions];
 		saveNewRole(data);
 		$scope.newUserRole={};
 	};

 	$scope.clicked=function(user_role){
 		$scope.clickedUserRole=user_role;
 		getPermission(user_role.roleId);
 	};
 	$scope.deleteSelected=function(user_role){
 		deleteRole(user_role.roleId);
 	};
 	$scope.editUserRole=function(permissions,clickedUserRole){ 
 		var data = [clickedUserRole, permissions];
 		updateRole(data);

 	};


 	function init() {
 		getPages();
 		getRoles();
 	}

 	function getPages(){

			$http.get($scope.baseUrl+"backend/user_role/get_pages").
 				then(function success(response, status, headers, config){
 					$scope.permissions=(response.data);
 				},function error(err) {

		})
 	};
 	function getRoles(){
 		$http.get($scope.baseUrl+"backend/user_role/get_roles").
 				then(function success(response, status, headers, config){
 					$scope.user_roles=(response.data);
 				},function error(err) {

		})
 	};
 	function getPermission($roleId){
 		$http.get($scope.baseUrl+"backend/user_role/get_permission/"+$roleId).
 				then(function success(response, status, headers, config){
 					$scope.permissions=(response.data);
 					//console.log(response.data);
 				},function error(err) {

		})
 	};

 	function saveNewRole(data){

	    var jsonData=angular.toJson(data);
	 //   var objectToSerialize={'object':jsonData};
		$http.post($scope.baseUrl+"backend/user_role/save_new_role/", jsonData)
				.then(function success(response, status, headers, config){
		 				console.log(response.data);
		 			},function error(err) {
		 				console.log(err);
				})
	
 	};
 	function updateRole(data){

	    var jsonData=angular.toJson(data);
		$http.post($scope.baseUrl+"backend/user_role/update_role/", jsonData)
				.then(function success(response, status, headers, config){
		 				console.log(response.data);
		 			},function error(err) {
		 				console.log(err);
				})
	
 	};

 	function deleteRole($roleId){
 		$http.get($scope.baseUrl+"backend/user_role/delete_role/"+$roleId).
 				then(function success(response, status, headers, config){
 					init();
 					console.log(response.data);
 				},function error(err) {

		})
 	};


}]);