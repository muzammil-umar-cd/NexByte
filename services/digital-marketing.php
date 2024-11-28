<?php include('../includes/inner-header-services.php'); ?>

<title>Digital Marketing - NexByte</title>

<section class="main-banner-inn inner-banner-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 col-md-6 animate__animated animate__slow" data-scroll data-scroll-position="top"
                data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                <h1 data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">
                    <span>Digital Marketing</span>
                    <span class="banner-text-wrap">
                        <span data-scroll data-scroll-speed="1" data-scroll-position="top" data-scroll-repeat="true"
                            data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">We design and
                            build industry-leading web-based products that bring value to your customers, delivered with
                            compelling UX.
                        </span>
                    </span>
                </h1>
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
        font-family: 'Cocogoose Pro light';
        font-size: 18px;
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
        --body-font: "Cocogoose Pro light";
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
</style>

<section class="services-section-two" id="services-section-two" data-scroll data-scroll-repeat="true"
    data-scroll-call="toggleActive" data-scroll-id="#services-section-two" data-scroll-offset="80%,0%">
    <div class="container-fluid">
        <div class="sec-title">
            <!--Title Block-->
            <div class="row clearfix">
                <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp">
                    <h1 style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;">What Are Graphic Designing
                        Services?
                    </h1>
                </div>
                <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp">
                    <div class="lower-text">Graphic design encompasses a wide range of services, including brand identity development, logo design, print and digital advertising, UX/UI design, packaging, typography, motion graphics, and visual content for websites and social media. It also involves creating visually compelling and user-friendly designs that enhance user experiences while maintaining brand consistency across various platforms. From marketing materials to custom illustrations, graphic design plays a crucial role in visually communicating a brand’s message to its audience.

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section-two" id="services-section-two" data-scroll data-scroll-repeat="true"
    data-scroll-call="toggleActive" data-scroll-id="#services-section-two" data-scroll-offset="80%,0%">
    <div class="container-fluid">
        <div class="sec-title">
            <!--Title Block-->
            <div class="container">
                <div class="row clearfix text-center">
                    <div class="column col-xl-12 col-lg-12 col-md-12 col-sm-12 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                        data-scroll-class="animate__fadeInUp">
                        <h1 style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;">Achieve Your Business Goals
                            with Expert Graphic Design Solutions
                        </h1>
                    </div>
                    <div class="column col-xl-12 col-lg-12 col-md-12 col-sm-12 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                        data-scroll-class="animate__fadeInUp">
                        <div class="lower-text">Our skilled and experienced designers specialize in a wide range of graphic design services. Here are some of the solutions we can deliver for you: from brand identity creation and logo design to print and digital marketing materials, UX/UI design, packaging, and custom illustrations, all tailored to elevate your brand and communicate your message effectively.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="serv-container animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <section class="card__container">
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="card__content">
                            <h3>Brand Identity</h3>
                            <p>With professional brand identity design, businesses can establish a unique and memorable presence, build trust with their audience, and stand out in any market.</p>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="card__content">
                            <h3>Digital Design</h3>
                            <p>Digital designs can captivate a global audience. They're visually engaging and interactive, helping to hold users' attention and enhance their overall experience.</p>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                        <div class="card__content">
                            <h3>Custom Graphics</h3>
                            <p>Tailored graphic designs created to meet the specific needs of your business can save time and resources by streamlining your brand’s visual communication and enhancing customer engagement.</p>
                        </div>
                    </div>
                </div>

            </section>

        </section>
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
        /* margin-bottom: 40px; */
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
            <div class="left-col col-lg-5 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="image-box animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                        data-scroll-class="animate__fadeInUp" style="height: 600px;">
                        <lottie-player src="../images/mWcstD9xPV.json" background="transparent" loop autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-7 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h3 class="animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                            data-scroll-class="animate__fadeInUp" style="font-family: 'Vipnagorgialla Rg';font-size: 2rem;">Stand Out Digitally with a Best-in-Class Graphic Design Company</h3>
                        <div class="cus-hr"></div>
                    </div>
                    <div class="features" style="padding-top: 20px;">
                        <div class="feature">
                            <div class="inner-box">
                                <h5 class="gradientText animate__animated animate__slow animate__fadeInUp" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp">
                                    At NexByte, we offer every digital marketing service you need to enhance your online presence and achieve your business goals, including:
                                </h5>
                            </div>
                        </div>
                        <div class="text clearfix">
                            <ul style="margin-top: -40px;">
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Search Engine Optimization (SEO)</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Pay-Per-Click (PPC) Advertising</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Social Media Marketing</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Content Marketing and Strategy</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Email Marketing Campaigns</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Analytics and Reporting</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Market Research - Strategy Development - Campaign Planning</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Project Management - Creative Direction - Brand Strategy</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Consulting - Maintenance - Support</li>
                                
                                <li class="pt-4">The role of a digital marketing company is to create solutions that effectively promote your brand and fulfill your unique business objectives. With the right digital marketing services, you can drive traffic, generate leads, and increase conversions.</li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<style>
    #main h1 {
        font-size: 45px;
        color: #bac0e3;
        text-align: center;
    }

    .cards-list {
        z-index: 0;
        width: 71%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin: auto;
    }

    .card {
        margin: 30px auto;
        width: 300px;
        height: 260px;
        border-radius: 50px 0;
        box-shadow: 0px 0px 15px rgb(0 0 0 / 30%);
        cursor: pointer;
        transition: 0.4s;
        justify-content: flex-start !important;
        background-color: #97A9BD;
    }

    .card_image {
        background: #fff;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin: 10px auto;
    }

    .card_image i {
        margin: 17px;
        font-size: 37px;

        -webkit-animation: spin 4s linear infinite;
        -moz-animation: spin 4s linear infinite;
        animation: spin 4s linear infinite;
    }

    @-moz-keyframes spin {
        100% {
            -moz-transform: rotate(360deg);
        }
    }

    @-webkit-keyframes spin {
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .card_title .heading {
        font-size: 1.2rem;
        font-weight: 700;
        margin: auto;
        text-align: center;
        color: #fff;
    }

    .card_title p {
        margin: 10px auto;
        line-height: normal;
        text-align: center;
        color: #fff;
        padding: 13px;
    }

    .cards-list .card:nth-child(1) {
        background-color: #000;
    }

    .cards-list .card:nth-child(1):hover {
        background-color: #307cf2;
    }

    .cards-list .card1 .card_image a i {
        color: #97A9BD;
    }

    .cards-list .card:nth-child(2) {
        background-color: #000;
    }

    .cards-list .card:nth-child(2):hover {
        background-color: #307cf2;
    }

    .cards-list .card2 .card_image a i {
        color: #97A9BD;
    }

    .cards-list .card:nth-child(3) {
        background-color: #000;
    }

    .cards-list .card:nth-child(3):hover {
        background-color: #307cf2;
    }

    .cards-list .card3 .card_image a i {
        color: #97A9BD;
    }

    .cards-list .card:nth-child(4) {
        background-color: #000;
    }

    .cards-list .card:nth-child(4):hover {
        background-color: #307cf2;
    }

    .cards-list .card4 .card_image a i {
        color: #97A9BD;
    }

    .cards-list .card:nth-child(5) {
        background-color: #000;
    }

    .cards-list .card:nth-child(5):hover {
        background-color: #307cf2;
    }

    .cards-list .card5 .card_image a i {
        color: #97A9BD;
    }


    .btn-flip {
        opacity: 1;
        outline: 0;
        color: #fff;
        line-height: 40px;
        position: relative;
        text-align: center;
        letter-spacing: 1px;
        display: inline-block;
        text-decoration: none;
        font-family: "Open Sans";
        text-transform: uppercase;
    }

    .btn-flip:hover:after {
        opacity: 1;
        transform: translateY(0) rotateX(0);
    }

    .btn-flip:hover:before {
        opacity: 0;
        transform: translateY(50%) rotateX(90deg);
    }

    .btn-flip:after {
        top: 0;
        left: 0;
        opacity: 0;
        width: 100%;
        color: #ababb4;
        display: block;
        transition: 0.5s;
        position: absolute;
        background: #fcfcfc;
        content: attr(data-back);
        transform: translateY(-50%) rotateX(90deg);
    }

    .btn-flip:before {
        top: 0;
        left: 0;
        opacity: 1;
        color: #f9f9ff;
        display: block;
        padding: 0 30px;
        line-height: 40px;
        transition: 0.5s;
        position: relative;
        /* background: #fbfbfd; */
        content: attr(data-front);
        transform: translateY(0) rotateX(0);
        border: 1px solid #fbfbfb;
    }

    .btn-read {
        justify-content: center;
        align-content: center;
        display: flex;
        margin: 31px;
    }
</style>

<section id="main">
    <div class="cards-list">

        <div class="card card1 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Consult Your Idea</h6>
                <p>Set the marketing direction with our digital marketing consultants.</p>

            </div>
        </div>

        <div class="card card2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Choose a Strategy</h6>
                <p>Deciding on the marketing approach and overall campaign direction.</p>

            </div>
        </div>

        <div class="card card3 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Execute</h6>
                <p>Implementing your marketing strategy with our experienced team.</p>

            </div>
        </div>

        <div class="card card4 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Launch Your Campaign</h6>
                <p>Introducing your brand to the market and ensuring it remains effective with ongoing support and optimization.</p>

            </div>
        </div>

        <div class="card card5 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Launch Your Brand.</h6>
                <p>Introducing your visual identity and ensuring it remains impactful with ongoing support and updates.</p>

            </div>
        </div>

    </div>
</section>


<?php include('../includes/inner-footer-services.php'); ?>