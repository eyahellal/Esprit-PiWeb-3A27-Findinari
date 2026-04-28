// Preloader js
function initMainScripts() {
  "use strict";
  $(".preloader").fadeOut(0);

  // tab
  $(".tab-content")
    .find(".tab-pane")
    .each(function (idx, item) {
      var navTabs = $(this).closest(".code-tabs").find(".nav-tabs"),
        title = $(this).attr("title");
      if (navTabs.find('li').length === 0) {
        navTabs.append(
          '<li class="nav-item"><a class="nav-link" href="#">' +
            title +
            "</a></li>"
        );
      }
    });

  $(".code-tabs ul.nav-tabs").each(function () {
    $(this).find("li:first").addClass("active");
  });

  $(".code-tabs .tab-content").each(function () {
    $(this).find("div:first").addClass("active");
  });

  $(".nav-tabs a").off('click').click(function (e) {
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
  $(".accordion-collapse").off('show.bs.collapse').on("show.bs.collapse", function () {
    $(this).siblings(".accordion-header").addClass("active");
  });
  $(".accordion-collapse").off('hide.bs.collapse').on("hide.bs.collapse", function () {
    $(this).siblings(".accordion-header").removeClass("active");
  });

  //post slider
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

  // videoPopupInit
  function videoPopupInit() {
    var $videoSrc;
    $(".video-play-btn").off('click').click(function () {
      $videoSrc = $(this).data("src");
    });
    $("#videoModal").off('shown.bs.modal').on("shown.bs.modal", function (e) {
      $("#showVideo").attr(
        "src",
        $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
      );
    });
    $("#videoModal").off('hide.bs.modal').on("hide.bs.modal", function (e) {
      $("#showVideo").attr("src", $videoSrc);
    });
  }
  videoPopupInit();

  // table of content
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

