<!DOCTYPE html>
<html>

<head>
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">



<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
<!-- <link type="text/css" rel="stylesheet" href="sc/sc.css"/>
 --><meta charset="utf-8">
<title>Steel City Tavern</title>

<?php include 'assets/web/headerIndex.web' ?>
<?php include 'assets/php/config.php' ?>
<?php include 'assets/php/navIndex.php' ?>

</head>

	<body>
		<h3>Welcome to Steel City Tavern</h3>
		<h2>Hello and welcome! This is the official Steel City Tavern Website.
			Here, you can find our drink specials, kitchen menu, and event 
			lineup. You can follow us on Facebook, Twitter  
		</h2>
		<?php include "assets/php/menu.php"; ?>
		<br>
		<?php include "assets/php/lifeAtTheTavern.php"; ?>
		
		<br>
		
		<?php include "assets/php/about.php"; ?>
		<br>
		<?php include "assets/php/locationAndHours.php"; ?>
		<br>
		<?php include "assets/php/contact.php"; ?>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				
		<!--<img class="Logo" src="sctLogo.png" alt="Steel City Tavern logo" width="20%" height="20%"></br>
	</h1> -->	
	 <!-- <div id="row-fluid" class="row">
       		<a href="sc/sc.html" class="span2  BUT button"> Home </a>
            <a href="sc/lifeAtTheTavern.html" class="span2  BUT button"> Life at the Tavern </a>
            <a href="sc/specials.html" class="span2  BUT button"> Specials </a>
            <a href="sc/events.html" class="span2  BUT button"> Events </a>
            <a href="sc/locationAndHours.html" class="span2 BUT button"> Location and Hours </a>
            <a href="sc/contactSc.html" class="span2 BUT button" float:right> Contact </a>
    </div> -->
		
	</body>

</html>
