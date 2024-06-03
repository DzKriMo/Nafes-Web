$.fn.expand = function () {
  const expandedHeight = $(this).find(".faq-text").innerHeight();

  $(this)
    .find(".faq-body")
    .css({
      height: `${expandedHeight}px`,
    });

  $(this).addClass("expanded");
};

$.fn.collapse = function () {
  $(this).find(".faq-body").css({
    height: "0px",
  });

  $(this).removeClass("expanded");
};

$(() => {
  $(".faq").on("click", function (e) {
    const expanded = $(this).hasClass("expanded");

    if (expanded) {
      $(this).collapse();
    } else {
      $(this).siblings(".expanded").collapse();

      $(this).expand();
    }
  });
});
