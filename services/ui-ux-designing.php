<?php include('../includes/inner-header-services.php'); ?>

<title>UI/UX Designing - NexByte</title>

<section class="main-banner-inn inner-banner-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 col-md-6 animate__animated animate__slow" data-scroll data-scroll-position="top"
                data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                <h1 data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">
                    <span>UI/UX Designing</span>
                    <span class="banner-text-wrap">
                        <span data-scroll data-scroll-speed="1" data-scroll-position="top" data-scroll-repeat="true"
                            data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">NexByte’s designs will always be user-centered. Our specialty lies in merging functionality with a visual appeal so the user experience remains seamless and aesthetically pleasing across all web and mobile platforms.
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
        font-family: 'Cocogoose Pro Ultralight';
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
        --body-font: "Cocogoose Pro UltraLight";
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
                    <h1 style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;">Defining UI/UX Designing Services
                    </h1>
                </div>
                <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp">
                    <div class="lower-text">UI  stands for User Interface, and UX stands for User Experience. These design services focus on the look, feel, and functionality of your application or website. Our designers do everything with the end user in mind, ensuring your product has effortless navigation and doesn’t only cater to the aesthetics.

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
                        <h1 style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;">Target specific business goals with custom UI/UX designing solutions.
                        </h1>
                    </div>
                    <div class="column col-xl-12 col-lg-12 col-md-12 col-sm-12 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                        data-scroll-class="animate__fadeInUp">
                        <div class="lower-text">Our skilled designers make sure that your digital product is eye-catching and user-friendly simultaneously. You can look at some of our offerings below:

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
                            <h3>Research Before Anything Else</h3>
                            <p>Before proceeding to design, our specialists conduct thorough user research to get an idea of your audience’s buying behavior and needs.</p>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="card__content">
                            <h3>Wireframing & Prototyping</h3>
                            <p>We also develop wireframes and prototypes to conceptualize the structure and flow of your product before beginning the design process.</p>
                        </div>
                    </div>
                </div>
                <div class="card__bx" style="--clr: #307cf2">
                    <div class="card__data">
                        <div class="card__icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                        <div class="card__content">
                            <h3>Interface Design</h3>
                            <p>Our team of UI designers creates aesthetic yet functional interfaces that maximize user engagement and interaction with your business.</p>
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
                        <lottie-player src="../images/web-development.json" background="transparent" loop autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-7 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h3 class="animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                            data-scroll-class="animate__fadeInUp" style="font-family: 'Vipnagorgialla Rg';font-size: 2rem;">Be a digital mogul with a best-in-class UI/UX designing agency.</h3>
                        <div class="cus-hr"></div>
                    </div>
                    <div class="features" style="padding-top: 20px;">
                        <div class="feature">
                            <div class="inner-box">
                                <h5 class="gradientText animate__animated animate__slow animate__fadeInUp" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp">
                                    At NexByte, we provide top-tier UI/UX design services, including:
                                </h5>
                            </div>
                        </div>
                        <div class="text clearfix">
                            <ul style="margin-top: -40px;">
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> User Research<span
                                        style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> & </span> Analysis</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Wireframing <span
                                        style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> & </span> Prototyping</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> UI <span
                                        style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> & </span>Interaction Design</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Usability Testing</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Responsive Design
                                        </li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Mobile UI/UX Design</li>
                                <li class="p-2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
                                    data-scroll-class="animate__fadeInUp"><img src="../images/check.svg" width="15"
                                        alt=""> Design Systems & Guidelines</li>
                                
                                <li class="pt-4">What makes a great UI/UX design is its accessibility and usability. Of course, it also needs to be appealing and deliver a positive user experience so there’s higher engagement and customer satisfaction.</li>
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
                <h6 class="heading">Consult UI/UX Team</h6>
                <p>Set the tone of the project with our consultants</p>

            </div>
        </div>

        <div class="card card2 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Pick Preferred Styles</h6>
                <p>Have the creative freedom to pick a visual style and approach to the project.</p>

            </div>
        </div>

        <div class="card card3 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Design It</h6>
                <p>Creating a user-friendly yet stunning web solution</p>

            </div>
        </div>

        <div class="card card4 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Build It</h6>
                <p>Our skilled designers will whisper life into your vision.</p>

            </div>
        </div>

        <div class="card card5 animate__animated animate__slow" data-scroll data-scroll-repeat="true"
            data-scroll-class="animate__fadeInUp">
            <div class="card_image">
                <a href=""><i class="fa fa-spinner"></i></a>
            </div>
            <div class="card_title title-white">
                <h6 class="heading">Take Off</h6>
                <p>Launch your visual identity and ensure with our ongoing support and updates that it remains relevant throughout all seasons.</p>

            </div>
        </div>

    </div>
</section>


<?php include('../includes/inner-footer-services.php'); ?>