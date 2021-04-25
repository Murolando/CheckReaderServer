<?php
	require '../connect.php';
	$login=$_POST['login'];
	$password=$_POST['password'];
	$prov=mysqli_query($connect,query:"SELECT * FROM users WHERE login ='$login' AND password=$password");
	if(mysqli_num_rows($prov)>0)
	{
		echo true;
		
	}
	else
	{
		echo false;
	}
