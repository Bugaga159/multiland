<?php

	include_once "/connect_mysql.php";
	
	$login = $_POST['login'];
	$password = $_POST['password'];


	$log = "SELECT * FROM `users` WHERE `login` = '{$login}'"; 
	
	$query_user = mysqli_query($link, $log) or errorHelperRedirect("возникла проблема, связанная с подключением к базе данных, содержащей нужную информацию."," не найден пользователь!");

	$data = mysqli_fetch_array($query_user);

	#print_r($data);

	$password_hash = $data['password'];
	
	if (password_verify($password, $password_hash)) {

	    	
	    header("Location: ../profile.php?user_id=" . $data['user_id']);
		exit();
	}else {
	
		errorHelperRedirect("возникла проблема, связанная с подключением к базе данных, содержащей нужную информацию."," пароль введен не праильно!");
	}
	
?>