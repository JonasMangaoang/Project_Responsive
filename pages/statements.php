<?php

	function r_sched_table_all(){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `sched_table`');
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetchAll(PDO::FETCH_ASSOC);
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_sched_table($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `sched_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_subject_table_all(){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `subject_table`');
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetchAll(PDO::FETCH_ASSOC);
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_subject_table($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `subject_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_subject_table_code_only($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT `code` FROM `subject_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row['code'];
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_section_table($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `section_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_section_table_all(){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `section_table`');
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetchAll(PDO::FETCH_ASSOC);
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_section_table_section_only($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT `section` FROM `section_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row['section'];
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_instructor_table($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `instructor_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_instructor_table_all(){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT * FROM `instructor_table`');
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetchAll(PDO::FETCH_ASSOC);
			return $row;
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_instructor_table_instructor_only($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT `instructor` FROM `instructor_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row['instructor'];
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function r_time_table_slot_only($id){
		include 'dbconn.php';
		$r_user_table = $conn->prepare('SELECT `time_slot` FROM `time_table`
										WHERE `id`=:id');
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
			$row = $r_user_table->fetch();
			return $row['time_slot'];
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function u_sched_table_rm210($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm210`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm210`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm211($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm211`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm211`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm212($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm212`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm212`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm213($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm213`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm213`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm214($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm214`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm214`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm215($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm215`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm215`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm216($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm216`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm216`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm301($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm301`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm301`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm302($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm302`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm302`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm303($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm303`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm303`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm304($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm304`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm304`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm305($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm305`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm305`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm306($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm306`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm306`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm307($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm307`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm307`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm308($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm308`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm308`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm309($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm309`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm309`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm310($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm310`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm310`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm311($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm311`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm311`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm312($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm312`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm312`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm313($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm313`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm313`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm314($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm314`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm314`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm315($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm315`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm315`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm316($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm316`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm316`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm317($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm317`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm317`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm318($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm318`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm318`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm401($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm401`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm401`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm406($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm406`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm406`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm409($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm409`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm409`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_rm410($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm410`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `rm410`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_cw1($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `cw1`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `cw1`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_cw2($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `cw2`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `cw2`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}
	function u_sched_table_cw3($value,$id){
		include 'dbconn.php';
		if (is_null($value)||empty($value)) {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `cw3`=NULL
											WHERE `id`=:id');
		}
		else {
			$r_user_table = $conn->prepare('UPDATE `sched_table` SET `cw3`=:value
											WHERE `id`=:id');
			$r_user_table->bindparam(':value', $value, PDO::PARAM_STR);
		}	
		$r_user_table->bindparam(':id', $id, PDO::PARAM_INT);
		try{
			$r_user_table->execute();
		}catch(PDOExceptions $e){
			echo "    **ERROR**    Database SEARCH/SELECT failed: $e";
		}
	}

	function u_sched_table_room_value_where_id($room,$value,$id){
		switch ($room) {
         case 'rm210':
             u_sched_table_rm210($value,$id);
             break;
         case 'rm211':
             u_sched_table_rm211($value,$id);
             break;
         case 'rm212':
             u_sched_table_rm212($value,$id);
             break;
         case 'rm213':
             u_sched_table_rm213($value,$id);
             break;
         case 'rm214':
             u_sched_table_rm214($value,$id);
             break;
         case 'rm215':
             u_sched_table_rm215($value,$id);
             break;
         case 'rm216':
             u_sched_table_rm216($value,$id);
             break;
         case 'rm301':
             u_sched_table_rm301($value,$id);
             break;
         case 'rm302':
             u_sched_table_rm302($value,$id);
             break;
         case 'rm303':
             u_sched_table_rm303($value,$id);
             break;
         case 'rm304':
             u_sched_table_rm304($value,$id);
             break;
         case 'rm305':
             u_sched_table_rm305($value,$id);
             break;
         case 'rm306':
             u_sched_table_rm306($value,$id);
             break;
         case 'rm307':
             u_sched_table_rm307($value,$id);
             break;
         case 'rm308':
             u_sched_table_rm308($value,$id);
             break;
         case 'rm309':
             u_sched_table_rm309($value,$id);
             break;
         case 'rm310':
             u_sched_table_rm310($value,$id);
             break;
         case 'rm311':
             u_sched_table_rm311($value,$id);
             break;
         case 'rm312':
             u_sched_table_rm312($value,$id);
             break;
         case 'rm313':
             u_sched_table_rm313($value,$id);
             break;
         case 'rm314':
             u_sched_table_rm314($value,$id);
             break;
         case 'rm315':
             u_sched_table_rm315($value,$id);
             break;
         case 'rm316':
             u_sched_table_rm316($value,$id);
             break;
         case 'rm317':
             u_sched_table_rm317($value,$id);
             break;
         case 'rm318':
             u_sched_table_rm318($value,$id);
             break;
         case 'rm401':
             u_sched_table_rm401($value,$id);
             break;
         case 'rm406':
             u_sched_table_rm406($value,$id);
             break;
         case 'rm409':
             u_sched_table_rm409($value,$id);
             break;
         case 'rm410':
             u_sched_table_rm410($value,$id);
             break;
         case 'cw1':
             u_sched_table_cw1($value,$id);
             break;
         case 'cw2':
             u_sched_table_cw2($value,$id);
             break;
         case 'cw3':
             u_sched_table_cw3($value,$id);
             break;
         default:
             header("Location: table.php?message=noroom_$room");
             break;
        }
	}

	function formatstr($instructor)
	{
		$len = strlen($instructor);
		$pos = strpos($instructor, ",");
		$instructor = substr($instructor, 0, $pos+3);
		$instructor = strtoupper($instructor);
		return $instructor.".";
	}
?>