/* Navigation js
 * (C) Arthem Co. 2016
 * Author: Michael Hemingway
 */

/*jslint browser:true */
(function () {
	'use strict';

	// HELPER FUNCTIONS
	var id = function (id) {
		return document.getElementById(id);
	};

	document.addEventListener("DOMContentLoaded", function () {
		id('nav-toggle').addEventListener("click", function () {
			id('global-header').classList.toggle('nav-is-visible');
			id('nav-container').classList.toggle('nav-is-visible');
		});
	});

}());
