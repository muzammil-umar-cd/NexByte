<script>
   const inputs = document.querySelectorAll(".footer-input");

   function focusFunc() {
      let parent = this.parentNode;
      parent.classList.add("focus");
   }

   function blurFunc() {
      let parent = this.parentNode;
      if (this.value == "") {
         parent.classList.remove("focus");
      }
   }

   inputs.forEach((input) => {
      input.addEventListener("focus", focusFunc);
      input.addEventListener("blur", blurFunc);
   });
</script>
<!-- footer starts -->
<style>
   ul {
      margin: 0px;
      padding: 0px;
   }

   .footer-section {
      background: #151414;
      position: relative;
   }

   .footer-cta {
      border-bottom: 1px solid #373636;
   }

   .single-cta i {
      color: #307cf2;
      font-size: 30px;
      float: left;
      margin-top: 8px;
   }

   .cta-text {
      padding-left: 15px;
      display: inline-block;
   }

   .cta-text h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 2px;
   }

   .cta-text span {
      color: #757575;
      font-size: 15px;
   }

   .footer-content {
      position: relative;
      z-index: 2;
   }

   .footer-pattern img {
      position: absolute;
      top: 0;
      left: 0;
      height: 330px;
      background-size: cover;
      background-position: 100% 100%;
   }

   .footer-logo {
      margin-bottom: 10px;
      margin-top: -40px;
   }

   .footer-logo img {
      max-width: 80%;
   }

   .footer-text ul li {
      width: 100% !important;
   }

   .footer-text ul li a {
      text-transform: none;
   }

   .footer-text p {
      margin-bottom: 14px;
      font-size: 14px;
      color: #7e7e7e;
      line-height: 28px;
   }

   @media (max-width:600px) {
      ul.social3d {
         transform: scale(.6);
         margin-left: -74px !important;
         margin-top: -17px !important;
         margin-bottom: 10px !important;
      }
   }

   @media (min-width:601px) and (max-width:700px) {
      ul.social3d {
         transform: scale(.7)
      }
   }

   @media (min-width:701px) and (max-width:800px) {
      ul.social3d {
         transform: scale(.8)
      }
   }

   ul.social3d {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex
   }

   ul.social3d li {
      margin: 0 20px
   }

   ul.social3d li a .fa {
      font-size: 32px;
      color: #555;
      line-height: 46px;
      transition: .5s
   }

   ul.social3d li a {
      position: relative;
      display: block;
      width: 47px;
      height: 44px;
      background: #fff;
      text-align: center;
      transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(0, 0);
      transition: .5s;
      box-shadow: -20px 20px 10px rgba(0, 0, 0, .5)
   }

   ul.social3d li a::before {
      content: "";
      position: absolute;
      top: 10px;
      left: -20px;
      height: 100%;
      width: 20px;
      background: #b2b2b2;
      transition: .5s;
      transform: rotate(0) skewY(-45deg)
   }

   ul.social3d li a::after {
      content: "";
      position: absolute;
      bottom: -20px;
      left: -10px;
      height: 20px;
      width: 100%;
      background: #e5e5e5;
      transition: .5s;
      transform: rotate(0) skewX(-45deg)
   }

   ul.social3d li a:hover {
      transform: perspective(1000px) rotate(-30deg) skew(25deg) translate(20px, -20px);
      box-shadow: -50px 50px 50px rgba(0, 0, 0, .5)
   }

   ul.social3d li:hover .fa {
      color: #fff
   }

   ul.social3d li:hover:nth-child(1) a {
      background-color: #3b5999
   }

   ul.social3d li:hover:nth-child(1) a::before {
      background-color: #2f477a
   }

   ul.social3d li:hover:nth-child(1) a::after {
      background-color: #4e69a3
   }

   ul.social3d li:hover:nth-child(2) a {
      background-color: #55acee
   }

   ul.social3d li:hover:nth-child(2) a::before {
      background-color: #4489be
   }

   ul.social3d li:hover:nth-child(2) a::after {
      background-color: #66b4ef
   }

   ul.social3d li:hover:nth-child(3) a {
      background-color: #dd4b39
   }

   ul.social3d li:hover:nth-child(3) a::before {
      background-color: #b03c2d
   }

   ul.social3d li:hover:nth-child(3) a::after {
      background-color: #e05d4c
   }

   ul.social3d li:hover:nth-child(4) a {
      background-color: #0077b5
   }

   ul.social3d li:hover:nth-child(4) a::before {
      background-color: #005f90
   }

   ul.social3d li:hover:nth-child(4) a::after {
      background-color: #1984bc
   }

   ul.social3d li:hover:nth-child(5) a {
      background-color: #e4405f
   }

   ul.social3d li:hover:nth-child(5) a::before {
      background-color: #b6334c
   }

   ul.social3d li:hover:nth-child(5) a::after {
      background-color: #e6536f
   }

   .footer-social-icon span {
      color: #fff;
      display: block;
      font-size: 20px;
      font-weight: 700;
      font-family: "Poppins", sans-serif;
      margin-bottom: 20px;
   }

   .facebook-bg {
      background: #3b5998;
   }

   .twitter-bg {
      background: #55acee;
   }

   .google-bg {
      background: #dd4b39;
   }

   .footer-widget-heading h3 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 40px;
      position: relative;
   }

   .footer-widget-heading h3::before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -15px;
      height: 2px;
      width: 50px;
      background: #307cf2;
   }

   .footer-link ul {
      display: grid;
   }

   .footer-widget ul li {
      display: inline-block;
      float: left;
      width: 50%;
      margin-bottom: 12px;
   }

   .footer-widget ul li a:hover {
      color: #307cf2;
   }

   .footer-widget ul li a {
      color: #878787;
      text-transform: capitalize;
      text-decoration: none;
   }

   .subscribe-form {
      position: relative;
      overflow: hidden;
   }

   .subscribe-form input {
      width: 100%;
      padding: 14px 28px;
      background: #2e2e2e;
      border: 1px solid #2e2e2e;
      color: #fff;
   }

   .subscribe-form button {
      position: absolute;
      right: 0;
      background: #307cf2;
      padding: 13px 20px;
      border: 1px solid #307cf2;
      top: 0;
   }

   .subscribe-form button i {
      color: #fff;
      font-size: 22px;
      transform: rotate(-6deg);
   }

   .copyright-area {
      background: #202020;
      padding: 25px 0;
   }

   .copyright-text p {
      margin: 0;
      font-size: 14px;
      color: #878787;
   }

   .copyright-text p a {
      color: #307cf2;
   }

   .footer-menu li {
      display: inline-block;
      margin-left: 20px;
   }

   .footer-menu li:hover a {
      color: #307cf2;
   }

   .footer-menu li a {
      font-size: 14px;
      color: #307cf2 !important;
   }
</style>
<div class="cus-hr m-0"></div>
<!-- footer section start -->
<footer class="footer-section">
   <div class="container">
      <div class="footer-content pt-5 pb-5">
         <div class="row">
            <div class="col-xl-4 col-lg-4 mb-50">
               <div class="footer-widget">
                  <div class="footer-logo">
                     <a href="javascript:;" onclick="location.href = 'index.php';"><img src="images/nextbyte.png" class="img-fluid" alt="logo"></a>
                  </div>
                  <div class="footer-text">
                     <p>NexByte is redefining digital solutions. Be it digital marketing, website development, or  </p>
                  </div>
                  <div class="footer-social-icon">
                     <span>Follow us</span>
                     <ul class="social3d">
                        <li><a href=""><i class="fa fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href=""><i class="fa fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
               <div class="footer-widget footer-link">
                  <div class="footer-widget-heading">
                     <h3>Useful Links</h3>
                  </div>
                  <ul>
                     <li><a href="javascript:;" onclick="location.href = 'index.php';">Home</a></li>
                     <li><a href="javascript:;" onclick="location.href = 'about.php';">about Us</a></li>
                     <li><a href="javascript:;" onclick="location.href = 'services.php';">services</a></li>
                     <li><a href="javascript:;" onclick="location.href = 'portfolio.php';">portfolio</a></li>
                     <li><a href="javascript:;" onclick="location.href = 'contact.php';">Contact us</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
               <div class="footer-widget">
                  <div class="footer-widget-heading">
                     <h3>Contact</h3>
                  </div>
                  <div class="footer-text mb-25">
                     <ul>
                        <li>
                           <a href="#"><i class="fa fa-map-marker" style="color: #307cf2;"></i> Office <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Banglow # 36-E-3,
                                 Block-6,</span> PECHS, Karachi</a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-phone" style="color: #307cf2;"></i> <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> 021-34541397</span></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-envelope-open" style="color: #307cf2;"></i> info<span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">@</span>nexbyte.com</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
               <div class="copyright-text">
                  <p>Copyright &copy; <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">2024</span>, All Right Reserved <a href="https://nexbyte.com">NexByte</a></p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
               <div class="footer-menu">
                  <ul>
                     <li><a class="" onclick="location.href = 'index.php';">Home</a></li>
                     <li><a class="" onclick="location.href = 'terms-conditions.php';">Terms & Conditions</a></li>
                     <li><a class="" onclick="location.href = 'privacy-policy.php';">Privacy Policy</a></li>
                     <li><a class="" onclick="location.href = 'contact.php';">Contact</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- footer ends -->
</main>
</div>


<!-- JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/swiper-bundle.min.js" type="text/javascript"></script>

<script src="https://unpkg.com/@barba/core@2.9.7/dist/barba.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
<script>
   var locoScroll = '';
   var IntrSwiper = null;
</script>
<script src="js/app.js?v=1.69" type="text/javascript"></script>
<script src="js/animations.js" type="text/javascript"></script>
<script src="js/custom.js?v=1.69" type="text/javascript"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@1.5.6/dist/lottie-player.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
   integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
   crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>
      $(document).ready(function () {
         function toggleHamburger() {
            if (window.innerWidth <= 500) {
                  $('#hamburger').on('click', function () {
                     if ($(this).hasClass('open')) {
                        $('#overlay').css('transform', 'translate(0px)');
                     } else {
                        $('#overlay').css('transform', 'translate(434px)');
                     }
                  });
            }
         }

         // Run on load
         toggleHamburger();

         // Reapply on window resize
         $(window).resize(function () {
            toggleHamburger();
         });
      });

   </script>
<script>
   $(document).ready(function() {
      // Get the current page path
      var currentPage = window.location.pathname.split("/").pop();

      // Loop through each link and add the 'active' class if the onclick URL matches the current page
      $('.main-nav ul li a').each(function() {
         var onclickUrl = $(this).attr('onclick').match(/location\.href\s*=\s*'([^']+)'/)[1];

         if (onclickUrl === currentPage) {
            $(this).addClass('active');
         }
      });
   });
</script>
<script>
   // $('.main-nav ul li a').on('click', function() {
   //    var linkPath = $(this).attr('href');
   //    $('.main-nav ul li a').removeClass('active-remain active');
   //    $(this).addClass('active');
   // })


   $(function() {
      var pgurl = window.location.href.substr(window.location.href
         .lastIndexOf("/") + 1);
      $(".main-nav ul li a").each(function() {
         if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
            $(this).addClass("active");
      })
   });
</script>

<script>
   $(".greeting-close").click(function() {
      $(".greeting-wrapper").hide();
   });
</script>

<script>
   function yourFunction() {

      if ($(".homeHeader").css('top') === '-111px') {
         if (window.pageXOffset == 0) {
            gsap.to(".homeHeader", {
               duration: 0.3,
               ease: Linear.easeOut,
               css: {
                  top: "0px"
               }
            });
         }
      }
   }
   setInterval(yourFunction, 1000);
</script>
<script>
   const items = document.querySelectorAll('.accordion-service button');

   function toggleAccordion() {
      const itemToggle = this.getAttribute('aria-expanded');

      for (i = 0; i < items.length; i++) {
         items[i].setAttribute('aria-expanded', 'false');
      }

      if (itemToggle == 'false') {
         this.setAttribute('aria-expanded', 'true');
      }
   }

   items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>
<script>
   // Panel 1
   const panels = document.querySelectorAll(".panel-1");

   function handleClickPanel(event) {
      removeActivePanel();
      event.currentTarget.classList.add("active");
   }

   panels.forEach(panel => {
      panel.addEventListener("click", handleClickPanel);
   });

   function removeActivePanel() {
      panels.forEach(panel => {
         panel.classList.remove("active");
      });
   }

   // Panel 2
   const panels2 = document.querySelectorAll(".panel-2");

   function handleClickPanel2(event) {
      removeActivePanel2();
      event.currentTarget.classList.add("active");
   }

   panels2.forEach(panel2 => {
      panel2.addEventListener("click", handleClickPanel2);
   });

   function removeActivePanel2() {
      panels2.forEach(panel2 => {
         panel2.classList.remove("active");
      });
   }

   // Panel 3
   const panels3 = document.querySelectorAll(".panel-3");

   function handleClickPanel3(event) {
      removeActivePanel3();
      event.currentTarget.classList.add("active");
   }

   panels3.forEach(panel3 => {
      panel3.addEventListener("click", handleClickPanel3);
   });

   function removeActivePanel3() {
      panels3.forEach(panel3 => {
         panel3.classList.remove("active");
      });
   }
</script>
<script>
   document.addEventListener("DOMContentLoaded", () => {
      // Select all panel-1 elements
      const panels1 = Array.from(document.querySelectorAll(".panel-1"));

      // Function to remove 'active' class from all panel-1 elements
      function removeActivePanel1() {
         panels1.forEach(panel => {
            panel.classList.remove("active");
         });
      }

      // Function to randomly activate either the 2nd or 3rd panel-1 element
      function activateRandomPanel1() {
         const validPanels = panels1.slice(1, 3); // Get panels 2 and 3 (index 1 and 2)
         if (validPanels.length > 0) {
            const randomIndex = Math.floor(Math.random() * validPanels.length);
            removeActivePanel1();
            validPanels[randomIndex].classList.add("active");
         }
      }

      // Function to handle scroll events
      function toggleOnScroll1(entries, observer) {
         entries.forEach(entry => {
            if (entry.isIntersecting) {
               activateRandomPanel1();
               observer.unobserve(entry.target); // Stop observing after activation
            }
         });
      }

      // Create the IntersectionObserver
      const observerOptions = {
         threshold: 0.5 // Trigger when 50% of the panel is in view
      };

      const observer1 = new IntersectionObserver(toggleOnScroll1, observerOptions);

      // Start observing each panel-1 element
      panels1.forEach(panel => observer1.observe(panel));
   });
</script>

<script>
   document.addEventListener("DOMContentLoaded", () => {
      // Select all panel-2 elements
      const panels2 = Array.from(document.querySelectorAll(".panel-2"));

      // Function to remove 'active' class from all panel-2 elements
      function removeActivePanel2() {
         panels2.forEach(panel => {
            panel.classList.remove("active");
         });
      }

      // Function to randomly activate either the 2nd or 3rd panel-2 element
      function activateRandomPanel2() {
         const validPanels = panels2.slice(1, 3); // Get panels 2 and 3 (index 1 and 2)
         if (validPanels.length > 0) {
            const randomIndex = Math.floor(Math.random() * validPanels.length);
            removeActivePanel2();
            validPanels[randomIndex].classList.add("active");
         }
      }

      // Function to handle scroll events
      function toggleOnScroll2(entries, observer) {
         entries.forEach(entry => {
            if (entry.isIntersecting) {
               activateRandomPanel2();
               observer.unobserve(entry.target); // Stop observing after activation
            }
         });
      }

      // Create the IntersectionObserver
      const observerOptions = {
         threshold: 0.5 // Trigger when 50% of the panel is in view
      };

      const observer2 = new IntersectionObserver(toggleOnScroll2, observerOptions);

      // Start observing each panel-2 element
      panels2.forEach(panel => observer2.observe(panel));
   });
</script>

<script>
   document.addEventListener("DOMContentLoaded", () => {
      // Select all panel-3 elements
      const panels3 = Array.from(document.querySelectorAll(".panel-3"));

      // Function to remove 'active' class from all panel-3 elements
      function removeActivePanel3() {
         panels3.forEach(panel => {
            panel.classList.remove("active");
         });
      }

      // Function to randomly activate either the 2nd or 3rd panel-3 element
      function activateRandomPanel3() {
         const validPanels = panels3.slice(1, 3); // Get panels 2 and 3 (index 1 and 2)
         if (validPanels.length > 0) {
            const randomIndex = Math.floor(Math.random() * validPanels.length);
            removeActivePanel3();
            validPanels[randomIndex].classList.add("active");
         }
      }

      // Function to handle scroll events
      function toggleOnScroll3(entries, observer) {
         entries.forEach(entry => {
            if (entry.isIntersecting) {
               activateRandomPanel3();
               observer.unobserve(entry.target); // Stop observing after activation
            }
         });
      }

      // Create the IntersectionObserver
      const observerOptions = {
         threshold: 0.5 // Trigger when 50% of the panel is in view
      };

      const observer3 = new IntersectionObserver(toggleOnScroll3, observerOptions);

      // Start observing each panel-3 element
      panels3.forEach(panel => observer3.observe(panel));
   });
</script>
</body>

</html>