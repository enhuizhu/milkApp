/**
* angular controller is here!
**/
var onlineMilk= angular.module("onlineMilk",[]);
onlineMilk.controller("milkCtrl",function($scope){
   $scope.milks=[
      {"name":"cowGate","price":"7.99"},
      {"name":"aiTamei","price":"10.00"},
      {"name":"huiShi","price":"10.00"}
   ];
   
   /**
   * add new milk to the list
   **/
   $scope.addNewMilk=function(milkName,milkPrice){
      var milkObj={}
      milkObj.name=milkName;
      milkObj.price=milkPrice;
      $scope.milks.push(milkObj);	  
   }
   
   /**
   * delete miik from the list
   **/
   $scope.deleteMilk=function(arrayIndex){
      console.log("index is:",arrayIndex);
	  $scope.milks.splice(arrayIndex,1);
   }
   
}); 

