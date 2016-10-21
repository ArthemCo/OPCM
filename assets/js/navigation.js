/* Navigation js
 * (C) Arthem Co. 2016
 * Author: Michael Hemingway
 */

/*jslint browser:true */
//
(function () {
	jQuery(document).ready(function ($) {
		var isLateralNavAnimating = false,
			body = $('body'),
			hamburger = $('.nav-icon');

		//open/close lateral navigation
		$('.nav-trigger').on('click', function (event) {
			event.preventDefault();
			//stop if nav animation is running
			if (!isLateralNavAnimating) {
				if ($(this).parents('.csstransitions').length > 0) isLateralNavAnimating = true;

				body.toggleClass('navigation-is-open');
				body.toggleClass('disable-scroll');
				hamburger.toggleClass('is-open');
				$('.navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
					//animation is over
					isLateralNavAnimating = false;
				});
			}
		});
	});

}());
