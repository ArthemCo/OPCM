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
