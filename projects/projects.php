
	<section class="proj-wrap empire">
		<div class="proj-body empire-body">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Empire Management</h3><span class="site-url transTw">(WIP)</span>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						Our client wanted a site to promote their residential and commercial restoring services. We used modern design techniques, parallax on the main showcase, and a couple of pictures widgets to show off the work they've done. The site has a mobile/responsive version.
					</p>
					<h4 class="sub-heading transTh">Technologies used</h4>
					<ul class="proj-descript">
						<li>WordPress</li>
						<li>PHP</li>
						<li>MySQL</li>
						<li>JavaScript, jQuery</li>
						<li>CSS3</li>
						<li>HTML5</li>
					</ul>
				</article>
				<img class="showcase-image transTh" src="images/empire-front.jpg" alt="Empire Management front page. Work done and info about the services offered." title="Empire Management front page"  />
				<article class="proj-thumbs">
				<h4 class="sub-heading transTh">Closeups and highlights</h4>
					<?php 
					$files = new DirectoryIterator('images/empire');
					foreach($files as $files){
						if($files ->isDot()) continue;
					?>
					
					<span class="proj-thumb-wrap thumb transTh">
						<img class="proj-thumb" src="images/empire/<? echo $files->getFilename(); ?>" />
					</span>
					
					<?
					}
					?>
				</article>
			</div>
		</div>
	</section>

	<section class="proj-wrap sdv">
		<div class="proj-body sdv-body">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Santo Domingo Vive</h3><span class="site-url transTw">(WIP)</span>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						A Santo Domingo online news site. Visitors can view specific per-province news and videos about the region. Also provides access to a directory with the local news stations, channels, and newspaper.  
					</p>
					<h4 class="sub-heading transTh">Technologies used</h4>
					<ul class="proj-descript">
						<li>PHP</li>
						<li>MySQL</li>
						<li>jQuery</li>
						<li>CSS3</li>
						<li>HTML5</li>
					</ul>
				</article>
				<img class="showcase-image transTh" src="images/sdv-front.jpg" alt="Santo Domingo Vive province view. Details and news on the province." title="Santo Domingo Vive"  />
				<article class="proj-thumbs">
				<h4 class="sub-heading transTh">Closeups and highlights</h4>
					<?php 
					$files = new DirectoryIterator('images/sdv');
					foreach($files as $files){
						if($files ->isDot()) continue;
					?>
					
					<span class="proj-thumb-wrap thumb transTh">
						<img class="proj-thumb" src="images/sdv/<? echo $files->getFilename(); ?>" />
					</span>
					
					<?
					}
					?>
				</article>
			</div>
		</div>
	</section>

	<section class="proj-wrap pekepolis">
		<div class="proj-body pekepolis-body">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Peképolis</h3><a class="site-url transTw" target="_blank" href="http://www.pekepolis.com">visit site</a>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						Peképolis is an educational park for kids. The site promotes its attractions, and informs customers about prices, schedules, and upcoming events. The client wanted an animated and colorful site, so we made background buildings and clouds jump/move when the page loads, using CSS3 @keyframes. The site also features a mobile/responsive version.
					</p>
					<h4 class="sub-heading transTh">Technologies used</h4>
					<ul class="proj-descript">
						<li>PHP</li>
						<li>MySQL</li>
						<li>jQuery</li>
						<li>CSS3</li>
						<li>HTML5</li>
						<li>Custom sharing widgets</li>
					</ul>
				</article>
				<img class="showcase-image transTh" src="images/pekepolis-front.jpg" alt="Peképolis' landin site. Features animated clouds" title="Tu Mall front page"  />
				<article class="proj-thumbs">
				<h4 class="sub-heading transTh">Closeups and highlights</h4>
					<?php 
					$files = new DirectoryIterator('images/pekepolis');
					foreach($files as $files){
						if($files ->isDot()) continue;
					?>
					
					<span class="proj-thumb-wrap thumb transTh">
						<img class="proj-thumb" src="images/pekepolis/<? echo $files->getFilename(); ?>" />
					</span>
					
					<?
					}
					?>
				</article>
			</div>
		</div>
	</section>
	
	<section class="proj-wrap tumall">
		<div class="proj-body tumall-body">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Tu Mall</h3><a class="site-url transTw" target="_blank" href="http://www.tumall.do">visit site</a>
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
	
	<section class="proj-wrap dreamcher">
		<div class="proj-body dreamcher-body">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Dreamcher</h3><a class="site-url transTw" target="_blank" href="http://www.dreamcher.com">visit site</a>
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
	
	<section class="proj-wrap bluec">
		<div class="proj-body bluec-body">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Blue Country - Video festival</h3><a class="site-url transTw" target="_blank" href="https://www.facebook.com/BLUECOUNTRYJEANS/app_208195102528120">visit site</a>
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
	
	<section class="proj-wrap sunage">
		<div class="proj-body sunage-body">
			<span class="view-toggle"></span>
			<h3 class="main-heading proj-name transTw">Sun Age</h3><a class="site-url transTw" target="_blank" href="http://www.sun-age.org">visit site</a>
			<div class="proj-contents transTh">
				<article class="proj-details">
					<h4 class="sub-heading transTh">What is it about?</h4>
					<p class="proj-descript">
						Sun Age is a pro-environment organization focused on the use of natural energy instead of fossil fuels. They wanted a blog-like site to promote the environmental awareness and educate the masses to hopefully make a change. Through the page, visitors can join the Sun Age group, subscribe to newsletter, and learn of existing and upcoming projects. Site is localized in english and spanish. The design was made by <a href="http://olivo.do">Maria Olivo</a>.
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
