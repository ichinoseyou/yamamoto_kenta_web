jQuery(document).ready(function($) {

	"use strict";

	// Sticky Menu
	var stickyNavTop = $('#top-bar').offset().top;

	var stickyNav = function(){
	var scrollTop = $(window).scrollTop();

	if (scrollTop > 0) {
		$('#top-bar').addClass('sticky');
	} else {
		$('#top-bar').removeClass('sticky');
	}
	};

	stickyNav();

	$(window).scroll(function() {
	  stickyNav();
	});

	// Menu
	$('#nav-wrapper .menu').slicknav({
		prependTo:'#slick-mobile-menu',
		label:'Show Menu',
		allowParentLinks: true
	});

	// BXslider
	/* [2018.11.5 Ichi]トップの写真を一定時間ごとに流す設定に変更 */
	/* 参考：https://solopine.ticksy.com/article/9185/ */
	$('#featured-area .bxslider, .fullimage-gallery .bxslider').bxSlider({
		adaptiveHeight: true,
		mode: 'fade',
		pager: false,
		auto: ($(".bxslider div.slide-item").length > 1) ? true: false,
/*	auto: false, */
		pause: 6000, /* スライド変更時間を[ms]で指定 */
		nextText: '<i class="fa fa-angle-right"></i>',
		prevText: '<i class="fa fa-angle-left"></i>',
		onSliderLoad: function(){
			$(".sideslides").css("visibility", "visible");
		}
	});

	$('.post-img .bxslider').bxSlider({
	  adaptiveHeight: true,
	  mode: 'fade',
	  pager: false,
	  captions: true,
	  nextText: '<i class="fa fa-angle-right"></i>',
	  prevText: '<i class="fa fa-angle-left"></i>',
	  onSliderLoad: function(){
			$(".sideslides").css("visibility", "visible");
		}
	});

	$('#top-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('#show-search').animate({width:'toggle'});
    });
	$('#show-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('#show-search').animate({width:'toggle'});
    });

	// Fitvids
	$(document).ready(function(){
		$(".sp-container, .post-video-full").fitVids();
	});

});
