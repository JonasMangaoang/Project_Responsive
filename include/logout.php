<?php
	session_start();
	session_destroy();
	header('Location: http://localhost/Project_Responsive/pages/login.php');	
?>