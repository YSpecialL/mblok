<!DOCTYPE html>
<html>

<body>
<div class="container">
	<div class="row">		
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/admin">Админ панель</a></li>			
			<li class="breadcrumb-item"><?=$type[$_GET['page']]?></li>			
		  </ol>
		</nav>
	</div>
	<form action="../form/adminnew.php" method="post" enctype="multipart/form-data">
	  <input type="hidden" value="<?php echo ($_GET['page'])?>"  name="tb">
	  <div class="form-group">		
		<input type="text" required name="title" class="form-control" id="exampleFormControlInput1" placeholder="Введите название документа">
	  </div> 
	 <?php  switch ($_GET['page']) {
    case 'new':
		echo('<div class="form-group">
		<label for="exampleFormControlTextarea1">Содержимое</label>
		<textarea class="form-control" required name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>
	  <div class="form-group">
		<label for="exampleFormControlFile1">Example file input</label>
		<input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
	  </div>');		
		break;   
    
	case 'ocht':
		
		
        echo('<div class="form-group">			
			<select name="kategor" class="form-control" id="exampleFormControlSelect1">
			  <option value="">Выбирите категорию</option>');
			  foreach($ocht as $a){													
					echo("<option>{$a['ocht_kategor']}</option>");										
			  }
			echo('</select>
		</div>
		<div class="form-group">		
		<input type="text"  name="kategor2" class="form-control" id="exampleFormControlInput1" placeholder="Введите категории">
		</div>
		<div class="form-group">
		<label for="exampleFormControlFile1">PDF Файл</label>
		<input type="file" required name="content" class="form-control-file" id="exampleFormControlFile1">
		</div>');
			
		
        break;
	default:
		echo('<div class="form-group"><label for="exampleFormControlFile1">PDF Файл</label><input type="file" required name="content" class="form-control-file" id="exampleFormControlFile1"></div>');		
		break;
}
?>	  
	  <div class="form-group">
		
		<input type="submit" >
	  </div>
	</form>
</div>		
</body>
</html>