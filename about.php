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
                     data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">We at NexByte are committed to redefining the business landscape and enhancing the consumer experience. We are transforming the dream of businesses being a data, creativity, and technology-driven experience into a reality.
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
               <h1 style="font-family: 'Vipnagorgialla Rg';font-size: 3rem;">Carrying The Core Of Digital Since 2008
                  <span class="dot">.</span>
               </h1>
            </div>
            <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">
               <div class="lower-text">We are a digital marketing and web design agency committed to businesses seeking to establish a strong online presence. Our headquarters are located in Karachi. This city is the hometown of the agency that we have now come to know as NexByte.

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
                  <div class="lower-text" style="font-family: 'Cocogoose Pro Light';font-size: 15px !important;">We treat every one of our customers as a serious commitment and invest considerable time in honing the skills of our employees. Other than that, the following points describe what sets us apart from the rest:</div>
               </div>
               <div class="features">
                  <div class="row clearfix">
                     <div class="feature col-md-6 col-sm-12">
                        <div class="inner-box">
                           <h6>Budget-friendly services </h6>
                           <div class="text">We provide premium quality services at a price we dare you to find elsewhere.
                           </div>
                        </div>
                     </div>
                     <div class="feature col-md-6 col-sm-12">
                        <div class="inner-box">
                           <h6>Expert talent</h6>
                           <div class="text">NexByte agency is home to the best talent in town. Not only are they reliable, but they also know A-Z of the services required of them.
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
                        <h6>No detail unnoticed</h6>
                        <div class="text">Let us handle your competitors because we know what to watch out for. With our level of attention to detail, we’re able to make a plan that meets your goals and is aligned with your interests.
                        </div>
                     </div>
                  </div>
                  <div class="feature col-md-6 col-sm-12">
                     <div class="inner-box">
                        <h6>Unmatched turnaround time
                        </h6>
                        <div class="text">NexByte draws a firm and realistic projected timeline for all our clients. No matter how tricky or challenging the project, you can bet on us to finish it when required. Our team can whip up solutions for even the most difficult tasks in no time.
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
                              <p>NexByte’s recent mission has been to assist upcoming companies find their footing in the digital landscape. We strive to break all barriers in reaching absolute perfection that benefits not only us but millions of businesses worldwide. And finally, part of our core mission is to change the general perception of IT and the digital world in Pakistan
                              </p>
                              <p class="pt-2">We look forward to the day that the youth of the country is excited about the IT industry and all it has to offer.</p>
                           </div>
                        </div>
                     </div>

                     <!--Tab-->
                     <div class="tab" id="tab-2" style="display: none;">
                        <div class="content">
                           <div class="text">
                              <p>Our vision, from the beginning, has been to lead the digital marketing industry in our country. Or might we say the rest of the world, too? No dream is too big, right? It is for this dream that we’ve been able to deliver excellent results and have gone above and beyond to cater to our clients. NexByte’s strongest motivator is the hope to substantially alter the digital world in Pakistan. We also envision a world free of unethical business practices, where employees are made to feel valued so they can realize the vision we have conjured. 
                              </p>
                           </div>
                        </div>
                     </div>

                     <!--Tab-->
                     <div class="tab" id="tab-3" style="display: none;">
                        <div class="content">
                           <div class="text">
                              <p>Back in the day, Nexbyte used to be just a tiny digital marketing firm that serviced Pakistani businesses. Like every other company starting a venture from scratch, we’ve had our fair share of hardships. At first, we were just a bunch of tech heads running around trying to survive in the digital world. Somewhere down the line, we came together and decided to begin our journey as a tech-based agency that holds ethics, professionalism, and social responsibility as its core principles. 
                              </p>
                              <p class="pt-2">It is through sheer determination, consistency, and hard work that we have managed to climb so high. Here we are now, standing as one of the largest web design agencies, head-to-head with all the big guns in the industry. Nexbyte believes in the power of hard work and dedication to alchemize dreams into reality!</p>
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
                  Thriving right in the hustle and bustle of the city of lights, Karachi, NexByte is an IT company that values creativity, ethics, and professionalism above all else. Our work is focused on helping new businesses take off with digital marketing and web design solutions or helping existing businesses build a proud online presence. Though we’d love to take all the credit for our success, this wasn’t possible without the support from some of the best experts in the IT industry. Below is a list of some of the <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">360</span>-digital services we take great pride in providing:
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