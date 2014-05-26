/**
* angular controller is here!
**/
var onlineMilk= augular.module("onlineMilk",[]);
onlineMilk.controller("milkCtrl",function($scope){
   $scope.milks=[
      {"name":"cowGate","price":"7.99"},
      {"name":"aiTamei","price":"10.00"},
      {"name":"huiShi","price":"10.00"}
   ];
}); 

