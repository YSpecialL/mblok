<?php
	require_once("../function/db.php");
	require_once("../function/articl.php");
	$link = db_connect();	
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] =='POST') {
		
		$login = $_POST['login'];
		$pass = $_POST['pass'];			
		$user = articls_all($link, 'user', '*', 'login', $login);		
		
		if ($user[0]['user_pass'] == md5($pass)){
			
			$_SESSION['user'] = $user;			
			header("location: index.php");
			exit;
		}
	}	
	render("login.php");	
?>