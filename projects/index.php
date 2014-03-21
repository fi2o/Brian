<?php require_once('templates/head.php') ?>
<script type="text/javascript" src="scripts/hoverZoom.js"></script>

	<h2 class="page-title">Recent projects and work in progress</h2>
	<p class="main-text">Unless otherwise stated, all concepts, design and front-end code (HTML, CSS, JavaScript, etc.) on these projects were created from scratch by me, back-end/custom CMS by my mates from <strong><a href="http://mixart.do">Mixart</a></strong>. Click on the project's names to view their details.</p>

	<section class="proj-wrap empire">
		<div class="proj-body empire-body" data-proj="empire">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Empire Management</h3><span class="site-url transTw">(WIP)</span>
			<div class="proj-contents transTh"></div>
		</div>
	</section>

	<section class="proj-wrap sdv">
		<div class="proj-body sdv-body" data-proj="sdv">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Santo Domingo Vive</h3><span class="site-url transTw">(WIP)</span>
			<div class="proj-contents transTh"></div>
		</div>
	</section>

	<section class="proj-wrap pekepolis">
		<div class="proj-body pekepolis-body" data-proj="pekepolis">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Peképolis</h3><a class="site-url transTw" target="_blank" href="http://www.pekepolis.com">visit site</a>
			<div class="proj-contents transTh"></div>
		</div>
	</section>
	
	<section class="proj-wrap tumall">
		<div class="proj-body tumall-body" data-proj="tumall">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Tu Mall</h3><a class="site-url transTw" target="_blank" href="http://www.tumall.do">visit site</a>
			<div class="proj-contents transTh"></div>
		</div>
	</section>
	
	<section class="proj-wrap dreamcher">
		<div class="proj-body dreamcher-body" data-proj="dreamcher">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Dreamcher</h3><a class="site-url transTw" target="_blank" href="http://www.dreamcher.com">visit site</a>
			<div class="proj-contents transTh"></div>
		</div>
	</section>	
	
	<section class="proj-wrap bluec">
		<div class="proj-body bluec-body" data-proj="bluec">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Blue Country - Video festival</h3><a class="site-url transTw" target="_blank" href="https://www.facebook.com/BLUECOUNTRYJEANS/app_208195102528120">visit site</a>
			<div class="proj-contents transTh"></div>
		</div>
	</section>	
	
	<section class="proj-wrap sunage">
		<div class="proj-body sunage-body" data-proj="sunage">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Sun Age</h3><a class="site-url transTw" target="_blank" href="http://www.sun-age.org">visit site</a>
			<div class="proj-contents transTh"></div>
		</div>
	</section>
	
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
			curr_body.children('.proj-contents').load('projects.php .'+ proj_name +'-body .proj-contents > *', function(){
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