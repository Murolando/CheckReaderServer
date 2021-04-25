<?php
	require '../connect.php';
	//Создаю payment 
	$invoice=$_POST['invoice'];
	$datetime=$_POST['datetime'];
	$paytype_id=$_POST['paytype_id'];
	$amount=$_POST['amount'];
	mysqli_query($connect,"INSERT INTO 'payments' (`id_payment`, `invoice`, `datetime`, `paytype_id`, `amount`) 
	VALUES (NULL, '$invoice', '$datetime','$paytype_id','$amount')");
	
	//Создаю charge
	$title=$_POST['title'];
	$category_id=$_POST['cat_id'];
	$unit_id=$_POST['unit_id'];
	$price=$_POST['price'];
	$project_id=$_POST['prj_id'];
	$payment_id=mysqli_insert_id($connect);
	mysqli_query($connect,"INSERT INTO `charges` (`id_charge`, `title`, `category_id`, `unit_id`, `price`, `project_id`, `payment_id`) 
	VALUES (NULL, '$title', '$category_id', '$unit_id', '$price', '$project_id', '$payment_id')");
