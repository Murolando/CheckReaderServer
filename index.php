<?php
	require "connect.php";
	if($_POST['type_of_request']==1)
	{
		require "user/create_user.php";
	}
	else if($_POST['type_of_request']==2)
	{
		require "user/login_user.php";
	}
	else if($_POST['type_of_request']==3)
	{
		require "project/create_project.php";
	}
	else if($_POST['type_of_request']==4)
	{
		require "project/delete_project.php";
	}
	else if($_POST['type_of_request']==5)
	{
		require "charges/create_charges.php";
	}
	else if($_POST['type_of_request']==6)
	{
		require "charges/delete_charges.php";
	}