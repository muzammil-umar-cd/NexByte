<html lang="en">

<s>
    <meta Content-Type: text/html; charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Font links -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- CSS links-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- fancybox -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
    <!-- magnific-popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <style>
        .portfolio-section {
            padding: 50px 0;
            background-color: #000;
        }

        .portfolio-section h2 {
            font-size: 28px;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
        }

        .portfolio-menu {
            text-align: center;
        }

        .control {
            background: #000;
            color: #fff;
            padding: 5px 10px;
            border: 1px solid #343a40;
            border-radius: 3px;
            margin: 5px;
            cursor: pointer;
            -webkit-transition: all 05s ease;
            -moz-transition: all 05s ease;
            -ms-transition: all 05s ease;
            -o-transition: all 05s ease;
            transition: all 0.5s ease;
        }

        .control:hover {
            background: #343a40;
        }

        .mixitup-control-active {
            color: #fff;
            background: #343a40;
        }

        .fancybox-container button:focus {
            outline: 0;
            box-shadow: none;
        }

        .portfolio-item {
            padding-top: 30px;
        }

        .pd {
            padding: 0;
            padding: 10px;
        }

        .pd img {
            height: 180px;
            transition: all 0.5s;
        }

        .portfolio-overlay {
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            width: 100%;
            height: 100%;
            text-align: center;
            visibility: hidden;
            transition: all 0.5s;
            transform: scale(0);
        }

        .portfolio-overlay p,
        .portfolio-overlay a {
            position: relative;
            z-index: 4;
        }

        .portfolio-overlay::before {
            content: "";
            width: 0;
            height: 0;
            border-width: 0;
            position: absolute;
            left: 10%;
            top: 10%;
            transition: 50ms height ease 150ms;
            z-index: 3;
        }

        .portfolio-overlay::after {
            content: "";
            width: 0;
            height: 0;
            border-width: 0;
            position: absolute;
            right: 10%;
            bottom: 10%;
            transition: 100ms width ease 200ms;
            z-index: 3;
        }

        .portfolio-item:hover .portfolio-overlay::before {
            width: 80%;
            height: 80%;
            border-top: 1px solid #50977f;
            border-right: 1px solid #50977f;
            transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s;
        }

        .portfolio-item:hover .portfolio-overlay::after {
            width: 80%;
            height: 80%;
            border-bottom: 1px solid #50977f;
            border-left: 1px solid #50977f;
            transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s;
        }

        .portfolio-item li:hover .portfolio-overlay {
            visibility: visible;
            transform: scale(1);
        }

        .portfolio-overlay .category {
            margin-top: 70px;
            margin-bottom: 20px;
            font-size: 16px;
            color: #fff;
            font-weight: 500;
        }

        .portfolio-overlay .magnify-icon {
            height: 40px;
            width: 40px;
            border-radius: 20px;
            background: #50977f;
            margin: 0 5px;
            cursor: pointer;
            display: inline-block;
            transition: all 0.25s;
        }

        .portfolio-overlay .magnify-icon:hover {
            background: #000;
        }

        .portfolio-overlay .magnify-icon p span i {
            font-size: 15px;
            color: #fff;
            line-height: 40px;
            cursor: pointer;
        }

        /*******Responsive media query******/

        /* Extra small devices (portrait phones, less than 576px)*/
    </style>
    </head>

    <body>
        <section class="portfolio-section" id="portfolio">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Project Gallery</h2>
                        <p>Use all the same size pictures :)</p>
                    </div>
                </div>
                <div class="portfolio-menu mt-2 mb-4">
                    <nav class="controls">
                        <button type="button" class="control outline" data-filter="all">All</button>
                        <button type="button" class="control outline" data-filter=".web">Web Design</button>
                        <button type="button" class="control outline" data-filter=".dev">Development</button>
                        <button type="button" class="control outline" data-filter=".wp">WordPress</button>
                    </nav>
                </div>
                <ul class="row portfolio-item">
                    <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix web col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                    <li class="mix wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
                        <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=870&amp;q=80" data-size="1200x600">
                            <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" itemprop="thumbnail" alt="Image description" />                            
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <!-- JS Links -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Mixitup -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js'></script>
        <!-- fancybox -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
        <!-- Fancybox js -->
        <script>
            /*Downloaded from https://www.codeseek.co/ezra_siton/mixitup-fancybox3-JydYqm */
            // 1. querySelector
            var containerEl = document.querySelector(".portfolio-item");
            // 2. Passing the configuration object inline
            //https://www.kunkalabs.com/mixitup/docs/configuration-object/
            var mixer = mixitup(containerEl, {
                animation: {
                    effects: "fade translateZ(-100px)",
                    effectsIn: "fade translateY(-100%)",
                    easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
                }
            });
            // fancybox insilaze & options //
            $("[data-fancybox]").fancybox({
                loop: true,
                hash: true,
                transitionEffect: "slide",
                /* zoom VS next////////////////////
                clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
                clickContent: function(current, event) {
                    return current.type === "image" ? "next" : false;
                }
            });
        </script>
    </body>

</html>