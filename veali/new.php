
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
											<h5 class="card-title"><a class="h4" href="?id=<?=$a['articl_id']?>"><strong><?=$a['articl_title']?></strong></a></h5>
											<p class="card-text"><?php echo mb_strimwidth($a['articl_content'], 0, 500, "...")?></p>									
										  </div>
										  <div class="card-footer text-muted">
											<?=$a['articl_data']?>
										  </div>
										</div>
									<?php endforeach ?>
							</section>
							<nav aria-label="pagination example">
								<ul class="pagination justify-content-center">									
									
									<!--Previous button-->
									<li class="page-item <? if ($page == 1):?> disabled <?endif?>"><a class="page-link" href="?page=<?=($page - 1)?>" >Предыдущая страница</a></li>

									<!--Numbers-->
									<li class="page-item <? if ($page == 1 ) :?>active disabled"><a class="page-link" href="?page=1">1</a>
														<?else :?> "><a class="page-link" href="?page=<?=($page - 1)?>"><?=($page - 1)?></a>
														<?endif?>
									</li>
									<li class="page-item <? if ($page < $pagemax and $page > 1):?> active disabled"><a class="page-link" href="?page=<?=$page?>"><?=$page?></a>
														<?elseif ($page == 1) :?> "><a class="page-link" href="?page=<?=($page + 1)?>"><?=($page + 1)?></a>
														<?endif?>
									
									</li>
									<li class="page-item <? if ($page == $pagemax):?> active disabled <?endif?>"><a class="page-link"href="?page=<?=($page + 1)?>">3</a></li>
									
									<!--Next button-->
									<li class="page-item <? if ($page == $pagemax):?> disabled <?endif?>"><a class="page-link" href="?page=<?=($page + 1)?>">Далее</a>
									</li>
									
								</ul>
							</nav>	
				
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery первый, затем Tether, затем Bootstrap JS. -->  

</body>
<!--Footer-->

</html>