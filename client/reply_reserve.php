<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Flowers'Home</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Flowers'Home</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i>  Bienvennu , <h style = "color:#ff0000;"><?php echo $name;?></h></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Log Out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<ul id = "menu">
		<li><a href = "gal.php">Our Collections</a></li> |
		<li><a href = "cmd.php">Order Now ! </a></li> |
		<li><a href = "panier.php">My Bouquet</a></li> |
		<li><a href = "contactus.php">Contact Us</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Order</h3></strong>
				<br />
				<div class = "col-md-4"></div>
				<div class = "well col-md-4">
					<center><h3>Your order has been received !</h3></center><br />
					<br />
					<center><h4>Thank you !</h4></center>
					<br />
					<center><a href = "cmd.php" class = "btn btn-success"><i class = "glphyicon glyphicon-check"></i> Retour</a></center>
				</div>
				<div class = "col-md-4"></div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>Saad Dahleb University</label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>
