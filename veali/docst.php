<body>
	<div class="container-fluid">
		<div class="row justify-content-center inset">
			<div class="col-auto"><img src="images/inset-banner.jpg" class="img-fluid" alt="Сдесь должа быть картинка"></div>
		</div>	
		<div class="row justify-content-center menu-bar ">
			<div class="col-md-auto d-lg-none d-xl-block">
				<ul class="nav nav-pills" role="tablist">
				  <li class="nav-item btn">
					<a class="nav-link text-white"  href="/" role="tab">Главная</a>
				  </li>
				  <li class="nav-item btn">
					<a class="nav-link text-white " href="?page=new" role="tab">Новости</a>
				  </li>
				  <li class="nav-item btn">
					<a class="nav-link text-white active" href="?page=doc" role="tab">Документация</a>
				  </li>				  
				  
				   
				</ul>
				<!-- Вкладка панели -->  
			</div>			
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-12 rounded-top border">				
					<div class="tab-content">						
						<div class="tab-pane active" id="doc" role="tabpanel">
							<div class="container">
								<div class="row">
									<section class="magazine-section text-left btn-block">
										<h2 class="h3 text-left my-2 font-weight-bold"><?=$good[0][$_GET['page'].'_title']?></h2>
										<div class="row text-left">
											<div class="col-12">
												<div class="embed-responsive embed-responsive-4by3">
													<iframe class="embed-responsive-item" src="pdf/<?=$good[0][$_GET['page'].'_content']?>" allowfullscreen></iframe>
												</div>												
											</div>																					 
										</div>										 
									</section>
								</div>
							</div>			
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	

</body>