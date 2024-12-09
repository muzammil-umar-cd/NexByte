<?php include('includes/inner-header.php'); ?>

<title>Contact Us - NexByte</title>

<section class="main-banner-inn">
    <!-- <lottie-player src="images/about-banner.json" class="design-inn" background="transparent" loop autoplay>
    </lottie-player> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-7 col-md-6 animate__animated animate__slow" data-scroll
                data-scroll-position="top" data-scroll-repeat="true" data-scroll-class="animate__fadeInUp">
                <h1 data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-repeat="true"
                    data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">
                    <span>Contact Us</span>
                    <!-- <span class="banner-text-wrap">
                  <span data-scroll data-scroll-speed="1" data-scroll-position="top" data-scroll-repeat="true"
                     data-scroll-class="animate__fadeInUp" class="animate__animated animate__slow">we are
                     reimagining the way business is done and product is consumed. we have committed ourselves
                     to transforming business into an experience driven by data, technology, creativity and
                     innovation.
                  </span>
               </span> -->
                </h1>
            </div>
        </div>
    </div>
</section>
<style>
    .footer-container-custom {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 2rem;
        background-color: #fafafa;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form {
        width: 100%;
        max-width: 820px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        overflow: hidden;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .contact-form {
        background-color: #000;
        position: relative;
    }

    .circle {
        border-radius: 50%;
        background: radial-gradient(at top right, #858886 10%, #5c605e 35%, #474848 72%);
        position: absolute;
    }

    .circle.one {
        width: 130px;
        height: 130px;
        top: 130px;
        right: -40px;
    }

    .circle.two {
        width: 80px;
        height: 80px;
        top: 10px;
        right: 30px;
    }

    .contact-form:before {
        content: "";
        position: absolute;
        width: 26px;
        height: 26px;
        background-color: #000;
        transform: rotate(45deg);
        top: 50px;
        left: -13px;
    }

    form {
        padding: 2.3rem 2.2rem;
        z-index: 10;
        overflow: hidden;
        position: relative;
    }

    .footer-title {
        color: #fff;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
        margin-bottom: 0.7rem;
    }

    .input-footer-container-custom {
        position: relative;
        margin: 1rem 0;
    }

    .footer-input {
        width: 100%;
        outline: none;
        border: 2px solid #fafafa;
        background: none;
        padding: 0.6rem 1.2rem;
        color: #fff;
        font-weight: 500;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
        border-radius: 5px;
        transition: 0.3s;
    }

    textarea.footer-input {
        padding: 0.8rem 1.2rem;
        min-height: 150px;
        border-radius: 5px;
        resize: none;
        overflow-y: auto;
    }

    .input-footer-container-custom label {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        padding: 0 0.4rem;
        color: #fafafa;
        font-size: 0.9rem;
        font-weight: 400;
        pointer-events: none;
        z-index: 1000;
        transition: 0.5s;
    }

    .input-footer-container-custom.textarea label {
        top: 1rem;
        transform: translateY(0);
    }

    .btn {
        padding: 0.6rem 1.3rem;
        background-color: #fff;
        border: 2px solid #fafafa;
        font-size: 0.95rem;
        color: #307cf2;
        line-height: 1;
        border-radius: 5px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        margin: 0;
        width: 100%;
    }

    .btn:hover {
        background-color: transparent;
        color: #fff;
    }

    .input-footer-container-custom span {
        position: absolute;
        top: 0;
        left: 25px;
        transform: translateY(-50%);
        font-size: 0.8rem;
        padding: 0 0.4rem;
        color: transparent;
        pointer-events: none;
        z-index: 500;
    }

    .input-footer-container-custom span:before,
    .input-footer-container-custom span:after {
        content: "";
        position: absolute;
        width: 10%;
        opacity: 0;
        transition: 0.3s;
        height: 5px;
        background-color: #307cf2;
        top: 50%;
        transform: translateY(-50%);
    }

    .input-footer-container-custom span:before {
        left: 50%;
    }

    .input-footer-container-custom span:after {
        right: 50%;
    }

    .input-footer-container-custom.focus label {
        top: 0;
        transform: translateY(-50%);
        left: 25px;
        font-size: 0.8rem;
    }

    .input-footer-container-custom.focus span:before,
    .input-footer-container-custom.focus span:after {
        width: 50%;
        opacity: 1;
    }

    .contact-info {
        padding: 2.3rem 2.2rem;
        position: relative;
    }

    .contact-info .footer-title {
        color: #307cf2;
        line-height: 31px;
    }

    .text {
        color: #333;
        margin: 1.5rem 0 2rem 0;
    }

    .information {
        display: flex;
        margin: 0.7rem 0;
        align-items: center;
        font-size: 0.95rem;
    }

    .information p {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #555 !important;
    }

    .information i {
        color: #307cf2;
    }

    .icon {
        width: 28px;
        margin-right: 0.7rem;
    }

    .footer-social-media {
        padding: 2rem 0 0 0;
    }

    .footer-social-media p {
        color: #333;
    }

    .social-icons {
        display: flex;
        margin-top: 0.5rem;
    }

    .social-icons a {
        width: 35px;
        height: 35px;
        border-radius: 5px;
        background: #307cf2;
        color: #fff;
        text-align: center;
        line-height: 35px;
        margin-right: 0.5rem;
        transition: 0.3s;
    }

    .social-icons a:hover {
        transform: scale(1.05);
    }

    .contact-info:before {
        content: "";
        position: absolute;
        width: 110px;
        height: 100px;
        border: 22px solid #307cf2;
        border-radius: 50%;
        bottom: -77px;
        right: 50px;
        opacity: 0.3;
    }

    .square {
        position: absolute;
        height: 400px;
        top: 50%;
        left: 50%;
        transform: translate(181%, 11%);
        opacity: 0.2;
    }

    .big-circle {
        width: 100%;
    }

    @media (max-width: 850px) {
        .form {
            grid-template-columns: 1fr;
        }

        .contact-info:before {
            bottom: initial;
            top: -75px;
            right: 65px;
            transform: scale(0.95);
        }

        .contact-form:before {
            top: -13px;
            left: initial;
            right: 70px;
        }

        .square {
            transform: translate(140%, 43%);
            height: 350px;
        }

        .big-circle {
            display: none;
        }

        .text {
            margin: 1rem 0 1.5rem 0;
        }

        .footer-social-media {
            padding: 1.5rem 0 0 0;
        }
    }

    @media (max-width: 480px) {
        .footer-container-custom {
            padding: 1.5rem;
        }

        .contact-info:before {
            display: none;
        }

        .square,
        .big-circle {
            display: none;
        }

        form,
        .contact-info {
            padding: 1.7rem 1.6rem;
        }

        .text,
        .information,
        .footer-social-media p {
            font-size: 0.8rem;
        }

        .footer-title {
            font-size: 1.15rem;
        }

        .social-icons a {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }

        .icon {
            width: 23px;
        }

        .footer-input {
            padding: 0.45rem 1.2rem;
            
        }

        .btn {
            padding: 0.45rem 1.2rem;
        }
    }
</style>

<section>
    <div class="footer-container-custom">
        <span class="big-circle">
            <lottie-player src="images/contact.json" background="transparent" loop autoplay>
            </lottie-player>
        </span>
        <img src="img/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="footer-title">
                    Connect with us today to transform your Business
                </h3>

                <div class="info">
                    <div class="information">
                        <i class="fa fa-map-marker"></i> &nbsp &nbsp

                        <p>Banglow <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"># 36-E-3,
                           Block-6,</span> PECHS, Karachi</p>
                    </div>
                    <div class="information">
                        <i class="fas fa-envelope"></i> &nbsp &nbsp
                        <p>info<span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">@</span>nexbyte.com</p>
                    </div>
                    <div class="information">
                        <i class="fas fa-phone"></i>&nbsp &nbsp
                        <p><span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> 021-34541397</span></p>
                    </div>
                </div>

                <div class="footer-social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fa fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-brands fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-brands fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="javascript:;" autocomplete="off">
                    <h3 class="footer-title">Contact us</h3>
                    <div class="input-footer-container-custom">
                        <input type="text" name="name" class="footer-input" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-footer-container-custom">
                        <input type="email" name="email" class="footer-input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-footer-container-custom">
                        <input type="tel" name="phone" class="footer-input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-footer-container-custom textarea">
                        <textarea name="message" class="footer-input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn" />
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('includes/inner-footer.php'); ?>