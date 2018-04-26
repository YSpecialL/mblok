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
					<a class="nav-link text-white " href="?page=new" role="tab">Новости</a>
				  </li>
				  <li class="nav-item btn">
					<a class="nav-link text-white active " href="?page=doc" role="tab">Документация</a>
				  </li>				  
				  
				   
				</ul>
				
			</div>			
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-12 pt-1 rounded-top border">				
					<div class="tab-content">		
						<div class="tab-pane active" id="dociment" role="tabpanel">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<section class="magazine-section text-left">
											<div class="row">
												<div class="col-3 pl-0">
													<div class="list-group list-group-flush text-left ">
														<div class="list-group" id="list-tab" role="tablist">															
															<a class="px-2 rounded list-group-item list-group-item-action d-flex align-items-center justify-content-between active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Документы<span class="badge badge-primary badge-pill"><?=count($doc)?></span></a>
															<a class="px-2 rounded list-group-item list-group-item-action d-flex align-items-center justify-content-between" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Дома в управлении<span class="badge badge-primary badge-pill"><?=count($homy)?></span></a>															
															<a class="px-2 rounded list-group-item  d-flex align-items-center justify-content-between"><strong>Отчётность</strong></a></li>
															<?php $n = 0;
															foreach($ocht1 as $a): 
															 $n++; 
															 $good = sor($ocht, $a['ocht_kategor'], 'ocht_kategor');?>
															<a class="pl-4 pr-2 rounded list-group-item list-group-item-action d-flex align-items-center justify-content-between" id="list-ocht<?=$n?>-list" data-toggle="list" href="#list-ocht<?=$n?>" role="tab" aria-controls="ocht<?=$n?>"><?=$a['ocht_kategor']?><span class="badge badge-primary badge-pill"><?=count($good)?></span></a>
															<?php endforeach ?>
															<a class="px-2 rounded list-group-item list-group-item-action d-flex align-items-center justify-content-between" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Общая характеристика МКД<span class="badge badge-primary badge-pill"><?=count($harmkd)?></span></a>
															<a class="px-2 rounded list-group-item list-group-item-action d-flex align-items-center justify-content-between" id="list-posrek-list" data-toggle="list" href="#list-posrek" role="tab" aria-controls="posrek">Постановления РЭК<span class="badge badge-primary badge-pill"><?=count($posrek)?></span></a>
														</div>
													</div>
												</div>
												<div class="col-8">
													<div class="tab-content" id="nav-tabContent">
														<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
															<div class="row">
																<?php foreach($doc as $a): ?>													
																	<div class="col-4 border-bottom"><p class="h6"><a href="?page=doc&id=<?=$a['doc_id']?>" class="text-dark"><?=$a['doc_title']?></a></p></div>												
																<?php endforeach ?>										
															</div>															
														</div>
														<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
															<div class="row">
																<?php foreach($homy as $a): ?>													
																	<div class="col-4 border-bottom"><p class="h6"><a href="?page=homy&id=<?=$a['homy_id']?>" class="text-dark"><?=$a['homy_title']?></a></p></div>												
																<?php endforeach ?>										
															</div>
														</div>
														<?php $n = 0;
															foreach($ocht1 as $b):															
															 $n++; ?>											
															<div class="tab-pane fade" id="list-ocht<?=$n?>" role="tabpanel" aria-labelledby="list-ocht<?=$n?>-list">
																<div class="row">
																	<?php $good = sor($ocht, $b['ocht_kategor'], 'ocht_kategor');																	
																	foreach($good as $a): ?>													
																		<div class="col-4 border-bottom"><p class="h6"><a href="?page=ocht&id=<?=$a['ocht_id']?>" class="text-dark"><?=$a['ocht_title']?></a></p></div>												
																	<?php endforeach ?>										
																</div>
															</div>
														<?php endforeach ?>
														<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
															<div class="row">
																<?php foreach($harmkd as $a): ?>													
																	<div class="col-4 border-bottom"><p class="h6"><a href="?page=harmkd&id=<?=$a['harmkd_id']?>" class="text-dark"><?=$a['harmkd_title']?></a></p></div>												
																<?php endforeach ?>										
															</div>
														</div>
														<div class="tab-pane fade" id="list-posrek" role="tabpanel" aria-labelledby="list-posrek-list">
															<div class="row">
																<?php foreach($posrek as $a): ?>													
																	<div class="col-4 border-bottom"><p class="h6"><a href="?page=posrek&id=<?=$a['posrek_id']?>" class="text-dark"><?=$a['posrek_title']?></a></p></div>												
																<?php endforeach ?>										
															</div>
														</div>
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
	</div>
	
	

</body>

</html>