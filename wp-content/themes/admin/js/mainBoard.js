(function($) {
  "use strict";
  // $(".sideMenu-toggle-btn").click(function() {
  //   $(".body-blocks").toggleClass("minified");
  // });

  $(".work-menu").click(function() {
    $(".work-menu .sub-side-menu").toggleClass("open");
  });
  $(".health-menu").click(function() {
    $(".health-menu .sub-side-menu").toggleClass("open");
  });
  function toggleClass(elem, className) {
    var newClass = " " + elem.className.replace(/[\t\r\n]/g, " ") + " ";
    if (hasClass(elem, className)) {
      while (newClass.indexOf(" " + className + " ") >= 0) {
        newClass = newClass.replace(" " + className + " ", " ");
      }
      elem.className = newClass.replace(/^\s+|\s+$/g, "");
    } else {
      elem.className += " " + className;
    }
  }
})(jQuery);
