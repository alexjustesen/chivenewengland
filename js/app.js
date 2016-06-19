/*  js/app.js
 *
 *  Created     7/14/2015
 *  Updated     6/19/2016
 *
 *  Version     v1.1.0
 */

$( document ).ready( function() {    
    $( 'a.tribe-events-gcal' ).addClass( 'btn' );
    $( 'a.tribe-events-ical' ).addClass( 'btn' );
    
    if(window.location.href.indexOf("social") > -1) {
        $( '#facebook-count' ).countTo();              
        $( '#twitter-count' ).countTo();
        $( '#instagram-count' ).countTo();
        
        instafeedPage();
    }
});

// Animate the scroll to top
$( '.go-top' ).click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 300);
});

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function($) {
    var MQL = 1170;

    //primary navigation slide-in effect
    if ($(window).width() > MQL) {
        var headerHeight = $('.navbar-custom').height();
        $(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up...
                    if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {
                        $('.navbar-custom').addClass('is-visible');
                    } else {
                        $('.navbar-custom').removeClass('is-visible is-fixed');
                    }
                } else {
                    //if scrolling down...
                    $('.navbar-custom').removeClass('is-visible');
                    if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')) $('.navbar-custom').addClass('is-fixed');
                }
                this.previousTop = currentTop;
            });
    }
});

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
