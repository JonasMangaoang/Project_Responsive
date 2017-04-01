<?php
	require_once('dbconn.php');
	$id = '2'; //replace with the id of the entry you want to update
	$name = 'Thomas';
	$mname = 'Leyson';
	$lname = 'Avelino';
    // translate into a function dbupdate($conn, $table, $id, $column, $new_value) returns statement execution result
	$stmt = $conn->prepare('UPDATE pdo SET Name=:name WHERE ID=:id');
	$stmt->bindparam('id', $id, PDO::PARAM_STR);
	$stmt->bindparam('name', $name, PDO::PARAM_STR);
	//$stmt->bindparam('mname', $mname, PDO::PARAM_STR);
	//$stmt->bindparam('lname', $lname, PDO::PARAM_STR);

	$stmt->execute();
?>