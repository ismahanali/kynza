/*! This file is auto-generated */
!function(e,t){if("function"==typeof define&&define.amd)define("hoverintent",["module"],t);else if("undefined"!=typeof exports)t(module);else{var n={exports:{}};t(n),e.hoverintent=n.exports}}(this,function(e){"use strict";var t=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e};e.exports=function(e,n,o){function i(e,t){return y&&(y=clearTimeout(y)),b=0,p?void 0:o.call(e,t)}function r(e){m=e.clientX,d=e.clientY}function u(e,t){if(y&&(y=clearTimeout(y)),Math.abs(h-m)+Math.abs(E-d)<x.sensitivity)return b=1,p?void 0:n.call(e,t);h=m,E=d,y=setTimeout(function(){u(e,t)},x.interval)}function s(t){return L=!0,y&&(y=clearTimeout(y)),e.removeEventListener("mousemove",r,!1),1!==b&&(h=t.clientX,E=t.clientY,e.addEventListener("mousemove",r,!1),y=setTimeout(function(){u(e,t)},x.interval)),this}function c(t){return L=!1,y&&(y=clearTimeout(y)),e.removeEventListener("mousemove",r,!1),1===b&&(y=setTimeout(function(){i(e,t)},x.timeout)),this}function v(t){L||(p=!0,n.call(e,t))}function a(t){!L&&p&&(p=!1,o.call(e,t))}function f(){e.addEventListener("focus",v,!1),e.addEventListener("blur",a,!1)}function l(){e.removeEventListener("focus",v,!1),e.removeEventListener("blur",a,!1)}var m,d,h,E,L=!1,p=!1,T={},b=0,y=0,x={sensitivity:7,interval:100,timeout:0,handleFocus:!1};return T.options=function(e){var n=e.handleFocus!==x.handleFocus;return x=t({},x,e),n&&(x.handleFocus?f():l()),T},T.remove=function(){e&&(e.removeEventListener("mouseover",s,!1),e.removeEventListener("mouseout",c,!1),l())},e&&(e.addEventListener("mouseover",s,!1),e.addEventListener("mouseout",c,!1)),T}});

/*! This file is auto-generated */
!function(u,d,m){function f(e){var t;27===e.which&&(t=S(e.target,".menupop"))&&(t.querySelector(".menupop > .ab-item").focus(),E(t,"hover"))}function p(e){var t;13===e.which&&(S(e.target,".ab-sub-wrapper")||(t=S(e.target,".menupop"))&&(e.preventDefault(),o(t,"hover")?E(t,"hover"):y(t,"hover")))}function h(e){var t;13===e.which&&(t=e.target.getAttribute("href"),-1<m.userAgent.toLowerCase().indexOf("applewebkit")&&t&&"#"===t.charAt(0)&&setTimeout(function(){var e=u.getElementById(t.replace("#",""));e&&(e.setAttribute("tabIndex","0"),e.focus())},100))}function v(e,t){var n;S(t.target,".ab-sub-wrapper")||(t.preventDefault(),(n=S(t.target,".menupop"))&&(o(n,"hover")?E(n,"hover"):(L(e),y(n,"hover"))))}function g(e){var t,n=e.target.parentNode;if(n&&(t=n.querySelector(".shortlink-input")),t)return e.preventDefault&&e.preventDefault(),e.returnValue=!1,y(n,"selected"),t.focus(),t.select(),!(t.onblur=function(){E(n,"selected")})}function b(){if("sessionStorage"in d)try{for(var e in sessionStorage)-1<e.indexOf("wp-autosave-")&&sessionStorage.removeItem(e)}catch(e){}}function o(e,t){return!!e&&(e.classList&&e.classList.contains?e.classList.contains(t):!!e.className&&-1<e.className.split(" ").indexOf(t))}function y(e,t){e&&(e.classList&&e.classList.add?e.classList.add(t):o(e,t)||(e.className&&(e.className+=" "),e.className+=t))}function E(e,t){var n,r;if(e&&o(e,t))if(e.classList&&e.classList.remove)e.classList.remove(t);else{for(n=" "+t+" ",r=" "+e.className+" ";-1<r.indexOf(n);)r=r.replace(n,"");e.className=r.replace(/^[\s]+|[\s]+$/g,"")}}function L(e){if(e&&e.length)for(var t=0;t<e.length;t++)E(e[t],"hover")}function w(e){if(!e.target||"wpadminbar"===e.target.id||"wp-admin-bar-top-secondary"===e.target.id)try{d.scrollTo({top:-32,left:0,behavior:"smooth"})}catch(e){d.scrollTo(0,-32)}}function S(e,t){for(d.Element.prototype.matches||(d.Element.prototype.matches=d.Element.prototype.matchesSelector||d.Element.prototype.mozMatchesSelector||d.Element.prototype.msMatchesSelector||d.Element.prototype.oMatchesSelector||d.Element.prototype.webkitMatchesSelector||function(e){for(var t=(this.document||this.ownerDocument).querySelectorAll(e),n=t.length;0<=--n&&t.item(n)!==this;);return-1<n});e&&e!==u;e=e.parentNode)if(e.matches(t))return e;return null}u.addEventListener("DOMContentLoaded",function(){var n,e,t,r,o,a,s,i,c,l=u.getElementById("wpadminbar");if(l&&"querySelectorAll"in l){n=l.querySelectorAll("li.menupop"),e=l.querySelectorAll(".ab-item"),t=u.getElementById("wp-admin-bar-logout"),r=u.getElementById("adminbarsearch"),o=u.getElementById("wp-admin-bar-get-shortlink"),a=l.querySelector(".screen-reader-shortcut"),s=/Mobile\/.+Safari/.test(m.userAgent)?"touchstart":"click",E(l,"nojs"),"ontouchstart"in d&&(u.body.addEventListener(s,function(e){S(e.target,"li.menupop")||L(n)}),l.addEventListener("touchstart",function e(){for(var t=0;t<n.length;t++)n[t].addEventListener("click",v.bind(null,n));l.removeEventListener("touchstart",e)})),l.addEventListener("click",w);for(c=0;c<n.length;c++)d.hoverintent(n[c],y.bind(null,n[c],"hover"),E.bind(null,n[c],"hover")).options({timeout:180}),n[c].addEventListener("keydown",p);for(c=0;c<e.length;c++)e[c].addEventListener("keydown",f);r&&((i=u.getElementById("adminbar-search")).addEventListener("focus",function(){y(r,"adminbar-focused")}),i.addEventListener("blur",function(){E(r,"adminbar-focused")})),a&&a.addEventListener("keydown",h),o&&o.addEventListener("click",g),d.location.hash&&d.scrollBy(0,-32),t&&t.addEventListener("click",b)}})}(document,window,navigator);
/**
 * Attempt to re-color SVG icons used in the admin menu or the toolbar
 *
 * @output wp-admin/js/svg-painter.js
 */

window.wp = window.wp || {};

wp.svgPainter = ( function( $, window, document, undefined ) {
	'use strict';
	var selector, base64, painter,
		colorscheme = {},
		elements = [];

	$(document).ready( function() {
		// Detection for browser SVG capability.
		if ( document.implementation.hasFeature( 'http://www.w3.org/TR/SVG11/feature#Image', '1.1' ) ) {
			$( document.body ).removeClass( 'no-svg' ).addClass( 'svg' );
			wp.svgPainter.init();
		}
	});

	/**
	 * Needed only for IE9
	 *
	 * Based on jquery.base64.js 0.0.3 - https://github.com/yckart/jquery.base64.js
	 *
	 * Based on: https://gist.github.com/Yaffle/1284012
	 *
	 * Copyright (c) 2012 Yannick Albert (http://yckart.com)
	 * Licensed under the MIT license
	 * http://www.opensource.org/licenses/mit-license.php
	 */
	base64 = ( function() {
		var c,
			b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/',
			a256 = '',
			r64 = [256],
			r256 = [256],
			i = 0;

		function init() {
			while( i < 256 ) {
				c = String.fromCharCode(i);
				a256 += c;
				r256[i] = i;
				r64[i] = b64.indexOf(c);
				++i;
			}
		}

		function code( s, discard, alpha, beta, w1, w2 ) {
			var tmp, length,
				buffer = 0,
				i = 0,
				result = '',
				bitsInBuffer = 0;

			s = String(s);
			length = s.length;

			while( i < length ) {
				c = s.charCodeAt(i);
				c = c < 256 ? alpha[c] : -1;

				buffer = ( buffer << w1 ) + c;
				bitsInBuffer += w1;

				while( bitsInBuffer >= w2 ) {
					bitsInBuffer -= w2;
					tmp = buffer >> bitsInBuffer;
					result += beta.charAt(tmp);
					buffer ^= tmp << bitsInBuffer;
				}
				++i;
			}

			if ( ! discard && bitsInBuffer > 0 ) {
				result += beta.charAt( buffer << ( w2 - bitsInBuffer ) );
			}

			return result;
		}

		function btoa( plain ) {
			if ( ! c ) {
				init();
			}

			plain = code( plain, false, r256, b64, 8, 6 );
			return plain + '===='.slice( ( plain.length % 4 ) || 4 );
		}

		function atob( coded ) {
			var i;

			if ( ! c ) {
				init();
			}

			coded = coded.replace( /[^A-Za-z0-9\+\/\=]/g, '' );
			coded = String(coded).split('=');
			i = coded.length;

			do {
				--i;
				coded[i] = code( coded[i], true, r64, a256, 6, 8 );
			} while ( i > 0 );

			coded = coded.join('');
			return coded;
		}

		return {
			atob: atob,
			btoa: btoa
		};
	})();

	return {
		init: function() {
			painter = this;
			selector = $( '#adminmenu .wp-menu-image, #wpadminbar .ab-item' );

			this.setColors();
			this.findElements();
			this.paint();
		},

		setColors: function( colors ) {
			if ( typeof colors === 'undefined' && typeof window._wpColorScheme !== 'undefined' ) {
				colors = window._wpColorScheme;
			}

			if ( colors && colors.icons && colors.icons.base && colors.icons.current && colors.icons.focus ) {
				colorscheme = colors.icons;
			}
		},

		findElements: function() {
			selector.each( function() {
				var $this = $(this), bgImage = $this.css( 'background-image' );

				if ( bgImage && bgImage.indexOf( 'data:image/svg+xml;base64' ) != -1 ) {
					elements.push( $this );
				}
			});
		},

		paint: function() {
			// Loop through all elements.
			$.each( elements, function( index, $element ) {
				var $menuitem = $element.parent().parent();

				if ( $menuitem.hasClass( 'current' ) || $menuitem.hasClass( 'wp-has-current-submenu' ) ) {
					// Paint icon in 'current' color.
					painter.paintElement( $element, 'current' );
				} else {
					// Paint icon in base color.
					painter.paintElement( $element, 'base' );

					// Set hover callbacks.
					$menuitem.hover(
						function() {
							painter.paintElement( $element, 'focus' );
						},
						function() {
							// Match the delay from hoverIntent.
							window.setTimeout( function() {
								painter.paintElement( $element, 'base' );
							}, 100 );
						}
					);
				}
			});
		},

		paintElement: function( $element, colorType ) {
			var xml, encoded, color;

			if ( ! colorType || ! colorscheme.hasOwnProperty( colorType ) ) {
				return;
			}

			color = colorscheme[ colorType ];

			// Only accept hex colors: #101 or #101010.
			if ( ! color.match( /^(#[0-9a-f]{3}|#[0-9a-f]{6})$/i ) ) {
				return;
			}

			xml = $element.data( 'wp-ui-svg-' + color );

			if ( xml === 'none' ) {
				return;
			}

			if ( ! xml ) {
				encoded = $element.css( 'background-image' ).match( /.+data:image\/svg\+xml;base64,([A-Za-z0-9\+\/\=]+)/ );

				if ( ! encoded || ! encoded[1] ) {
					$element.data( 'wp-ui-svg-' + color, 'none' );
					return;
				}

				try {
					if ( 'atob' in window ) {
						xml = window.atob( encoded[1] );
					} else {
						xml = base64.atob( encoded[1] );
					}
				} catch ( error ) {}

				if ( xml ) {
					// Replace `fill` attributes.
					xml = xml.replace( /fill="(.+?)"/g, 'fill="' + color + '"');

					// Replace `style` attributes.
					xml = xml.replace( /style="(.+?)"/g, 'style="fill:' + color + '"');

					// Replace `fill` properties in `<style>` tags.
					xml = xml.replace( /fill:.*?;/g, 'fill: ' + color + ';');

					if ( 'btoa' in window ) {
						xml = window.btoa( xml );
					} else {
						xml = base64.btoa( xml );
					}

					$element.data( 'wp-ui-svg-' + color, xml );
				} else {
					$element.data( 'wp-ui-svg-' + color, 'none' );
					return;
				}
			}

			$element.attr( 'style', 'background-image: url("data:image/svg+xml;base64,' + xml + '") !important;' );
		}
	};

})( jQuery, window, document );

/*! This file is auto-generated */
this.wp=this.wp||{},this.wp.hooks=function(n){var r={};function e(t){if(r[t])return r[t].exports;var o=r[t]={i:t,l:!1,exports:{}};return n[t].call(o.exports,o,o.exports,e),o.l=!0,o.exports}return e.m=n,e.c=r,e.d=function(n,r,t){e.o(n,r)||Object.defineProperty(n,r,{enumerable:!0,get:t})},e.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},e.t=function(n,r){if(1&r&&(n=e(n)),8&r)return n;if(4&r&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(e.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&r&&"string"!=typeof n)for(var o in n)e.d(t,o,function(r){return n[r]}.bind(null,o));return t},e.n=function(n){var r=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(r,"a",r),r},e.o=function(n,r){return Object.prototype.hasOwnProperty.call(n,r)},e.p="",e(e.s=449)}({18:function(n,r,e){"use strict";e.d(r,"a",(function(){return u}));var t=e(26);var o=e(35),i=e(29);function u(n){return function(n){if(Array.isArray(n))return Object(t.a)(n)}(n)||Object(o.a)(n)||Object(i.a)(n)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}},26:function(n,r,e){"use strict";function t(n,r){(null==r||r>n.length)&&(r=n.length);for(var e=0,t=new Array(r);e<r;e++)t[e]=n[e];return t}e.d(r,"a",(function(){return t}))},29:function(n,r,e){"use strict";e.d(r,"a",(function(){return o}));var t=e(26);function o(n,r){if(n){if("string"==typeof n)return Object(t.a)(n,r);var e=Object.prototype.toString.call(n).slice(8,-1);return"Object"===e&&n.constructor&&(e=n.constructor.name),"Map"===e||"Set"===e?Array.from(n):"Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e)?Object(t.a)(n,r):void 0}}},35:function(n,r,e){"use strict";function t(n){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(n))return Array.from(n)}e.d(r,"a",(function(){return t}))},449:function(n,r,e){"use strict";e.r(r),e.d(r,"createHooks",(function(){return f})),e.d(r,"addAction",(function(){return h})),e.d(r,"addFilter",(function(){return v})),e.d(r,"removeAction",(function(){return m})),e.d(r,"removeFilter",(function(){return A})),e.d(r,"hasAction",(function(){return b})),e.d(r,"hasFilter",(function(){return y})),e.d(r,"removeAllActions",(function(){return _})),e.d(r,"removeAllFilters",(function(){return g})),e.d(r,"doAction",(function(){return F})),e.d(r,"applyFilters",(function(){return j})),e.d(r,"currentAction",(function(){return O})),e.d(r,"currentFilter",(function(){return k})),e.d(r,"doingAction",(function(){return x})),e.d(r,"doingFilter",(function(){return I})),e.d(r,"didAction",(function(){return S})),e.d(r,"didFilter",(function(){return w})),e.d(r,"actions",(function(){return T})),e.d(r,"filters",(function(){return M}));var t=function(n){return"string"!=typeof n||""===n?(console.error("The namespace must be a non-empty string."),!1):!!/^[a-zA-Z][a-zA-Z0-9_.\-\/]*$/.test(n)||(console.error("The namespace can only contain numbers, letters, dashes, periods, underscores and slashes."),!1)};var o=function(n){return"string"!=typeof n||""===n?(console.error("The hook name must be a non-empty string."),!1):/^__/.test(n)?(console.error("The hook name cannot begin with `__`."),!1):!!/^[a-zA-Z][a-zA-Z0-9_.-]*$/.test(n)||(console.error("The hook name can only contain numbers, letters, dashes, periods and underscores."),!1)};var i=function(n){return function(r,e,i){var u=arguments.length>3&&void 0!==arguments[3]?arguments[3]:10;if(o(r)&&t(e))if("function"==typeof i)if("number"==typeof u){var c={callback:i,priority:u,namespace:e};if(n[r]){var a,l=n[r].handlers;for(a=l.length;a>0&&!(u>=l[a-1].priority);a--);a===l.length?l[a]=c:l.splice(a,0,c),(n.__current||[]).forEach((function(n){n.name===r&&n.currentIndex>=a&&n.currentIndex++}))}else n[r]={handlers:[c],runs:0};"hookAdded"!==r&&F("hookAdded",r,e,i,u)}else console.error("If specified, the hook priority must be a number.");else console.error("The hook callback must be a function.")}};var u=function(n,r){return function(e,i){if(o(e)&&(r||t(i))){if(!n[e])return 0;var u=0;if(r)u=n[e].handlers.length,n[e]={runs:n[e].runs,handlers:[]};else for(var c=n[e].handlers,a=function(r){c[r].namespace===i&&(c.splice(r,1),u++,(n.__current||[]).forEach((function(n){n.name===e&&n.currentIndex>=r&&n.currentIndex--})))},l=c.length-1;l>=0;l--)a(l);return"hookRemoved"!==e&&F("hookRemoved",e,i),u}}};var c=function(n){return function(r,e){return void 0!==e?r in n&&n[r].handlers.some((function(n){return n.namespace===e})):r in n}};e(18);var a=function(n,r){return function(e){n[e]||(n[e]={handlers:[],runs:0}),n[e].runs++;var t=n[e].handlers;for(var o=arguments.length,i=new Array(o>1?o-1:0),u=1;u<o;u++)i[u-1]=arguments[u];if(!t||!t.length)return r?i[0]:void 0;var c={name:e,currentIndex:0};for(n.__current.push(c);c.currentIndex<t.length;){var a=t[c.currentIndex],l=a.callback.apply(null,i);r&&(i[0]=l),c.currentIndex++}return n.__current.pop(),r?i[0]:void 0}};var l=function(n){return function(){return n.__current&&n.__current.length?n.__current[n.__current.length-1].name:null}};var s=function(n){return function(r){return void 0===r?void 0!==n.__current[0]:!!n.__current[0]&&r===n.__current[0].name}};var d=function(n){return function(r){if(o(r))return n[r]&&n[r].runs?n[r].runs:0}};var f=function(){var n=Object.create(null),r=Object.create(null);return n.__current=[],r.__current=[],{addAction:i(n),addFilter:i(r),removeAction:u(n),removeFilter:u(r),hasAction:c(n),hasFilter:c(r),removeAllActions:u(n,!0),removeAllFilters:u(r,!0),doAction:a(n),applyFilters:a(r,!0),currentAction:l(n),currentFilter:l(r),doingAction:s(n),doingFilter:s(r),didAction:d(n),didFilter:d(r),actions:n,filters:r}},p=f(),h=p.addAction,v=p.addFilter,m=p.removeAction,A=p.removeFilter,b=p.hasAction,y=p.hasFilter,_=p.removeAllActions,g=p.removeAllFilters,F=p.doAction,j=p.applyFilters,O=p.currentAction,k=p.currentFilter,x=p.doingAction,I=p.doingFilter,S=p.didAction,w=p.didFilter,T=p.actions,M=p.filters}});
/*! This file is auto-generated */
!function(f,w){w.wp=w.wp||{},w.wp.heartbeat=new function(){var e,t,n,a,r=f(document),i={suspend:!1,suspendEnabled:!0,screenId:"",url:"",lastTick:0,queue:{},mainInterval:60,tempInterval:0,originalInterval:0,minimalInterval:0,countdown:0,connecting:!1,connectionError:!1,errorcount:0,hasConnected:!1,hasFocus:!0,userActivity:0,userActivityEvents:!1,checkFocusTimer:0,beatTimer:0};function o(){return(new Date).getTime()}function c(e){var t,n=e.src;if(n&&/^https?:\/\//.test(n)&&(t=w.location.origin?w.location.origin:w.location.protocol+"//"+w.location.host,0!==n.indexOf(t)))return!1;try{if(e.contentWindow.document)return!0}catch(e){}return!1}function s(){i.hasFocus&&!document.hasFocus()?m():!i.hasFocus&&document.hasFocus()&&v()}function u(e,t){var n;if(e){switch(e){case"abort":break;case"timeout":n=!0;break;case"error":if(503===t&&i.hasConnected){n=!0;break}case"parsererror":case"empty":case"unknown":i.errorcount++,2<i.errorcount&&i.hasConnected&&(n=!0)}n&&!b()&&(i.connectionError=!0,r.trigger("heartbeat-connection-lost",[e,t]),wp.hooks.doAction("heartbeat.connection-lost",e,t))}}function l(){var e,t;i.connecting||i.suspend||(i.lastTick=o(),t=f.extend({},i.queue),i.queue={},r.trigger("heartbeat-send",[t]),wp.hooks.doAction("heartbeat.send",t),e={data:t,interval:i.tempInterval?i.tempInterval/1e3:i.mainInterval/1e3,_nonce:"object"==typeof w.heartbeatSettings?w.heartbeatSettings.nonce:"",action:"heartbeat",screen_id:i.screenId,has_focus:i.hasFocus},"customize"===i.screenId&&(e.wp_customize="on"),i.connecting=!0,i.xhr=f.ajax({url:i.url,type:"post",timeout:3e4,data:e,dataType:"json"}).always(function(){i.connecting=!1,d()}).done(function(e,t,n){var a;e?(i.hasConnected=!0,b()&&(i.errorcount=0,i.connectionError=!1,r.trigger("heartbeat-connection-restored"),wp.hooks.doAction("heartbeat.connection-restored")),e.nonces_expired&&(r.trigger("heartbeat-nonces-expired"),wp.hooks.doAction("heartbeat.nonces-expired")),e.heartbeat_interval&&(a=e.heartbeat_interval,delete e.heartbeat_interval),e.heartbeat_nonce&&"object"==typeof w.heartbeatSettings&&(w.heartbeatSettings.nonce=e.heartbeat_nonce,delete e.heartbeat_nonce),e.rest_nonce&&"object"==typeof w.wpApiSettings&&(w.wpApiSettings.nonce=e.rest_nonce),r.trigger("heartbeat-tick",[e,t,n]),wp.hooks.doAction("heartbeat.tick",e,t,n),a&&I(a)):u("empty")}).fail(function(e,t,n){u(t||"unknown",e.status),r.trigger("heartbeat-error",[e,t,n]),wp.hooks.doAction("heartbeat.error",e,t,n)}))}function d(){var e=o()-i.lastTick,t=i.mainInterval;i.suspend||(i.hasFocus?0<i.countdown&&i.tempInterval&&(t=i.tempInterval,i.countdown--,i.countdown<1&&(i.tempInterval=0)):t=12e4,i.minimalInterval&&t<i.minimalInterval&&(t=i.minimalInterval),w.clearTimeout(i.beatTimer),e<t?i.beatTimer=w.setTimeout(function(){l()},t-e):l())}function m(){i.hasFocus=!1}function v(){i.userActivity=o(),i.suspend=!1,i.hasFocus||(i.hasFocus=!0,d())}function h(){i.userActivityEvents=!1,r.off(".wp-heartbeat-active"),f("iframe").each(function(e,t){c(t)&&f(t.contentWindow).off(".wp-heartbeat-active")}),v()}function p(){var e=i.userActivity?o()-i.userActivity:0;3e5<e&&i.hasFocus&&m(),(i.suspendEnabled&&6e5<e||36e5<e)&&(i.suspend=!0),i.userActivityEvents||(r.on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){h()}),f("iframe").each(function(e,t){c(t)&&f(t.contentWindow).on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){h()})}),i.userActivityEvents=!0)}function b(){return i.connectionError}function I(e,t){var n,a=i.tempInterval?i.tempInterval:i.mainInterval;if(e){switch(e){case"fast":case 5:n=5e3;break;case 15:n=15e3;break;case 30:n=3e4;break;case 60:n=6e4;break;case 120:n=12e4;break;case"long-polling":return i.mainInterval=0;default:n=i.originalInterval}i.minimalInterval&&n<i.minimalInterval&&(n=i.minimalInterval),5e3===n?(t=(t=parseInt(t,10)||30)<1||30<t?30:t,i.countdown=t,i.tempInterval=n):(i.countdown=0,i.tempInterval=0,i.mainInterval=n),n!==a&&d()}return i.tempInterval?i.tempInterval/1e3:i.mainInterval/1e3}return"string"==typeof w.pagenow&&(i.screenId=w.pagenow),"string"==typeof w.ajaxurl&&(i.url=w.ajaxurl),"object"==typeof w.heartbeatSettings&&(e=w.heartbeatSettings,!i.url&&e.ajaxurl&&(i.url=e.ajaxurl),e.interval&&(i.mainInterval=e.interval,i.mainInterval<15?i.mainInterval=15:120<i.mainInterval&&(i.mainInterval=120)),e.minimalInterval&&(e.minimalInterval=parseInt(e.minimalInterval,10),i.minimalInterval=0<e.minimalInterval&&e.minimalInterval<=600?1e3*e.minimalInterval:0),i.minimalInterval&&i.mainInterval<i.minimalInterval&&(i.mainInterval=i.minimalInterval),i.screenId||(i.screenId=e.screenId||"front"),"disable"===e.suspension&&(i.suspendEnabled=!1)),i.mainInterval=1e3*i.mainInterval,i.originalInterval=i.mainInterval,void 0!==document.hidden?(t="hidden",a="visibilitychange",n="visibilityState"):void 0!==document.msHidden?(t="msHidden",a="msvisibilitychange",n="msVisibilityState"):void 0!==document.webkitHidden&&(t="webkitHidden",a="webkitvisibilitychange",n="webkitVisibilityState"),t&&(document[t]&&(i.hasFocus=!1),r.on(a+".wp-heartbeat",function(){"hidden"===document[n]?(m(),w.clearInterval(i.checkFocusTimer)):(v(),document.hasFocus&&(i.checkFocusTimer=w.setInterval(s,1e4)))})),document.hasFocus&&(i.checkFocusTimer=w.setInterval(s,1e4)),f(w).on("unload.wp-heartbeat",function(){i.suspend=!0,i.xhr&&4!==i.xhr.readyState&&i.xhr.abort()}),w.setInterval(p,3e4),r.ready(function(){i.lastTick=o(),d()}),{hasFocus:function(){return i.hasFocus},connectNow:function(){i.lastTick=0,d()},disableSuspend:function(){i.suspendEnabled=!1},interval:I,hasConnectionError:b,enqueue:function(e,t,n){return!!e&&((!n||!this.isQueued(e))&&(i.queue[e]=t,!0))},dequeue:function(e){e&&delete i.queue[e]},isQueued:function(e){if(e)return i.queue.hasOwnProperty(e)},getQueuedItem:function(e){if(e)return this.isQueued(e)?i.queue[e]:void 0}}}}(jQuery,window);
