/*global $ jQuery window */
/*jslint white: true, browser: true, onevar: true, undef: true, nomen: true, eqeqeq: true, bitwise: true, regexp: true, newcap: true, immed: true, strict: true */

/**
 * jQuery workaround for the cropped option in set width select.
 * 
 * Copyright (c) 2010 Ewen Elder
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * @author: Ewen Elder <glomainn at yahoo dot co dot uk> <ewen at jainaewen dot com>
 * @version: 0.1.1 beta
**/ 

'use strict';
jQuery.fn.ieSelectWidth = function (a)
{
	var b, c, d, e, f, g, h;
	
	d = $(this);
	e = document;
	f = window;
	g = false;
	h = e.documentMode;
	b = {
		width : '',
		containerClassName : 'ie-select-width-container',
		overlayClassName : 'ie-select-width-overlay',
		overlayCSS : '',
		containerCSS : ''
	};
	
	
	// Extend the b.
	a = $.extend(b, a);
	
	
	c = {
		
		/**
		 * Initiate the class, check if the browser is IE, if not then return false, check if the j has an ID, 
		 * if not then apply one, add a new container around the j and set it's CSS, add k listeners.
		**/
		a : function ()
		{
			var i = this;
			
			
			// If not IE, return false.
			if (!e.all)
			{
				return g;
			}
			
			
			$.each
			(
				d,
				function ()
				{
					var j = $(this);
					
					
					// If the j has multiple set, or has a size higher than 0, continue to the next j.
					if (j.attr('multiple') || j.attr('size') > 0)
					{
						return g;
					}
					
					// If this j doesn't have an ID, apply one.
					if (!j.attr('id').length)
					{
						j.attr('id', String((new Date()).getTime()).replace(/\D/gi, '').substr(8));
					}
					
					
					// If the width option has been passed, then apply and store it,
					// if the width is set via CSS, then store than instead.
					if (a.width !== '')
					{
						j.css('width', a.width + 'px');
					}
					
					j.data('a', j.outerWidth());
					
					
					// Add the container.
					i.b(j);
					
					
					// Add the overlay.
					i.c(j);
					
					
					// Remove any positioning attributes from the select j.
					$(j).css
					({
						position : 'relative',
						top : 'auto',
						left : 'auto',
						bottom : 'auto',
						right : 'auto',
						margin : '0'
					});
				}
			);
			
			
			// Event listener for opening the select.
			$(d).bind
			(
				'dblclick mousedown change blur',
				function (k)
				{
					i.d(k);
				}
			);
			
			
			// Event listener for setting the various classes depending on the current k.
			$(d).bind
			(
				'mousedown mouseup mouseover mouseout blur change',
				function (k)
				{
					i.e(k);
				}
			);
		},
		
		
		
		b : function (j)
		{
			var l;
			
			// Which browser??
			if (!f.XMLHttpRequest)
			{
				l = 'ie6';
			}
			
			else if (f.XMLHttpRequest && !h)
			{
				l = 'ie7';
			}
			
			else if (h)
			{
				l = 'ie8';
			}
			
			// Add a container around the j.
			j.after('<span id="' + j.attr('id') + '-container" class="' + a.containerClassName + ' ' + l + '"></span>');
			j.next().append(j);
			
			
			// Set the container's CSS.
			j.parent().css
			({
				position : j.css('position') === 'static' ? 'relative' : j.css('position'),
				display : 'block',
				top : j.css('top'),
				right : j.css('right'),
				bottom : j.css('bottom'),
				left : j.css('left'),
				overflow : 'hidden',
				width : j.outerWidth() + 'px',
				margin : (j.css('margin-top') !== 'auto' ? j.css('margin-top') : '0') + ' ' + 
						 (j.css('margin-right') !== 'auto' ? j.css('margin-right') : '0') + ' ' + 
						 (j.css('margin-bottom') !== 'auto' ? j.css('margin-bottom') : '0') + ' ' + 
						 (j.css('margin-left') !== 'auto' ? j.css('margin-left') : '0')
			});
			
			
			// Apply container custom CSS.
			if (a.containerCSS !== '')
			{
				j.parent().css(a.containerCSS);
			}
		},
		
		
		
		/**
		 * Add the overlay, apply bgiframe if present, add k listener, set the overlays's CSS,
		**/
		c : function (j)
		{
			var m, n, o, p, q, r, s, t, u, v, w, x, y;
			
			q = j.attr('id');
			v = q + '-' + a.overlayClassName;
			
			
			// Add the overlay.
			j.after('<a id="' + v + '" class="' + a.overlayClassName + '"><span></span></a>');
			
			
			// Get the overlay.
			u = $('a#' + v);
			
			
			// Check for bgiframe for IE 6.
			if (!f.XMLHttpRequest && ($.fn.bgIframe || $.fn.bgiframe))
			{
				u.bgiframe();
			}
			
			
			// If the overlay is clicked, then the j will loose focus, set focus back to the j.
			u.bind
			(
				'mousedown',
				function ()
				{
					setTimeout
					(
						function ()
						{
							j.focus();
						},
						1
					);
				}
			);
			
			
			// Get styles for position and size calculations.
			p = u.children('span').width();
			o = j.css('border-top-style') !== 'none' ? +j.css('border-top-width').replace('px', '') : 0;
			n = j.css('border-right-style') !== 'none' ? +j.css('border-right-width').replace('px', '') : 0;
			m = j.css('border-bottom-style') !== 'none' ? +j.css('border-bottom-width').replace('px', '') : 0;
			x = +j.css('padding-top').replace('px', '');
			w = +j.css('padding-right').replace('px', '');
			s = j.outerWidth() - p;
			y = p;
			r = j.outerHeight();
			
			
			// CSS for IE8+ to incorporate border padding etc
			// (the overlay container has to be the full inner height of the select j in order to replicate 
			//  the border-right, which is pushed to the right when the select j's width is set to auto.)
			if (h)
			{
				// Compensate for border width.
				if (n > 0)
				{
					s = s - (n + w);
					n = n + 'px ' + j.css('border-right-style') + ' ' + j.css('border-right-color');
				}
				
				
				// Compensate for border height.
				if (o > 0 || m > 0)
				{
					r = r - (o + m);
				}
				
				
				// Compensate for padding.
				if (w > 0)
				{
					y = (p + w);
				}
				
				
				t = o + 'px 0';
				
				
				u.children('span').css
				({
					margin : x + 'px 0'
				});
			}
			
			
			// Position the overlay to sit where the select's arrow thingie is.
			u.css
			({
				position : 'absolute',
				display : 'none',
				top : j.position().top + 'px',
				left : s + 'px',
				width : y + 'px',
				height : r + 'px',
				margin : t,
				borderRight : n
			});
			
			
			// Apply overlay custom CSS.
			if (a.overlayCSS !== '')
			{
				u.css(a.overlayCSS);
			}
		},
		
		
		
		/**
		 * Open the j and display the overlay.
		**/
		d : function (k)
		{
			var j, q, z, u, aa, ab, ac; // j, id, offset, overlay, pageX, pageY, type
			
			j = $(k.target);
			q = j.attr('id');
			z = j.offset();
			u = $('a#' + q + '-' + a.overlayClassName);
			aa = k.pageX;
			ab = k.pageY;
			ac = k.type;
			
			
			// Double clicks kually cause the select box to open without applying the workaround,
			// this causes it to close again, although you can still it open and close.
			if (ac === 'dblclick')
			{
				j.css
				({
					width : j.data('a') + 'px'
				});
			}
			
			// If the k is blur, or change then reset the j back to normal,
			// if it is mousedown, and the j's overlay exists, AND the mousedown k happenned on the currently selected option, then reset the j back to normal,
			// ignore the mousedown k in any other circumstances.
			if (ac === 'change' || ac === 'blur' || (ac === 'mousedown' && u.css('display') === 'block' && z.left < aa && (z.left + j.data('a')) > aa && z.top < ab && (z.top + j.outerHeight()) > ab))
			{
				return this.f(k);
			}
			
			
			// Show the overlay.
			if (u.css('display') === 'none')
			{
				u.css('display', 'block');
			}
			
			
			// Set the select's width to auto.
			if (!j.data('ignore'))
			{
				j.css('width', 'auto');
				
				
				// If the select's auto width is less than it's original width, then set it back to it's original width
				// and add a flag so that there are no future attempts to resize this j.
				if (j.outerWidth() < j.parent().innerWidth())
				{
					j.css('width', j.data('a') + 'px');
					j.data('ignore', true);
				}
			}
		},
		
		
		/**
		 * Hide the overlay, and restore the select j's width.
		**/
		f : function (k)
		{
			var j = $(k.target);
			
			j.siblings('a.' + a.overlayClassName + '').css('display', 'none');
			
			if (!j.data('ignore'))
			{
				setTimeout
				(
					function ()
					{
						j.css
						({
							width : j.data('a') + 'px'
						});
					},
					1
				);
			}
		},
		
		
		/**
		 * Apply class names to represent the current k state, hover, mousedown etc.
		**/
		e : function (k)
		{
			var j, z, u, aa, ab, ac;
			
			j = $(k.target);
			z = j.offset();
			u = $('a#' + j.attr('id') + '-' + a.overlayClassName);
			aa = k.pageX;
			ab = k.pageY;
			ac = k.type;
			
			if (!u.length)
			{
				return g;
			}
			
			if (ac === 'mousedown' && z.left < aa && (z.left + j.data('a')) > aa && z.top < ab && (z.top + j.outerHeight()) > ab)
			{
				u.removeClass().addClass(a.overlayClassName + ' ' + a.overlayClassName + '-active');
			}
			
			else if (ac === 'mouseover')
			{
				u.removeClass().addClass(a.overlayClassName + ' ' + a.overlayClassName + '-hover');
			}
			
			else if (ac === 'mouseup' || ac === 'mouseout' || ac === 'blur' || ac === 'change')
			{
				u.removeClass().addClass(a.overlayClassName);
			}
		}
	};
	
	c.a();
};