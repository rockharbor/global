<?php
global $post;
get_header();
?>
		<section id="frontpage-sidebar" role="complementary">
			<?php
			dynamic_sidebar('sidebar-frontpage');
			?>
		</section>

		<?php the_post(); ?>
		<section id="frontpage-content" role="main">
			<header id="frontpage-title">
				<h1><?php echo $post->post_title; ?></h1>
			</header>
			<article>
				<?php the_content(); ?>
				<ul class="campus-list campus-chooser">
					<li>
						<div class="costamesa map"><?php echo $theme->Html->image('map-costamesa.png'); ?></div>
						<div class="campus-info">
							<a href="http://costamesa.rockharbor.org" class="campus-link">Costa Mesa</a>
							<div class="service-times"><?php echo do_shortcode('[service-times campus="1"]'); ?></div>
						</div>
					</li>
					<li>
						<div class="mission-viejo map"><?php echo $theme->Html->image('map-missionviejo.png'); ?></div>
						<div class="campus-info">
							<a href="http://missionviejo.rockharbor.org" class="campus-link">Mission Viejo</a>
							<div class="service-times"><?php echo do_shortcode('[service-times campus="1"]'); ?></div>
						</div>
					</li>
					<li>
						<div class="fullerton map"><?php echo $theme->Html->image('map-fullerton.png'); ?></div>
						<div class="campus-info">
							<a href="http://fullerton.rockharbor.org" class="campus-link">Fullerton</a>
							<div class="service-times"><?php echo do_shortcode('[service-times campus="1"]'); ?></div>
						</div>
					</li>
					<li>
						<div class="huntington-beach map"><?php echo $theme->Html->image('map-huntingtonbeach.png'); ?></div>
						<div class="campus-info">
							<a href="http://huntingtonbeach.rockharbor.org" class="campus-link">Huntington Beach</a>
							<div class="service-times"><?php echo do_shortcode('[service-times campus="1"]'); ?></div>
						</div>
					</li>
					<li>
						<div class="orange map"><?php echo $theme->Html->image('map-orange.png'); ?></div>
						<div class="campus-info">
							<a href="http://orange.rockharbor.org" class="campus-link">Orange</a>
							<div class="service-times"><?php echo do_shortcode('[service-times campus="1"]'); ?></div>
						</div>
					</li>
				</ul>
			</article>
			<footer>
				<a href="javascript:RH.hideSplash(true);">Continue to ROCKHARBOR.org</a>
			</footer>
		</section>

<?php
get_footer();