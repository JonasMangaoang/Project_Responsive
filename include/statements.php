<?php
	
	require_once('dbconn.php');

	//for adding entry to the database
	$c_tablename = $conn->prepare('INSERT INTO tablename(col1, col2, col3) VALUES(:val1, :val2, :val3)');

	function c_tablename($val1='NULL',$val2='NULL',$val3='NULL')
	{
		$c_tablename->bindparam('val1', $val1, PDO::PARAM_STR);
		$c_tablename->bindparam('val2', $val2, PDO::PARAM_STR);
		$c_tablename->bindparam('val3', $val3, PDO::PARAM_STR);
		try {
			$c_tablename->execute();
		} catch (PDOExceptions $e) {
			echo "    **ERROR**    Database INSERT failed: $e";
		}
	}
	
	//for updating an entry in the database
	$u_tablename_colall = $conn->prepare('UPDATE tablename SET col1=:val1, col2=:val2, col3=:val3');

	function u_tablename_colall($val1='NULL', $val2='NULL', $val3='NULL'){
		$u_tablename_colall->bindparam('val1', $val1, PDO::PARAM_STR);
		$u_tablename_colall->bindparam('val2', $val2, PDO::PARAM_STR);
		$u_tablename_colall->bindparam('val3', $val3, PDO::PARAM_STR);
		try{
			$u_tablename_colall->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database UPDATE failed: $e"; 
		}
	}

	//for deleting and entry in the database
	$d_tablename = $conn->prepare('DELETE FROM tablename WHERE uniqueidentifire = :val1');

	function d_tablename($val1='NULL'){
		$d_tablename->bindparam('val1', $val1, PDO::PARAM_STR);
		try{
			$d_tablename->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database DELETE failed: $e";
		}
	}

	//for selecting an entry from the database
	$r_tablename = $conn->prepare('SELECT * FROM tablename WHERE col1 = :val1');

	function r_tablename($val1='NULL'){
		$r_tablename->bindparam('val1', $val1, PDO::PARAM_sTR);
		try{
			$r_tablename->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
?>