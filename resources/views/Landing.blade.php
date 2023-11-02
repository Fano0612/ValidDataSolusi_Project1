<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVP Club</title>
    <link rel="icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/5eac426f629a1c2ac6cdb029/ec18de8f-1c31-43c4-a635-d35729fa9f26/Points.-Grey.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .content {
            z-index: 0;
            position: relative;
        }
    </style>


</head>

<body>

    <div id="video-background">
        <video autoplay muted loop>
            <source src="{{asset('storage/Media/GreenBG.mp4')}}" type="video/mp4">

        </video>
    </div>




    <div class="mx-auto p-5" style="z-index: 2;">
        <nav class="rounded navbar navbar-expand-lg bg-body-tertiary bg-black">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand Logo" href="#">
                    <img class="rounded" src="https://images.squarespace-cdn.com/content/v1/5eac426f629a1c2ac6cdb029/ec18de8f-1c31-43c4-a635-d35729fa9f26/Points.-Grey.png" alt="" style="height:50px; width:auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-text="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promotion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <div class="rounded-image" style="position: relative; background-color: black; margin-left:20px; border-radius: 50%; width:70px; height:70px;">
                    <img class="rounded" src="https://cdn-icons-png.flaticon.com/512/4086/4086679.png" alt="" style="margin-top: 10px; margin-left: 10px; height: 50px; width: auto; cursor: pointer;">
                    <div class="dropdown-menu" style="display: none; position: absolute; background-color: #D0E7D2; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); z-index: 1; right: 0; top: 100%;">
                        <div class="dropdown-item"><a href="#" style="color:black">MVPAccount</a></div>
                        <div class="dropdown-item"><a href="#" style="color:black">Sign Out</a></div>
                    </div>
                </div>







            </div>

        </nav>

    </div>

    <div class="arrow bounce">
        <h2 class="h2arrow">Swipe down to reveal</h2>
        <a class="fa fa-arrow-down fa-2x" href="#"></a>
    </div>

    <section class="s-content show-once">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Good_Food_Display_-_NCI_Visuals_Online.jpg" class="d-block w-100" style="height:400px; object-fit: cover;" alt="">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://images.inc.com/uploaded_files/image/1920x1080/getty_522735456_249841.jpg" class="d-block w-100" style="height:400px; object-fit: cover;" alt="">
                </div>
                <div class="carousel-item">
                    <img src="https://seleritysas.com/wp-content/uploads/2020/10/shutterstock_1149399851.jpg" class="d-block w-100" style="height:400px; object-fit: cover;" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="center-container">
            <div class="rectangle">
                <div class="content">
                    <img src="https://cdn-icons-png.flaticon.com/512/3757/3757881.png" style="width:80px; height:70px; margin-left:20px; margin-top:40px;">
                    <h3>10.000 Points</h3>
                    <img class="c1" src="https://cdn-icons-png.flaticon.com/512/2037/2037257.png" style="width:80px; height:80px; margin-left:350px; margin-top:10px;">
                    <img class="c2" src="https://cdn-icons-png.flaticon.com/512/5582/5582334.png" style="width:70px; height:70px; margin-left:40px; margin-top:25px;">
                    <img class="c3" src="https://cdn-icons-png.flaticon.com/512/6364/6364408.png" style="width:70px; height:70px; margin-left:40px; margin-top:25px;">
                </div>
                <div class="text">
                    <p style="margin-left:663px">Redeem</p>
                    <p style="margin-left:47px">History</p>
                    <p style="margin-left:63px">More</p>
                </div>
            </div>
        </div>
    </section>

    <section class="s-content show-once">
    <div class="bg-image" style="height: 1000px;">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center text-center">

                    <div class="col-md-3 mb-1 mb-md-3">
                        <div class="card mask-custom py-5 text-white">
                            <div class="card-body">
                                <img class="rounded-circle shadow-2-strong mb-5" src="https://img.freepik.com/premium-vector/coupon-icon-coupon-discount-promotion-sale-shopping-voucher-money-saving-shopping-concept_97458-1054.jpg" alt="avatar" style="width: 100px; height: 90px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
                                <h5 class="mb-4" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="300">
                                    MVPCoupons
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-1 mb-md-0">
                        <div class="card mask-custom py-5 text-white">
                            <div class="card-body">
                                <img class="rounded-circle shadow-2-strong mb-5" src="https://cdn-icons-png.flaticon.com/512/2558/2558089.png" alt="avatar" style="width: 100px; height: 90px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
                                <h5 class="mb-4" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="300">
                                    MVPTenants
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-1 mb-0">
                        <div class="card mask-custom py-5 text-white">
                            <div class="card-body">
                                <img class="rounded-circle shadow-2-strong mb-5" src="https://cdn-icons-png.flaticon.com/512/2230/2230606.png" alt="avatar" style="width: 100px; height: 90px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
                                <h5 class="mb-4" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="300">
                                    MVPMarket
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-1 mb-md-3 mt-2">
                        <div class="card mask-custom py-5 text-white">
                            <div class="card-body">
                                <img class="rounded-circle shadow-2-strong mb-5" src="https://cdn-icons-png.flaticon.com/512/6008/6008427.png" alt="avatar" style="width: 100px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
                                <h5 class="mb-4" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="300">
                                    MVPPlay
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-1 mb-md-3 mt-2">
                        <div class="card mask-custom py-5 text-white">
                            <div class="card-body">
                                <img class="rounded-circle shadow-2-strong mb-5" src="https://cdn-icons-png.flaticon.com/512/1649/1649577.png" alt="avatar" style="width: 100px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
                                <h5 class="mb-4" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="300">
                                    MVPBills
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-1 mb-md-3 mt-2">
                        <div class="card mask-custom py-5 text-white">
                            <div class="card-body">
                                <img class="rounded-circle shadow-2-strong mb-5" src="https://icons.veryicon.com/png/o/miscellaneous/common-icons-6/more-106.png" alt="avatar" style="width: 100px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
                                <h5 class="mb-4" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="300">
                                    More
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="s-content show-once" style="background-color:antiquewhite;">
        <h1 class="s-title">Introduction</h1>
        <div class=container2>
            <p class="s-paragraph">Hi, I'm Yonathan Fanuel Mulyadi, but you can call me Fano, Undergraduate Computer Science's student at Brawijaya University. I love to code and dedicate every program I make to ease things people do, with Faith, Hope, and Love as my life motto. I like new challenges and always trying new things, a hard-working person, and very enthusiastic about everything that I do. I code for approximately 3 years (2023), with several programming languages that I mastered, I also mastered Figma for UI/UX Design and Adobe Premiere Pro for video editing. My field of expertise will be Front-end Development, Web Development, and UI/UX Designing.
            </p>
            <img class="s-img" src="../images/Me.jpeg" alt="">
        </div>
        <div class="separatorcolor1"></div>
    </section>


    <button class="back-to-top" onclick="scrollToTop()">Back to the Top</button>

<button class="back-to-bottom" onclick="scrollToBottom()">Back to the Bottom</button>



    <footer>
        <div class="footer-wrap">
            <div class="container first_class">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>BE THE FIRST TO KNOW</h3>
                        <p>Get all the latest information on Triedge Services, Events, Jobs
                            and Fairs. Sign up for our newsletter today.</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <form class="newsletter">
                            <input type="text" placeholder="Email Address">
                            <button class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="col-md-12">
                            <div class="standard_social_links">
                                <div>
                                    <li class="round-btn btn-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>

                                    </li>
                                    <li class="round-btn btn-linkedin"><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>

                                    </li>
                                    <li class="round-btn btn-twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>

                                    </li>
                                    <li class="round-btn btn-instagram"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>

                                    </li>
                                    <li class="round-btn btn-whatsapp"><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>

                                    </li>
                                    <li class="round-btn btn-envelop"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>

                                    </li>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <h3 style="text-align: right;">Stay Connected</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second_class">
                <div class="container second_class_bdr">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">

                            <div class="footer-logo"><img src="https://images.squarespace-cdn.com/content/v1/5eac426f629a1c2ac6cdb029/ec18de8f-1c31-43c4-a635-d35729fa9f26/Points.-Grey.png" alt="logo" style="height:50px; width:auto;">
                            </div>
                            <p>MVP Club is a website that provides users with the opportunity to redeem their accumulated points for a variety of enticing promotions.</p>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3>Quick LInks</h3>
                            <ul class="footer-links">
                                <li><a href="#">Home</a>
                                </li>
                                <li><a href="#">About us</a>
                                </li>
                                <li><a href="#">Triedge Partners</a>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                                <li><a href="#" target="_blank">Terms &amp; Conditions</a>
                                </li>
                                <li><a href="#" target="_blank">Privacy Policy</a>
                                </li>
                                <li><a href="#">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3>OUR SERVICES</h3>
                            <ul class="footer-category">
                                <li><a href="#">Fresher Jobs</a>
                                </li>
                                <li><a href="#">InternEdge - Internships &amp; Projects </a>
                                </li>
                                <li><a href="#">Resume Edge - Resume Writing Services</a>
                                </li>
                                <li><a href="#">Readers Galleria - Curated Library</a>
                                </li>
                                <li><a href="#">Trideus - Campus Ambassadors</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3>triedge Events</h3>
                            <ul class="footer-links">
                                <li><a href="#">Triedge Events</a>
                                </li>

                                <li><a href="#">Jobs &AMP; Internship Fair 2019</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">

                <div class="container-fluid">
                    <div class="copyright"> Copyright 2023 | All Rights Reserved by PT. Valid Data Solusi.</div>
                </div>

            </div>
        </div>

    </footer>






    <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        $(document).ready(function() {

            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 1) {
                    $('.arrow').addClass('fade');
                } else {
                    $('.arrow').removeClass('fade');
                }
            })
        });
    </script>

    <script>
        const image = document.querySelector(".rounded");
        const dropdownMenu = document.querySelector(".dropdown-menu");

        image.addEventListener("click", function() {
            if (dropdownMenu.style.display === "none" || dropdownMenu.style.display === "") {
                dropdownMenu.style.display = "block";
            } else {
                dropdownMenu.style.display = "none";
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            "use strict";
            const preloader = document.querySelector('#preloader');
            if (preloader) {
                window.addEventListener('load', () => {
                    setTimeout(() => {
                        preloader.classList.add('loaded');
                    }, 1000);
                    setTimeout(() => {
                        preloader.remove();
                    }, 2000);
                });
            }
        });

        window.onload = function() {
            document.body.classList.add('fade-in');
        };

        function toggleContent() {
            var content = document.querySelector('.head-img-content');
            content.classList.toggle('show');
        }

        $(window).scroll(function() {
            $('.show-once').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                if (elementPos < topOfWindow + $(window).height() - 50) {
                    $(this).addClass("show");
                } else {
                    $(this).removeClass("show");
                }
            });
        });


        var header = document.querySelector('.Mainheader');
        var sticky = header.offsetTop;
        window.onscroll = function() {
            if (window.pageYOffset > sticky) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        };



    </script>
        <script>
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
        function scrollToBottom() {
            document.querySelector('.footer').scrollIntoView({ behavior: 'smooth' });
        }
        window.addEventListener('scroll', function() {
            var buttons = document.querySelectorAll('.back-to-top, .back-to-bottom');
            
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].style.right = window.scrollY > 100 ? '20px' : '-100px';
            }
        });
    </script>


</body>

</html>