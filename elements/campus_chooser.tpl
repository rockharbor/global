<?php
if (!isset($global)) {
	$global = true;
}
?>
<ul class="campus-list campus-chooser">
	<?php if ($global): ?>
	<li>
		<div class="continue">Continue to</div>
		<div><a href="javascript:RH.hideSplash(true);" class="campus-link global">ROCKHARBOR</a></div>
	</li>
	<?php endif; ?>
	<li>
		<div><a href="http://missionviejo.rockharbor.org" class="campus-link mission-viejo">Mission Viejo</a></div>
		<div class="contact"><?php echo do_shortcode('[address campus="5"]'); ?></div>
		<div class="service-times"><strong>Service Times:</strong> <?php echo do_shortcode('[service-times campus="5"]'); ?></div>
	</li>
	<li>
		<div><a href="http://fullerton.rockharbor.org" class="campus-link fullerton">Fullerton</a></div>
		<div class="contact"><?php echo do_shortcode('[address campus="6"]'); ?></div>
		<div class="service-times"><strong>Service Times:</strong> <?php echo do_shortcode('[service-times campus="6"]'); ?></div>
	</li>
	<li>
		<div><a href="http://huntingtonbeach.rockharbor.org" class="campus-link huntington-beach">Huntington Beach</a></div>
		<div class="contact"><?php echo do_shortcode('[address campus="7"]'); ?></div>
		<div class="service-times"><strong>Service Times:</strong> <?php echo do_shortcode('[service-times campus="7"]'); ?></div>
	</li>
	<li>
		<div><a href="http://orange.rockharbor.org" class="campus-link orange">Orange</a></div>
		<div class="contact"><?php echo do_shortcode('[address campus="8"]'); ?></div>
		<div class="service-times"><strong>Service Times:</strong> <?php echo do_shortcode('[service-times campus="8"]'); ?></div>
	</li>
	<li>
		<div><a href="http://www.rockharbor.org" class="campus-link costamesa">Costa Mesa</a></div>
		<div class="contact"><?php echo do_shortcode('[address campus="9"]'); ?></div>
		<div class="service-times"><strong>Service Times:</strong> <?php echo do_shortcode('[service-times campus="9"]'); ?></div>
	</li>
</ul>