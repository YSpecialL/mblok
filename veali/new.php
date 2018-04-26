
<!DOCTYPE html>
<html>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center inset">
			<div class="col-auto"><img src="images/inset-banner.jpg" class="img-fluid" alt="Сдесь должа быть картинка"></div>
		</div>	
		<div class="row justify-content-center menu-bar ">
			<div class="col-md-auto  d-xl-block">
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
										<h2 class="h3 text-left my-2 font-weight-bold">Новости</h2>
										<div class="row text-left">
											<div class="col-lg-6 col-md-12">
												<div class="single-news">
													<div class="view overlay rounded z-depth-1-half mb-3 ">
														<?php if (empty($new_1['new_imags'])) {																		
																}else { ?>																																			
																<img  class="img-fluid rounded" alt="Нет картинки">
																<a><div class="mask rgba-white-slight"></div></a>
														<?php }?>														
													</div>
													<div class="news-data mb-5">
														<p class="dark-grey-text"><strong><i class="fa fa-clock-o"></i><?=$new_1['new_data']?></strong></p>
													</div>
													 <h4 class="pt-4"><a class="text-dark" href="?page=new&id=<?=$new_1['new_id']?>"><strong><?=$new_1['new_title']?></strong></a></h3>
													 <p align="justify"><?php echo mb_strimwidth($new_1['new_content'], 0, 249, "...")?></p>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 list-group list-group-flush">
												<?php foreach($new as $a): ?>													
													<div class="list-group-item">
														<div class="row">
															<div class="col-md-3">
																<!--Image-->
																<div class="view overlay rounded z-depth-1">
																	<?php if (empty($a['new_imags'])) {																		
																			}else { ?>																																			
																	<img src="<?=$a['new_imags']?>" class="img-fluid rounded" alt="Нет картинки">
																	 <a><div class="mask rgba-white-slight"></div></a>
																	<?php }?>
																</div>
															</div>
															<div class="col-md-9">
																<p class="dark-grey-text font-italic"><?=$a['new_data']?></p>
																<a class="text-dark font-weight-bold" href="?page=new&id=<?=$a['new_id']?>"><?=$a['new_title']?><i class="fa a-angle-right"></i></a>
															</div>
														</div>
													</div>													
												<?php endforeach ?>	
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
	
	<!-- jQuery первый, затем Tether, затем Bootstrap JS. -->  

</body>
<!--Footer-->

</html>