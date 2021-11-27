
(function ($) {
    "use strict";


/*--
    Menu Sticky
    -----------------------------------*/
    var windows = $(window);
    var sticky = $('.header-sticky');

    windows.on('scroll', function() {
        var scroll = windows.scrollTop();
        if (scroll < 300) {
            sticky.removeClass('is-sticky');
        }else{
            sticky.addClass('is-sticky');
        }
    });
    
/*--
    Off Canvas
    -------------------------------------------*/
    $(".off-canvas-btn").on('click', function () {
        $("body").addClass('fix');
        $(".off-canvas-wrapper").addClass('open');
    });

    $(".btn-close-off-canvas,.off-canvas-overlay").on('click', function () {
        $("body").removeClass('fix');
        $(".off-canvas-wrapper").removeClass('open');
    });
    
    

    
    
    

/*---
 Category Menu Active
 ---------------------------- */    
 $(".categories_title").on("click", function() {
    $(this).toggleClass('active1');
    $('.categories_menu_toggle').slideToggle('medium');
}); 
 
 $('.categories-more-less').on('click', function(){
    $('.hide-child').slideToggle();
    $(this).toggleClass('rx-change');
}); 
 
/* ---------------------
 Category menu
 --------------------- */
 function categorySubMenuToggle(){
    $('.categories_menu_toggle li.menu_item_children > a').on('click', function(){
        if($(window).width() < 991){
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp();
            }
            else {
                element.addClass('open');
                element.children('ul').slideDown();
                element.siblings('li').children('ul').slideUp();
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp();
            }
        }
    });
    $('.categories_menu_toggle li.menu_item_children > a').append('<span class="expand"></span>');
}
categorySubMenuToggle();


/*-- 
    Responsive Mobile Menu
    --------------------------------------------------*/
//Variables
var $offCanvasNav = $('.mobile-menu'),
$offCanvasNavSubMenu = $offCanvasNav.find('.dropdown');

    //Add Toggle Button With Off Canvas Sub Menu
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

    //Close Off Canvas Sub Menu
    $offCanvasNavSubMenu.slideUp();

    //Category Sub Menu Toggle
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active1');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active1');
                $this.closest('li').siblings('li').removeClass('active1').find('li').removeClass('active1');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });
    


    
// ScrollUp Active
$(document).find('.nice-select').niceSelect ();

$('.slider_active').owlCarousel({
  loop:true,
  dots: false,
  nav: true,
  navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
  items:1,
  autoplay:true,
  autoplayTimeout:2000,
  autoplayHoverPause:true,
  


})



$(".scrollTop").hide();

$(window).bind("scroll", function() {
    console.log("Scrolling...");
    console.log($(window).scrollTop());
        // Kiểm tra nếu trình duyệt cuộn qua menu
        if ($(window).scrollTop() > 100) {
            $("menu").addClass("fixed-menu");
            // Hiện nút scrollTop khi vượt quá Header
            $(".scrollTop").fadeIn("slow");
        } else {
            $("menu").removeClass("fixed-menu");
            // Ẩn nút scrollTop khi đang ở Header
            $(".scrollTop").fadeOut("slow");
        }
    });
    // Xử lý sự kiện khi click nút scrollTop
    $(".scrollTop").click(function(event) {
        // Di chuyển trang quay về đầu (header), xảy ra trong 1s
        $("body,html").animate({
            scrollTop: 0 // Set để quay về phần đầu trang
        }, 2000);
    });
    $(window).resize(function(event) {
        console.log($(window).width());
        if ($(window).width() >= 992) {
            $(".wrap-menu").show();
        } else {
            $(".wrap-menu").hide();
        }
    });

    
    
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });    




})(jQuery);
