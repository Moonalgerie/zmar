
<?php
	if(ISSET($_POST['add_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$query = $conn->query("SELECT * FROM `client` WHERE `username` = '$username'") or die(mysqli_error());

			if($password != $password2)
			{
			echo "<center><label style = 'color:red;'>Erreur!! : Mot de passe incorect..</center></label>";
			}
			else
			{
				$conn->query("INSERT INTO `client` (name, username, password) VALUES('$name', '$username', '$password')") or die(mysqli_error());
			echo "<center><label style = 'color:green;'>Inscription avec success....</center></label>";
				header("location:inscrsucces.php");



			}
	}
?>
