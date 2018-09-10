<!DOCTYPE html>
<?php require_once "client/connect.php"?>
<html lang = "en">
	<head>
		<title>Flowers'Home</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Flowers'Home</a>
			</div>
		</div>
	</nav>
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "gal.php">Our Collections</a></li> |
		<li><a href = "conn.php">Log In</a></li> |
		<li><a href = "inscr.php">Subscribe</a></li> |
		<li><a href = "contactus.php">Contact Us</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">

				<div class="container">
		<br>

		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="panel panel-danger">
			<br>
					<center><label style = 'color:green;'>Welcome between us ! Log in now </center></label>
				</br>
				<div class="panel-heading">
					<h4><center>Log In</center></h4>
				</div>
				<div class="panel-body">
					<form method="POST">
						<div class="form-group">
							<label>User Name</label>
							<input type="text" name="username" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required="required">
						</div>
						<br>
						<div class="form-group">
							<button name="login" class="form-control btn btn-primary"><i class="glyphicon glyphicon-log-in"> Login</i></button>
						</div>
					</form>
					<?php require_once 'client/login.php'?>
					<!--?php require_once 'login.php'?-->
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
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
