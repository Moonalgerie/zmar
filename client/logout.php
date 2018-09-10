<?php
	session_start();
	session_unset(client_id);
	header("location:../conn.php");
?>
