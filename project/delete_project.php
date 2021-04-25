<?php
	require '../connect.php';
	$user_id=$_POST['user_id'];
	$prj_id=$_POST['prj_id'];
	//Удаляю из списка проектов
	mysqli_query($connect,"DELETE FROM projects WHERE id_project = $prj_id");
	//Удаляю из таблицы связи проекта и юзера
	mysqli_query($connect,"DELETE FROM users_project WHERE user_id=$user_id AND project_id=$prj_id");
	
?>