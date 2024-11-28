function setStickyNavOffset() {
    let e = $(".inner-banner").outerHeight() - $("#main-nav").outerHeight();
    (e -= $(".sticky-nav").outerHeight()),
        (e -= $(".sticky-nav .container-fluid").outerHeight()),
        (e /= 2),
        $(".inner-banner .container-fluid").outerHeight(),
        $("#main-nav").outerHeight(),
        document.getElementsByClassName("sticky-nav").length &&
        $(".sticky-nav").attr("data-scroll-offset", e);
}
function getBgColor(e) {
    let t = new URL(e).pathname.split("/"),
        a = t.pop() || t.pop(),
        i = "";
    return "transformation" == a
        ? "#5aa63d"
        : "mobility" == a
            ? "#5D9C11"
            : "interactive-marketing" == a
                ? "#0d53bd"
                : "commerce" == a
                    ? "#13B0A8"
                    : "#000000";
}
$(function () {
    $(".ham-menu-inner-bx .inner-wrap").click(function () {
        var e = window.location.href,
            t = e.substring(e.lastIndexOf("/") + 1);
        t.indexOf("?") > -1 &&
            (t = (t = t.substring(0, t.indexOf("?") + 1)).replace("?", "")),
            "" == t && (t = "index.php"),
            setCookie("formhttpreffrer", t, 365);
    }),
        $(".sticky-nav .linking-slider a:first").click(function (e) {
            setTimeout(() => {
                locoScroll.scrollTo("top");
            }, 1e3);
        });
    var e = window.location.href,
        t = e.substring(e.lastIndexOf("/") + 1);
    t.indexOf("?") > -1 &&
        (t = (t = t.substring(0, t.indexOf("?") + 1)).replace("?", "")),
        "about-us" == t && callab(),
        "contact-us" == t && callcontact(),
        "affiliation-partnerships" == t && callaff(),
        "contact-us" == t && callcontact(),
        "clients" == t && callclient(),
        "brands-products" == t && callbp(),
        "transformation" == t && calltrans(),
        "commerce" == t && callcomm(),
        "mobility" == t && callmob();
    var a = $(location).attr("pathname");
    a.indexOf(1),
        a.toLowerCase(),
        (a = a.split("/")[1]),
        ("current-openings" == t || "current-openings" == a) && callcareer(),
        ("careers" == t || "careers" == a) && callcareer(),
        "interactive-marketing" == t && callim();
    let i = new URL(window.location.href).pathname.split("/"),
        o = i.pop() || i.pop();
    setStickyNavOffset(), reInitJS(), initAnims(o);
    let n = 0;
    if ("index.php" != o || "" != o || "about.php" != o || "contact.php" != o || "services.php" != o || "portfolio.php" != o || "graphic-designing.php" != o || "digital-marketing.php" != o || "seo-content-writing.php" != o || "app-development.php" != o || "ui-ux-designing.php" != o || "website-development.php" != o) {
        let s = setInterval(function () {
            if ("complete" === document.readyState) {
                let e = new URLSearchParams(window.location.search),
                    t = "top",
                    a = 0;
                (a = $(".inner-banner").outerHeight() - $("#main-nav").outerHeight()),
                    (a -= $(".sticky-nav").outerHeight()),
                    (a -= $(".sticky-nav .container-fluid").outerHeight()),
                    window.matchMedia("(min-width: 800px)").matches
                        ? window.matchMedia("(min-width: 1100px)").matches
                            ? (a = -400)
                            : (n = 1)
                        : (a = -220),
                    e.has("section") &&
                    ((t = "#" + e.get("section")),
                        setTimeout(() => {
                            let a = new URLSearchParams(window.location.search),
                                i = a.get("section"),
                                o = 1,
                                n = 0;
                            if (
                                ($(".sticky-nav .swiper-slide a").each(function (e, t) {
                                    if ($(this).attr("href") == "#" + i && 1 == o)
                                        return (n = 1), !1;
                                    o += 1;
                                }),
                                    1 != n)
                            ) {
                                let s = 0;
                                window.matchMedia("(min-width: 800px)").matches || (s = 31.5);
                                let r = $(
                                    '.sticky-nav a[href*="' + e.get("section") + '"]'
                                ).data("scroll-offset");
                                locoScroll.scrollTo(t, { offset: r + s, duration: 1200 });
                            }
                        }, 1e3)),
                    clearInterval(s);
            }
        }, 1e3);
    }
});
const loader = document.querySelector(".loader-warp"),
    loaderImg = document.querySelector(".loader-img");
function loaderIn(e, t, a) {
    let i = 0,
        o = 0,
        n = window.innerWidth,
        s = window.innerHeight;
    if ("function" == typeof e.getBoundingClientRect) {
        let { height: r, width: l, top: c, left: d } = e.getBoundingClientRect();
        (i = Math.floor(c)),
            (o = Math.floor(d)),
            (n = Math.floor(l)),
            (s = Math.floor(r));
    }
    window.innerHeight, window.innerWidth, getBgColor(a);
    let f = gsap.timeline();
    return (
        f
            .set(loader, {
                backgroundColor: "#000",
                autoAlpha: 1,
                width: "100vw",
                height: "100vh",
            })
            .fromTo(
                loader,
                { scaleY: 0, transformOrigin: "bottom bottom" },
                { duration: 1.5, scaleY: 1, ease: "Power4.out" }
            )
            .to(loaderImg, { opacity: 1 }),
        f
    );
}
function loaderAway(e) {
    return (
        document.body.removeAttribute("class"),
        document.body.classList.add(e.container.dataset.class),
        e.container.querySelector("h1"),
        e.container.querySelectorAll("p"),
        e.container.querySelector("img"),
        !0
    );
}
barba.hooks.beforeOnce((e) => { }),
    barba.hooks.afterOnce((e) => {
        window.onload = function () {
            setTimeout(() => {
                let e = gsap.timeline();
                e.to(loaderImg, { opacity: 0 }),
                    e.to(loader, {
                        transformOrigin: "bottom bottom",
                        duration: 1,
                        scaleY: 0,
                        ease: "Power4.inOut",
                    }),
                    locoScroll.update();
            }, 1500);
        };
    }),
    barba.hooks.before(() => {
        document.querySelector("html").classList.add("is-transitioning");
    }),
    barba.hooks.after((e) => {
        reInitJS();
        let t = new URL(window.location.href).pathname.split("/"),
            a = t.pop() || t.pop(),
            i = new URLSearchParams(window.location.search),
            o = "top",
            n = 0,
            s = 0;
        if (i.has("section")) {
            (o = "#" + i.get("section")),
                (n = $(".inner-banner").outerHeight() - $("#main-nav").outerHeight()),
                (n -= $(".sticky-nav").outerHeight()),
                (n -= $(".sticky-nav .container-fluid").outerHeight());
            var r = 0;
            window.matchMedia("(min-width: 800px)").matches
                ? window.matchMedia("(min-width: 1100px)").matches
                    ? (n = 400)
                    : ((n = 500), (r = 1))
                : (n = 220),
                (s = n);
        }
        locoScroll.destroy(),
            initLocoScroll(),
            locoScroll.scrollTo("top"),
            setStickyNavOffset(),
            setTimeout(() => {
                initAnims(a);
            }, 800),
            setTimeout(() => {
                setTimeout(() => {
                    if ("top" != o) {
                        let e = new URLSearchParams(window.location.search),
                            t = e.get("section"),
                            s = 1,
                            r = 0;
                        if (
                            ($(".sticky-nav .swiper-slide a").each(function (e, a) {
                                if ($(this).attr("href") == "#" + t && 1 == s)
                                    return (r = 1), !1;
                                s += 1;
                            }),
                                1 != r)
                        ) {
                            let l = 0;
                            window.matchMedia("(min-width: 800px)").matches || (l = 10);
                            let c = $('.sticky-nav a[href*="' + i.get("section") + '"]').data(
                                "scroll-offset"
                            );
                            locoScroll.scrollTo(o, { offset: c + l, duration: 1200 });
                        }
                    } else
                        "index.php" == a ||
                            "" == a || "about.php" == a || "contact.php" == a || "services.php" == a || "portfolio.php" == a || "website-development.php" == a || "graphic-designing.php" == a || "app-development.php" == a || "ui-ux-designing.php" == a || "digital-marketing.php" == a || "seo-content-writing.php" == a || 
                            locoScroll.scrollTo(o, {
                                offset: -n,
                                callback: function () {
                                    setTimeout(() => {
                                        i.has("section")
                                            ? (updateLocoScroll(locoScroll), locoScroll.update())
                                            : (locoScroll.destroy(), initLocoScroll()),
                                            $("#main-nav").removeClass("bg-black"),
                                            $("header").css("background-color", "");
                                    }, 430);
                                },
                            });
                }, 1e3);
            }, 1e3),
            setTimeout(() => {
                let e = gsap.timeline();
                e.to(loaderImg, { opacity: 0 }),
                    e.to(loader, {
                        transformOrigin: "bottom bottom",
                        duration: 1,
                        scaleY: 0,
                        ease: "Power4.inOut",
                    });
            }, 1500),
            document.querySelector("html").classList.remove("is-transitioning"),
            document.getElementById("hamburger").classList.remove("open"),
            document.getElementById("hamburger").classList.remove("active"),
            document.getElementById("overlay").classList.remove("open"),
            $("body").css("overflow", "auto"),
            setTimeout(() => {
                $("#main-nav").removeClass("bg-black"),
                    $("header").css("background-color", "");
            }, 200);
    }),
    barba.hooks.enter(() => {
        $(".sticky-nav .linking-slider a:first").click(function (e) {
            setTimeout(() => {
                locoScroll.scrollTo("top", { duration: 1200 });
            }, 1e3);
        });
        var e = window.location.href,
            t = e.substring(e.lastIndexOf("/") + 1);
        t.indexOf("?") > -1 &&
            (t = (t = t.substring(0, t.indexOf("?") + 1)).replace("?", "")),
            "interactive-marketing" == t && callim(),
            "about-us" == t && callab(),
            ("careers-form" == t || "apply-now" == t),
            "affiliation-partnerships" == t && callaff(),
            "contact-us" == t && callcontact(),
            "clients" == t && callclient(),
            "brands-products" == t && callbp(),
            "transformation" == t && calltrans(),
            "commerce" == t && callcomm(),
            "mobility" == t && callmob();
        var a = $(location).attr("pathname");
        a.indexOf(1),
            a.toLowerCase(),
            (a = a.split("/")[1]),
            ("current-openings" == t || "current-openings" == a) && callcareer(),
            ("careers" == t || "careers" == a) && callcareer();
    }),
    barba.hooks.afterEnter(() => { }),
    barba.hooks.beforeLeave((e) => {
        setCookie("formhttpreffrer", e.current.url.path, 365);
    }),
    barba.hooks.beforeEnter((e) => { }),
    barba.init({
        timeout: 15e3,
        transitions: [
            {
                async leave(e) {
                    await loaderIn(e.trigger, e.next.namespace, e.next.url.href);
                },
                enter({ next: e }) {
                    loaderAway(e);
                },
                once(e) { },
                after(e) {
                    function t(e) {
                        var t = e.which ? e.which : event.keyCode;
                        return 43 == t || 46 == t || !(t > 31) || (!(t < 48) && !(t > 57));
                    }
                    "" == getCookie("CookieConsent") || 0 == getCookie("CookieConsent")
                        ? $("#cookieConsent").css("display", "block")
                        : $("#cookieConsent").css("display", "none"),
                        $(".alphabets").keypress(function (e) {
                            var t = e.charCode;
                            (t >= 65 && t <= 122) || 32 == t || 0 == t || e.preventDefault();
                        }),
                        $(".alhanumeric").keyup(function (e) {
                            if ("32" == (event.keyCode ? event.keyCode : event.which))
                                return !1;
                            $(this).val(
                                $(this)
                                    .val()
                                    .replace(/[^a-z0-9_ ]/gi, "")
                            );
                        }),
                        $(".ham-menu-inner-bx .inner-wrap").click(function () {
                            var e = window.location.href,
                                t = e.substring(e.lastIndexOf("/") + 1);
                            t.indexOf("?") > -1 &&
                                (t = (t = t.substring(0, t.indexOf("?") + 1)).replace("?", "")),
                                "" == t && (t = "index.php"),
                                setCookie("formhttpreffrer", t, 365);
                        }),
                        $(".sticky-nav .linking-slider a:first").click(function (e) {
                            setTimeout(() => {
                                locoScroll.scrollTo("top");
                            }, 1e3);
                        });
                    var a = e.next.url.href,
                        i = a.substring(a.lastIndexOf("/") + 1);
                    i.indexOf("?") > -1 &&
                        (i = (i = i.substring(0, i.indexOf("?") + 1)).replace("?", "")),
                        "interactive-marketing" == i && callim(),
                        "about-us" == i && callab(),
                        ("careers-form" == i || "apply-now" == i),
                        "affiliation-partnerships" == i && callaff(),
                        "contact-us" == i && callcontact(),
                        "clients" == i && callclient(),
                        "brands-products" == i && callbp(),
                        "transformation" == i && calltrans(),
                        "commerce" == i && callcomm(),
                        "mobility" == i && callmob();
                    var o = $(location).attr("pathname");
                    if (
                        (o.indexOf(1),
                            o.toLowerCase(),
                            (o = o.split("/")[1]),
                            ("current-openings" == i || "current-openings" == o) &&
                            callcareer(),
                            ("careers" == i || "careers" == o) && callcareer(),
                            "current-opening" == i || "careers" == o || "current-openings" == o)
                    ) {
                        let n = document.querySelector(".search-input");
                        function s() {
                            (searchTerm = $(".search-input").val().toLowerCase()),
                                (city = $("#query_type").val()),
                                "" != (dpt = $("#department").val()) && "" != city
                                    ? titles.forEach((e) => {
                                        (tit = e.textContent.toLowerCase()),
                                            e.getAttribute("data-city") == city &&
                                                e.getAttribute("data-dpt") == dpt &&
                                                tit.includes(searchTerm)
                                                ? (e.style.display = "block")
                                                : (e.style.display = "none");
                                    })
                                    : "" != dpt && "" == city
                                        ? titles.forEach((e) => {
                                            (tit = e.textContent.toLowerCase()),
                                                e.getAttribute("data-dpt") == dpt &&
                                                    tit.includes(searchTerm)
                                                    ? (e.style.display = "block")
                                                    : (e.style.display = "none");
                                        })
                                        : "" != city && "" == dpt
                                            ? titles.forEach((e) => {
                                                (tit = e.textContent.toLowerCase()),
                                                    e.getAttribute("data-city") == city &&
                                                        tit.includes(searchTerm)
                                                        ? (e.style.display = "block")
                                                        : (e.style.display = "none");
                                            })
                                            : titles.forEach((e) => {
                                                (tit = e.textContent.toLowerCase()).includes(searchTerm)
                                                    ? (e.style.display = "block")
                                                    : (e.style.display = "none");
                                            });
                        }
                        void 0 != n &&
                            ($(document).on("change", "#query_type", function () {
                                s();
                            }),
                                $(document).on("change", "#department", function () {
                                    s();
                                }),
                                $(document).on("click", ".search-icon", function () {
                                    s();
                                }),
                                n.addEventListener("keyup", s),
                                (titles = document.querySelectorAll(".maind .titled")),
                                (searchTerm = ""),
                                (tit = ""),
                                (city = ""),
                                (dpt = ""));
                    }
                    setTimeout(function () {
                        $("header").hasClass("homeHeader") &&
                            locoScroll.on("scroll", (e) => {
                                $(".dsk-menu .main-nav li a").removeClass("active-remain"),
                                    "down" == e.direction
                                        ? gsap.to(".homeHeader", {
                                            duration: 0.3,
                                            ease: Linear.easeOut,
                                            css: { top: "-111px" },
                                        })
                                        : gsap.to(".homeHeader", {
                                            duration: 0.3,
                                            ease: Linear.easeOut,
                                            css: { top: "0px" },
                                        });
                            }),
                            $(document)
                                .on("mouseenter", ".dsk-menu .main-nav li ", function (e) {
                                    $(".dsk-menu .main-nav li a.active").addClass(
                                        "active-remain"
                                    ),
                                        $(".dsk-menu .main-nav li a").removeClass("active");
                                })
                                .on("mouseleave", ".dsk-menu .main-nav li ", function () {
                                    $(".dsk-menu .main-nav li a.active-remain").addClass(
                                        "active"
                                    );
                                });
                    }, 2e3);
                },
            },
        ],
        debug: !1,
    });
var menuAnimates = gsap.timeline();
function callim() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document.getElementById("strategy").setAttribute("data-scroll-offset", e),
        document
            .getElementById("digital-advertising")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("creative-content")
            .setAttribute("data-scroll-offset", e),
        document.getElementById("design").setAttribute("data-scroll-offset", e),
        document
            .getElementById("social-media-marketing")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("performance-marketing")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("influencer-marketing")
            .setAttribute("data-scroll-offset", e),
        document.getElementById("digital-pr").setAttribute("data-scroll-offset", e),
        document.getElementById("search").setAttribute("data-scroll-offset", e);
}
function callab() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document.getElementById("company").setAttribute("data-scroll-offset", e),
        document.getElementById("vision").setAttribute("data-scroll-offset", e),
        document.getElementById("mission").setAttribute("data-scroll-offset", e),
        document.getElementById("bod").setAttribute("data-scroll-offset", e),
        document
            .getElementById("initiatives")
            .setAttribute("data-scroll-offset", e);
}
function callcontact() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document.getElementById("karachi").setAttribute("data-scroll-offset", e),
        document.getElementById("islamabad").setAttribute("data-scroll-offset", e),
        document.getElementById("lahore").setAttribute("data-scroll-offset", e),
        document
            .getElementById("general-inquiries")
            .setAttribute("data-scroll-offset", e);
}
function callaff() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document.getElementById("google").setAttribute("data-scroll-offset", e),
        document.getElementById("microsoft").setAttribute("data-scroll-offset", e),
        document.getElementById("alibaba").setAttribute("data-scroll-offset", e),
        document
            .getElementById("iso-9001-2015")
            .setAttribute("data-scroll-offset", e);
}
function callclient() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document.getElementById("telecom").setAttribute("data-scroll-offset", e),
        document
            .getElementById("bank-finance")
            .setAttribute("data-scroll-offset", e),
        document.getElementById("fmcg").setAttribute("data-scroll-offset", e),
        document
            .getElementById("real-estate")
            .setAttribute("data-scroll-offset", e),
        document.getElementById("others").setAttribute("data-scroll-offset", e);
}
function callbp() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document
            .getElementById("symmetry-digital")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("iris-digital")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("symmetry-trade")
            .setAttribute("data-scroll-offset", e),
        document.getElementById("corral").setAttribute("data-scroll-offset", e),
        document
            .getElementById("appabilities")
            .setAttribute("data-scroll-offset", e),
        document.getElementById("survit").setAttribute("data-scroll-offset", e),
        document.getElementById("mobits").setAttribute("data-scroll-offset", e),
        document
            .getElementById("corral-performance")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("influsenseai")
            .setAttribute("data-scroll-offset", e);
}
function calltrans() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document
            .getElementById("technology-consulting")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("digital-consultancy")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("digital-strategy")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("data-science")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("web-software-application")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("iot-devices")
            .setAttribute("data-scroll-offset", e);
}
function callcomm() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document
            .getElementById("digital-commerce-design")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("back-end-system-development")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("third-party-integrations")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("global-ecommerce-deployment")
            .setAttribute("data-scroll-offset", e);
}
function callcareer() {
    var e = 0.0515 * window.innerHeight;
    e = e + "%," + e + "%";
    var t = $(location).attr("pathname");
    if ((t.indexOf(1), t.toLowerCase(), void 0 == (t = t.split("/")[2]))) {
        var a = document.getElementById("job-search");
        a.setAttribute("data-scroll-offset", e),
            document
                .getElementById("job-results")
                .setAttribute("data-scroll-offset", e);
    } else {
        var a = document.getElementById("job-details");
        a.setAttribute("data-scroll-offset", e);
    }
}
function callmob() {
    var e = 0.0515 * window.innerHeight;
    (e = e + "%," + e + "%"),
        document
            .getElementById("mobile-marketing-solutions")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("voice-messaging-solutions")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("applications-mobility")
            .setAttribute("data-scroll-offset", e),
        document
            .getElementById("geo-location-tagging")
            .setAttribute("data-scroll-offset", e);
}
function setCookie(e, t, a) {
    var i = new Date();
    i.setTime(i.getTime() + 864e5 * a);
    var o = "expires=" + i.toUTCString();
    document.cookie = e + "=" + t + ";" + o + ";path=/";
}
function getCookie(e) {
    for (
        var t = e + "=", a = document.cookie.split(";"), i = 0;
        i < a.length;
        i++
    ) {
        for (var o = a[i]; " " == o.charAt(0);) o = o.substring(1);
        if (0 == o.indexOf(t)) return o.substring(t.length, o.length);
    }
    return "";
}
function isNumberKey(e) {
    var t = e.which ? e.which : event.keyCode;
    return 43 == t || 46 == t || !(t > 31) || (!(t < 48) && !(t > 57));
}
$(".callev").hover(
    function (e) {
        let t = $(this).data("mainu"),
            a = $(this).offset().top - $(window).scrollTop(),
            i = $(".ham-middle-box").offset().top - $(window).scrollTop();
        if (window.matchMedia("(width: 1600px)").matches) var o = parseInt(a - i);
        else var o = parseInt(a + 10 - i);
        $(".ham-middle-box li a,.ham-middle-box li p").removeClass("active"),
            $(".invisible-div").each(function () {
                $(this).attr("id") != t &&
                    ($(this).children("div").children("p").addClass("active"),
                        $(this).hide());
            }),
            $(this).children("div").children("p").addClass("active"),
            1 != $("#" + t + ":visible").length &&
            ($("#" + t).css("margin-top", o + "px"), $("#" + t).fadeIn(1e3));
    },
    function () {
        return (
            !($(".mouse-hover:hover").length > 0) &&
            ($(".invisible-div").hide(),
                $(".ham-middle-box li a,.ham-middle-box li p").removeClass("active"),
                !1)
        );
    }
),
    setInterval(function () {
        let e = $(".callev .active").parents().parents().data("mainu");
        $(".invisible-div").each(function () {
            $(this).attr("id") != e && $(this).hide();
        }),
            $(".callev").stop(!0);
    }, 200),
    $(".mouse-hover").mouseout(function () {
        if (0 == $(".mouse-hover:hover").length)
            return (
                $(".invisible-div").hide(),
                $(".ham-middle-box li a,.ham-middle-box li p").removeClass("active"),
                !1
            );
    }),
    $(document).on("click", "#mobile-accordian .accordian-icon", function () {
        $(this).hasClass("plus") &&
            ($(this).prev().addClass("active"),
                $(this).addClass("minus"),
                $(this).removeClass("plus")),
            $("#mobile-accordian .minus").each(function (e) {
                $(this).hasClass("collapsed") &&
                    ($(this).prev().removeClass("active"),
                        $(this).removeClass("minus"),
                        $(this).addClass("plus"));
            }),
            setTimeout(() => {
                $("#mob-footer-accordian .accordion-collapse").each(function (e) {
                    $(this).removeClass("show");
                }),
                    $("#mob-footer-accordian .accordian-ftr-icon").each(function (e) {
                        $(this).prev().removeClass("active"),
                            $(this).removeClass("minus"),
                            $(this).addClass("plus");
                    });
            }, 2e3);
    }),
    $(document).on(
        "click",
        "#mob-footer-accordian .accordian-ftr-icon",
        function () {
            $(this).hasClass("plus") &&
                ($(this).prev().addClass("active"),
                    $(this).addClass("minus"),
                    $(this).removeClass("plus")),
                $("#mob-footer-accordian .minus").each(function (e) {
                    $(this).hasClass("collapsed") &&
                        ($(this).prev().removeClass("active"),
                            $(this).removeClass("minus"),
                            $(this).addClass("plus"));
                }),
                setTimeout(() => {
                    $("#mobile-accordian .accordion-collapse").each(function (e) {
                        $(this).removeClass("show");
                    }),
                        $("#mobile-accordian .accordian-icon").each(function (e) {
                            $(this).prev().removeClass("active"),
                                $(this).removeClass("minus"),
                                $(this).addClass("plus");
                        });
                }, 2e3);
        }
    ),
    $(document).ready(function () {
        "" == getCookie("CookieConsent") || 0 == getCookie("CookieConsent")
            ? $("#cookieConsent").css("display", "block")
            : $("#cookieConsent").css("display", "none");
    }),
    $("#closeCookieConsent").click(function () {
        $("#cookieConsent").fadeOut(200);
    }),
    $(".cookieConsentOK").click(function () {
        setCookie("CookieConsent", 1, 365), $("#cookieConsent").fadeOut(200);
    }),
    $(".alphabets").keypress(function (e) {
        var t = e.charCode;
        (t >= 65 && t <= 122) || 32 == t || 0 == t || e.preventDefault();
    }),
    $(".alhanumeric").keyup(function (e) {
        if ("32" == (event.keyCode ? event.keyCode : event.which)) return !1;
        $(this).val(
            $(this)
                .val()
                .replace(/[^a-z0-9_ ]/gi, "")
        );
    });
