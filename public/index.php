<!DOCTYPE html>
<html lang="en" ng-app="TestApp">
<head>
    <title>Test App</title>

    <link rel="stylesheet" type="text/css" href="frontend/css/main.css">

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
                <li><a href="#users"><i class="fa fa-home"></i> Users </a></li>
                <li><a href="#main"><i class="fa fa-home"></i> Main</a></li>
            </ul>
        </div>
    </div>

    <br><br>

    <!-- All of our Angular views go here /public/partials/* -->
    <div class="container" class="row">
        <div class="col-xs-12">
	       <div ng-view></div>
        </div>
    </div>

	<!-- <div class="container" ng&#45;controller="TestController"> -->
	<!-- 	<span>{{ book }}</span> -->
	<!-- </div> -->

    <br><br>

    <!-- Source Venders -->
    <script type="text/javascript" src="frontend/js/vendors/angular.min.js"></script>
    <!-- <script type="text/javascript" src="/js/vendors/jquery&#45;2&#45;1&#45;0.min.js"></script> -->
    <script type="text/javascript" src="frontend/js/vendors/angular-route.min.js"></script>

    <!-- Source TestApp -->
    <script type="text/javascript" src="frontend/js/apps/test.js"></script>

    <!-- Source Services -->
    <!-- <script type="text/javascript" src="/js/services/authentication_service.js"></script> -->
    <!-- <script type="text/javascript" src="/js/services/session_service.js"></script> -->
    <!-- <script type="text/javascript" src="/js/services/book_service.js"></script> -->

    <!-- Source Controllers -->
    <script type="text/javascript" src="frontend/js/controllers/test_controller.js"></script>
    <!-- <script type="text/javascript" src="/js/controllers/books_controller.js"></script> -->

    <!-- Source Directives -->

    <!-- Source Routes -->
    <script type="text/javascript" src="frontend/js/routes/routes.js"></script>

</body>
</html>
