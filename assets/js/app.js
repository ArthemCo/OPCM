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

// /**
//  * Additional smoothState integration
//  * Arthem Co. 2017
//  *
//  */
//
// (function($) {
// 	'use strict';
//
// 	var baseLangURL = $('.qtranxs-lang-menu').first().attr('href'),
// 			baseURL     = window.location.href;
//
//
// 	console.warn('doot');
//
// 	function content() {
//
// 	}
//
//
//
// 	$(function() {
//
//
// 		// add nav links to smoothState
// 		$(".menu-item a").click(function(e) {
// 			e.preventDefault();
//
// 			console.log(baseURL);
// 			console.log(baseLangURL);
//
// 			// console.log($(this).parent().hasClass('qtranxs-lang-menu'));
// 			//
// 			// if ($(this).parent().get(0).hasClass('qtranxs-lang-menu')) {
// 			// 	window.location = $(this).attr('href');
// 			// }
//
// 			// $('.menu-item').each(function() {
// 			// 	if ()$(this).children('a').attr('href') == target) {
// 			// 		$(this).addClass('current_page_item');
// 			// 	}
// 			// });
//
// 			// $(this).parent().removeClass('current_page_item');
// 			// menutarget.parent().addClass('current_page_item');
//
//
//
// 			var	target = $(this).attr("href"), // get the link
// 					menuTarget = $('.menu-item a[href="' + target + '"]'));
//
//
// 			// dismiss nav on load (for mobile)
// 			var options = {
// 				onAfter: function() {
// 					if (document.body.classList.contains('nav-is-open')) {
// 						document.body.classList.remove('nav-is-open');
// 					}
// 					content();
// 				}
// 			};
//
// 			content = $("#content").smoothState(options);
// 			content.load(target); // load it
//
// 		});
// 	});
//
// }(jQuery));
