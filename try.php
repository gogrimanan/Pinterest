<?php
include ('header.php');

session_start();
include('userProfile.php');
session_write_close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/try.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<section id = "center">
	<div class="dropdown" align="center">
   	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
   	<span class="caret"></span></button>
   	<ul class="dropdown-menu">
   	<li class="dropdown-header">Dropdown header 1</li>

   		<li><a href="#">HTML</a></li>
   		<li><a href="#">CSS</a></li>
   		<li><a href="#">JavaScript</a></li>
   		<li class="divider"></li>
    <li class="dropdown-header">Dropdown header 2</li>
      <li><a href="#">About Us</a></li>
  	</ul></div>
  	<div class="dropdown" align="center">
   	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
   	<span class="caret"></span></button>
   	<ul class="dropdown-menu">
   	<li class="dropdown-header">Dropdown header 1</li>

   		<li><a href="#">HTML</a></li>
   		<li><a href="#">CSS</a></li>
   		<li><a href="#">JavaScript</a></li>
   		<li class="divider"></li>
	</div>

	</section>

</body>
</html>	






