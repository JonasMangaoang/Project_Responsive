<?php
	if(isset($_POST["username"])){
		if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	        die();
	    }
		require_once('../include/dbconn.php');
		$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);

		$stmt=$conn->prepare('SELECT * FROM user_table WHERE username=:username');
		$stmt->bindparam('username', $username, PDO::PARAM_STR);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$row = $stmt->fetch();

		if($row > 0){
			die('<img src="http://localhost/Project_Responsive/images/notavailable.png"/>');
		}else{
			if($username==""){
				die();	
			}else{
				die('<img src="http://localhost/Project_Responsive/images/available.png"/>');
			}			
		}
	}
?>