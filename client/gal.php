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
				<a class = "navbar-brand" >Flower's Home</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i  class = "glyphicon glyphicon-user"></i> Bienvennu ,<h style = "color:#ff0000;"><?php echo $name;?></h></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i>Log Out</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<ul id = "menu">
		<li><a href = "cmd.php">Order Now</a></li> |
		<li><a href = "panier.php">My Bouquet</a></li> |
		<li><a href = "contactus.php">Contact Us</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>Check out Our Collections ! </h3><small><p> Spring Collection</p></small></strong>
				<br />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img  src = "../images/gallery/aa.jpg" width = "250" height = "250"/>
					<pl><center><a href = "cmd1.php"><h4>Weddings</h4></a></center></pl>
				</div><br />

				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img  src = "../images/gallery/bb.jpg" width = "250" height = "250"/>
					<pl><center><a href = "cmd2.php"><h4>Birthdays</h4></a></center></pl>
				</div><br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "../images/gallery/cc.jpg" width = "250" height = "250"/>
					<pl><center><a href = "cmd3.php"><h4>Home Decoration</h4></a></center></pl>
				</div>

				<br style = "clear:both;" />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "../images/gallery/dd.jpg" width = "250" height = "250"/>
					<pl><center><a href = "cmd4.php"><h4>Graduation</h4></a></center></pl>
				</div><br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "../images/gallery/ee.jpg" width = "250" height = "250"/>
					<pl><center><a href = "cmd5.php"><h4>Anniversary</h4></a></center></pl>
				</div><br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "../images/gallery/ff.jpg" width = "250" height = "250"/>
					<pl><center><a href = "cmd6.php"><h4>Other Occasions</h4></a></center></pl>
				</div><br />
				<br style = "clear:both;" />
				<br />
				<br style = "clear:both;" />
				<br />
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>Saad Dahleb University</label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>
