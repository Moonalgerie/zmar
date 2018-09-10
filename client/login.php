<?php
	if(ISSET ($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = $conn->query("SELECT * FROM `client` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;

		if($row > 0){
			session_start();
			$_SESSION['client_id'] = $fetch['client_id'];
			header('location:client/gal.php');
		}else{
			echo "<center><labe style = 'color:red;'>Nom d'utilisateur ou Mot de passe incorecte</label></center>";
		}
	}
?>
