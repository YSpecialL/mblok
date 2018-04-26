<?php
	require_once("../function/db.php");
	require_once("../function/articl.php");
	$link = db_connect();
	$type = [
		"new" => "Новости",
		"doc" => "Документы",
		"homy" => "Дома в управлении",
		"ocht" => "Отчётность",
		"harmkd" => "Общая характеристика МКД",
		"posrek" => "Постановление РЭК",		
		];
	session_start();
	render("head.php");	
	if (!isset($_SESSION['user'])){
		header("location: login.php");		
	}
	switch ($_GET['page']) {
    case 'new':	
		include ("../veali/admindoc.php");	
		break;
    case 'doc':
        include ("../veali/admindoc.php");
        break;
    case 'homy':
        include ("../veali/admindoc.php");
        break;
	case 'ocht':
		$ocht = articls_all($link, 'ocht', 'DISTINCT ocht_kategor');
		
        require ("../veali/admindoc.php");
		
        break;
	case 'harmkd':
        include ("../veali/admindoc.php");
        break;
	case 'posrek':
        include ("../veali/admindoc.php");
        break;	
	default:
		include ("../veali/adminpanel.php");
		 break;
}
	
?>