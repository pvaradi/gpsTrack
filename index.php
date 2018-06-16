<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>GPSTracker</title>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="index.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcIJ_Ati780K0bYIO4hkzB8sEaTmzn9UA&callback=initMAP"></script>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->

		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
	    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand" href="#"><img src="https://www.shareicon.net/data/32x32/2017/05/09/885776_green_512x512.png">  GPSTrack</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample04">
				<ul class="navbar-nav ml-auto ulstyle">
					<li class="nav-item">
						<a onclick="functionSceneNight()" class="nav-link" href="altitude.html">Altitude data</a>
					</li>
					<li class="nav-item">
						<a onclick="functionSceneDay()" class="nav-link" href="#">Download route</a>
					</li>
				  </li>
				</ul>
			</div>
		</nav> 
		<div class="container-map">
			<div id="map"></div>
		</div>
	</body>
</html>