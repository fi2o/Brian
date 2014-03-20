<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="true" />
		
		<title>Brian Gonzalez</title>
		<meta name="description" content="Brian Gonzalez Front End Developer. Recent projects made by Brian Gonzalez and Mixart. JavaScript, jQuery, and AJAX scripts, CSS, and other cool stuff." />
		<meta name="keywords" content="front end, web development, web developer, development, awesome, JavaScript, jQuery, AJAX, CSS, CSS3, SASS, responsive, HTML, HTML5, PHP, MySQL, web design"
		
		<link rel="shortcut icon" href="images/favicon.png">
		
		<link rel="stylesheet" type="text/css" href="css/fonts/css/fontello.css" />
		<link rel="stylesheet" type="text/css" href="css/stylev1.1.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
		
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-49051012-1', 'briangp.com');
		  ga('send', 'pageview');
		
		</script>
		
	</head>
	<body>
		<div class="container">
			<div class="header cen-col">
				<div class="logo main-logo fluidTransOn">
					<div class="fig green fluidTransOn"></div>
					<div class="fig purple fluidTransOn"></div>
					<div class="fig blue fluidTransOn"></div>
					<div class="fig yellow fluidTransOn"></div>
					<div class="fig pink fluidTransOn"></div>
					<h1 class="logo-txt fluidTransOn">bg</h1>
				</div>
				<nav class="main-nav">
					<?php
					$URL = "$_SERVER[REQUEST_URI]";
					?>
					<h2 class="nav-link <?php if((strpos($URL, '/projects/index') === 0) or $URL == '/projects/'){ echo 'active'; } ?>"><a class="transTw" href="index.php">Projects</a></h2>
					<h2 class="nav-link <?php if(strpos($URL, '/projects/about') === 0){ echo 'active'; } ?>"><a class="transTw" href="about.php">About</a></h2>
					<h2 class="nav-link <?php if(strpos($URL, '/projects/todo') === 0){ echo 'active'; } ?>"><a class="transTw" href="todo.php">Todo</a></h2>
				</nav>
			</div>
			<article class="body">
				
