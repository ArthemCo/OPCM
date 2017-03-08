/* main app logic
 * Arthem Co 2016
 * Michael Hemingway
 */

(function ($) {
	'use strict';
	$(function () {
		// Our company signature :P
		var t = "color: #bada55; background: #222";
		console.log("%c  █████╗ ██████╗ ████████╗██╗  ██╗███████╗███╗   ███╗     ██████╗ ██████╗    ", t);
		console.log("%c ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██╔════╝████╗ ████║    ██╔════╝██╔═══██╗   ", t);
		console.log("%c ███████║██████╔╝   ██║   ███████║█████╗  ██╔████╔██║    ██║     ██║   ██║   ", t);
		console.log("%c ██╔══██║██╔══██╗   ██║   ██╔══██║██╔══╝  ██║╚██╔╝██║    ██║     ██║   ██║   ", t);
		console.log("%c ██║  ██║██║  ██║   ██║   ██║  ██║███████╗██║ ╚═╝ ██║    ╚██████╗╚██████╔╝██╗", t);
		console.log("%c ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝╚═╝     ╚═╝     ╚═════╝ ╚═════╝ ╚═╝", t);
		console.log("Site developed with love by Arthem.");
		console.log("https://arthem.co/ ❤");
	});

}(jQuery));

/**
 * Navigation js
 * (C) Arthem Co. 2017
 * @author Michael Hemingway
 */

(function($) {
	'use strict';

	$(function() {

		//open/close lateral navigation
		$('.nav-trigger').on('click', function(event) {
			event.preventDefault();
			document.body.classList.toggle('nav-is-open');
		});

		// add nav links to smoothState
		$(".menu-item a").click(function(e) {
			e.preventDefault();
			var c = $("#content").smoothState().data("smoothState"),
				l = $(this).attr("href");
			c.load(l);
		});

		$('#content').smoothState({
			onAfter: function() {
				if (document.body.classList.contains('nav-is-open')) {
					document.body.classList.remove('nav-is-open');
				}
			}
		});

		// Scrolling
		var w = $(window),
				windowWidth    = w.width(),
				scrollPosition = w.scrollTop(),
				isScrollingUp  = false,
				currentScroll;

		w.resize(function() {
		  windowWidth = w.width();
		});

		// hide elements on scroll, dismiss nav
		w.scroll(function() {
			currentScroll = w.scrollTop();

			if (document.body.classList.contains('nav-is-open')) {
				document.body.classList.remove('nav-is-open');
			}


			if (windowWidth < 1080) {
				if (currentScroll > scrollPosition && !isScrollingUp) {
					document.body.classList.add('ui-hidden');
					isScrollingUp = !isScrollingUp;

    		} else if (currentScroll < scrollPosition && isScrollingUp) {
	        document.body.classList.remove('ui-hidden')
        	isScrollingUp = !isScrollingUp;
    		}
    		scrollPosition = currentScroll;
			}
		});

	});
}(jQuery));
