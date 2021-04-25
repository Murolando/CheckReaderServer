<?php
	require '../connect.php';
	
	mysqli_query($connect,"DELETE FROM `charges` WHERE `charges`.`id_charge` = $_POST['id_charge']");
