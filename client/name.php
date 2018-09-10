<?php
	require 'connect.php';
	$query = $conn->query("SELECT * FROM `client` WHERE `client_id` = '$_SESSION[client_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$name = $fetch['name'];
	$idclt = $fetch['client_id'];
?>
