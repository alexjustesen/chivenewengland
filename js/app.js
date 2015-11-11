/*  js/app.js
 *
 *  Created     7/14/2015
 *  Updated     11/11/2015
 *
 *  Version     v1.0.1
 */

$( document ).ready( function() {    
    $( 'a.tribe-events-gcal' ).addClass( 'btn' );
    $( 'a.tribe-events-ical' ).addClass( 'btn' );
    
    if(window.location.href.indexOf("social") > -1) {
        $( '#facebook-count' ).countTo();              
        $( '#twitter-count' ).countTo();
        $( '#instagram-count' ).countTo();
        
        instafeedPage();
        instafeedTag('chivenewengland');
    }
});

// Animate the scroll to top
$( '.go-top' ).click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 300);
});

// Instafeed for Instagram
function instafeedPage() {
    // Get page feed.
    var pageData = new Instafeed({
        clientId: '566e12af72a64b1f9212b5b0c8277d1e', // You will need to register an APP on Instagram to get your clientID which is required for feeds.
        accessToken: '1650222888.467ede5.893fa741c1db4a3d8050c81a3c6bec37', // You will need to register an APP on Instagram to get your access_token which is required for page feeds.
        get: 'user',
        userId: 1650222888,
        links: true,
        limit: 12,
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        target: 'instafeed-page',
        template: '<div class="col-xs-12 col-sm-4"><a href="{{link}}" target="_blank"><div class="well well-sm"><div class="row"><div class="instafeed-image-wrap col-xs-12"><img src="{{image}}" class="lazy img-responsive"/><div class="instafeed-info">{{likes}} Likes + {{comments}} Comments</div></div><div class="col-xs-12"><div class="instafeed-caption">{{caption}}</div></div></div></div></a></div>'
    });
    pageData.run();
}
function instafeedTag($tagName) {
    // Empty the target
    $target = "instafeed-tag-"+$tagName;
    $( "#"+$target ).empty();
    
    // Get tag feed.
    var tagData = new Instafeed({
        clientId: '566e12af72a64b1f9212b5b0c8277d1e', // You will need to register an APP on Instagram to get your clientID which is required for feeds.
        get: 'tagged',
        tagName: $tagName,
        links: true,
        limit: 12,
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        target: $target,
        template: '<div class="col-xs-12 col-sm-4"><a href="{{link}}" target="_blank"><div class="well well-sm"><div class="row"><div class="instafeed-image-wrap col-xs-12"><img src="{{image}}" class="lazy img-responsive"/><div class="instafeed-info">{{likes}} Likes + {{comments}} Comments</div></div><div class="col-xs-12"><div class="instafeed-caption">{{caption}}</div></div></div></div></a></div>'
    });
    tagData.run();
}

// jQuery smoothScroll
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

// jQuery countTo
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.text(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));
