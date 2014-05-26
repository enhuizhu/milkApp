<!doctype html>
<html ng-app="onlineMilk">
<head>
<title>first app</title>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<script language="javascript" src="js/appController.js"></script>
</head>
<body>
   <div>
       <label>name:<label>
       <input type="text" ng-model="username">
       <h1>hello,{{username}}</h1>
   </div> 
</body>
</html>
