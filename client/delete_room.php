<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `pan` WHERE `pan_id` = '$_REQUEST[pan_id]'") or die(mysqli_error());
	 header("location: panier.php");
