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
