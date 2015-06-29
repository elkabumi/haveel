<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						<?php
						for($i=1; $i<=4; $i++){
						?>
						<li>
							<figure>
								<img src="images/news/<?= $i?>.jpg" alt="img01"/>
								<figcaption><h3>News <?= $i ?></h3>
								<p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
							</figure>
						</li>
						<?php
						}
						?>
						
					</ul>
				</section><!-- // grid-wrap -->
				<section class="slideshow">
					<ul>
						<?php
						for($ii=1; $ii<=4; $ii++){
						?>
						<li>
							<figure>
								<figcaption>
									<h3>News <?= $ii ?></h3>
									<p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
								</figcaption>
								<img src="images/news/<?= $ii ?>.jpg" alt="img01"/>
							</figure>
						</li>
						<?php
}
						?>
						
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">Navigate with arrow keys</div>
				</section><!-- // slideshow -->
			</div><!-- // grid-gallery -->