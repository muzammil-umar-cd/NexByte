function initAnims(e = !1) {
    if (gsap.registerPlugin(ScrollTrigger), ScrollTrigger.config({
            autoRefreshEvents: "visibilitychange,DOMContentLoaded,load"
        }), locoScroll.on("scroll", ScrollTrigger.update), ScrollTrigger.scrollerProxy(".scrollContainer", {
            scrollTop(e) {
                return arguments.length ? locoScroll.scrollTo(e, 0, 0) : locoScroll.scroll.instance.scroll.y
            },
            getBoundingClientRect: () => ({
                top: 0,
                left: 0,
                width: window.innerWidth,
                height: window.innerHeight
            }),
            pinType: document.querySelector(".scrollContainer").style.transform ? "transform" : "fixed"
        }), $("header").hasClass("homeHeader") && locoScroll.on("scroll", e => {
            $(".dsk-menu .main-nav li a").removeClass("active-remain"), "down" == e.direction ? gsap.to(".homeHeader", {
                duration: .3,
                ease: Linear.easeOut,
                css: {
                    top: "-111px"
                }
            }) : gsap.to(".homeHeader", {
                duration: .3,
                ease: Linear.easeOut,
                css: {
                    top: "0px"
                }
            })
        }), locoScroll.scroll.instance.scroll.y, $(".scroll-heading").length && gsap.to(".scroll-heading .h1, .client-scroll-heading .h1", {
            xPercent: -100,
            repeat: -1,
            duration: 10,
            ease: "linear"
        }).totalProgress(.5), $(".inner-banner").length) {
        if (gsap.set(".htext-wrap", {
                position: "absolute"
            }), window.matchMedia("(min-width: 800px)").matches) var t;
        if (window.matchMedia("(min-width: 1100px)").matches) {
            var a = window.location.href,
                i = a.substring(a.lastIndexOf("/") + 1);
            i.indexOf("?") > -1 && (i = (i = i.substring(0, i.indexOf("?") + 1)).replace("?", ""));
            var n = $(location).attr("pathname");
            n.indexOf(1), n.toLowerCase(), n = n.split("/")[1], "current-openings" == i || "careers-form" == i || "job-details" == i || "careers" == i || "careers" == n || "current-openings" == n ? gsap.to(".heading-wrap h1", {
                css: {
                    "line-height": "100px",
                    fontSize: "70px"
                },
                duration: 2,
                ease: Expo.easeOut,
                scrollTrigger: {
                    trigger: ".inner-banner",
                    scroller: ".scrollContainer",
                    start: "bottom 30%",
                    scrub: !0,
                    invalidateOnRefresh: !0
                }
            }) : gsap.to(".heading-wrap h1", {
                css: {
                    "line-height": "80px",
                    fontSize: "70px"
                },
                duration: 2,
                ease: Expo.easeOut,
                scrollTrigger: {
                    trigger: ".inner-banner",
                    scroller: ".scrollContainer",
                    start: "bottom 30%",
                    scrub: !0,
                    invalidateOnRefresh: !0
                }
            }), gsap.to(".main-logo", {
                css: {
                    width: "18%"
                },
                duration: 2,
                ease: Expo.easeOut,
                scrollTrigger: {
                    trigger: ".inner-banner",
                    scroller: ".scrollContainer",
                    start: "bottom 30%",
                    scrub: !0,
                    invalidateOnRefresh: !0
                }
            })
        }
        var r = 0;
        if (window.matchMedia("(min-width: 800px)").matches) {
            if (window.matchMedia("(min-width: 1100px)").matches) {
                let o = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".inner-banner",
                        scroller: ".scrollContainer",
                        start: "bottom 30%",
                        scrub: .001,
                        invalidateOnRefresh: !0
                    }
                });
                gsap.set(".sticky-nav ", {
                    zIndex: 9998
                }), o.to(".htext-wrap, .design-wrap", {
                    opacity: 0,
                    duration: 1
                }), o.to(".htext-wrap, .design-wrap", {
                    y: -160,
                    duration: 3
                })
            } else {
                r = 1;
                let s = gsap.timeline({
                    scrollTrigger: {
                        trigger: ".inner-banner",
                        scroller: ".scrollContainer",
                        start: "bottom 0%",
                        scrub: .001,
                        invalidateOnRefresh: !0
                    }
                });
                gsap.set(".sticky-nav ", {
                    zIndex: 9998
                }), s.to(".htext-wrap, .design-wrap", {
                    opacity: 0,
                    duration: 1
                }), s.to(".htext-wrap, .design-wrap", {
                    y: -160,
                    duration: 3
                })
            }
        } else {
            let l = gsap.timeline({
                scrollTrigger: {
                    trigger: ".inner-banner",
                    scroller: ".scrollContainer",
                    start: "bottom 33%",
                    scrub: .001,
                    invalidateOnRefresh: !0
                }
            });
            gsap.set(".sticky-nav ", {
                zIndex: 9998
            }), l.to(".htext-wrap, .design-wrap", {
                opacity: 0,
                duration: 1
            }), l.to(".htext-wrap, .design-wrap", {
                y: -160,
                duration: 3
            })
        }
        
        if (window.matchMedia("(min-width: 800px)").matches) var d = "30%";
        else var d = "30%";
        if ($(".inner-banner").hasClass("long-content") ? (t = "33px", 1 == r && (t = "120px")) : (t = "interactive-marketing" == e || "transformation" == e || "commerce" == e || "mobility" == e ? "30px" : "25px", 1 == r && (t = "110px")), gsap.to(".inner-banner", {
                scrollTrigger: {
                    scroller: ".scrollContainer",
                    trigger: ".inner-banner",
                    duration: 1,
                    scrub: !0,
                    start: "bottom " + d,
                    invalidateOnRefresh: !0
                },
                css: {
                    marginBottom: "32px",
                    paddingBottom: t
                },
                ease: "Power2.easeOut",
                onComplete: function() {
                    setTimeout(() => {
                        if ("index.php" == e || "" == e || "about.php" == e || "contact.php" == e || "services.php" == e || "website-development.php" == e || "portfolio.php" == e || "graphic-designing.php" == e || "digital-marketing.php" == e || "seo-content-writing.php" == e || "app-development.php" == e || "ui-ux-designing.php" == e);
                        else {
                            let t = $(".inner-banner").outerHeight() + $(".sticky-nav").outerHeight() + $(".sticky-nav .container-fluid").outerHeight();
                            window.matchMedia("(min-width: 800px)").matches ? $(".linking-slider a").attr("data-scroll-offset", "-" + (t - 40)) : 1 == r ? $(".linking-slider a").attr("data-scroll-offset", "-" + (t - 130)) : $(".linking-slider a").attr("data-scroll-offset", "-" + (t - 45)), setTimeout(() => {
                                locoScroll.update()
                            }, 500)
                        }
                    }, 1e3)
                },
                onReverseComplete: function() {
                    setTimeout(() => {
                        if ("index.php" == e || "" == e || "about.php" == e || "contact.php" == e || "services.php" == e || "website-development.php" == e || "portfolio.php" == e || "graphic-designing.php" == e || "digital-marketing.php" == e || "seo-content-writing.php" == e || "app-development.php" == e || "ui-ux-designing.php" == e);
                        else {
                            let t = $(".inner-banner").outerHeight() + $(".sticky-nav").outerHeight() + $(".sticky-nav .container-fluid").outerHeight();
                            window.matchMedia("(min-width: 800px)").matches ? $(".linking-slider a").attr("data-scroll-offset", "-" + (t - 75)) : 1 == r ? $(".linking-slider a").attr("data-scroll-offset", "-" + (t - 130)) : $(".linking-slider a").attr("data-scroll-offset", "-" + (t - 70)), setTimeout(() => {
                                locoScroll.update()
                            }, 500)
                        }
                    }, 1e3)
                }
            }), "index.php" == e || "" == e || "about.php" == e || "contact.php" == e || "services.php" == e || "website-development.php" == e || "portfolio.php" == e || "graphic-designing.php" == e || "digital-marketing.php" == e || "seo-content-writing.php" == e || "app-development.php" == e || "ui-ux-designing.php" == e || 1 == r && window.setInterval(function() {
                let e = $(".inner-banner").outerHeight() + $(".sticky-nav").outerHeight() + $(".sticky-nav .container-fluid").outerHeight();
                $(".linking-slider a").attr("data-scroll-offset", "-" + (e - 140))
            }, 1e3), "index.php" == e || "" == e || "about.php" == e || "contact.php" == e || "services.php" == e || "website-development.php" == e || "portfolio.php" == e || "graphic-designing.php" == e || "digital-marketing.php" == e || "seo-content-writing.php" == e || "app-development.php" == e || "ui-ux-designing.php" == e);
        else {
            let c = $(".inner-banner").outerHeight() + $(".sticky-nav").outerHeight() + $(".sticky-nav .container-fluid").outerHeight();
            window.matchMedia("(min-width: 800px)").matches ? $(".linking-slider a").attr("data-scroll-offset", "-" + (c - 75)) : 1 == r ? $(".linking-slider a").attr("data-scroll-offset", "-" + (c - 130)) : $(".linking-slider a").attr("data-scroll-offset", "-" + (c - 45))
        }
    }
    if ("index.php" == e || "" == e || "about.php" == e || "contact.php" == e || "services.php" == e || "website-development.php" == e || "portfolio.php" == e || "graphic-designing.php" == e || "digital-marketing.php" == e || "seo-content-writing.php" == e || "app-development.php" == e || "ui-ux-designing.php" == e) {
        if (window.matchMedia("(min-width: 800px)").matches) {
            var p = new Swiper(".stats-swiper", {
                slidesPerView: "auto",
                spaceBetween: 20,
                centeredSlides: !0,
                grabCursor: !0,
                loop: !0,
                speed: 1500,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                },
                autoplay: {
                    delay: 3e3
                },
                breakpoints: {
                    280: {
                        slidesPerView: 1.3,
                        spaceBetween: 10
                    },
                    768: {
                        slidesPerView: 2.5,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 3.2,
                        spaceBetween: 20
                    },
                    1170: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    }
                }
            });
            gsap.to(".main-banner", {
                scrollTrigger: {
                    scroller: ".scrollContainer",
                    trigger: ".main-banner",
                    start: "top top",
                    invalidateOnRefresh: !0
                },
                onComplete: function() {
                    p.slideTo(3), p.autoplay.start()
                }
            })
        } else {
            var p = new Swiper(".stats-swiper", {
                slidesPerView: "auto",
                spaceBetween: 20,
                centeredSlides: !0,
                grabCursor: !0,
                initialSlide: "4",
                loop: !0,
                speed: 1500,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                },
                autoplay: {
                    delay: 4e3
                },
                breakpoints: {
                    280: {
                        slidesPerView: 1.3,
                        spaceBetween: 10
                    },
                    768: {
                        slidesPerView: 2.5,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 3.2,
                        spaceBetween: 20
                    },
                    1170: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    }
                }
            });
            p.slideTo(1), p.autoplay.start()
        }
    }
    gsap.set(".ham-design", {
        opacity: 0
    }), gsap.set(".logo-ham, .mu-li, .ham-footer ", {
        x: -100,
        opacity: 0,
        display: "none"
    }), gsap.set(".mobile-menu-inner-bx", {
        x: -50,
        opacity: 0,
        display: "none"
    });
    var h = gsap.timeline({
        paused: !0,
        reversed: !0
    });
    h.to(".logo-ham, .mu-li, .ham-footer", .1, {
        display: "none"
    }), h.to("#overlay", .7, {
        x: 100,
        ease: "Expo.easeInOut"
    }), h.to(".logo-ham", .4, {
        opacity: 0,
        x: 0,
        ease: "Expo.easeOut"
    }), h.to(".ham-design", .4, {
        opacity: 0,
        ease: "Expo.easeOut"
    }), h.to(".mu-li", .4, {
        opacity: 0,
        x: 0,
        ease: "Expo.easeOut"
    }), h.to(".ham-footer", .4, {
        opacity: 0,
        x: 0,
        ease: "Expo.easeOut"
    });
    var m = gsap.timeline({
        paused: !0,
        reversed: !0
    });
    window.matchMedia("(min-width: 800px)").matches ? (m.to(".logo-ham, .mu-li, .ham-footer , .mobile-menu-inner-bx", .1, {
        display: "block"
    }), m.to("#overlay", .7, {
        x: 0,
        ease: "Expo.easeInOut"
    }), m.to(".logo-ham", .4, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    }), m.to(".ham-design", .3, {
        opacity: 1,
        ease: "Expo.easeOut"
    }), m.to(".mu-li", .3, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    }), m.to(".mobile-menu-inner-bx", .1, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    }), m.to(".ham-footer", .4, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    })) : (m.to(".logo-ham, .mu-li, .ham-footer , .mobile-menu-inner-bx", .1, {
        display: "block"
    }), m.to("#overlay", .7, {
        x: 0,
        ease: "Expo.easeInOut"
    }), m.to(".logo-ham", .4, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    }), m.to(".mobile-menu-inner-bx", .3, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    }), m.to(".ham-footer", .4, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    }), m.to(".ham-design", .4, {
        opacity: 1,
        ease: "Expo.easeOut"
    }), m.to(".mu-li", .4, {
        opacity: 1,
        x: 0,
        ease: "Expo.easeOut"
    })), $("#hamburger").on("click", function() {
        $("#hamburger").hasClass("d-pages") && $("#hamburger").hasClass("open") && $("#hamburger").removeClass("inner-ham-color"), !$("#hamburger").hasClass("open") && $("#hamburger").hasClass("d-pages") && $("#hamburger").addClass("inner-ham-color"), m.reversed() ? m.timeScale(.8).play() : m.timeScale(2).reverse(), gsap.timeline(), $(".callev").hover(function(e) {
            let t = $(this).data("mainu"),
                a = $(this).offset().top - $(window).scrollTop(),
                i = $(".ham-middle-box").offset().top - $(window).scrollTop(),
                n = parseInt(a + 10 - i);
            $(".ham-middle-box li a,.ham-middle-box li p").removeClass("active"), $(".invisible-div").each(function() {
                $(this).attr("id") != t && ($(this).children("div").children("p").addClass("active"), $(this).hide())
            }), $(this).children("div").children("p").addClass("active"), 1 != $("#" + t + ":visible").length && ($("#" + t).css("margin-top", n + "px"), $("#" + t).fadeIn(1e3))
        }, function() {
            return !($(".mouse-hover:hover").length > 0) && ($(".invisible-div").hide(), $(".ham-middle-box li a,.ham-middle-box li p").removeClass("active"), !1)
        }), $(".mouse-hover").mouseout(function() {
            if (0 == $(".mouse-hover:hover").length) return $(".invisible-div").hide(), $(".ham-middle-box li a,.ham-middle-box li p").removeClass("active"), !1
        })
    })
}
$(document).on("mouseenter", ".dsk-menu .main-nav li ", function(e) {
    $(".dsk-menu .main-nav li a.active").addClass("active-remain"), $(".dsk-menu .main-nav li a").removeClass("active")
}).on("mouseleave", ".dsk-menu .main-nav li ", function() {
    $(".dsk-menu .main-nav li a.active-remain").addClass("active")
});