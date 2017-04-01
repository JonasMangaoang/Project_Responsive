<?php
	include('../pages/statements.php');
	session_start();

	$rooms = array("rm210", "rm211", "rm212", "rm213", "rm214", 
	   "rm215", "rm216", "rm301", "rm302", "rm303", 
	   "rm304", "rm305", "rm306", "rm307", "rm308", 
	   "rm309", "rm310", "rm311", "rm312", "rm313", 
	   "rm314", "rm315", "rm316", "rm317", "rm318", 
	   "rm401", "rm406", "rm409", "rm410", 
	   "cw1", "cw2", "cw3");

	if(isset($_POST["section"])){
		if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	        die();
	    }
		$schedule = filter_var($_POST["section"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
		$id = $_SESSION['id'];

		try{
			$row = r_sched_table($id);
			$result = 0;
			for($i=0;$i<32;$i++){
				$place = $rooms[$i];
				if(!empty($row[$place])){
					$holder = explode(" ", $row[$place]);
					if($schedule == $holder[1]){
						$result++;
						break;
					}
				}else{
					//do nothing
				}				
			}

			if($result > 0){
				$_SESSION['PASS1'] = '0';
				session_write_close();
				die('<img id="wew" src="../images/notavailable.png" width="15px" heigth="15px"/>');
			}else{
				$_SESSION['PASS1'] = '1';
				session_write_close();
				die('<img id="wew" src="../images/available.png" width="15px" heigth="15px"/>');
			}
		}catch(PDOException $e){
			echo "Error: $e";
		}
	}
?>