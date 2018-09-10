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
		<li><a href = "cmd.php">Order Now !</a></li> |
		<li><a href = "panier.php">My Bouquet</a></li> |
		<li><a href = "contactus.php">Contact Us</a></li>
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<form method="POST">
				<strong><h3>Your Order</h3></strong>
				<br />
				<?php
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>

				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "../photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3><?php echo $fetch['room_type']?></h3>
						<h3 style = "color:#00ff00;"><?php echo "Le prix. ".$fetch['price'].".00";?> DA</h3>
						<div class = "form-inline" style = "float:left; margin-left:20px;">
							<label>Number Of Flowers</label>
							<br />
							<input type = "number" min = "1" max = "9999" name = "nbr" class = "form-control" required = "required"/>
						</div>
					</div>
				</div>


						<div class = "form-group">
							<button name = "add_account" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i>Order Now !</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php
					if(ISSET($_POST['add_account'])){
				$room_id=$fetch['room_id'];
				$room_type=$fetch['room_type'];
				$price=$fetch['price'];
				$photo=$fetch['photo'];
				$nbr= $_POST['nbr'];

				$conn->query("INSERT INTO `pan` (pan_type,room_id,price,nbr,photo,client_id) VALUES('$room_type','$room_id', '$price','$nbr', '$photo','$idclt')") or die(mysqli_error());
				echo "<center><label style = 'color:green;'>Your Order has been received ! </center></label>";
				}


?>

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
