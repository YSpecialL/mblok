<body>
	<div class="container-fluid">
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-12 rounded-top border">				
					<div class="tab-content">						
						<div class="tab-pane active" id="news" role="tabpanel">
							<div class="container">
								<div class="row">
									<section class="magazine-section text-left">
										<h2 class="h3 text-left my-2 font-weight-bold"><?=$good[0]['articl_title']?></h2>
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
											<div class="text-center mb-4">
												<h3>Комментарии<span class="badge blue">Три</span>
												</h3>
											</div>
											<!--First row-->
											<div class="row mb-4">
												
												
												<!--Content column-->
												<div class="col-sm-10 col-12">
													<a>
														<h4 class="font-weight-bold">Джон ДОУ</h4>
													</a>
													<div class="mt-2">
														<ul class="list-unstyled">
															<li class="comment-date">
																<i class="fa fa-clock-o"></i> 05/10/2015</li>
														</ul>
													</div>
													<p class="grey-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
													 консекват. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
													 nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
												</div>
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
											<h3 class="section-heading h3 pt-5">Оставить ответ</h3>
											<p class="text-center mb-4">Пользователь Не Вошел В Систему</p>

											<!--Grid row-->
											<div class="row">

												<!--Grid column-->
												<div class="col-lg-4 col-md-12">

													<div class="input-group md-form form-sm form-3 pl-0">
														<div class="input-group-prepend">
															<span class="input-group-text white grey-text" id="basic-addon9">1</span>
														</div>
														<input type="text" class="form-control form-control-sm mt-0 black-border rgba-white-strong" placeholder="Имя пользователя" aria-describedby="basic-addon9">
													</div>

												</div>
												<!--Grid column-->

												<!--Grid column-->
												<div class="col-lg-4 col-md-6">

													<div class="input-group md-form form-sm form-3 pl-0">
														<div class="input-group-prepend">
															<span class="input-group-text white grey-text" id="basic-addon10">2</span>
														</div>
														<input type="text" class="form-control form-control-sm mt-0 black-border rgba-white-strong" placeholder="Адрес эл. почты" aria-describedby="basic-addon10">
													</div>

												</div>
												<!--Grid column-->

												<!--Grid column-->
												<div class="col-lg-4 col-md-6">

													<div class="input-group md-form form-sm form-3 pl-0">
														<div class="input-group-prepend">
															<span class="input-group-text white grey-text" id="basic-addon101">3</span>
														</div>
														<input type="text" class="form-control form-control-sm mt-0 black-border rgba-white-strong" placeholder="Веб-сайт" aria-describedby="basic-1">
													</div>

												</div>
												<!--Grid column-->

											</div>
											<!--Grid row-->

											<!--Grid row-->
											<div class="row">

												<div class="col-12 mt-4">

													<div class="form-group basic-textarea">
														<textarea class="form-control rounded pl-3 pt-3" id="exampleFormControlTextarea1" rows="6" placeholder="Напиши что-нибудь здесь..."></textarea>
													</div>

													<div class="text-right">
														<button class="btn btn-primary btn-md waves-effect waves-light"><ya-tr-span data-index="265-0" data-value="Submit" data-translation="Отправить" data-type="trSpan">Отправить</ya-tr-span></button>
													</div>

												</div>

											</div>
											<!--Grid row-->

									</div></section>
									</div>
								</div>
							</div>			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

</body>