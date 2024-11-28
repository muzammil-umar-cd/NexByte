<?php include('includes/inner-header.php'); ?>

<title>About - NexByte</title>

<section class="main-banner-inn">
   <!-- <lottie-player src="images/about-banner.json" class="design-inn" background="transparent" loop autoplay>
   </lottie-player> -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 col-lg-7 col-md-6 animate__animated animate__slow" data-scroll
            data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
            <h1 data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-repeat="true"
               data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">
               <span>About Us</span>
               <span class="banner-text-wrap">
                  <span data-scroll data-scroll-speed="1" data-scroll-position="top" data-scroll-repeat="true"
                     data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">we are
                     reimagining the way business is done and product is consumed. we have committed ourselves
                     to transforming business into an experience driven by data, technology, creativity and
                     innovation.
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
      --body-font: "Vipnagorgialla Rg";
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
      --thm-font: "Vipnagorgialla Rg";
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
      font-family: "Vipnagorgialla Rg";
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
      font-family: "Vipnagorgialla Rg";
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
      top: -140px;
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
      <div class="sec-title">
         <!--Title Block-->
         <div class="row clearfix">
            <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
               <h1 style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;">Focusing On The Core Of Digital Since 2008
                  <span class="dot">.</span>
               </h1>
            </div>
            <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
               <div class="lower-text">NexByte is a digital marketing and web design agency with the sole purpose of providing services to customers who envision establishing a strong online presence. Our headquarters are located in Karachi, the hometown that birthed the entity that we now call NexByte.

               </div>
            </div>
         </div>
      </div>
      <section class="serv-container">
         <section class="card__container">
            <div class="card__bx" style="--clr: #307cf2">
               <div class="card__data">
                  <div class="card__icon">
                     <i class="fa-solid fa-wand-magic-sparkles"></i>
                  </div>
                  <div class="card__content">
                     <h3>Modern Designing</h3>
                     <p>While designing your website, we keep a perfect balance between the aesthetics..</p>
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
            <div class="card__bx" style="--clr: #307cf2">
               <div class="card__data">
                  <div class="card__icon">
                     <i class="fa-solid fa-square-poll-vertical"></i>
                  </div>
                  <div class="card__content">
                     <h3>MARKETING STRATEGY</h3>
                     <p>Based on your business or company, we strategize marketing plans that open..</p>
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
            <div class="card__bx" style="--clr: #307cf2">
               <div class="card__data">
                  <div class="card__icon">
                     <i class="fa-brands fa-opencart"></i>
                  </div>
                  <div class="card__content">
                     <h3>Digital
                        Products</h3>
                     <p>The websites we design often include all the necessary tools native to the design..</p>
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>

         </section>

      </section>
   </div>
</section>


<section class="featured-section">
   <div class="container-fluid">
      <div class="row clearfix">
         <!--Left Column-->
         <div class="left-col col-lg-6 col-md-12 col-sm-12">
            <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
               <div class="image-box">
                  <lottie-player src="images/GRuWyQGcnG.json" background="transparent" loop autoplay>
                  </lottie-player>
               </div>
            </div>
         </div>
         <!--Right Column-->
         <div class="right-col col-lg-6 col-md-12 col-sm-12">
            <div class="inner">
               <div class="sec-title">
                  <h3 style="font-family: 'Vipnagorgialla Rg';font-size: 2.5rem;">Why Choose NexByte?</h3>
                  <div class="lower-text" style="font-family: 'Cocogoose Pro Light';font-size: 15px !important;">We are committed to providing our customers with exceptional
                     service while offering our employees the best training. There are many variations of
                     passages of lorem ipsum is simply free text available in the market, but the
                     majority have suffered time.</div>
               </div>
               <div class="features">
                  <div class="row clearfix">
                     <div class="feature col-md-6 col-sm-12">
                        <div class="inner-box">
                           <h6>Affordable Services</h6>
                           <div class="text">We offer high-quality services at the best prices you are unlikely to find anyplace else.
                           </div>
                        </div>
                     </div>
                     <div class="feature col-md-6 col-sm-12">
                        <div class="inner-box">
                           <h6>Expert Team</h6>
                           <div class="text">NexByte agency is comprised of the best experts in town who are reliable and know what they’re doing.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="features">
               <div class="row clearfix">
                  <div class="feature col-md-6 col-sm-12">
                     <div class="inner-box">
                        <h6>Attention to Detail</h6>
                        <div class="text">It is our absolute attention to detail and a keen eye out for competitors that help us design a plan that falls within your best interests.
                        </div>
                     </div>
                  </div>
                  <div class="feature col-md-6 col-sm-12">
                     <div class="inner-box">
                        <h6>Least Turnaround Time
                        </h6>
                        <div class="text">Depending on the complexity of your project, we set out a strict schedule that helps us complete it as soon as possible. We complete even the most difficult tasks in a matter of a few weeks.

                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>

<section class="agency-section">
   <div class="container-fluid">
      <div class="row clearfix">
         <!--Left Column-->
         <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="inner">
               <div class="sec-title">
                  <h3 style="font-family: 'Vipnagorgialla Rg';font-size: 2.5rem;">What Does NexByte Stand For?</h3>
                  <div class="cus-hr"></div>
               </div>
               <!--Default Tabs-->
               <div class="default-tabs tabs-box">

                  <!--Tab Btns-->
                  <ul class="tab-btns tab-buttons clearfix" style="justify-content: center;display: flex;">
                     <li data-tab="#tab-1" class="tab-btn active-btn"><span style="font-family: 'Vipnagorgialla Rg';font-size: 14px;">Our Mission</span></li>
                     <li data-tab="#tab-2" class="tab-btn"><span style="font-family: 'Vipnagorgialla Rg';font-size: 14px;">Our Vision</span></li>
                     <li data-tab="#tab-3" class="tab-btn"><span style="font-family: 'Vipnagorgialla Rg';font-size: 14px;">Our History</span></li>
                  </ul>

                  <!--Tabs Container-->
                  <div class="tabs-content">

                     <!--Tab-->
                     <div class="tab active-tab" id="tab-1" style="display: block;">
                        <div class="content">
                           <div class="text">
                              <p>NexByte has partaken the mission to provide services to a myriad of companies that are looking to establish a prominent position in the digital world. We strive to break all barriers in reaching absolute perfection that benefits not only us but millions of businesses worldwide. Our ultimate mission is to transform how digital and IT is perceived in Pakistan by sparking the interest of youth and expanding the horizons of the digital world in Pakistan.
                              </p>
                           </div>
                        </div>
                     </div>

                     <!--Tab-->
                     <div class="tab" id="tab-2" style="display: none;">
                        <div class="content">
                           <div class="text">
                              <p>We envision becoming the number one leading digital marketing company not only in Pakistan but the entire world as well. This goal, coupled with our desperation to improve Pakistan’s standing in the global digital world has motivated us to go above and beyond in our mission to become a leading Pakistani IT company recognized and acknowledged by the world. We envision a nation where unethical business practices are condemned and the workforce is valued and motivated to do better which will ultimately result in Pakistan’s prosperity.
                              </p>
                           </div>
                        </div>
                     </div>

                     <!--Tab-->
                     <div class="tab" id="tab-3" style="display: none;">
                        <div class="content">
                           <div class="text">
                              <p>NexByte started off as a small digital marketing firm xyz years ago catering to businesses within Pakistan. Like every other company starting a venture from scratch, we’ve had our fair share of hardships. Primarily, the company that you know now as NexByte was just a group of passionate digital marketing experts running here and there to make ends meet. This was until we decided to sit down together and give birth to a tech-based agency that thrives on its principles of ethics, professionalism, and social responsibility. Through our dedication, hard work, and consistency, we’ve managed to come a long way. We now stand as one of the largest web design agencies that run parallel to the leading names in the industry. It's the core belief of NexByte that hard work and dedication can make everything possible!
                              </p>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!--Right Column-->
         <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="inner">
               <div class="text">
                  <p style="font-family: 'Cocogoose Pro Light' !important;">
                     Located primarily in the busiest city of Pakistan, i.e. Karachi, NexByte is an IT company that values professionalism and creativity and abides by all ethics strictly. We take utmost pleasure in providing digital marketing and web design solutions to customers that are either getting started or are taking their existing business online. We have joined hands with some of the best IT specialists in the business who have contributed to the success of the company. The <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">360</span>-digital services we provide and excel in are:
                  </p>
               </div>
               <div class="featured-block-two clearfix">
                  <!-- <div class="image"><img src="images/core1.jpeg" alt=""></div> -->
                  <div class="text">
                     <ul>
                        <li><span style="font-family: 'Cocogoose Pro Light';"><img src="images/check.svg" width="15" alt=""> Web development and Designing</span></li>
                        <li><span style="font-family: 'Cocogoose Pro Light';"><img src="images/check.svg" width="15" alt=""> SEO and content writing</span></li>
                        <li><span style="font-family: 'Cocogoose Pro Light';"><img src="images/check.svg" width="15" alt=""> Social Media and Optimization</span></li>
                        <li><span style="font-family: 'Cocogoose Pro Light';"><img src="images/check.svg" width="15" alt=""> Ecommerce Website Development <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">(B2B and B2C)</span></span></li>
                        <li><span style="font-family: 'Cocogoose Pro Light';"><img src="images/check.svg" width="15" alt=""> Graphics designing and animation</span></li>
                        <li><span style="font-family: 'Cocogoose Pro Light';"><img src="images/check.svg" width="15" alt=""> UI/UX Designing</span></li>

                     </ul>
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