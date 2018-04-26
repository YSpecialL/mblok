<?php
	require_once("../function/db.php");
	require_once("../function/articl.php");
	$link = db_connect();		
	session_start();
	render("head.php");
	if (!isset($_SESSION['user'])){
		header("location: ../admin/login.php");		
	}
	
	if ($_SERVER['REQUEST_METHOD'] =='POST') {		
		if (isset($_FILES['content'])){		
			$content = (rand().$_FILES['content']['name']);
			rename($_FILES['content']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/pdf/'.$content);
			
			if (isset($_POST['kategor'])){	
				
				if ($_POST['kategor'] == ""){					
					newst($link, $_POST['tb'], $_POST['title'], $content, $img, $_POST['kategor2']);			
					header("location: ../admin/index.php");
					exit;
				}else{		
					newst($link, $_POST['tb'], $_POST['title'], $content, $img, $_POST['kategor']);			
					header("location: ../admin/index.php");
					exit;							
				}		
			}else{
				newst($link, $_POST['tb'], $_POST['title'], $content);			
				header("location: ../admin/index.php");
				exit;
			}
		
			if (isset($_FILES['img'])){			
				$img = (rand().$_FILES['img']['name']);
				rename($_FILES['img']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/pdf/'.$img);
				newst($link, $_POST['tb'], $_POST['title'], $_POST['content'], $img);			
				header("location: ../admin/index.php");
				exit;
			} else {
				newst($link, $_POST['tb'], $_POST['title'], $_POST['content']);
				header("location: ../admin/index.php");
				exit;
			}
	
		}
		
	}	
		
?>