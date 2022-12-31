$(document).ready( function(){

  $(function highlightCurrentUrl() {
    var currentUrl = window.location.href;
    var items = $(".item").each(function() {
      var anchor = $(this).find('a');
      $(this).removeClass('active');
  
      //comparison logic
      if (anchor.prop('href') == currentUrl) {
        $(this).addClass("active");
      }
  
    });
  });

    var swiper = new Swiper(".client-slider", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
    });

    $(".fmwp-forum-wrapper").addClass("container");
    $(".fmwp-topic-main-wrapper").addClass("container");

    $(".header .toggle-menu").click(function () {
        $(".sidebar").addClass("active");
        $(".close-sidebar").addClass("active");
    });
    $(".close-sidebar").click(function () {
        $(".sidebar").removeClass("active");
        $(this).removeClass("active");
    });
    $(".close").click(function () {
      $(".sidebar").removeClass("active");
  });
  
  var swiper = new Swiper(".aboutus-slider", {
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  
  // Cache selectors
var lastId,
topMenu = $("#mainNav"),
topMenuHeight = topMenu.outerHeight()+1,
// All list items
menuItems = topMenu.find("a"),
// Anchors corresponding to menu items
scrollItems = menuItems.map(function(){
  var item = $($(this).attr("href"));
   if (item.length) { return item; }
});
$('.tutorials__inner--content-menu ul li:first a').addClass('element-active');
// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
 var href = $(this).attr("href"),
     offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+0;
 $('html, body').stop().animate({ 
     scrollTop: offsetTop
 }, 0);
 e.preventDefault();
 $('.tutorials__inner--content-menu ul li a').removeClass('element-active');
 $(this).addClass('element-active');
});

// Bind to scroll
$(window).scroll(function(){
  // Get container scroll position
  var fromTop = $(this).scrollTop()+topMenuHeight;
  
  // Get id of current scroll item
  var cur = scrollItems.map(function(){
    if ($(this).offset().top < fromTop)
      return this;
  });
  // Get the id of the current element
  cur = cur[cur.length-1];
  var id = cur && cur.length ? cur[0].id : "";
  
  if (lastId !== id) {
      lastId = id;
      // Set/remove active class
      menuItems
        .parent().removeClass("active")
        .end().filter("[href=#"+id+"]").parent().addClass("active");
  }                   
});
  var menu = ['01', '02', '03', '04', '05']
  var swiper = new Swiper(".feature-slider", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (menu[index]) + '</span>';
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    speed: 1500, 
  });

  swiper.on('slideChange', function ( slide ) {
    jQuery( '.feature-slider__number-current' ).text( '0' + ( slide.realIndex + 1 ) );
  });
  
});


