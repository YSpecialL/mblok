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
	  <input type="hidden" value="<?$_GET['page']?>"  name="tb">
	  <div class="form-group">
		<label for="exampleFormControlInput1">Заголовок</label>
		<input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	  </div>	    
	  <div class="form-group">
		<label for="exampleFormControlTextarea1">Содержимое</label>
		<textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>
	  <div class="form-group">
		<label for="exampleFormControlFile1">Example file input</label>
		<input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
	  </div>
	  <div class="form-group">
		
		<input type="submit" >
	  </div>
	</form>
</div>		
</body>
</html>