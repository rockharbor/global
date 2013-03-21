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
				<?php echo $theme->render('campus_chooser'); ?>
			</article>
			<footer>
				<a href="javascript:RH.hideSplash(true);">Continue to ROCKHARBOR.org</a>
			</footer>
		</section>

<?php
get_footer();