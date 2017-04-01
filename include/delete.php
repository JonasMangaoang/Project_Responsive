<?php
	require_once('dbconn.php');
	$id = '3';

    // translate into a function dbdelete($conn, $table, $id) returns statement execution result
	$stmt = $conn->prepare('DELETE FROM pdo WHERE ID=:id');
	$stmt->bindparam('id', $id, PDO::PARAM_STR);
	// enclose in try catch block
	$stmt->execute();
?>