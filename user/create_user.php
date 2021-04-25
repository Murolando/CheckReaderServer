<?php
	require '../connect.php';
	
	$login=$_POST['login'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	//проверка на уникальность данных
	$prov=mysqli_query($connect,query:"SELECT * FROM users WHERE login ='$login'");
	if(mysqli_num_rows($prov)>0)
	{
		echo false; 
	}
	else
	{
		//Добавление 
		mysqli_query($connect,query:"INSERT INTO `users` (`id_user`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
		echo true;
	}
	
