<?php
	require_once("function/db.php");
	require_once("function/articl.php");
	$link = db_connect();	
	
	include_once ("veali/head.php");
	switch ($_GET['page']) {
    case 'new':			
		$new = articls_all($link, 'articl');		
		if (!isset($_GET['id'])){
			$new_1 = array_shift($new);
			include ("veali/new.php");
		}else{ 			
			$good = sor($new, $_GET['id'], 'articl_id');			
			include ("veali/newst.php");
		}		
        break;
    case 'doc':	
        $doc = articls_all($link, 'doc');
		$homy = articls_all($link, 'homy');
		$ocht1 = articls_all($link, 'ocht', 'DISTINCT ocht_kategor');
		$ocht = articls_all($link, 'ocht');
		$harmkd = articls_all($link, 'harmkd');
		$posrek = articls_all($link, 'posrek');		
		if (!isset($_GET['id'])){			
			include ("veali/doc.php");
		}else{ 
			$good = sor($doc, $_GET['id'], $_GET['page'].'_id');		
			include ("veali/docst.php");
		}
        break;
    case 'posrek':	
        
		$posrek = articls_all($link, 'posrek');		
		if (!isset($_GET['id'])){			
			include ("veali/doc.php");
		}else{ 
		$good = sor($posrek, $_GET['id'], $_GET['page'].'_id');
				
			include ("veali/docst.php");
		}
        break;
	case 'homy':        
		$homy = articls_all($link, 'homy');
				
		if (!isset($_GET['id'])){			
			include ("veali/doc.php");
		}else{ 
		$good = sor($homy, $_GET['id'], $_GET['page'].'_id');
					
			include ("veali/docst.php");
		}
        break;
	case 'ocht':	
       
		$ocht = articls_all($link, 'ocht');
		
		if (!isset($_GET['id'])){			
			include ("veali/doc.php");
		}else{ 
		$good = sor($ocht, $_GET['id'], $_GET['page'].'_id');
			
			include ("veali/docst.php");
		}
        break;
	case 'harmkd':	
    
		$harmkd = articls_all($link, 'harmkd');
		
		if (!isset($_GET['id'])){			
			include ("veali/doc.php");
		}else{ 
		$good = sor($harmkd, $_GET['id'], $_GET['page'].'_id');
				
			include ("veali/docst.php");
		}
        break;
	case 'kon':
		include ("veali/kon.php");
		 break;
	default:
		include ("veali/home.php");
		 break;
}
	
	include_once ("veali/footer.php");
	
?>