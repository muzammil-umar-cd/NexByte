<?php include('includes/inner-header.php'); ?>

<title>Terms & Conditions - NexByte</title>

<section class="main-banner-inn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 col-md-6 animate__animated animate__slow" data-scroll
                data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                <h1 data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">
                    <span>Terms & Conditions</span>
                </h1>
            </div>
        </div>
    </div>
</section>


<style>
    .why-us-section {
        position: relative;
        padding: 50px 0px 80px;
        background: #ffffff;
    }

    .why-us-section .left-col {
        position: relative;
        margin-bottom: 40px;
    }

    .why-us-section .left-col .inner {
        position: relative;
        display: block;
    }

    .why-us-section .left-col .round-box {
        position: relative;
        display: block;
        border-radius: 50%;
    }

    .why-us-section .left-col .image-box {
        position: relative;
        display: block;
        /* border-radius: 50%; */
        overflow: hidden;
    }

    .why-us-section .left-col .image-box img {
        display: block;
        width: 100%;
        -webkit-filter: grayscale(0%);
        -ms-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 500ms ease;
        /* border-radius: 50%; */
    }

    .why-us-section .left-col .image-box:hover img {
        -webkit-filter: grayscale(0%);
        -ms-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
    }

    .why-us-section .left-col .image-box:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: url(../images/icons/shape-1.png) left top no-repeat;
        z-index: 1;
    }

    /* .why-us-section .left-col .image-box:after {
        content: "";
        position: absolute;
        left: 50px;
        top: -70%;
        width: 100%;
        height: 100%;
        background: var(--thm-black);
        opacity: 0.2;
        border-radius: 50%;
        z-index: 2;
    } */

    .why-us-section .left-col .vid-link {
        position: absolute;
        right: 55px;
        bottom: 25px;
        width: 84px;
        height: 84px;
        line-height: 84px;
        text-align: center;
        font-size: 20px;
        color: #ffffff;
        transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        z-index: 3;
    }

    .why-us-section .left-col .vid-link .icon {
        position: relative;
        display: block;
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        font-size: 24px;
        color: var(--thm-black);
        background: var(--thm-base);
        border-radius: 50%;
        transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
    }

    .why-us-section .left-col .vid-link a:hover .icon {
        background: var(--thm-black);
        color: var(--thm-base);
    }

    .why-us-section .left-col .vid-link .icon:before {
        content: "";
        position: absolute;
        left: -8px;
        top: -8px;
        right: -8px;
        bottom: -8px;
        border: 1px solid rgba(0, 0, 0, 0.3);
        border-radius: 50%;
    }

    .why-us-section .left-col .vid-link .ripple,
    .why-us-section .left-col .vid-link .ripple:before,
    .why-us-section .left-col .vid-link .ripple:after {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 116px;
        height: 116px;
        border-radius: 50%;
        -ms-border-radius: 50%;
        transform: translate(-50%, -50%);
        -ms-box-shadow: 0 0 0 0 rgba(var(--thm-base-rgb), 0.6);
        -o-box-shadow: 0 0 0 0 rgba(var(--thm-base-rgb), 0.6);
        box-shadow: 0 0 0 0 rgba(var(--thm-base-rgb), 0.6);
        -webkit-animation: ripple 3s infinite;
        animation: ripple 3s infinite;
    }

    .why-us-section .left-col .vid-link .ripple:before {
        -webkit-animation-delay: 0.9s;
        animation-delay: 0.9s;
        content: "";
        position: absolute;
    }

    .why-us-section .left-col .vid-link .ripple:after {
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
        content: "";
        position: absolute;
    }

    .why-us-section .right-col {
        position: relative;
    }

    .why-us-section .right-col .inner {
        position: relative;
        display: block;
        padding-left: 50px;
    }

    .why-us-section .features {
        position: relative;
    }

    .why-us-section .feature {
        position: relative;
        margin-bottom: 40px;
    }

    .why-us-section .feature .inner-box {
        position: relative;
        display: block;
        /* padding-top: 90px; */
        /* padding-left: 90px; */
    }

    /* .why-us-section .feature .inner-box:before {
        content: "\f131";
        font-family: "Flaticon";
        position: absolute;
        left: 0;
        top: 0px;
        width: 60px;
        height: 60px;
        color: var(--thm-base);
        font-size: 20px;
        line-height: 60px;
        text-align: center;
        background: rgba(var(--thm-base-rgb), 0.2);
        border-radius: 50%;
        transition: all 500ms ease;
    }

    .why-us-section .feature:hover .inner-box:before {
        background-color: var(--thm-black);
        color: #fff;
    } */

    .why-us-section .feature h6 {
        font-size: 24px;
        text-transform: uppercase;
        left: 1px;
        font-weight: 400;
        margin-bottom: 0;
    }

    .why-us-section .feature .text {
        font-family: "Cocogoose Pro Light";
        position: relative;
        display: block;
        color: var(--thm-text);
        padding: 10px 0px 0px;
    }
</style>

<section class="why-us-section">
    <div class="container-fluid">
        <div class="row clearfix">
            <!--Right Column-->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h3 style="font-family: 'Vipnagorgialla Rg';font-size: 2.5rem;">WHAT MAKES US STAND OUT</h3>
                        <div class="cus-hr"></div>
                    </div>
                    <div class="features" style="padding-top: 20px;">
                        <div class="feature">
                            <div class="inner-box">
                                <h2 class="gradientText animate__animated animate__slow animate__fadeInUp" data-scroll="" data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                                    WE THINK DIFFERENTLY
                                </h2>
                                <div class="text">Having extensive experience on our credit, we know that it is challenging to engage the current generation with run-of-the-mill tactics. That is why we emphasize coming up with out-of-the-box solutions. </div>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="inner-box">
                                <h2 class="gradientText animate__animated animate__slow animate__fadeInUp" data-scroll="" data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                                    DID HIGH-QUALITY PROJECTS
                                </h2>
                                <div class="text">Getting traction in the digital space has become increasingly difficult. Well, we have mastered the art of giving our customers an edge over its competitors. </div>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="inner-box">
                                <h2 class="gradientText animate__animated animate__slow animate__fadeInUp" data-scroll="" data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                                    SUPER EXPERT TEAM MEMBERS
                                </h2>
                                <div class="text">We heavily invest in our employees to make sure they are always on their A-game. At NexByte, the management crafts customized training programs that jack up every worker’s skill set.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<?php include('includes/inner-footer.php'); ?>

<script>
    if ($(".tabs-box").length) {
        $(".tabs-box .tab-buttons .tab-btn").on("click", function(e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).is(":visible")) {
                return false;
            } else {
                target
                    .parents(".tabs-box")
                    .find(".tab-buttons")
                    .find(".tab-btn")
                    .removeClass("active-btn");
                $(this).addClass("active-btn");
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .fadeOut(0);
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .removeClass("active-tab");
                $(target).fadeIn(300);
                $(target).addClass("active-tab");
            }
        });
    }
</script>