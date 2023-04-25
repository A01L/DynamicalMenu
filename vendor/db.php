<?php
	$connect = mysqli_connect('localhost', 'root', '', 'dm');

	if (!$connect) {
		die('Error connect to Data base!');
	}
?>