<?php

function articls_all($link, $tbl, $page = '1', $sel = '*', $con = 'id', $id = '*', $sort = 'id')
{	

$sort = ($tbl.'_'.$sort);
 if($id == '*'){
	$con = '';
	}else { $con = ("WHERE {$tbl}_{$con} = '{$id}'");
	}
if ($page == '*') {
	$page = '';
	}else {
		$offset = ((10 * $page) - 10);
		$page = 'DESC LIMIT '.$offset.', 10';
		
		}
	
	$query = "SELECT $sel FROM $tbl $con ORDER BY $sort $page";
	
	$result = mysqli_query($link, $query);
	
	
	if (!$result){
		die(mysqli_error($link));
	}
	
	$n = mysqli_num_rows($result);
	$prots = array();
	
	for ($i = 0; $i < $n; $i++){
		$row = mysqli_fetch_assoc($result);
		$prots[] = $row;
	}
	return $prots;
}

function render($tenplate, $parame){
	
	include ("../veali/{$tenplate}");	
}

function newst($link,$user, $koment, $articl_id){
			
	
		$t = "INSERT INTO koment (koment_user, koment_content, koment_id_articl) VALUES ('%s', '%s', '%s')";
	

	$query = sprintf($t,
		mysqli_real_escape_string($link, $user),
		mysqli_real_escape_string($link, $koment),
		mysqli_real_escape_string($link, $articl_id));
		
			$result = mysqli_query($link, $query);
		
			if (!$result)
				die(mysqli_error($link));

	return true;
}

function sor($arra, $argy, $stb){	
	$good = []; 
	
	foreach ($arra as $p) { 	
		if ($p[$stb] == $argy) {
		$good[] = $p;
		}
	}
		return $good;
}







?>