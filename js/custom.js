RH = typeof RH == 'undefined' ? {} : RH;

RH.hideSplash = function(remember) {
	if (typeof remember === 'undefined') {
		remember = false;
	}
	jQuery('#frontpage-content').hide();
	if (remember) {
		document.cookie = 'hidesplash=true; path=/';
	}
}

$(document).ready(function() {
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
	if (data === 'true') {
		RH.hideSplash(false);
	}

	// make campus-chooser li's clickable
	$('.campus-chooser li').click(function() {
		window.location = $(this).find('a.campus-link').prop('href');
	})
	$('#frontpage-content footer').click(function() {
		RH.hideSplash(true);
		return false;
	});
});
