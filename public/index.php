<!DOCTYPE html>
<html lang="en" ng-app="TestApp">
<head>
    <title>Test App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/main.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- JQuery CDN -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
		<li><a href="#main"><i class="fa fa-home"></i> Main</a></li>
                <li><a href="#users"><i class="fa fa-home"></i> Users </a></li>
            </ul>
        </div>
    </div>

    <br><br><br>

    <div class=="row">
	<!-- All of our Angular views go here /public/partials/* -->
	<div class="container" class="row">
	    <div class="col-xs-12">
	        <div ng-view></div>
	    </div>
        </div>
    </div>

    <!-- Source Venders -->
    <script type="text/javascript" src="frontend/js/vendors/angular.min.js"></script>
    <script type="text/javascript" src="frontend/js/vendors/angular-route.min.js"></script>

    <!-- Source TestApp -->
    <script type="text/javascript" src="frontend/js/apps/test.js"></script>

    <!-- Source Services -->
    <!-- <script type="text/javascript" src="frontend/js/services/test.js"></script> -->

    <!-- Source Controllers -->
    <script type="text/javascript" src="frontend/js/controllers/test_controller.js"></script>

    <!-- Source Directives -->

    <!-- Source Routes -->
    <script type="text/javascript" src="frontend/js/routes/routes.js"></script>

</body>
</html>
