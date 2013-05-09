RH = typeof RH == 'undefined' ? {} : RH;

RH.hideSplash = function(campus) {
	RH.showVideos();
	if (typeof campus === 'undefined') {
		campus = false;
	}
	jQuery('#frontpage-content').hide();
	$('body').css('overflow', 'auto');
	if (campus) {
		document.cookie = 'hidesplash='+campus+'; expires=Thu, 19 January 2038 03:14:07 GMT; path=/';
	}
}

jQuery(document).ready(function() {
	if (!jQuery('#frontpage-content').length) {
		return;
	}

	// check cookie to see if we should hide the splash
	var cookies = document.cookie.split(';');
	var data;
	for (var i=0; i < cookies.length; i++) {
		var c = cookies[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1, c.length);
		}
		if (c.indexOf('hidesplash=') == 0) {
			data = c.substring('hidesplash='.length, c.length);
			break;
		}
	}
	if (typeof data !== 'undefined' && data.length && data !== 'true') {
		RH.hideSplash(data);
	} else {
		jQuery('#frontpage-content').fadeIn();
		$('body').css('overflow', 'hidden');
		RH.hideVideos();
	}

	// make campus-chooser li's clickable
	jQuery('.campus-chooser li').click(function() {
		var campusUrl = jQuery(this).find('a.campus-link').prop('href');
		var domain = campusUrl.replace('http://', '').split('.')[0];
		RH.hideSplash(domain);
		window.location = campusUrl;
	})
	jQuery('#frontpage-content footer').click(function() {
		RH.hideSplash('www');
		return false;
	});
});
