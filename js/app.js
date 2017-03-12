/* main app logic
 * Arthem Co 2017
 * Michael Hemingway
 */

(function($) {
	'use strict';

	// // Our company signature :P
	// var t = "color: #bada55; background: #222";
	// console.log("%c  █████╗ ██████╗ ████████╗██╗  ██╗███████╗███╗   ███╗     ██████╗ ██████╗    ", t);
	// console.log("%c ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██╔════╝████╗ ████║    ██╔════╝██╔═══██╗   ", t);
	// console.log("%c ███████║██████╔╝   ██║   ███████║█████╗  ██╔████╔██║    ██║     ██║   ██║   ", t);
	// console.log("%c ██╔══██║██╔══██╗   ██║   ██╔══██║██╔══╝  ██║╚██╔╝██║    ██║     ██║   ██║   ", t);
	// console.log("%c ██║  ██║██║  ██║   ██║   ██║  ██║███████╗██║ ╚═╝ ██║    ╚██████╗╚██████╔╝██╗", t);
	// console.log("%c ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝╚═╝     ╚═╝     ╚═════╝ ╚═════╝ ╚═╝", t);
	// console.log("Site developed with love by Arthem.");
	// console.log("https://arthem.co/ ❤");

	// responsive embeds
	$(function() {
		var allVideos = $("iframe, object, embed");

		allVideos.each(function() {
			var that = $(this);

			that.removeAttr('height').removeAttr('width');

			if (that.parent().get(0).tagName == "P") {
				that.unwrap();
			}

			that.wrap( "<figure class='embed'></figure>" );
		});

	});

}(jQuery));
