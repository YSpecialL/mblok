<?php
	require_once("function/db.php");
	require_once("function/articl.php");
	$link = db_connect();	
	
	if ($_SERVER['REQUEST_METHOD'] =='POST') {
				newst($link, $_POST['user'], $_POST['koment'], $_GET['id']);			
				header("location: ".$_SERVER['REQUEST_URI']);
				}
	include_once ("veali/head.php");
			
		$new = articls_all($link, 'articl');		
		if (!isset($_GET['id'])){			
			include ("veali/new.php");
		}else{			
			$good = sor($new, $_GET['id'], 'articl_id');
			$koment = articls_all($link, 'koment', '*', 'id_articl', $_GET['id'], 'id', '' );
			
			include ("veali/newst.php");
				
		}
	include_once ("veali/footer.php");
	
?>