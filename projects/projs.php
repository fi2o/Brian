<?php require_once('templates/head.php') ?>
<script type="text/javascript" src="scripts/hoverZoom.js"></script>

	<h2 class="page-title cen-col">Recent projects and WIP</h2>
	<p class="main-text cen-col">Unless otherwise stated, all design and front-end code (HTML, CSS, JavaScript, etc.) on these projects were created from scratch by me, back-end/custom CMS by my mates from <strong><a href="http://mixart.do">Mixart</a></strong>. Click on the project's names to view their details.</p>


	<section class="proj-wrap empire 0">
		<div class="proj-body empire-body" data-proj="empire">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Empire Management</h3><span class="site-url transTw">(WIP)</span>
			<div class="proj-contents transTh"></div>
		</div>
	</section>

	<section class="proj-wrap sdv 1">
		<div class="proj-body sdv-body" data-proj="sdv">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Santo Domingo Vive</h3><span class="site-url transTw">(WIP)</span>
			<div class="proj-contents transTh"></div>
		</div>
	</section>

	<section class="proj-wrap pekepolis 2">
		<div class="proj-body pekepolis-body" data-proj="pekepolis">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Peképolis</h3><a class="site-url has-link transTw" target="_blank" href="http://www.pekepolis.com">visit site</a>
			<div class="proj-contents transTh"></div>
		</div>
	</section>
	
<!--
	<section class="proj-wrap tumall transTh">
		<div class="proj-body tumall-body ">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Tu Mall</h3><a class="site-url has-link transTw" target="_blank" href="http://www.tumall.do">visit site</a>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						"Tu Mall" is an online classified advertisements site aimed to a Dominican Republic crowd. Users can easily register their stores, then upload their items or services, sell, and advertise through it. We also built a coupons module in order to make people enjoy from the latest offers and sales. The site features superusers who can manage almost everything: users, inventory, advertisement, featured stores and items, coupons, and offers. A mobile/responsive version is also available.
					</p>
					<h4 class="sub-heading transTh">Technologies used</h4>
					<ul class="proj-descript">
						<li>PHP</li>
						<li>MySQL</li>
						<li>JavaScript, jQuery, and AJAX</li>
						<li>CSS3</li>
						<li>HTML5</li>
						<li>Custom sharing widgets</li>
					</ul>
				</article>
				<img class="showcase-image transTh" src="images/tumall-front.png" alt="Tu Mall's front page. Search bar, featured stores and items." title="Tu Mall front page"  />
				<article class="proj-thumbs">
				<h4 class="sub-heading transTh">Closeups and highlights</h4>
					<?php 
					$files = new DirectoryIterator('images/tumall');
					foreach($files as $files){
						if($files ->isDot()) continue;
					?>
					
					<span class="proj-thumb-wrap thumb transTh">
						<img class="proj-thumb" src="images/tumall/<? echo $files->getFilename(); ?>" />
					</span>
					
					<?
					}
					?>
				</article>
			</div>
		</div>
	</section>
	
	<section class="proj-wrap dreamcher transTh">
		<div class="proj-body dreamcher-body ">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Dreamcher</h3><a class="site-url has-link transTw" target="_blank" href="http://www.dreamcher.com">visit site</a>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						For this project, the client wanted an eCommerce site focused on indie designers. Fashion designers and resellers can easily list and manage their sale inventory, using a range of custom made modules to specify the details of each piece, like category, color, measure tables, price and shipping. Items are showcased around the site, and can be found using simple and advanced searches. Customers can store items in their cart, and save for later or pay using PayPal.
					</p>
					<h4 class="sub-heading transTh">Technologies used</h4>
					<ul class="proj-descript">
						<li>Facebook API, Custom sharing widgets</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>PayPal API</li>
						<li>jQuery, jQuery-UI, AJAX</li>
						<li>CSS3</li>
						<li>HTML5</li>
					</ul>
				</article>
				<img class="showcase-image transTh" src="images/dreamcher-front.jpg" alt="Dreamcher's search results for 'Dress'. Categories, advanced filtes, and share widgets." title="Dreamcher's search results"  />
				
				<article class="proj-thumbs">
				<h4 class="sub-heading transTh">Closeups and highlights</h4>
					<?php 
					$files = new DirectoryIterator('images/dreamcher');
					foreach($files as $files){
						if($files ->isDot()) continue;
					?>
					
					<span class="proj-thumb-wrap thumb transTh">
						<img class="proj-thumb" src="images/dreamcher/<? echo $files->getFilename(); ?>" />
					</span>
					
					<?
					}
					?>
				</article>
			</div>
		</div>
	</section>	
	
	<section class="proj-wrap bluec transTh">
		<div class="proj-body bluec-body ">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Blue Country - Video festival</h3><a class="site-url has-link transTw" target="_blank" href="https://www.facebook.com/BLUECOUNTRYJEANS/app_208195102528120">visit site</a>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						Our client needed a secure and reliable site to promote a video festival they were sponsoring. Users needed to upload their videos to participate, and using a custom module we made the judges were able to vote and rank users in order to select the finalists.
					</p>
					<h4 class="sub-heading transTh">Technologies used</h4>
					<ul class="proj-descript">
						<li>Facebook API</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>jQuery</li>
						<li>CSS3</li>
						<li>HTML5</li>
					</ul>
				</article>
				<img class="showcase-image transTh" src="images/bluec-front.jpg" alt="Blue Country video festival upload video form." title="Blue Country's Video Festival"  />
				<article class="proj-thumbs">
				<h4 class="sub-heading transTh">Closeups and highlights</h4>
					<?php 
					$files = new DirectoryIterator('images/bluec');
					foreach($files as $files){
						if($files ->isDot()) continue;
					?>
					
					<span class="proj-thumb-wrap thumb transTh">
						<img class="proj-thumb" src="images/bluec/<? echo $files->getFilename(); ?>" />
					</span>
					
					<?
					}
					?>
				</article>
			</div>
		</div>
	</section>	
	
	<section class="proj-wrap sunage transTh">
		<div class="proj-body sunage-body ">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Sun Age</h3><a class="site-url has-link transTw" target="_blank" href="http://www.sun-age.org">visit site</a>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						Sun Age is a pro-environment organization focused on the use of natural energy instead of fossil fuels. They wanted a blog-like site to promote their beliefs and educate the masses to hopefully make a change. Through the page, visitors can join the Sun Age group, subscribe to newsletter, and learn of existing and upcoming projects. The design was made by <a href="https://twitter.com/iamdudette">Maria Olivo</a>.
					</p>
					<h4 class="sub-heading transTh">Technologies used</h4>
					<ul class="proj-descript">
						<li>Joomla</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>jQuery</li>
						<li>CSS3</li>
						<li>HTML5</li>
					</ul>
				</article>
				<img class="showcase-image transTh" src="images/sunage-front.jpg" alt="Sun Age Organization's front page. Blog about natural energy vs fossil fuels. Planet preservation." title="Sun Age Organization's landing site"  />
				<article class="proj-thumbs">
				<h4 class="sub-heading transTh">Closeups and highlights</h4>
					<?php 
					$files = new DirectoryIterator('images/sunage');
					foreach($files as $files){
						if($files ->isDot()) continue;
					?>
					
					<span class="proj-thumb-wrap thumb transTh">
						<img class="proj-thumb" src="images/sunage/<? echo $files->getFilename(); ?>" />
					</span>
					
					<?
					}
					?>
				</article>
			</div>
		</div>
	</section>	
-->	

<script>
	var proj = $('.proj-body'),
		proj_wrap = proj.parent();

	proj.click(function(event){
		var current_proj = $(this).parent(),
			curr_body = current_proj.children('.proj-body');
		
		function loadView(){
			var prev_proj = $('.proj-wrap.active');
			var prev_projH = prev_proj.height();
			
			if(current_proj.index() < prev_proj.index() || prev_proj.index() < 0){
				prev_projH = 66;
			}
			
			var proj_offset = current_proj.offset().top - prev_projH;
			$('html, body').animate({scrollTop: proj_offset}, 500);
			
			prev_proj.find('.proj-thumb-wrap').removeClass('active');
			proj_wrap.add(proj).removeClass('active degraded');
			proj_wrap.not(current_proj).addClass('degraded');
			current_proj.add(curr_body).addClass('active');
			
			var thumb_cnt = 2;
			var int_interval = setInterval(function(){
				thumb_cnt > (current_proj.find('.proj-thumb-wrap').length) ? clearInterval(int_interval) : '';
				current_proj.find('.proj-thumb-wrap:nth-child('+ thumb_cnt +')').addClass('active');
				thumb_cnt++;
			}, 100);
		}
		
		if(!current_proj.hasClass('loaded')){
			var proj_name = curr_body.data('proj');
			curr_body.children('.proj-contents').load('index.php .'+ proj_name +'-body .proj-contents > *', function(){
				current_proj.addClass('loaded');
				loadView();
				hoverZoom({});
			});
		}
		
		else if(!current_proj.hasClass('active')){
			loadView();
		}
	});
	
	$('.view-toggle').click(function(event){
		var current_proj = $(this).parent().parent();
		
		if(current_proj.hasClass('active')){
			current_proj.children('.proj-body').removeClass('active');
			var thumb_cnt = current_proj.find('.proj-thumb-wrap').length +1;
			var out_interval = setInterval(function(){
				thumb_cnt < (2) ? clearInterval(out_interval) : '';
				current_proj.find('.proj-thumb-wrap:nth-child('+ thumb_cnt +')').removeClass('active');
				thumb_cnt--;
			}, 50);
			
			proj_wrap.add(proj).removeClass('active degraded');
			event.stopPropagation();
		}
	});
	
</script>

<?php require_once('templates/foot.php') ?>