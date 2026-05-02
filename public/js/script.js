// Preloader js
<<<<<<< HEAD
$(window).on("load", function () {
  "use strict";
  $(".preloader").fadeOut(0);
});

(function ($) {
  "use strict";
=======
function initMainScripts() {
  "use strict";
  $(".preloader").fadeOut(0);
>>>>>>> f3b3b2ad ( Adding the test)

  // tab
  $(".tab-content")
    .find(".tab-pane")
    .each(function (idx, item) {
      var navTabs = $(this).closest(".code-tabs").find(".nav-tabs"),
        title = $(this).attr("title");
<<<<<<< HEAD
      navTabs.append(
        '<li class="nav-item"><a class="nav-link" href="#">' +
          title +
          "</a></li>"
      );
=======
      if (navTabs.find('li').length === 0) {
        navTabs.append(
          '<li class="nav-item"><a class="nav-link" href="#">' +
            title +
            "</a></li>"
        );
      }
>>>>>>> f3b3b2ad ( Adding the test)
    });

  $(".code-tabs ul.nav-tabs").each(function () {
    $(this).find("li:first").addClass("active");
  });

  $(".code-tabs .tab-content").each(function () {
    $(this).find("div:first").addClass("active");
  });

<<<<<<< HEAD
  $(".nav-tabs a").click(function (e) {
=======
  $(".nav-tabs a").off('click').click(function (e) {
>>>>>>> f3b3b2ad ( Adding the test)
    e.preventDefault();
    var tab = $(this).parent(),
      tabIndex = tab.index(),
      tabPanel = $(this).closest(".code-tabs"),
      tabPane = tabPanel.find(".tab-pane").eq(tabIndex);
    tabPanel.find(".active").removeClass("active");
    tab.addClass("active");
    tabPane.addClass("active");
  });

  // accordion-collapse
<<<<<<< HEAD
  $(".accordion-collapse").on("show.bs.collapse", function () {
    $(this).siblings(".accordion-header").addClass("active");
  });
  $(".accordion-collapse").on("hide.bs.collapse", function () {
=======
  $(".accordion-collapse").off('show.bs.collapse').on("show.bs.collapse", function () {
    $(this).siblings(".accordion-header").addClass("active");
  });
  $(".accordion-collapse").off('hide.bs.collapse').on("hide.bs.collapse", function () {
>>>>>>> f3b3b2ad ( Adding the test)
    $(this).siblings(".accordion-header").removeClass("active");
  });

  //post slider
<<<<<<< HEAD
  $(".post-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4500,
    dots: false,
    arrows: true,
    prevArrow:
      '<button type="button" class="prevArrow"><i class="fas fa-angle-left"></i></button>',
    nextArrow:
      '<button type="button" class="nextArrow"><i class="fas fa-angle-right"></i></button>',
  });
=======
  if ($(".post-slider").length && !$(".post-slider").hasClass('slick-initialized')) {
    $(".post-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4500,
      dots: false,
      arrows: true,
      prevArrow:
        '<button type="button" class="prevArrow"><i class="fas fa-angle-left"></i></button>',
      nextArrow:
        '<button type="button" class="nextArrow"><i class="fas fa-angle-right"></i></button>',
    });
  }
>>>>>>> f3b3b2ad ( Adding the test)

  // videoPopupInit
  function videoPopupInit() {
    var $videoSrc;
<<<<<<< HEAD
    $(".video-play-btn").click(function () {
      $videoSrc = $(this).data("src");
    });
    $("#videoModal").on("shown.bs.modal", function (e) {
=======
    $(".video-play-btn").off('click').click(function () {
      $videoSrc = $(this).data("src");
    });
    $("#videoModal").off('shown.bs.modal').on("shown.bs.modal", function (e) {
>>>>>>> f3b3b2ad ( Adding the test)
      $("#showVideo").attr(
        "src",
        $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
      );
    });
<<<<<<< HEAD
    $("#videoModal").on("hide.bs.modal", function (e) {
=======
    $("#videoModal").off('hide.bs.modal').on("hide.bs.modal", function (e) {
>>>>>>> f3b3b2ad ( Adding the test)
      $("#showVideo").attr("src", $videoSrc);
    });
  }
  videoPopupInit();

  // table of content
<<<<<<< HEAD
  new ScrollMenu("#TableOfContents a", {
    duration: 400,
    activeOffset: 40,
    scrollOffset: 10,
  });
})(jQuery);
=======
  if ($("#TableOfContents").length) {
    new ScrollMenu("#TableOfContents a", {
      duration: 400,
      activeOffset: 40,
      scrollOffset: 10,
    });
  }
}

document.addEventListener('turbo:load', initMainScripts);
if (document.readyState !== 'loading') {
    initMainScripts();
}

>>>>>>> f3b3b2ad ( Adding the test)
