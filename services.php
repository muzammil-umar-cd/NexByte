<?php include('includes/inner-header.php'); ?>

<title>Services - NexByte</title>

<section class="main-banner-inn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 col-md-6 animate__animated animate__slow" data-scroll
                data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                <h1 data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">
                    <span>Services</span>
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
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="image-box" style="height: 600px;">
                        <lottie-player src="images/services-section.json" background="transparent" loop autoplay>
                        </lottie-player>
                    </div>
                    <!-- <div class="round-box">
                        <div class="vid-link">
                            <a href="#" class="lightbox-image">
                                <div class="icon"><span class="flaticon-play-button-1"></span><i class="ripple"></i></div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
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

<style>
    .services-section-two {
        position: relative;
        padding: 120px 0px 0px;
        background: #ffffff;
    }

    .services-section-two .sec-title {
        margin-bottom: 30px;
    }

    .services-section-two .sec-title .column {
        margin-bottom: 20px;
    }

    .services-section-two .sec-title .lower-text {
        padding-top: 0;
        margin-top: 0;
        font-family: 'Cocogoose Pro Light';
        font-size: 14px;
    }

    .services-section-two .services {
        position: relative;
        z-index: 2;
        margin-bottom: -100px;
    }

    /*==================== GOOGLE FONTS ====================*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap");

    /*==================== VARIABLES CSS ====================*/
    :root {
        /*========== Colors ==========*/
        --text-color: #000000;
        --bg-color: #222222;

        /*========== Font and typography ==========*/
        --body-font: "Cocogoose Pro Light";
        --normal-font-size: 0.938rem;
    }

    @media screen and (min-width: 968px) {
        :root {
            --normal-font-size: 1rem;
        }
    }

    /*==================== REUSABLE CSS CLASSES ====================*/
    .serv-container {
        max-width: 1140px;
        width: 100%;
        margin: 0 auto;
        padding: 0 0 3rem 0;
        /* min-height: 100vh; */
        display: grid;
        place-items: center;
    }

    /*==================== SERVICE CARD ====================*/
    .card__container {
      display: flex;
      flex-wrap: wrap;
      gap: 60px;
      justify-content: center;
      width: 100%;
      max-width: 90%;
      margin: auto;
      padding: 0 0 60px 0;
   }

   .card__bx {
      --dark-color: #131313;
      --dark-alt-color: #777777;
      --white-color: #ffffff;
      --button-color: #333333;
      --transition: 0.5s ease-in-out;

      font-family: inherit;
      height: 350px;
      width: 300px;
      border-radius: 15px;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      background: var(--dark-color);
      transition: var(--transition);
   }

   .card__bx::before,
   .card__bx::after {
      content: "";
      position: absolute;
      z-index: -1;
      transition: var(--transition);
   }

   .card__bx::before {
      inset: -10px 50px;
      border-top: 4px solid var(--clr);
      transform: skewY(15deg);
      border-bottom: 4px solid var(--clr);
   }

   .card__bx:hover::before {
      inset: -10px 40px;
      transform: skewY(0deg);
   }

   .card__bx::after {
      inset: 60px -10px;
      border-left: 4px solid var(--clr);
      transform: skew(15deg);
      border-right: 4px solid var(--clr);
   }

   .card__bx:hover::after {
      inset: 40px -10px;
      transform: skew(0deg);
   }

   .card__bx .card__data {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 30px;
      text-align: center;
      padding: 0 20px;
      height: 100%;
      width: 100%;
      overflow: hidden;
      border-radius: 15px;
   }

   .card__bx .card__data .card__icon {
      height: 80px;
      width: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 3rem;
      color: var(--text-color);
      background-color: var(--dark-color);
      transition: var(--transition);
   }

   .card__bx .card__data .card__icon {
      color: var(--clr);
      box-shadow: 0 0 0 4px var(--dark-color), 0 0 0 6px var(--clr);
   }

   .card__bx:hover .card__data .card__icon {
      color: #fff;
      background-color: var(--clr);
      box-shadow: 0 0 0 4px #fff, 0 0 0 300px var(--clr);
   }

   .card__bx .card__data .card__content {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 10px;
   }

   .card__bx .card__data h3 {
      font-size: 1rem;
      font-weight: 500;
      color: var(--white-color);
      transition: var(--transition);
   }

   .card__bx:hover .card__data h3 {
      color: #fff;
      transition: var(--transition);
   }

   .card__bx .card__data p {
      font-family: "Cocogoose Pro Lights";
      font-size: 0.9rem;
      color: #fff;
      transition: var(--transition);
   }

   .card__bx:hover .card__data p {
      color: #fff;
      transition: var(--transition);
   }

   .card__bx .card__data a {
      position: relative;
      display: inline-flex;
      padding: 8px 15px;
      text-decoration: none;
      font-weight: 500;
      margin-top: 10px;
      border: 2px solid var(--clr);
      color: var(--dark-color);
      background-color: var(--clr);
      transition: var(--transition);
   }

   .card__bx:hover .card__data a {
      color: #fff;
      background-color: var(--dark-color);
   }

   .card__bx:hover .card__data a:hover {
      border-color: var(--dark-color);
      color: #fff;
      background-color: var(--clr);
   }

    :root {
        --thm-font: "Cocogoose Pro Light";
        --thm-base: #307cf2;
        --thm-base-rgb: 255, 170, 23;
        --thm-black: #222429;
        --thm-text: #686a6f;
    }

    .agency-section {
        position: relative;
        padding: 50px 0px 80px;
        /* background: #ffffff url(../images/background/pattern-2.png) left top repeat; */
    }

    .agency-section .sec-title {
        margin-bottom: 40px;
    }

    .agency-section .featured-block {
        position: relative;
        display: block;
        padding-left: 230px;
        min-height: 117px;
        margin-bottom: 40px;
    }

    .agency-section .featured-block .image {
        position: absolute;
        left: 0;
        top: 0;
        width: 200px;
    }

    .agency-section .featured-block .image img {
        display: block;
        width: 100%;
        -webkit-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        border-radius: 7px;
    }

    .agency-section .featured-block .text {
        position: relative;
        top: -5px;
        display: block;
        line-height: 1.7em;
        letter-spacing: 0.1em;
        margin-bottom: 32px;
    }

    .agency-section .left-col {
        position: relative;
        margin-bottom: 30px;
    }

    .agency-section .left-col .inner {
        position: relative;
        display: block;
        padding-right: 50px;
    }

    .agency-section .right-col {
        position: relative;
        margin-bottom: 30px;
    }

    .agency-section .right-col .inner {
        position: relative;
        display: block;
    }

    .tabs-box {
      position: relative;
   }

   .tabs-box .tab-buttons {
      position: relative;
   }

   .tabs-box .tab-buttons .tab-btn {
      position: relative;
      display: inline-block;
      vertical-align: top;
      cursor: pointer;
   }

   .tabs-box .tabs-content {
      position: relative;
   }

   .tabs-box .tabs-content .tab {
      position: relative;
      display: none;
   }

   .tabs-box .tabs-content .active-tab {
      display: block;
   }

   .default-tabs .tab-buttons .tab-btn {
      position: relative;
      line-height: 30px;
      font-size: 16px;
      font-weight: 500;
      color: var(--thm-black);
      text-align: center;
      padding: 14px 40px 11px;
      text-transform: uppercase;
      margin-bottom: 10px;
      margin-right: 10px;
      letter-spacing: 0.07em;
      border-radius: 7px;
      font-family: var(--thm-font);
      transition: all 0.3s ease;
   }

   .default-tabs .tab-buttons .tab-btn span {
      position: relative;
      display: block;
   }

   .default-tabs .tab-buttons .tab-btn:last-child {
      margin-right: 0;
   }

   .default-tabs .tab-buttons .tab-btn:before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 2px;
      background: var(--thm-base);
      border-radius: 7px;
      transition: all 0.3s ease;
   }

   .default-tabs .tab-buttons .tab-btn.active-btn:before {
      height: 100%;
   }

   .default-tabs .tab-buttons .tab-btn:hover,
   .default-tabs .tab-buttons .tab-btn.active-btn:hover {
      color: var(--thm-black);
   }
   .active-btn{
      color: #fff !important;
   }

   .default-tabs .tabs-content {
      position: relative;
      padding-top: 40px;
   }

   .default-tabs .tabs-content .content {
      position: relative;
      display: block;
      opacity: 0;
      visibility: hidden;
      transform: translateY(50px);
      transition: all 0.5s ease;
   }

   .default-tabs .tabs-content .active-tab .content {
      opacity: 1;
      visibility: visible;
      transform: translateY(0px);
   }

   .default-tabs .tabs-content .text {
      position: relative;
      color: var(--thm-text);
      font-size: 16px;
      line-height: 34px;

   }

   .default-tabs .tabs-content .text p {
      font-family: "Cocogoose Pro Light";
   }

    .agency-section .right-col .text {
        position: relative;
        color: var(--thm-text);
        margin-bottom: 50px;
    }

    .agency-section .featured-block-two {
        position: relative;
        display: block;
        /* padding-left: 268px; */
        min-height: 248px;
        /* padding-top: 20px; */
    }

    .agency-section .featured-block-two .image {
        position: absolute;
        left: 0;
        top: 0;
        width: 242px;
        border-radius: 50%;
    }

    .agency-section .featured-block-two .image img {
        display: block;
        width: 100%;
        -webkit-filter: inherit;
        -ms-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        border-radius: 5%;
    }

    .agency-section .featured-block-two .text {
        position: relative;
        top: -50px;
        display: block;
        line-height: 1.5em;
        margin-bottom: 0;
        font-family: "Cocogoose Pro Light";
    }

    .agency-section .featured-block-two .text ul {
        position: relative;
    }

    .agency-section .featured-block-two .text ul li {
        position: relative;
        line-height: 2.125em;
        margin-bottom: 12px;
        padding-left: 30px;
        color: var(--thm-text);
        font-family: "Cocogoose Pro Light";
    }

    .featured-section {
        position: relative;
        padding: 50px 0px 90px;
        background: #ffffff url(../images/background/pattern-2.png) left top repeat;
    }

    .featured-section .sec-title {}

    .featured-section .left-col {
        position: relative;
        margin-bottom: 30px;
    }

    .featured-section .left-col .inner {
        position: relative;
        display: block;
        padding-right: 30px;
    }

    .featured-section .left-col .image-box {
        position: relative;
        display: block;
        border-radius: 7px;
        overflow: hidden;
    }

    .featured-section .left-col .image-box img {
        display: block;
        width: 100%;
        -webkit-filter: grayscale(0%);
        -ms-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 500ms ease;
        border-radius: 7px;
    }

    .featured-section .left-col .image-box:hover img {
        -webkit-filter: grayscale(0%);
        -ms-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
    }

    .featured-section .right-col {
        position: relative;
    }

    .featured-section .right-col .inner {
        position: relative;
        display: block;
    }

    .featured-section .features {
        position: relative;
        padding: 33px 0 15px 0;
    }

    .featured-section .feature {
        position: relative;
        margin-bottom: 30px;
    }

    .featured-section .feature .inner-box {
        position: relative;
        display: block;
        padding-left: 15px;
    }

    .featured-section .feature .inner-box:before {
        content: "";
        position: absolute;
        left: 0;
        top: 11px;
        width: 5px;
        height: 5px;
        background: var(--thm-base);
        border-radius: 50%;
    }

    .featured-section .feature h6 {
        font-size: 20px;
        text-transform: uppercase;
        left: 1px;
        font-weight: 400;
        margin-bottom: 0;
        color: var(--thm-black);
    }

    .featured-section .feature .text {
        position: relative;
        display: block;
        color: var(--thm-text);
        padding: 10px 0px 0px;
        font-size: 14px;
        font-family: 'Cocogoose Pro Light';
    }
</style>

<section class="services-section-two" id="services-section-two" data-scroll data-scroll-repeat="true"
    data-scroll-call="toggleActive" data-scroll-id="#services-section-two" data-scroll-offset="80%,0%">
    <div class="container-fluid">
        <div class="container text-center">
            <div class="sec-title">
                <!--Title Block-->
                <div class="row clearfix">
                    <div class="column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <h1 style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;">NexByte CAN HELP YOU TO UNLOCK YOUR TRUE POTENTIAL
                        </h1>
                    </div>
                    <div class="column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="lower-text">We literally leave no stone unturned to meet our customers' expectations, even if it means walking an extra mile.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="serv-container">
            <section class="card__container">
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="card__content">
                            <h3>Website
                                Development</h3>
                            <p>While designing your website, we keep a perfect balance between the aesthetics..</p>
                            <a href="services/website-development.php">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <div class="card__content">
                            <h3>Graphic
                                Designing</h3>
                            <p>Based on your business or company, we strategize marketing plans that open..</p>
                            <a href="services/graphic-designing.php">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-square-poll-vertical"></i>
                        </div>
                        <div class="card__content">
                            <h3>Digital
                                Marketing</h3>
                            <p>The websites we design often include all the necessary tools native to the design..</p>
                            <a href="services/digital-marketing.php">Read More</a>
                        </div>
                    </div>
                </div>

            </section>
            <section class="card__container">
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div class="card__content">
                            <h3>Seo <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 900;">&</span> Content
                                Writing</h3>
                            <p>While designing your website, we keep a perfect balance between the aesthetics..</p>
                            <a href="services/seo-content-writing.php">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-tablet-screen-button"></i>
                        </div>
                        <div class="card__content">
                            <h3>App
                                Development</h3>
                            <p>Based on your business or company, we strategize marketing plans that open..</p>
                            <a href="services/app-development.php">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-cubes"></i>
                        </div>
                        <div class="card__content">
                            <h3>Ui/UX
                                Designing</h3>
                            <p>The websites we design often include all the necessary tools native to the design..</p>
                            <a href="services/ui-ux-designing.php">Read More</a>
                        </div>
                    </div>
                </div>

            </section>
        </section>
    </div>
</section>

<style>
    .we-work-section {
        position: relative;
        padding: 66px 0 80px;
    }

    .work-tabs {
        position: relative;
    }

    .work-tabs .tab-buttons {
        position: relative;
        display: block;
        background: #f4f5f8;
        border-radius: 7px;
        text-align: center;
        margin-bottom: 50px;
        overflow: hidden;
    }

    .work-tabs .tab-buttons .tab-btn {
        position: relative;
        float: left;
        width: 33.333%;
        line-height: 16px;
        font-size: 18px;
        font-weight: 400;
        letter-spacing: 0.01em;
        color: var(--thm-black);
        padding: 30px 15px;
        text-transform: uppercase;
        margin: 0;
        font-family: var(--thm-font);
        transition: all 0.3s ease;
    }

    .work-tabs .tab-buttons .tab-btn span {
        position: relative;
        display: block;
        z-index: 1;
        font-family:"Vipnagorgialla Rg";
    }

    .work-tabs .tab-buttons .tab-btn:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 0px;
        background: #307cf2;
        transition: all 0.3s ease;
    }

    .work-tabs .tab-buttons .tab-btn.active-btn:before {
        height: 100%;
    }

    .work-tabs .tab-buttons .tab-btn.active-btn {
        color: #ffffff;
    }

    .work-tabs .tabs-content {
        position: relative;
    }

    .work-tabs .image-col {
        position: relative;
        margin-bottom: 30px;
    }

    .work-tabs .image-col .inner {
        position: relative;
        display: block;
        opacity: 0;
        visibility: hidden;
        transform: translateY(50px);
        transition: all 0.5s ease;
    }

    .work-tabs .tabs-content .image {
        position: relative;
        display: block;
        width: 100%;
        height: 450px;
        /* border-radius: 7px; */
    }

    .work-tabs .tabs-content .image img {
        display: block;
        width: 100%;
        -webkit-filter: grayscale(100%);
        -ms-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
  
    }

    .work-tabs .text-col {
        position: relative;
        margin-bottom: 30px;
    }

    .work-tabs .text-col .inner {
        position: relative;
        display: block;
        padding-left: 30px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(50px);
        transition: all 0.5s ease;
    }

    .work-tabs .active-tab .text-col .inner,
    .work-tabs .active-tab .image-col .inner {
        opacity: 1;
        visibility: visible;
        transform: translateY(0px);
    }

    .work-tabs .tabs-content .text {
        position: relative;
    }

    .work-tabs .tabs-content .text h6 {
        font-size: 18px;
        font-weight: 800;
    }

    .work-tabs .tabs-content .text p {
        position: relative;
        margin-bottom: 30px;
        color: #000;
        font-size: 14px;
    }

    .work-tabs .tabs-content .text ul {
        position: relative;
    }

    .work-tabs .tabs-content .text ul li {
        position: relative;
        line-height: 2.125em;
        margin-bottom: 8px;
        padding-left: 30px;
        font-weight: 400;
        color: #000;
    }
</style>

<section class="we-work-section">
    <div class="container-fluid">
        <div class="sec-title centered">
            <h1 class="text-center" style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;padding: 0 0 45px 0;">We Work With Industries</h1>
        </div>
        <!--Work Tabs-->
        <div class="work-tabs tabs-box">

            <!--Tab Btns-->
            <ul class="tab-btns tab-buttons clearfix">
                <li data-tab="#tab-1" class="tab-btn active-btn"><span>Latest technology</span></li>
                <li data-tab="#tab-2" class="tab-btn"><span>awesome support</span></li>
                <li data-tab="#tab-3" class="tab-btn"><span>Demo install</span></li>
            </ul>

            <!--Tabs Container-->
            <div class="tabs-content">

                <!--Tab-->
                <div class="tab active-tab" id="tab-1" style="display: block;">
                    <div class="row clearfix">
                        <div class="image-col col-lg-5 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="image">
                                    <lottie-player src="images/latest-technology.json" class="design-inn" background="transparent" loop autoplay>
                                    </lottie-player>
                                </div>
                            </div>
                        </div>
                        <div class="text-col col-lg-7 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="text">
                                    <h6 class="gradientText animate__animated animate__slow animate__fadeInUp" data-scroll="" data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">YOU ARE ALL SET TO MEET YOUR GOALS </h6>
                                        <p>We are well-versed with the fact that our target market operates at a swift pace. Therefore, NexByte has equipped itself with the high-end technology to hand over projects to the clients at the earliest without compromising efficiency.</p>
                                        <p class="theme_color">Our reliance on the latest tools gives us a clear upper hand over rivals. We take the utmost pride in declaring that we are considered a trendsetter in the industry as far as the technological footprint is concerned. </p>
                                        <ul>
                                            <li><img src="images/check.svg" width="15" alt=""> Enables you to keep track of marketing campaigns on the go</li>
                                            <li><img src="images/check.svg" width="15" alt=""> Enables you to keep track of marketing campaigns on the go</li>
                                            <li><img src="images/check.svg" width="15" alt=""> We can extract even negligible customer insights with the help of CRM software</li>
                                            <li><img src="images/check.svg" width="15" alt=""> NexByte makes it a point to bridge the communication gap</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-2" style="display: none;">
                    <div class="row clearfix">
                        <div class="image-col col-lg-5 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="image">
                                    <lottie-player src="images/support.json" class="design-inn" background="transparent" loop autoplay>
                                    </lottie-player>
                                </div>
                            </div>
                        </div>
                        <div class="text-col col-lg-7 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="text">
                                        <p>Our team has nailed the magic formula of fanatical customer support. Whether you are contacting us for the first or umpteenth time, NexByte’s support department will always assist you to the best of its abilities.</p>
                                        <p class="theme_color">Our representatives are open to receive all the relevant quarries. We are available <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">24/7</span> so that you do not subscribe to the feeling of being “left out” at any point. </p>
                                        <ul>
                                            <li><img src="images/check.svg" width="15" alt=""> We convey the complex information in the layman’s language</li>
                                            <li><img src="images/check.svg" width="15" alt=""> Our customer representatives are on top of the empathy</li>
                                            <li><img src="images/check.svg" width="15" alt=""> You will experience a friendly conversation</li>
                                            <li><img src="images/check.svg" width="15" alt=""> We love to listen to our customers</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-3" style="display: none;">
                    <div class="row clearfix">
                        <div class="image-col col-lg-5 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="image" style="height: 300px;">
                                    <lottie-player src="images/demo.json" class="design-inn" background="transparent" loop autoplay>
                                    </lottie-player>
                                </div>
                            </div>
                        </div>
                        <div class="text-col col-lg-7 col-md-6 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="text">
                                        <p>It is natural for every business to brag about its products and services without showing anything concrete. Not us. We encourage you to give our services a try before approving what we claim.</p>
                                        <!--<p class="theme_color">If you are going to use a passage of Lorem Ipsum,
                                                    you need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. </p>-->
                                        <ul>
                                            <li><img src="images/check.svg" width="15" alt=""> Look no further for a one-stop solution to boost your online game</li>
                                            <li><img src="images/check.svg" width="15" alt=""> NexByte wow customers with personalized packages</li>
                                            <li><img src="images/check.svg" width="15" alt=""> We keep the customers in the loop </li>
                                            <li><img src="images/check.svg" width="15" alt=""> Our number of our loyal customers is constantly marking an uptick</li>
                                        </ul>
                                    </div>
                                </div>
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