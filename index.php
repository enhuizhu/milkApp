<!doctype html>
<html ng-app="onlineMilk">
<head>
<title>first app</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/>
<link rel="stylesheet/less" type="text/css" href="less/style.less" />
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script>
<script language="javascript" src="js/bootstrap.min.js"></script>
<script language="javascript" src="js/appController.js"></script>
</head>
<body ng-controller="milkCtrl">
 <div class="container-fluid">  
    <?php include "layout/header.php"?>
   
      
   <div class="row-fluid">
       <div class="span12">
	   <blockquote>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
       <small>Someone famous</small>
     </blockquote>
	 
	  <blockquote class="pull-right">
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis.</p>
       <small>Someone famous</small>
     </blockquote>
	 <div class="clear"></div>
	 For example, <code>section</code> should be wrapped as inline.
	<pre>
      &lt;p&gt;Sample text here...&lt;/p&gt;
    </pre>
   
    <table class="table table-bordered table-striped table-condensed">
	   <thead>
	    <tr>
		<th>title1</th>
	    <th>title2</th>
	    </tr>
	   </thead>
	   <tbody>
	    <tr>
		  <td>content1</td>
		  <td>content2</td>
		</tr>
	   </tbody>
	</table>
   
   </div>
       
   </div>
   
   <div class="row-fluid">
       <div class="span2">sidebar</div>
       <div class="span10">
	      <form class="form-horizontal">
  <fieldset>
    <legend>Legend text</legend>
    <div class="control-group">
      <label class="control-label" for="input01">Text input</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="input01">
        <p class="help-block">Supporting help text</p>
      </div>
    </div>
  </fieldset>
</form>
	   
	   <form class="form-horizontal">
  <fieldset>
    <legend>Legend text</legend>
    <div class="control-group">
      <label class="control-label" for="input01">Text input</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="input01">
        <p class="help-block">Supporting help text</p>
      </div>
    </div>
  </fieldset>
</form>
	   </div>
   </div>
   
   
   
   
   
   <div>
      <form class="well">
	     <label>milk name:</label>
		 <input type="text" ng-model="milkName"><br>
		 <label>milk price</label>
	     <input type="text" ng-model="milkPrice"><br>
	     <button ng-click="addNewMilk(milkName,milkPrice)">Add New Milke</button>
	  
      <ul ng-repeat="milk in milks" class="unstyled">
	     <li>{{milk.name+":&pound;"+milk.price}} <button ng-click="deleteMilk($index)" class="btn">delete</button></li>
	  </ul>
	  </form>
   </div>
</div>   
</body>
</html>
