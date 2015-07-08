<!DOCTYPE HTML>

<html>
	<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="noty-2.3.5/js/noty/packaged/jquery.noty.packaged.min.js"></script>
		<title>Trialer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="angular.min.js"></script>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h2 id="ban">Trialer.co.uk - <em>The #1 site to get trials!</em></h2>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Home</a></li>
								
								<li><a href="tos.html">Terms of Service</a></li>
								
								
							</ul>
						</nav>

				</div>
				<div class="test" ng-app="App" ng-controller="Controller">
			<!-- Banner -->
				<section id="banner">
				
					<header>
						<h2>Search for products: <em>Simply type it in the textbox</em></h2>
						<center><input class="tb1" ng-model="name" type="text" placeholder="Search here.." style="width: 50%; color: black;"></center>
						<style>
						.tb1 {
						color: #0090ff;
}
						a {
							text-decoration: none;
						}
						</style>
					</header>
				</section>

			<!-- Highlights -->
			<center><h2>Our current products:</h2></center>
				<section class="wrapper style1">
				
					<div class="container">
			<script>
angular.module('App', [])
.controller('Controller', function($scope){
	$scope.artists = [
	{
		"name": "Crunchyroll",
		"country": "All countries except Japan",
		"img":"images/crunchy.png",
		"description":"You can set it to everything you want!",	
		"div":"crunch"
		},
		{
		"name": "Rhapsody",
		"country": "US only, be at the right spot",
		"img":"images/rhap.png",
		"description":"You can set it to everything you want!"
		},
		{
		"name": "Febreze",
		"country": "US only",
		"img":"images/feb.jpg",
		"description":"You can set it to everything you want!"
		},
		{
		"name": "Kellogs Froot Loops",
		"country": "US only",
		"img":"images/kel.jpg",
		"description":"You can set it to everything you want!"
		},
		{
		"name": "Pure Asia Garcinia Weight Loss",
		"country": "US, AU, CA, UK and NZ only",
		"img":"images/bottle.png",
		"description":"You can set it to everything you want!"
		},
		{
		"name": "Free Computer",
		"img":"images/pc.png",
		"description":"You can set it to everything you want!"
		}
		
	];

});
</script>
				
				<table style="width: 100%; height: 100%;" id="MAND">
					
					<tbody id="hoveren">
						<tr ng-repeat="artist in artists | filter:name">
						
						<td class="user-name" id="{{artist.div}}"><img id="{{artist.div}}" style="vertical-align: middle; align: right; max-width: 100%;
    max-height: 100%;" src="{{artist.img}}"></td>
						<td class="user-email" id="{{artist.div}}" style="vertical-align: middle; align: right; max-width: 100%;
    max-height: 100%;">{{artist.name}}<br>{{artist.description}}<br>{{artist.country}}<br><em style="font-size: 25px; display: none;" id="fade"><center>Click on the desired product tab to go to the link!</center></em></td>
						
						</tr>
						
					</tbody>
				</table>
				
				
				
				


			</div>
			<style>
			.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
		</div>
		<script>
		
		$( "#hoveren" ).hover(
  function() {
   
	$("#hoveren").css("border", "1px solid #000");
	$(".btn").css("background", "#3cb0fd", "background", "#000", "background", "#3cb0fd");
	$("#fade").fadeIn("slow");
  }
    
);
$( "#hoveren" ).mouseleave(
  function() {
   $("#hoveren").css("border", "none");
	$(".btn").css("background", "#3498db");
	$("#fade").fadeOut("slow");
  }
    
);
	$("#MAND").on('click', '#crunch', function() {
  window.location.href = "http://example.com/new_url";
});
	
	
	
		</script>
		
						</div>
					</div>
				</section>
				
						<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<form action="subscribe.php" method="post" class="subscribe-form">
                            <center>
							<h2>Get notified when we have new trials!</h2>
                                <input type="email" id="subscribe-email" style="width: 50%; color: black;"placeholder="Enter your email..."><br>
                            
                                <input type="submit" id="subscribe-submit" class="button white" value="Subscribe To Recieve New Offers">
                            </center>
                        </form>
						</header>
					</div>
				</section>
</div>
			<!-- Gigantic Heading -->
				

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>