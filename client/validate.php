<?php
	session_start();
	if(!ISSET($_SESSION['client_id'])){
		header("location:../conn.php");
	}
