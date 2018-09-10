<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Gestion Fleurs || A propos</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Gestion || Fleurs</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i  class = "glyphicon glyphicon-user"></i>  Bienvennu ,<h style = "color:#ff0000;"><?php echo $name;?></h></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Déconnexion</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<ul id = "menu">
		<li><a href = "index.php">Aceuil</a></li> |
		<li><a href = "gal.php">Galleries</a></li> |
		<li><a href = "cmd.php">Commandez</a></li> |
		<li><a href = "panier.php">Mon panier</a></li> |
		<li><a href = "apropos.php">A propos</a></li> |
		<li><a href = "contactus.php">Contactez nous</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>A PROPOS</h3></strong>
				<br />
				<strong><h4 style = "color:#ff0000;">1. Devellopeur</h4></strong>
				<p>Bounedjar Mohamed Hani </p>
				<p>Felfoul Mustapha Younes </p>
				<br />
				<strong><h4 style = "color:#ff0000;">2. Date de création</h4></strong>
				<p>01/01/2018</p>
				<br />
				<strong><h4 style = "color:#ff0000;">3. Branche</h4></strong>
				<p>informatique</p>
				<br />
				<strong><h4 style = "color:#ff0000;">4. Spécialité</h4></strong>
				<p>Réseaux et Systemes Informatique "S.I.R"</p>
				<br />
				<strong><h4 style = "color:#ff0000;">5. Année</h4></strong>
				<p>2eme année Master</p>
				<br />
				<strong><h4 style = "color:#ff0000;">6. Groupe</h4></strong>
				<p>01</p>
				<br />
				<br />
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>USDB &copy; Copyright 2018 </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
</html>
