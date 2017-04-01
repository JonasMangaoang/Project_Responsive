<?php
	require_once('dbconn.php');

	$username = $_POST['uname'];
	$password = $_POST['password'];

	$stmt = $conn->prepare("SELECT * FROM user_table WHERE username=:username");
	$stmt->bindparam('username', $username, PDO::PARAM_STR);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute();
	
	$row = $stmt->fetch();

	if($row['password'] == $password){
		session_start();
		$_SESSION['username'] = $row['username'];
		$_SESSION['type'] = $row['type'];
		if($_SESSION['type'] == '1' || $_SESSION['type'] == '2'){
			header('Location: http://localhost/Project_Responsive/pages/admin.php');
		}else if($_SESSION['type'] == '0'){
			header('Location: http://localhost/Project_Responsive/pages/user.php');		
		}else{

		}
	}else{
		header('Location: http://localhost/Project_Responsive/pages/login.php');
	}
?>