<?php
	require_once('dbconn.php');

	$id = '';
	$username = $_POST['uname'];
	$email= $_POST['email'];
	$password = $_POST['password'];
	$type = $_POST['type'];

	if($type == 'Student' || $type == 'Faculty'){
		$type = '0';
	}

	$stmt = $conn->prepare('INSERT INTO user_table(username, password, type) 
							VALUES(:username, :password, :type)');
	$stmt->bindparam('username', $username, PDO::PARAM_STR);
	$stmt->bindparam('password', $password, PDO::PARAM_STR);
	$stmt->bindparam('type', $type, PDO::PARAM_INT);
	
	try{
		$stmt->execute();	
		header('Location: http://localhost/Project_Responsive/pages/login.php');
	}catch(PDOException $e){
		echo 'Error! Could not add to Database';
	}	
?>