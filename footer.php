<?php
global $theme;
?>
	</div>
</div>
<footer role="contentinfo">
	<div id="footer">
		<div class="first">
			<?php
			$name = $theme->getMenuName('footer');
			echo $theme->Html->tag('h3', $name);
			wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'menu', 'fallback_cb' => create_function('', 'return;')));
			?>
		</div>
		<div class="second">
			<?php
			$name = $theme->getMenuName('footer2');
			echo $theme->Html->tag('h3', $name);
			wp_nav_menu(array('theme_location' => 'footer2', 'menu_class' => 'menu', 'fallback_cb' => create_function('', 'return;')));
			?>
		</div>
		<div class="third">
			<?php
			$name = $theme->getMenuName('footer3');
			echo $theme->Html->tag('h3', $name);
			wp_nav_menu(array('theme_location' => 'footer3', 'menu_class' => 'menu', 'fallback_cb' => create_function('', 'return;')));
			?>
		</div>
		<div class="last">
			<?php
			$name = $theme->getMenuName('footer4');
			echo $theme->Html->tag('h3', $name);
			wp_nav_menu(array('theme_location' => 'footer4', 'menu_class' => 'menu', 'fallback_cb' => create_function('', 'return;')));
			?>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>