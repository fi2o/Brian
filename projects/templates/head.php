<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="true" />
		
		<title>Brian Gonzalez</title>
		
		<link rel="shortcut icon" href="images/favicon.png">
		
		<link rel="stylesheet" type="text/css" href="styles/fonts/css/fontello.css" />
		<link rel="stylesheet" type="text/css" href="styles/stylev1.0.1.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
		
	</head>
	<body>
		
		<div class="container">
			<div class="header cen-col">
				<nav class="main-nav">
					<?php
					$URL = "$_SERVER[REQUEST_URI]";
					?>
					<h2 class="nav-link <?php if(strpos($URL, '/projects/about') === 0){ echo 'active'; } ?>"><a class="transTw" href="about.php">About</a></h2>
					<h2 class="nav-link <?php if((strpos($URL, '/projects/index') === 0) or $URL == '/projects/'){ echo 'active'; } ?>"><a class="transTw" href="index.php">Projects</a></h2>
					<h2 class="nav-link <?php if(strpos($URL, '/projects/todo') === 0){ echo 'active'; } ?>"><a class="transTw" href="todo.php">Todo</a></h2>
				</nav>
				<div class="logo main-logo fluidTransOn">
					<div class="fig green fluidTransOn"></div>
					<div class="fig purple fluidTransOn"></div>
					<div class="fig blue fluidTransOn"></div>
					<div class="fig yellow fluidTransOn"></div>
					<div class="fig pink fluidTransOn"></div>
					<h1 class="logo-txt fluidTransOn">bg</h1>
				</div>
			</div>
			<article class="body">
				
