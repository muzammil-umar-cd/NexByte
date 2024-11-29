<!DOCTYPE html>
<html lang="en">

<head>
   <script>
      //  setInterval(function() {
      //      console.clear();
      //  }, 100);
   </script>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Primary Meta Tags -->
   <meta name="title" content="NexByte - Possibilities Transformed">
   <meta name="description"
      content="NexByte is a digital technology and experiences company. We transform businesses into experiences driven by data, technology, creativity & innovation.">
   <link rel="canonical" href="https://nexbyte.com/">

   <meta name="viewport"
      content="width=device-width, viewport-fit=cover initial-scale=1.0, maximum-scale=6.0, minimum-scale=1.0" />
   <meta name="x5-page-mode" content="app">
   <meta name="browsermode" content="application">
   <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
   <link rel="stylesheet" media="all" href="css/bootstrap.min.css" />
   <link rel="stylesheet" media="all" href="css/swiper-bundle.min.css" />
   <link rel="stylesheet" media="all" href="font/pilat-font.css" />
   <link rel="stylesheet" media="all" href="font/cocogoose-font.css" />
   <link rel="stylesheet" media="all" href="font/a-space-font.css" />
   <link rel="stylesheet" media="all" href="font/neumatic-font.css" />
   <link rel="stylesheet" media="all" href="css/select2.min.css" />
   <link rel="stylesheet" href="css/animate.css" />
   <link href=" https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css " rel="stylesheet">
   <link rel="stylesheet" media="all" href="css/style.css?v=1.33" />
   <link rel="stylesheet" media="all" href="css/menu.css?v=2.35" />
   <link rel="preconnect" href="//unpkg.com">
   <link rel="preconnect" href="//cdnjs.cloudflare.com">
   <link rel="preconnect" href="//cdn.jsdelivr.net">
   <link rel="dns-prefetch" href="//unpkg.com">
   <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
   <link rel=" dns-prefetch" href="//cdn.jsdelivr.net">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   <!-- fancybox -->
   <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
   <!-- magnific-popup -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

   <style>
      .carousel-container {
         display: flex;
         width: 100%;
         padding-top: 10px;
      }

      .panel {
         background-size: auto 100%;
         background-position: center;
         background-repeat: no-repeat;
         height: 40vh;
         border-radius: 50px;
         color: #fff;
         text-shadow: 0px 2px 4px #000;
         cursor: pointer;
         flex: 0.5;
         margin: 10px;
         position: relative;
         transition: flex 1s ease-in;
         box-shadow: 1px 1px 1px 1px #392613;
      }

      .panel h3 {
         font-family: "A-Space Regular Demo";
         font-size: 25px;
         text-align: center;
         position: absolute;
         border-bottom: 4px solid #fff;
         padding: 5px;
         bottom: 75%;
         margin: 0;
         width: 100%;
         opacity: 0;
      }

      .panel p {
         font-family: "Cocogoose Pro Light";
         font-size: 12px;
         position: absolute;
         color: #fff;
         padding: 5px;
         bottom: 22%;
         width: 100%;
         margin: 0;
         opacity: 0;
         text-align: center;
      }

      .v-head {
         font-family: "Cocogoose Pro Light";
         font-size: 12px;
         position: absolute;
         color: #fff;
         letter-spacing: 2px;
         padding: 5px;
         margin: 0;
         left: 15%;
         transform: rotate(270deg);
         transform-origin: 0 0;
         text-align: center;
      }


      .panel:nth-of-type(1) .v-head {
         bottom: 16%;
      }

      .panel:nth-of-type(2) .v-head {
         bottom: 16%;
      }

      .panel:nth-of-type(3) .v-head {
         bottom: 16%;
      }

      .panel:nth-of-type(4) .v-head {
         bottom: 16%;
      }

      .panel:nth-of-type(5) .v-head {
         bottom: 16%;
      }

      .panel.active {
         background-size: 100% auto;
         flex: 5;
      }

      .panel.active h3,
      .panel.active p {
         opacity: 1;
         transition: opacity 1s ease-in 1s;
      }

      .panel.active .v-head {
         opacity: 0;
      }

      @media (max-width: 480px) {
         .carousel-container {
            width: 110vw;
            padding-left: 10px;
         }

         .carousel-container .panel {
            height: 135px;
         }

         .v-head {
            font-size: 5px;
         }

         .panel {
            border-radius: 26px;
         }

         .panel h3 {
            font-size: 12px !important;
            bottom: 42% !important;
         }

         .panel p {
            opacity: 0 !important;
         }


         .panel:nth-of-type(1) .v-head {
            left: -4%;
            bottom: 1%;
         }

         .panel:nth-of-type(2) .v-head {
            left: -4%;
            bottom: 2%;
         }

         .panel:nth-of-type(3) .v-head {
            left: -4%;
            bottom: 2%;
         }

         .panel:nth-of-type(4) {
            opacity: 0;
         }

         .panel:nth-of-type(5) {
            opacity: 0;
         }
      }

      canvas {
         display: block;
         vertical-align: bottom;
         border-radius: 50px;
         background-image: radial-gradient(#013c21, rgb(0, 0, 0)) !important;
      }

      .c-scrollbar_thumb {
         background-color: #307cf2 !important;
      }
   </style>
</head>

<body data-barba="wrapper" id="body-main">

   <div class="loader-warp">
      <lottie-player src="images/loader-nexbyte.json" class="loader-img" background="transparent" loop autoplay>
      </lottie-player>
   </div>
   <div data-scroll-container id="fixed-elements" class="scrollContainer">
      <div id="target"></div>
      <style>
         .selectize-control .selectize-input {
            background-color: transparent !important;
            border: none;
            border-bottom: 1px solid #dadada !important;
            box-shadow: none !important;
            background-image: none !important;
            border-radius: 0;
         }

         /* 
         .is-inview {
            background-color: #000;
         } */
      </style>
      <main data-barba="container" data-barba-namespace="home">
         <header data-scroll data-scroll-sticky id="main-nav" data-scroll-target="#target" class="homeHeader">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <!-- desktop menu start -->
                     <div class="cus-nav dsk-menu">
                        <div class="main-logo">
                           <a href="javascript:;">
                              <img class="img-fluid" src="images/nextbyte.png" style="max-width: 67%;" alt="NexByte">
                           </a>
                        </div>
                        <div class="main-nav">
                           <ul>
                              <li>
                                 <a onclick="location.href = 'index.php';" class="">Home
                                 </a>
                              </li>
                              <li>
                                 <a onclick="location.href = 'about.php';" class="">About Us
                                 </a>
                              </li>
                              <li>
                                 <a onclick="location.href = 'contact.php';" class="">Contact Us
                                 </a>
                              </li>
                              <li>
                                 <a onclick="location.href = 'services.php';" class="">Services
                                 </a>
                              </li>
                              <li>
                                 <a onclick="location.href = 'portfolio.php';" class="">Portfolio
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="hem-nav">
                           <div class="hem">
                              <div id="hamburger" onclick="this.classList.toggle('open');" class="">
                                 <svg viewBox="0 0 100 100">
                                    <path fill="#307cf2" class="line line1"
                                       d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                    <path fill="#307cf2" class="line line2" d="M 20,50 H 80" />
                                    <path fill="#307cf2" class="line line3"
                                       d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- hamburger menu -->
            <div class="overlay" id="overlay">
               <nav class="overlay-menu">
                  <div class="splash">
                     <div class="desktop-menu">
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-12">
                                 <div class="ham-menu-inner-bx">
                                    <!-- top bar start  -->
                                    <div class="logo-ham">
                                       <a href="javascript:;">
                                          <img src="images/nextbyte.png" class="img-fluid ham-logo" alt="NexByte" />
                                       </a>
                                    </div>
                                    <!-- top bar end  -->
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12 col-lg-4 mouse-hover pe-0">
                                 <div class="ham-menu-inner-bx">
                                    <!-- middle content start -->
                                    <div class="ham-middle-box">
                                       <ul class="main-ul">
                                          <li class="mu-li callev" data-mainu="ab-us">
                                             <div class="inner-wrap" data-hh="about-us"
                                                onclick="location.href = 'index.php';">
                                                <p>Home</p>
                                             </div>
                                          </li>
                                          <li class="mu-li callev" data-mainu="ir">
                                             <div class="inner-wrap pointer" data-hh="investor-relations"
                                                onclick="location.href = 'about.php';">
                                                <p>About Us</p>
                                             </div>
                                          </li>
                                          <li class="mu-li callev" data-mainu="bd">
                                             <div class="inner-wrap pointer"
                                                onclick="location.href = 'contact.php';">
                                                <p>Contact Us</p>
                                             </div>
                                          </li>
                                          <li class="mu-li callev" data-mainu="bp">
                                             <div class="inner-wrap pointer" data-hh="brands-products"
                                                onclick="location.href = 'services.php';">
                                                <p>Services</p>
                                             </div>
                                          </li>
                                          <li class="mu-li callev" data-mainu="client">
                                             <div class="inner-wrap pointer" data-hh="clients"
                                             onclick="location.href = 'portfolio.php';">
                                                <p>Portfolio</p>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <!-- middle content end -->
                                    <!-- footer start  -->
                                    <div class="ham-footer">
                                    </div>
                                    <!-- footer start  -->
                                 </div>
                              </div>
                              <div class="col-12 col-lg-4 mouse-hover ps-0">

                              </div>
                              <div class="col-12 col-lg-4">
                                 <!--<lottie-player src="images/4.json" class="ham-design" background="transparent" loop-->
                                 <!--   autoplay>-->
                                 <!--</lottie-player>-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mobile-menu">
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-12">
                                 <div class="ham-menu-inner-bx">
                                    <div class="logo-ham">
                                       <a href="javascript:;">
                                          <img src="images/nextbyte.png" class="img-fluid ham-logo" alt="NexByte" />
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="mobile-menu-inner-bx">
                                    <div class="accordion" id="mobile-accordian">
                                       <div class="accordion-item">
                                          <div class="accordion-header" id="headingOne">
                                             <a onclick="location.href = 'index.php';">Home</a>
                                          </div>
                                          <div id="collapseseven" class="accordion-collapse collapse"
                                             data-bs-parent="#mobile-accordian">
                                             <div class="card-body">
                                                <!-- blank -->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <div class="accordion-header" id="headingFive">
                                             <a onclick="location.href = 'about.php';">About Us</a>
                                          </div>
                                          <div id="collapseFive" class="accordion-collapse collapse"
                                             data-bs-parent="#mobile-accordian">
                                             <div class="card-body">
                                                <!-- blank -->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <div class="accordion-header" id="headingSeven">
                                             <a onclick="location.href = 'contact.php';">Contact Us</a>
                                          </div>
                                          <div id="collapseSeven" class="accordion-collapse collapse"
                                             data-bs-parent="#mobile-accordian">
                                             <div class="card-body">
                                                <!-- blank -->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <div class="accordion-header" id="headingeight">
                                             <a onclick="location.href = 'services.php';">Services</a>
                                          </div>
                                          <div id="collapseeight" class="accordion-collapse collapse"
                                             data-bs-parent="#mobile-accordian">
                                             <div class="card-body">

                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <div class="accordion-header" id="headingSix">
                                             <a onclick="location.href = 'portfolio.php';">Portfolio</a>
                                          </div>
                                          <div id="collapseSix" class="accordion-collapse collapse"
                                             data-bs-parent="#mobile-accordian">
                                             <div class="card-body">
                                                <!-- blank -->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </header>