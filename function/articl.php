<?php

function articls_all($link, $tbl, $sel = '*', $con = 'id', $id = '*', $sort = 'id', $pord = 'DESC')
{	

$sort = ($tbl.'_'.$sort);
 if($id == '*'){
	$con = '';
	}else { $con = ("WHERE {$tbl}_{$con} = '{$id}'");
	}

	$query = "SELECT $sel FROM $tbl $con ORDER BY $sort $pord";
	
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

function newst($link, $tbl, $title, $content, $img = '', $kategor = ''){
	if(!$img == ''){		
	$zbor = "INSERT INTO {$tbl} ({$tbl}_title, {$tbl}_content, {$tbl}_imags) VALUES ('{$title}', '{$content}', '{$img}')";
	}elseif (!$kategor == '') { 
		$zbor = "INSERT INTO {$tbl} ({$tbl}_title, {$tbl}_content, {$tbl}_kategor) VALUES ('{$title}', '{$content}', '{$kategor}')";	
	}else {
		$zbor = "INSERT INTO {$tbl} ({$tbl}_title, {$tbl}_content) VALUES ('{$title}', '{$content}')";
	}


		
			$result = mysqli_query($link, $zbor);
		
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