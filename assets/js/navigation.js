/* Navigation js
 * (C) Arthem Co. 2016
 * Author: Michael Hemingway
 */

/*jslint browser:true */
//
(function ($) {
	$(function () {
		var
			body = $('body'),
			hamburger = $('.nav-icon');

		//open/close lateral navigation
		$('.nav-trigger').on('click', function (event) {
			event.preventDefault();
			body.toggleClass('disable-scroll navigation-is-open');
			hamburger.toggleClass('is-open');
		});
	});
}(jQuery));
