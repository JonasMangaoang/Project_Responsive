<?php
	include '../include/dbconn.php';
	include '../pages/statements.php';

	$id = '1';

	$rooms = array("rm210", "rm211", "rm212", "rm213", "rm214", 
	   "rm215", "rm216", "rm301", "rm302", "rm303", 
	   "rm304", "rm305", "rm306", "rm307", "rm308", 
	   "rm309", "rm310", "rm311", "rm312", "rm313", 
	   "rm314", "rm315", "rm316", "rm317", "rm318", 
	   "rm401", "rm406", "rm409", "rm410", 
	   "cw1", "cw2", "cw3");	

	try{
		$row = r_sched_table($id);
		$tocheck = explode(" ", $row['rm210']);
		echo $tocheck[0];
		echo $tocheck[1];
		echo $tocheck[2];
		echo $tocheck[3];
		for($i=1;$i<32;$i++){
			$place = $rooms[$i];
			$holder = explode(" ", $row[$place]);
			//echo $holder[0] . ",";

			if($tocheck[0] == $holder[0]){
				$stop = $i;
				break;
			}else{
				//do nothing
				$stop = $i;
			}
		}
		//echo $stop;
	}catch(PDOException $e){
		echo "Error: $e";
	}
?>