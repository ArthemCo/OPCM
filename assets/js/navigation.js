/* Navigation js
 * (C) Arthem Co. 2016
 * Author: Michael Hemingway
 */

/*jslint browser:true */
//
//(function () {
//	"use strict";
//
//	var hamburger = document.getElementById('nav-toggle'),
//		nav = document.getElementById('nav-global');
//
//	hamburger.addEventListener("click", function () {
//		this.classList.toggle("is-open");
//		nav.classList.toggle('is-open');
//	}, false);
//
//}());



jQuery(document).ready(function($){
	var isLateralNavAnimating = false,
			hamburger = $('.nav-icon');
	
	//open/close lateral navigation
	$('.nav-trigger').on('click', function(event){
		event.preventDefault();
		//stop if nav animation is running 
		if( !isLateralNavAnimating ) {
			if($(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
			
			$('body').toggleClass('navigation-is-open');
			$('body').toggleClass('disable-scroll');
			hamburger.toggleClass('is-open');
			$('.navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});
});