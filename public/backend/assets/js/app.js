!(function (e) {
  "use strict";
  function t() {
    for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), t = 0, n = e.length; t < n; t++)
      "nav-item dropdown active" === e[t].parentElement.getAttribute("class") && (e[t].parentElement.classList.remove("active"), e[t].nextElementSibling.classList.remove("show"));
  }
  function n(t) {
    let n = "";
    let END_POINT = document.head.querySelector('meta[name="END-POINT"]')
    if(END_POINT) {
      n = END_POINT.content
    }
      1 == e("#light-mode-switch").prop("checked") && "light-mode-switch" === t
        ? (e("html").removeAttr("dir"),
          e("#dark-mode-switch").prop("checked", !1),
          e("#rtl-mode-switch").prop("checked", !1),
          e("#bootstrap-style").attr("href", n + "backend/assets/css/bootstrap.min.css"),
          e("#app-style").attr("href", n + "backend/assets/css/app.min.css"),
          sessionStorage.setItem("is_visited", "light-mode-switch"))
        : 1 == e("#dark-mode-switch").prop("checked") && "dark-mode-switch" === t
        ? (e("html").removeAttr("dir"),
          e("#light-mode-switch").prop("checked", !1),
          e("#rtl-mode-switch").prop("checked", !1),
          e("#bootstrap-style").attr("href", n + "backend/assets/css/bootstrap-dark.min.css"),
          e("#app-style").attr("href", n + "backend/assets/css/app-dark.min.css"),
          sessionStorage.setItem("is_visited", "dark-mode-switch"))
        : 1 == e("#rtl-mode-switch").prop("checked") &&
          "rtl-mode-switch" === t &&
          (e("#light-mode-switch").prop("checked", !1),
          e("#dark-mode-switch").prop("checked", !1),
          e("#bootstrap-style").attr("href", "assets/css/bootstrap-rtl.min.css"),
          e("#app-style").attr("href", "assets/css/app-rtl.min.css"),
          e("html").attr("dir", "rtl"),
          sessionStorage.setItem("is_visited", "rtl-mode-switch"));
  }
  function a() {
    document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || (console.log("pressed"), e("body").removeClass("fullscreen-enable"));
  }
  var s;
  e("#side-menu").metisMenu(),
    e("#vertical-menu-btn").on("click", function (t) {
      t.preventDefault(), e("body").toggleClass("sidebar-enable"), 992 <= e(window).width() ? e("body").toggleClass("vertical-collpsed") : e("body").removeClass("vertical-collpsed");
    }),
    e("#sidebar-menu a").each(function () {
      var t = window.location.href.split(/[?#]/)[0];
      this.href == t &&
        (e(this).addClass("active"),
        e(this).parent().addClass("mm-active"),
        e(this).parent().parent().addClass("mm-show"),
        e(this).parent().parent().prev().addClass("mm-active"),
        e(this).parent().parent().parent().addClass("mm-active"),
        e(this).parent().parent().parent().parent().addClass("mm-show"),
        e(this).parent().parent().parent().parent().parent().addClass("mm-active"));
    }),
    e(".navbar-nav a").each(function () {
      var t = window.location.href.split(/[?#]/)[0];
      this.href == t &&
        (e(this).addClass("active"),
        e(this).parent().addClass("active"),
        e(this).parent().parent().addClass("active"),
        e(this).parent().parent().parent().addClass("active"),
        e(this).parent().parent().parent().parent().addClass("active"),
        e(this).parent().parent().parent().parent().parent().addClass("active"),
        e(this).parent().parent().parent().parent().parent().parent().addClass("active"));
    }),
    e('[data-toggle="fullscreen"]').on("click", function (t) {
      t.preventDefault(),
        e("body").toggleClass("fullscreen-enable"),
        document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement
          ? document.cancelFullScreen
            ? document.cancelFullScreen()
            : document.mozCancelFullScreen
            ? document.mozCancelFullScreen()
            : document.webkitCancelFullScreen && document.webkitCancelFullScreen()
          : document.documentElement.requestFullscreen
          ? document.documentElement.requestFullscreen()
          : document.documentElement.mozRequestFullScreen
          ? document.documentElement.mozRequestFullScreen()
          : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }),
    document.addEventListener("fullscreenchange", a),
    document.addEventListener("webkitfullscreenchange", a),
    document.addEventListener("mozfullscreenchange", a),
    e(".right-bar-toggle").on("click", function (t) {
      e("body").toggleClass("right-bar-enabled");
    }),
    e(document).on("click", "body", function (t) {
      0 < e(t.target).closest(".right-bar-toggle, .right-bar").length || e("body").removeClass("right-bar-enabled");
    }),
    (function () {
      if (document.getElementById("topnav-menu-content")) {
        for (var e = document.getElementById("topnav-menu-content").getElementsByTagName("a"), n = 0, a = e.length; n < a; n++)
          e[n].onclick = function (e) {
            "#" === e.target.getAttribute("href") && (e.target.parentElement.classList.toggle("active"), e.target.nextElementSibling.classList.toggle("show"));
          };
        window.addEventListener("resize", t);
      }
    })(),
    [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (e) {
      return new bootstrap.Tooltip(e);
    }),
    [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function (e) {
      return new bootstrap.Popover(e);
    }),
    window.sessionStorage && ((s = sessionStorage.getItem("is_visited")) ? (e(".right-bar input:checkbox").prop("checked", !1), e("#" + s).prop("checked", !0), n(s)) : sessionStorage.setItem("is_visited", "light-mode-switch")),
    e("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change", function (e) {
      n(e.target.id);
    }),
    e("#header-chart-1").sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], { type: "bar", height: "35", barWidth: "5", barSpacing: "3", barColor: "#1b82ec" }),
    e("#header-chart-2").sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], { type: "bar", height: "35", barWidth: "5", barSpacing: "3", barColor: "#f5b225" }),
    e(window).on("load", function () {
      e("#status").fadeOut(), e("#preloader").delay(350).fadeOut("slow");
    }),
    Waves.init();
})(jQuery);
