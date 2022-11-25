/*!
 * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
(function ($) {
	"use strict";
	// Add active state to sidbar nav links
	var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
	$(".has-sub a").each(function () {
		if (this.href === path) {
			$(this).parent().addClass("active");
		}
	});

	// because the 'href' property of the DOM element is the absolute path
	$(".submenu a").each(function () {
		if (this.href === path) {
			var buka = $(".submenu");
			$(this).parent().parent().parent().addClass("active");
			$(this).parent().parent().css({
				"display": "block"
			});
		}
	});
})(jQuery);