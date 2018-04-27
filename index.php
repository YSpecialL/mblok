<?php
	require_once("function/db.php");
	require_once("function/articl.php");
	$link = db_connect();	
	 (count(articls_all($link, 'articl', '*')));
	if ($_SERVER['REQUEST_METHOD'] =='POST') {
				newst($link, $_POST['user'], $_POST['koment'], $_GET['id']);			
				header("location: ".$_SERVER['REQUEST_URI']);
				}
	include_once ("veali/head.php");
		if (isset($_GET['page'])){
		$page = $_GET['page'];	
		}else	{
			$page = 1;
		}	
		$new = articls_all($link, 'articl', $page);
		if (!isset($_GET['id'])){
			$pagemax = ceil(count(articls_all($link, 'articl', '*'))/10);	
			include ("veali/new.php");
		}else{			
			$good = sor($new, $_GET['id'], 'articl_id');
			$koment = articls_all($link, 'koment', '*', '*', 'id_articl', $_GET['id'], 'id');
			
			include ("veali/newst.php");
				
		}
	include_once ("veali/footer.php");
	
?>