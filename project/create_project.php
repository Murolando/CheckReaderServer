<?php
	require '../connect.php';
	
	if($_POST['cng']==1)
	{
		$prj_name=$_POST['prj_name'];
		$prj_city=$_POST['prj_city'];
		$prj_str=$_POST['prj_str'];
		$prj_house_num=$_POST['prj_house_num'];
		mysqli_query($connect,"UPDATE `projects` SET `name` = '$prj_name', `city` = '$prj_city', `street` = '$prj_str','house_num'='$prj_house_num' WHERE `projects`.`id_project` = $project_id");
	}
	else
	{
		//Беру user_id
		$user_login=$_POST['user_login'];
		$user_id=mysqli_query($connect,"SELECT * FROM users WHERE login = '$user_login'");
		$user_id=mysqli_fetch_all($user_id);
		$user_id=$user_id[0][0];
		//Добавляю в таблицу проектов проект 
		$prj_name=$_POST['prj_name'];
		$prj_city=$_POST['prj_city'];
		$prj_str=$_POST['prj_str'];
		$prj_house_num=$_POST['prj_house_num'];
		//Добавляю
		mysqli_query($connect,"INSERT INTO `projects` (`id_project`, `name`, `city`, `street`, `house_num`) VALUES (NULL, '$prj_name', '$prj_city', '$prj_str', '$prj_house_num')")
		//Беру project_id
		$prj_id=mysqli_insert_id($connect);
		//Добавляю связь в user_project
		mysqli_query($connect,"INSERT INTO `users_project` (`id_user_projects`, `user_id`, `project_id`) VALUES (NULL, '$user_id', '$prj_id')");

	}

