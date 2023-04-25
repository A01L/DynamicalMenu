<?php 
// Just a Code Space
// Frame Work v01
// Author: Just Adil

						// data base control
	function db_connect($log, $pass, $name, $server = 'localhost'){
		$connect = mysqli_connect("$server", "$log", "$pass", "$name");

		if (!$connect) {
			$connect = 'Error connect to Data base!';
		}
		return $connect;
	}
	function get_data_db($db, $table, $data, $index, $index2){
		$querry = mysqli_query($db, "SELECT * FROM `$table` WHERE `$index` = '$index2'");
		$datas = mysqli_fetch_assoc($querry);
   	    return $datas["$data"];
	}
 ?>
