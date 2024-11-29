function initLocoScroll() {
    updateLocoScroll(locoScroll = new LocomotiveScroll({
        el: document.querySelector(".scrollContainer"),
        smooth: !0,
        getDirection: !0,
        smartphone: {
            smooth: !1
        },
        tablet: {
            smooth: !1
        }
    }))
}

function updateLocoScroll(e) {
    let i = new URL(window.location.href).pathname.split("/"),
        r = i.pop() || i.pop(),
        t = "";
    t = "transformation" == r ? "#5aa63d" : "mobility" == r ? "#5D9C11" : "interactive-marketing" == r ? "#0d53bd" : "commerce" == r ? "#13B0A8" : "#000000", e.on("scroll", e => {
        e.scroll.y > 50 ? "index.php" == r || "" == r || "about.php" == r || "contact.php" == r || "website-development.php" == r || "graphic-designing.php" == r || "digital-marketing.php" == r || "seo-content-writing.php" == r || "app-development.php" == r || "ui-ux-designing.php" == r || "services.php" == r || "privacy-policy.php" == r || "terms-conditions.php" == r || "portfolio.php" == r ? $("header").addClass("bg-black") : ($("header").removeClass("bg-black"), $(".mini-inner-header").css("visibility", "visible")) : "index.php" == r || "" == r || "about.php" == r || "contact.php" == r || "website-development.php" == r || "graphic-designing.php" == r || "digital-marketing.php" == r || "seo-content-writing.php" == r || "app-development.php" == r || "ui-ux-designing.php" == r || "services.php" == r || "privacy-policy.php" == r || "terms-conditions.php" == r || "portfolio.php" == r ? $("header").removeClass("bg-black") : ($("header").removeClass("bg-black"), $("header").css("background-color", ""), $(".mini-inner-header").css("visibility", "hidden"))
    });
    let s = null;
    setTimeout(() => {
        e.on("call", (e, i, t) => {
            ("index.php" == r || "" == r || "about.php" == r || "contact.php" == r || "website-development.php" == r || "graphic-designing.php" == r || "digital-marketing.php" == r || "seo-content-writing.php" == r || "app-development.php" == r || "ui-ux-designing.php" == r || "services.php" == r || "privacy-policy.php" == r || "terms-conditions.php" == r || "portfolio.php" == r) && "enter" === i ? "toggleActive" === e && ($(".main-nav a").removeClass("active"), $("section").removeClass("active"), $('a[href*="' + t.id + '"]').addClass("active")) : "enter" === i && "innerToggleActive" === e && ($(".linking-slider a").removeClass("move"), "#corral" == t.id ? ($(".corralperfone").addClass("move"), $(".corralperfone").addClass("safee"), s = $(".corralperfone").parent().attr("aria-label")) : "#corral-performance" == t.id ? ($(".corralperftwo").addClass("move"), s = $(".corralperftwo").parent().attr("aria-label")) : ($(".corralperfone").removeClass("move"), $(".corralperftwo").removeClass("move"), $('a[href*="' + t.id + '"]').addClass("move"), s = $('a[href|="' + t.id + '"]').parent().attr("aria-label")), void 0 !== s && (s = s.substring(0, 1), IntrSwiper.slideTo(s - 1)))
        })
    }, 100)
}

function reInitJS() {
    $(document).on("click", "#accordian-na-reports .accordian-ftr-icon", function() {
        $(this).hasClass("plus") && ($(this).prev().addClass("active"), $(this).addClass("minus"), $(this).removeClass("plus")), $("#accordian-na-reports .minus").each(function(s) {
            $(this).hasClass("collapsed") && ($(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus"))
        }), setTimeout(() => {
            $("#mobile-accordian .accordion-collapse").each(function(s) {
                $(this).removeClass("show")
            }), $("#mobile-accordian .accordian-icon").each(function(s) {
                $(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus")
            })
        }, 2e3)
    }), $(document).on("click", "#accordian-ip-reports .accordian-ftr-icon", function() {
        $(this).hasClass("plus") && ($(this).prev().addClass("active"), $(this).addClass("minus"), $(this).removeClass("plus")), $("#accordian-ip-reports .minus").each(function(s) {
            $(this).hasClass("collapsed") && ($(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus"))
        }), setTimeout(() => {
            $("#mobile-accordian .accordion-collapse").each(function(s) {
                $(this).removeClass("show")
            }), $("#mobile-accordian .accordian-icon").each(function(s) {
                $(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus")
            })
        }, 2e3)
    }), $(document).on("click", "#accordian-f-reports .accordian-ftr-icon", function() {
        $(this).hasClass("plus") && ($(this).prev().addClass("active"), $(this).addClass("minus"), $(this).removeClass("plus")), $("#accordian-f-reports .minus").each(function(s) {
            $(this).hasClass("collapsed") && ($(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus"))
        }), setTimeout(() => {
            $("#mobile-accordian .accordion-collapse").each(function(s) {
                $(this).removeClass("show")
            }), $("#mobile-accordian .accordian-icon").each(function(s) {
                $(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus")
            })
        }, 2e3)
    }), $(document).on("click", "#accordian-na-reports   .accordian-ftr-icon-dynamic", function() {
        $(this).children(".accordian-ftr-icon").hasClass("plus") && ($(this).children(".accordian-ftr-icon").prev().addClass("active"), $(this).children(".accordian-ftr-icon").addClass("minus"), $(this).children(".accordian-ftr-icon").removeClass("plus")), $("#accordian-na-reports .minus").each(function(s) {
            $(this).hasClass("collapsed") && ($(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus"))
        })
    }), $(document).on("click", "#accordian-ip-reports   .accordian-ftr-icon-dynamic", function() {
        $(this).children(".accordian-ftr-icon").hasClass("plus") && ($(this).children(".accordian-ftr-icon").prev().addClass("active"), $(this).children(".accordian-ftr-icon").addClass("minus"), $(this).children(".accordian-ftr-icon").removeClass("plus")), $("#accordian-ip-reports .minus").each(function(s) {
            $(this).hasClass("collapsed") && ($(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus"))
        })
    }), $(document).on("click", "#accordian-f-reports   .accordian-ftr-icon-dynamic", function() {
        $(this).children(".accordian-ftr-icon").hasClass("plus") && ($(this).children(".accordian-ftr-icon").prev().addClass("active"), $(this).children(".accordian-ftr-icon").addClass("minus"), $(this).children(".accordian-ftr-icon").removeClass("plus")), $("#accordian-f-reports .minus").each(function(s) {
            $(this).hasClass("collapsed") && ($(this).prev().removeClass("active"), $(this).removeClass("minus"), $(this).addClass("plus"))
        })
    });
    // $(".select2").selectize(), gsap.timeline({}), new Swiper(".transform-swiper", {
    //     slidesPerView: "auto",
    //     spaceBetween: 20,
    //     centeredSlides: !0,
    //     grabCursor: !0,
    //     loop: !0,
    //     freeMode: !0,
    //     speed: 500,
    //     disableOnInteraction: !1,
    //     pauseOnMouseEnter: !0,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev"
    //     },
    //     autoplay: {
    //         delay: 3e3
    //     },
    //     breakpoints: {
    //         280: {
    //             slidesPerView: 1.3,
    //             spaceBetween: 10
    //         },
    //         768: {
    //             slidesPerView: 2.5,
    //             spaceBetween: 20
    //         },
    //         1024: {
    //             slidesPerView: 3.2,
    //             spaceBetween: 20
    //         },
    //         1170: {
    //             slidesPerView: 3,
    //             spaceBetween: 20
    //         }
    //     },
    //     on: {
    //         slideChange: function(e) {},
    //         slideChangeTransitionEnd: function(e) {
    //             gsap.to(".transform-swiper .box p,.transform-swiper .box h5", {
    //                 color: "#666666",
    //                 duration: .3,
    //                 ease: Linear.easeOut
    //             }), gsap.to(".transform-swiper .swiper-slide .box", {
    //                 background: "radial-gradient(at top right, rgba(250,250,250,1) 0%, rgba(250,250,250,1) 35%, rgba(250,250,250,1) 100%)",
    //                 duration: .8,
    //                 ease: Linear.easeOut
    //             }), gsap.to(".transform-swiper .swiper-slide-active .box p,.transform-swiper .swiper-slide-active .box h5", {
    //                 color: "#ffffff",
    //                 duration: .3,
    //                 ease: Linear.easeOut
    //             }), gsap.to(".transform-swiper .swiper-slide-active .box", {
    //                 background: "radial-gradient(at top right, #53b075 10%, #5fb66f 35%, #0a9b87 72%)",
    //                 duration: .8,
    //                 ease: Linear.easeOut
    //             })
    //         }
    //     }
    // }), gsap.timeline({});
    var e = new Swiper(".stats-swiper", {
        slidesPerView: "auto",
        spaceBetween: 20,
        centeredSlides: !0,
        grabCursor: !0,
        loop: !0,
        speed: 500,
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
        },
        on: {
            slideChange: function(e) {},
            slideChangeTransitionEnd: function(e) {
                gsap.to(".stats-swiper .box p,.stats-swiper .box h6", {
                    color: "#666666",
                    duration: .3,
                    'font-size': "1.5rem",
                    'margin-bottom': "0px",
                    'margin-top': "-17px",
                    ease: Linear.easeOut
                }), gsap.to(".stats-swiper .swiper-slide .box", {
                    background: "radial-gradient(at top right, rgba(250,250,250,1) 0%, rgba(250,250,250,1) 35%, rgba(250,250,250,1) 100%)",
                    duration: .8,
                    ease: Linear.easeOut
                }), gsap.to(".stats-swiper .swiper-slide-active .box p,.stats-swiper .swiper-slide-active .box h6", {
                    color: "#fff",
                    duration: .3,
                    'font-size': "1.5rem",
                    'margin-bottom': "0px",
                    'margin-top': "-17px",
                    ease: Linear.easeOut
                }), gsap.to(".stats-swiper .swiper-slide-active .box", {
                    background: "radial-gradient(at top right, #53b075 10%, #5fb66f 35%, #0a9b87 72%)",
                    duration: .8,
                    ease: Linear.easeOut
                })
            }
        }
    });

    var e = new Swiper(".interactive-swiper", {
        slidesPerView: "auto",
        spaceBetween: 20,
        centeredSlides: !0,
        grabCursor: !0,
        loop: !0,
        speed: 500,
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
        },
        on: {
            slideChange: function(e) {},
            slideChangeTransitionEnd: function(e) {
                gsap.to(".interactive-swiper .box p,.interactive-swiper .box h6", {
                    color: "#666666",
                    duration: .3,
                    'font-family' : "Cocogoose Pro Regular",
                    'font-size': "1.5rem",
                    'margin-bottom': "0px",
                    'margin-top': "-17px",
                    ease: Linear.easeOut
                }), gsap.to(".interactive-swiper .swiper-slide .box", {
                    background: "radial-gradient(at top right, rgba(250,250,250,1) 0%, rgba(250,250,250,1) 35%, rgba(250,250,250,1) 100%)",
                    duration: .8,
                    ease: Linear.easeOut
                }), gsap.to(".interactive-swiper .swiper-slide-active .box p,.interactive-swiper .swiper-slide-active .box h6", {
                    color: "#fff",
                    duration: .3,
                    'font-family' : "Cocogoose Pro Regular",
                    'font-size': "1.5rem",
                    'margin-bottom': "0px",
                    'margin-top': "-17px",
                    ease: Linear.easeOut
                }), gsap.to(".interactive-swiper .swiper-slide-active .box", {
                    background: "radial-gradient(at top right, #53b075 10%, #5fb66f 35%, #0a9b87 72%)",
                    duration: .8,
                    ease: Linear.easeOut
                })
            }
        }
    });
    gsap.timeline({}), new Swiper(".digital-swiper", {
        slidesPerView: "auto",
        spaceBetween: 20,
        centeredSlides: !0,
        grabCursor: !0,
        loop: !0,
        speed: 500,
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
        },
        on: {
            slideChange: function(e) {},
            slideChangeTransitionEnd: function(e) {
                gsap.to(".digital-swiper .box p,.digital-swiper .box h5", {
                    color: "#666666",
                    duration: .3,
                    ease: Linear.easeOut
                }), gsap.to(".digital-swiper .swiper-slide .box", {
                    background: "radial-gradient(at top right, rgba(250,250,250,1) 0%, rgba(250,250,250,1) 35%, rgba(250,250,250,1) 100%)",
                    duration: .8,
                    ease: Linear.easeOut
                }), gsap.to(".digital-swiper .swiper-slide-active .box p,.digital-swiper .swiper-slide-active .box h5", {
                    color: "#ffffff",
                    duration: .3,
                    ease: Linear.easeOut
                }), gsap.to(".digital-swiper .swiper-slide-active .box", {
                    background: "radial-gradient(at top right, #53b075 10%, #5fb66f 35%, #0a9b87 72%)",
                    duration: .8,
                    ease: Linear.easeOut
                })
            }
        }
    }), gsap.timeline({}), new Swiper(".mobility-swiper", {
        slidesPerView: "auto",
        spaceBetween: 20,
        centeredSlides: !0,
        grabCursor: !0,
        loop: !0,
        speed: 500,
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
        },
        on: {
            slideChange: function(e) {},
            slideChangeTransitionEnd: function(e) {
                gsap.to(".mobility-swiper .box p,.mobility-swiper .box h6", {
                    color: "#666666",
                    duration: .3,
                    'font-family' : "Cocogoose Pro Regular",
                    'font-size': "1.5rem",
                    'margin-bottom': "0px",
                    'margin-top': "-17px",
                    ease: Linear.easeOut
                }), gsap.to(".mobility-swiper .swiper-slide .box", {
                    background: "radial-gradient(at top right, rgba(250,250,250,1) 0%, rgba(250,250,250,1) 35%, rgba(250,250,250,1) 100%)",
                    duration: .8,
                    ease: Linear.easeOut
                }), gsap.to(".mobility-swiper .swiper-slide-active .box p,.mobility-swiper .swiper-slide-active .box h6", {
                    color: "#fff",
                    duration: .3,
                    'font-family' : "Cocogoose Pro Regular",
                    'font-size': "1.5rem",
                    'margin-bottom': "0px",
                    'margin-top': "-17px",
                }), gsap.to(".mobility-swiper .swiper-slide-active .box", {
                    background: "radial-gradient(at top right, #53b075 10%, #5fb66f 35%, #0a9b87 72%)",
                    duration: .8,
                    ease: Linear.easeOut
                })
            }
        }
    });
    var e = new Swiper(".brands-products-swiper", {
        slidesPerView: "auto",
        centeredSlides: !0,
        grabCursor: !0,
        loop: !0,
        speed: 1500,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        autoplay: {
            delay: 5e3
        },
        breakpoints: {
            280: {
                slidesPerView: 2.3,
                spaceBetween: 0,
                speed: 1500,
                autoplay: {
                    delay: 500
                }
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1170: {
                slidesPerView: 5,
                spaceBetween: 20
            }
        }
    });
    if (window.matchMedia("(min-width: 1000px)").matches) var i = !1;
    else var i = !0;
    if ($("div").hasClass("partners-swiper")) {
        var e = new Swiper(".partners-swiper", {
            slidesPerView: "auto",
            centeredSlides: i,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                280: {
                    slidesPerView: 2.3,
                    centeredSlides: !0,
                    spaceBetween: 0,
                    loop: !0,
                    speed: 1500,
                    autoplay: {
                        delay: 500
                    }
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    loop: !0,
                    speed: 1500,
                    autoplay: {
                        delay: 500
                    }
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 20
                }
            }
        });
        e.autoplay.start()
    }
    var e = new Swiper(".cus-swiper-container-icon", {
        slidesPerView: "auto",
        spaceBetween: 0,
        centeredSlides: !0,
        roundLengths: !0,
        grabCursor: !0,
        loop: !0,
        speed: 1500,
        loopAdditionalSlides: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        autoplay: {
            delay: 500
        },
        breakpoints: {
            280: {
                slidesPerView: 2.5,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            1024: {
                slidesPerView: 8,
                spaceBetween: 0
            }
        }
    });
    // let r = new URL(window.location.href).pathname.split("/"),
    //     t = r.pop() || r.pop();
    // [".transform-swiper", ".interactive-swiper", ".digital-swiper", ".mobility-swiper", ".cus-swiper-container-icon"].forEach(function(e) {
    //     $(e).each(function(e, i) {
    //         var r = i.swiper;
    //         $(this).hover(function() {
    //             r.autoplay.stop()
    //         }, function() {
    //             r.autoplay.start()
    //         })
    //         r.on('slideChange', function () {
    //             $(".swiper-slide").removeClass("swiper-slide-active-custom");

    //             $(".swiper-slide-active").addClass("swiper-slide-active-custom");
    //         });
    //     })
    // }), $(".swiper-slide").hover(function() {
    //     $(".swiper-slide").removeClass("swiper-slide-active swiper-slide-active-custom"), $(this).addClass("swiper-slide-active swiper-slide-active-custom")
    // }, function() {
    //     $(".swiper-slide").removeClass("swiper-slide-active swiper-slide-active-custom")
    // });

    let r = new URL(window.location.href).pathname.split("/"),
        t = r.pop() || r.pop();

    // Handle Swiper hover to stop/start autoplay
    [".transform-swiper", ".interactive-swiper", ".digital-swiper", ".mobility-swiper", ".cus-swiper-container-icon"].forEach(function (e) {
        $(e).each(function (e, i) {
            var swiperInstance = i.swiper;

            // Stop/start autoplay on hover
            $(this).hover(function () {
                swiperInstance.autoplay.stop();
            }, function () {
                swiperInstance.autoplay.start();
            });

            // Listen to slide change and add 'swiper-slide-active-custom' class
            swiperInstance.on('slideChange', function () {
                // Remove the 'swiper-slide-active-custom' class from all slides
                $(".swiper-slide").removeClass("swiper-slide-active-custom");

                // Get the new active slide and add the custom class
                $(".swiper-slide-active").addClass("swiper-slide-active-custom");
            });
        });
    });
    let s = null;
    s = "commerce" == t || "mobility" == t || "about-us" == t || "contact-us" == t ? {
        slidesPerView: 4,
        spaceBetween: 0
    } : "affiliation-partnerships" == t ? {
        slidesPerView: 3,
        spaceBetween: 0
    } : "brands-products" == t || "clients" == t ? {
        slidesPerView: 5,
        spaceBetween: 0
    } : {
        slidesPerView: 6,
        spaceBetween: 0
    };
    let a = null;
    a = {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }, IntrSwiper = new Swiper(".linking-slider", {
        spaceBetween: 0,
        centeredSlides: !1,
        grabCursor: !0,
        navigation: a,
        breakpoints: {
            280: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            768: s,
            1024: s
        }
    });
    let n = ["telecom-swiper", "bank-swiper", "pharma-swiper", "fmcg-swiper", "property-swiper", "others-swiper"];
    $(n).each(function(e, i) {
        new Swiper("." + i, {
            slidesPerView: "auto",
            spaceBetween: 0,
            centeredSlides: "property-swiper" != i,
            roundLengths: !0,
            grabCursor: !0,
            loop: "property-swiper" != i,
            speed: 1500,
            navigation: "property-swiper" != i && {
                nextEl: "." + i + "-button-next",
                prevEl: "." + i + "-button-prev"
            },
            autoplay: "property-swiper" != i && {
                delay: 500,
                disableOnInteraction: !1
            },
            breakpoints: {
                280: {
                    slidesPerView: 2.5,
                    spaceBetween: 0
                },
                768: {
                    centeredSlides: "property-swiper" != i && "pharma-swiper" != i,
                    loop: "property-swiper" != i && "pharma-swiper" != i,
                    navigation: "property-swiper" != i && "pharma-swiper" != i && {
                        nextEl: "." + i + "-button-next",
                        prevEl: "." + i + "-button-prev"
                    },
                    autoplay: "property-swiper" != i && "pharma-swiper" != i && {
                        delay: 500,
                        disableOnInteraction: !1
                    },
                    slidesPerView: 4,
                    spaceBetween: 0
                },
                1024: {
                    centeredSlides: "property-swiper" != i && "pharma-swiper" != i,
                    loop: "property-swiper" != i && "pharma-swiper" != i,
                    navigation: "property-swiper" != i && "pharma-swiper" != i && {
                        nextEl: "." + i + "-button-next",
                        prevEl: "." + i + "-button-prev"
                    },
                    autoplay: "property-swiper" != i && "pharma-swiper" != i && {
                        delay: 500,
                        disableOnInteraction: !1
                    },
                    slidesPerView: 7,
                    spaceBetween: 0
                }
            }
        }), $(n).each(function(e, i) {
            $("." + i + "-button-next").removeClass("swiper-button-disabled"), $("." + i + "-button-prev").removeClass("swiper-button-disabled"), $("." + i + "-button-next").removeClass("swiper-button-lock"), $("." + i + "-button-prev").removeClass("swiper-button-lock")
        })
    }), "" == locoScroll && initLocoScroll(), $(".linking-slider a").on("click", function() {
        $(".linking-slider a").removeClass("move"), $(this).addClass("move")
    })
}
var wholeteam = new Swiper(".whole-team", {
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
            slidesPerView: 2.5,
            spaceBetween: 0
        },
        768: {
            slidesPerView: 3.5,
            spaceBetween: 0
        },
        1024: {
            slidesPerView: 4.2,
            spaceBetween: 0
        },
        1170: {
            slidesPerView: 6.2,
            spaceBetween: 0
        }
    }
});
let tl = gsap.timeline({});
var transformSwiper = new Swiper(".jobs-swiper", {
        slidesPerView: "auto",
        spaceBetween: 20,
        centeredSlides: !0,
        grabCursor: !0,
        loop: !0,
        freeMode: !0,
        speed: 500,
        disableOnInteraction: !1,
        pauseOnMouseEnter: !0,
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
        },
        on: {
            slideChange: function(e) {},
            slideChangeTransitionEnd: function(e) {
                gsap.to(".jobs-swiper .box p,.jobs-swiper .box h5", {
                    color: "#666666",
                    duration: .3,
                    ease: Linear.easeOut
                }), gsap.to(".jobs-swiper .swiper-slide .box", {
                    background: "radial-gradient(at top right, rgba(250,250,250,1) 0%, rgba(250,250,250,1) 35%, rgba(250,250,250,1) 100%)",
                    duration: .8,
                    ease: Linear.easeOut
                }), gsap.to(".jobs-swiper .swiper-slide-active .box p,.jobs-swiper .swiper-slide-active .box h5", {
                    color: "#ffffff",
                    duration: .3,
                    ease: Linear.easeOut
                }), gsap.to(".jobs-swiper .swiper-slide-active .box", {
                    background: "radial-gradient(at top right, #53b075 10%, #5fb66f 35%, #0a9b87 72%)",
                    duration: .8,
                    ease: Linear.easeOut
                })
            }
        }
    }),
    fileInput = document.querySelector(".input-file"),
    button = document.querySelector(".input-file-trigger"),
    the_return = document.querySelector(".file-return");
void 0 != button && (button.addEventListener("keydown", function(e) {
    (13 == e.keyCode || 32 == e.keyCode) && fileInput.focus()
}), button.addEventListener("click", function(e) {
    return fileInput.focus(), !1
}), fileInput.addEventListener("change", function(e) {
    the_return.innerHTML = this.value
}));