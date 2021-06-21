"use strict";

/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */
jQuery(document).ready(function ($) {
  /*
  *
  *	Responsive iFrames
  *
  ------------------------------------*/
  var $all_oembed_videos = $("iframe[src*='youtube']");
  $all_oembed_videos.each(function () {
    $(this).removeAttr('height').removeAttr('width').wrap("<div class='embed-container'></div>");
  });
  /*
  *
  *	Flexslider
  *
  ------------------------------------*/

  $('.flexslider').flexslider({
    animation: "slide"
  }); // end register flexslider

  /*
  *
  *	Colorbox
  *
  ------------------------------------*/

  $('a.gallery').colorbox({
    rel: 'gal',
    width: '80%',
    height: '80%'
  });
  /* Slick Carousel */

  $('.swiper').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true
  });
  /*
  *
  *	Equal Heights Divs
  *
  ------------------------------------*/

  $('.js-blocks').matchHeight();
  $(document).on("click", "#toggleMenu", function () {
    $(this).toggleClass('open');
    $('.mobile-navigation').toggleClass('open');
    $('body').toggleClass('open-mobile-menu');
    $('.site-header .logo').toggleClass('fixed');
    var parentdiv = $(".mobile-navigation").outerHeight();
    var mobile_nav_height = $(".mobile-main-nav").outerHeight();

    if (mobile_nav_height > parentdiv) {
      $('.mobile-navigation').addClass("overflow-height");
    }
  });
  ribbon_edges();
  $(window).resize(function () {
    ribbon_edges();
  });

  function ribbon_edges() {
    var img = $("img.ribbon-edge").outerWidth();
    var a = parseInt(img) - 2;
    var wi = '-' + a + 'px';
    $("img.ribbon-edge.left").css('left', wi);
    $("img.ribbon-edge.right").css('right', wi);
  }

  $(document).on("click", ".orderNowBtn", function (e) {
    e.preventDefault();
    $(".orderNowInfo").toggleClass('open');
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
      $(this).find('span.lbl').text('CLOSE');
    } else {
      $(this).find('span.lbl').text('ORDER NOW');
    }
  });
  $(document).on("click", ".menu-toggle", function (e) {
    e.preventDefault();
    $("#site-navigation").toggleClass('open');
    $(this).toggleClass('open');
  });

  if ($(".iframediv").length > 0) {
    $(".iframediv").each(function () {
      $(this).appendTo("#topDiv");
    });
  }

  $(document).on("click", ".iframeData", function (e) {
    e.preventDefault();
    var id = $(this).attr('href');
    $(id).toggleClass('open');
    $("#topDiv").toggleClass('open');
    $("#overlaydiv").toggleClass('open');
    $("body").toggleClass('show-iframe');
  });
  $(document).on("click", ".closeOverlay", function (e) {
    e.preventDefault();
    $(".iframediv").removeClass('open');
    $("#topDiv").removeClass('open');
    $("#overlaydiv").removeClass('open');
    $("body").removeClass('show-iframe');
  });
}); // END #####################################    END