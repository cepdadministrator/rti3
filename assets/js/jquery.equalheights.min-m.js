/*!
 * Simple jQuery Equal Heights
 *
 * Copyright (c) 2013 Matt Banks
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 1.5.1
 */(function(e){var t=e(window).width();t>740&&(e.fn.equalHeights=function(){var t=0,n=e(this);n.each(function(){var n=e(this).innerHeight();n>t&&(t=n)});return n.css("height",t)});t>740&&e("[data-equal]").each(function(){var t=e(this),n=t.data("equal");t.find(n).equalHeights()})})(jQuery);