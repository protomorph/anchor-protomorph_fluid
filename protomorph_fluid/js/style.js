/* =======================================================================
 * Protomorph Fluid: Version 1.0.0
 * @ProtoMorph (http://protomorph.cf/)
 * =======================================================================
 * Copyright 2014
 * Licensed GNU General Public License, version 2 (GPL-2.0)
 * ======================================================================= */

;(function ($, window, document, undefined) {
	"use strict";

	// options
	var options = {
		animate: 600,	// Animate to top time.
		ease: 'swing'	// Animate ease type.
	};

	// DROPDOWN MENU
	// =============

	$('[data-toggle="dropdown"]').on('click touchstart', function(e) {
		$(this).parent('.dropdown')
			.toggleClass('open');

		e.preventDefault();
	});

	$('body').on('click touchstart', function(e) {
		if (!$(e.target).is('.dropdown-menu') &&
			!$(e.target).parents().is('.dropdown')) $('.dropdown').removeClass('open');
	});

	// FLOAT LABELS
	// ============

	$('html, body').find('.float-input').each(function() {
		$(this).on('check-value', function() {
			var _label = $(this).next('.float-label');

			if (this.value !== '') {
				_label.addClass('in');
			} else {
				_label.removeClass('in');
			}
		})
		.on('keyup', function() {
			$(this).trigger('check-value');
		})
		.on('input propertychange', function() {
			$(this).trigger('check-value');
		})
		.on('textarea propertychange', function() {
			$(this).trigger('check-value');
		})
		.trigger('check-value');
	});

	// HIGHLIGHT.JS
	// ============
	hljs.configure({
		tabReplace: '	'
	});

	$('pre code, pre').each(function (i, block) {
		hljs.highlightBlock(block);
	});

	// TO TOP BUTTON
	// =============

	$('.scroll-up').on('click touchstart', function() {
		$('html, body').animate({scrollTop: 0},
			options.animate,
			options.ease
		);
	});

	// TOGGLE NAVBAR
	// =============

	$('[data-toggle="collapse"]').on('click touchstart', function() {
		$('.collapse').toggleClass('in');
	});

})(jQuery, window, document);
