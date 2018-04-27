<body>
	<div class="container-fluid">
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-12 rounded-top ">				
					<div class="tab-content">						
						
							
									<nav class="breadcrumb">
										<a class="h6 breadcrumb-item " href="/">Мой Блог</a>
										<span class="breadcrumb-item active">Статья</span>
										
									</nav>
									<section class="magazine-section text-left">
										<h2 class="h3 text-left font-weight-bold"><?=$good[0]['articl_title']?></h2>
										<div class="row text-left">
											<div class="col-12">
												<div class="single-news">
													<div class="view overlay rounded z-depth-1-half mb-3 ">
														<?php if (empty($good[0]['articl_imags'])) {																		
																}else { ?>																																			
																<img src="<?=$good[0]['articl_imags']?>" class="img-fluid rounded" alt="Нет картинки">
																<a><div class="mask rgba-white-slight"></div></a>
														<?php }?>														
													</div>
													<div class="news-data mb-5">
														<p class="dark-grey-text"><strong><i class="fa fa-clock-o"></i><?=$good[0]['articl_data']?></strong></p>
													</div>													 
													 <p align="justify"><?=$good[0]['articl_content']?></p>
												</div>
											</div>																					 
										</div>										 
									</section>
									<section>

										<!--Main wrapper-->
										<div class="comments-list text-center text-md-left mb-5">
											<div class="text-center my-4">
												<h3>Комментарии<span class="badge blue"><?=count($koment)?></span>
												</h3>
											</div>
											<!--First row-->
											<div class="row mb-4">
												<!--Content column-->
												<?php foreach($koment as $a): ?>												
												<div class="col-sm-10 col-12">
													<a>
														<h4 class="font-weight-bold"><?=$a['koment_user']?></h4>
													</a>
													<div class="mt-2">
														<ul class="list-unstyled">
															<li class="comment-date">
																<i class="fa fa-clock-o"></i> <?=$a['koment_date']?></li>
														</ul>
													</div>
													<p class="grey-text"><?=$a['koment_content']?></p>
												</div>
												<?php endforeach ?>
												<!--/.Content column-->
											</div>
											<!--/.First row-->
											
										</div>
										<!--/.Main wrapper-->

									</section>
									<div class="col-12">
									<section>

            <!--Leave a reply form-->
										<div class="reply-form text-center">
											<h3 class="section-heading  pt-5">Оставить комментарий</h3>											
											<form method="post">
											<!--Grid row-->
											<div class="row">

												<!--Grid column-->
												<div class="col-lg-4 col-md-12">

													
														
														<input type="text" required name="user" class="form-control form-control-sm mt-0 black-border rgba-white-strong" placeholder="Имя пользователя" aria-describedby="basic-addon9">
													

												</div>
												<!--Grid column-->

												

											</div>
											<!--Grid row-->

											<!--Grid row-->
											<div class="row">

												<div class="col-12 mt-4">

													<div class="form-group basic-textarea">
														<textarea name="koment" required class="form-control rounded pl-3 pt-3" id="exampleFormControlTextarea1" rows="6" placeholder="Напиши что-нибудь здесь..."></textarea>
													</div>

													<div class="text-right">
														<button class="btn btn-primary btn-md waves-effect waves-light">Отправить</button>
													</div>

												</div>

											</div>
											<!--Grid row-->
										</form>
									</div></section>
									</div>
									
						
					</div>
				</div>
			</div>
		</div>
	</div>
	

</body>