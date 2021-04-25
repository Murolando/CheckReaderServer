<?php
	require '../connect.php';
	//$user_id=$_POST['user_id'];
	$user_id=11;
	//Вытаскиваем информацию о всех проектах
	$projects_id=mysqli_query($connect,"Select * From projects Join users_project On id_project=project_id Where user_id='$user_id'");
	print_r($projects_id);
	//Собираю проекты в json файл
	$rows=[];
	while($row = mysqli_fetch_assoc($projects_id))
    {
		//засовываю это информацию в массив $row
		$tmp=array(
			'prj_id' => $row['id_project'],
			'name' => $row['name'],
			'city' => $row['city'],
			'street' => $row['street'],
			'house_num' => $row['house_num']
		);
		array_push($rows,$tmp);
    }	
	echo json_encode($rows);