<!DOCTYPE html>
<html>
<head>	
	<title>Авторизация</title>
	
    <!-- Необходимые Мета-теги всегда на первом месте -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="ООО 'Водоканалжилсервис'">
	<meta name="description" content="ООО 'Водоканалжилсервис'"> 
 	<link href="../css/template_css.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row justify-content-center">		
		<form action="login.php" method="post">
		  <div class="form-row align-items-center">
			<div class="col-sm-3 my-1">			  
			  <input type="text" class="form-control" name="login" placeholder="Логин">
			</div>
			<div class="col-sm-3 my-1">
			  <div class="input-group">				
				<input type="password" class="form-control" name="pass" placeholder="Пароль">
			  </div>
			</div>
			
			<div class="col-auto my-1">
			  <button type="submit" class="btn btn-primary">Войти</button>
			</div>
		  </div>
		</form>
	</div>
</div>		
</body>
</html>