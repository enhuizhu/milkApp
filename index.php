<!doctype html>
<html ng-app="onlineMilk">
<head>
<title>first app</title>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<script language="javascript" src="js/appController.js"></script>
</head>
<body ng-controller="milkCtrl">
   <div>
      <form>
	     <label>milk name:</label>
		 <input type="text" ng-model="milkName"><br>
		 <label>milk price</label>
	     <input type="text" ng-model="milkPrice"><br>
	     <button ng-click="addNewMilk(milkName,milkPrice)">Add New Milke</button>
	  
      <ul ng-repeat="milk in milks">
	     <li>{{milk.name+":&pound;"+milk.price}} <button ng-click="deleteMilk($index)">delete</button></li>
	  </ul>
	  </form>
   </div> 
</body>
</html>
