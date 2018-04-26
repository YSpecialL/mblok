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
					<a class="nav-link text-white active" href="?page=new" role="tab">Новости</a>
				  </li>
				  <li class="nav-item btn">
					<a class="nav-link text-white " href="?page=doc" role="tab">Документация</a>
				  </li>				  
				 
				   
				</ul>
				<!-- Вкладка панели -->  
			</div>			
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-12 rounded-top border">				
					<div class="tab-content">						
						<div class="tab-pane active" id="news" role="tabpanel">
							<div class="container">
								<div class="row">
									<section class="magazine-section text-left">
										<h2 class="h3 text-left my-2 font-weight-bold"><?=$good[0]['new_title']?></h2>
										<div class="row text-left">
											<div class="col-12">
												<div class="single-news">
													<div class="view overlay rounded z-depth-1-half mb-3 ">
														<?php if (empty($good[0]['new_imags'])) {																		
																}else { ?>																																			
																<img src="<?=$good[0]['new_imags']?>" class="img-fluid rounded" alt="Нет картинки">
																<a><div class="mask rgba-white-slight"></div></a>
														<?php }?>														
													</div>
													<div class="news-data mb-5">
														<p class="dark-grey-text"><strong><i class="fa fa-clock-o"></i><?=$good[0]['new_data']?></strong></p>
													</div>													 
													 <p align="justify"><?=$good[0]['new_content']?></p>
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