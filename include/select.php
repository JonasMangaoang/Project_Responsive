<?php
	require_once('dbconn.php');
	$id = '2';

	$stmt = $conn->prepare('SELECT * FROM pdo WHERE ID=:id');
	$stmt->bindparam('id', $id, PDO::PARAM_STR);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$row = $stmt->fetch();

	echo "$row[ID], $row[Name]";
?>