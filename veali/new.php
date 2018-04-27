
<!DOCTYPE html>
<html>
<body>
	<div class="container-fluid">			
		
		
		<div class="container">
			<div class="row">
				<div class="col-12 rounded-top ">	
					
							
								<nav class="breadcrumb">
									<h2 class="h3 breadcrumb-item text-left my-2 font-weight-bold">Мой Блог</h2>
								</nav>
							
							<section class="magazine-section text-left">								
									<?php foreach($new as $a): ?>
										<div class="card text-center mb-1">								  
										  <div class="card-body">
											<h5 class="card-title"><a class="h4" href="?page=new&id=<?=$a['articl_id']?>"><strong><?=$a['articl_title']?></strong></a></h5>
											<p class="card-text"><?php echo mb_strimwidth($a['articl_content'], 0, 500, "...")?></p>									
										  </div>
										  <div class="card-footer text-muted">
											<?=$a['articl_data']?>
										  </div>
										</div>
									<?php endforeach ?>
							</section>
								
				
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery первый, затем Tether, затем Bootstrap JS. -->  

</body>
<!--Footer-->

</html>