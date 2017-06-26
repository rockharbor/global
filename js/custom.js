jQuery(document).ready(function() {
	// unset the splash page cookie if it exists
	var cookies = document.cookie.split(';');
	var data;
	for (var i=0; i < cookies.length; i++) {
		var c = cookies[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1, c.length);
		}
		if (c.indexOf('hidesplash=') == 0) {
			document.cookie = 'hidesplash=null; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/';
		}
	}
});
