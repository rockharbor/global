<?php 
global $theme; 
?>
	</div>
</div>
<footer role="contentinfo">
	<div id="footer">
		<h3>Our Campuses</h3>
		<ul class="campus-list">
			<?php
			$theme->set('global', false);
			echo $theme->render('campus_chooser');
			?>
		</ul>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>