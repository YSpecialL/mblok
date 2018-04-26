<?php
	require_once("function/db.php");
	require_once("function/articl.php");
	$link = db_connect();	
	
	include_once ("veali/head.php");
			
		$new = articls_all($link, 'articl');		
		if (!isset($_GET['id'])){			
			include ("veali/new.php");
		}else{ 			
			$good = sor($new, $_GET['id'], 'articl_id');			
			include ("veali/newst.php");
		}
	include_once ("veali/footer.php");
	
?>