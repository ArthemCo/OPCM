/* main app logic
 * Arthem Co 2016
 * Michael Hemingway 
 */

(function ($) {
	'use strict';
	$(document).ready(function () {

		// Makes sure last grid item floats left
		$('.archive-grid .columns').last().addClass('end');

		// Adds Flex Video to YouTube and Vimeo Embeds
		$('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function () {
			if ($(this).innerWidth() / $(this).innerHeight() > 1.5) {
				$(this).wrap("<div class='widescreen flex-video'/>");
			} else {
				$(this).wrap("<div class='flex-video'/>");
			}
		});

		window.sr = ScrollReveal();
		sr.reveal('p', {
			scale: 1,
			duration: 600,
			distance: '30px'
		});

	});



}(jQuery));