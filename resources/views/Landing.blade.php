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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .content {
            z-index: 0;
            position: relative;
        }
    </style>


</head>

<body>
    <a id="sttbutton"></a>

    <div id="video-background">
        <video autoplay muted loop>
            <source src="{{asset('storage/Media/GreenBG.mp4')}}" type="video/mp4">

        </video>
    </div>




    <div class="mx-auto p-5" style=" z-index: 2;">
        <nav class="rounded navbar navbar-expand-lg bg-body-tertiary bg-black">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand Logo" href="{{route ('Landing')}}">
                    <img class="rounded" src="https://images.squarespace-cdn.com/content/v1/5eac426f629a1c2ac6cdb029/ec18de8f-1c31-43c4-a635-d35729fa9f26/Points.-Grey.png" alt="" style="height:50px; width:auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route ('Landing')}}" data-text="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route ('Promotion')}}">Promotion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route ('Chat')}}">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route ('Help')}}">Help</a>
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
        <div class="bg-image" style="height: 1000px; margin-bottom:30px;">
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

    <section class="s-content show-once" style="background-color:rgba(255, 255, 255, 0.7)">
        <div class="d-flex align-items-center mb-5">
            <img class="rounded-circle shadow-2-strong mb-5" src="https://cdn-icons-png.flaticon.com/512/2558/2558089.png" alt="avatar" style="width: 100px; height: 90px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
            <h1 style="margin-bottom:50px;">MVPTenants</h1>
        </div>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://yt3.googleusercontent.com/ytc/APkrFKYlycfjFaqBmx0MWs1r3OoZcdde5a1U-ZK32YRnbw=s900-c-k-c0x00ffffff-no-rj" class="d-block w-100" style="height:400px; object-fit: cover; border-radius:50px;" alt="">
                    <div class="carousel-caption d-none d-md-block">

                        <div class="caption-background">
                            <h3>Indomaret</h3>
                            <p>Retail Stores.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://id-test-11.slatic.net/shop/80501fa08cd73fa682e12eb04fbdc8e5.png" class="d-block w-100" style="height:400px; object-fit: cover; border-radius:50px;" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption-background">
                            <h3>SOGO</h3>
                            <p>Department Stores.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://res.cloudinary.com/df2knrwm3/image/upload/v1563932925/ahbdzwpuwtluibsk9j73.png" class="d-block w-100" style="height:400px; object-fit: cover; border-radius:50px;" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="caption-background">
                            <h3>Eraphone</h3>
                            <p>Electronic Stores.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="s-content show-once" style="background-color: rgba(255, 255, 255, 0.7); margin-top: 20px; margin-bottom:20px;">
    <div class="d-flex align-items-center mb-5">
            <img class="rounded-circle shadow-2-strong mb-5" src="https://cdn-icons-png.flaticon.com/512/6008/6008427.png" alt="avatar" style="width: 100px; height: 90px;" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down" data-mdb-animation-duration="1000" data-mdb-animation-delay="200">
            <h1 style="margin-bottom:50px;">MVPPlay</h1>
        </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card card-body" style="background-color: rgba(255,255,255,0);">
                                <img class="img-fluid" src="https://i.pcmag.com/imagery/reviews/05cItXL96l4LE9n02WfDR0h-5.fit_scale.size_760x427.v1582751026.png" style="height:300px; object-fit: cover;border-radius:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body" style="background-color: rgba(255,255,255,0);">
                                <img class="img-fluid" src="https://play-lh.googleusercontent.com/1ANMiLTiy012UVvnyCjQZ2m7X3dQIgui_-D6DV4UXPblWCLx9ZlMDMIyUS0FRMxF8ZE" style="height:300px; object-fit: cover;border-radius:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body" style="background-color: rgba(255,255,255,0);">
                                <img class="img-fluid" src="https://id-test-11.slatic.net/p/3c07856025991b924ec6cbd741e88811.png" style="height:300px; object-fit: cover;border-radius:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body" style="background-color: rgba(255,255,255,0);">
                                <img class="img-fluid" src="https://play-lh.googleusercontent.com/b09h7aIfYMfBtlFRVul6j7jV3pE-gFIHEvR6MmD7jnKxmrBshFNK8-HZwNpvaiI6kR4" style="height:300px; object-fit: cover;border-radius:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body" style="background-color: rgba(255,255,255,0);">
                                <img class="img-fluid" src="https://play-lh.googleusercontent.com/A7doay5zh1eUjZlStGOuQOLjgOMuV7wr3HF7Mg9VC5UW_gOU618qooqadr_-MQKHeFA" style="height:300px; object-fit: cover;border-radius:50px;">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card card-body" style="background-color: rgba(255,255,255,0);">
                                <img class="img-fluid" src="https://img.utdstc.com/icon/467/bf5/467bf56eb7ce6605e60cf70a38e796551f0cfc6cb0c94c6868694f4dc058fdc6:200" style="height:300px; object-fit: cover;border-radius:50px;">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    </div>
</section>




<footer>
        <div class="footer-wrap">
            <div class="container first_class">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>BE THE FIRST TO KNOW</h3>
                        <p>Get all the latest information on MVP Services, Events,
                            and Fairs. Sign up now to be our member today.</p>
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
                                <li><a href="#">MVP Partners</a>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                                <li><a href="#" target="_blank">Terms &amp; Conditions</a>
                                </li>
                                <li><a href="#" target="_blank">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3>OUR SERVICES</h3>
                            <ul class="footer-category">
                                <li><a href="#">Become Tenants</a>
                                </li>
                                <li><a href="#">Coupon Redeem</a>
                                </li>
                                <li><a href="#">Games</a>
                                </li>
                                <li><a href="#">Market Location</a>
                                </li>
                                <li><a href="#">Buy Points</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3>MVP Events</h3>
                            <ul class="footer-links">
                                <li><a href="#">MVP Summit 2024 @Jakarta Convention Center</a>
                                </li>

                                <li><a href="#">MVP Tenants &AMP; Market Fair 2024</a>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
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
        $(document).ready(function() {
            var btn = $('#sttbutton');

            $(window).scroll(function() {
                if ($(window).scrollTop() > 300) {
                    btn.addClass('show');
                } else {
                    btn.removeClass('show');
                }
            });

            btn.on('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

            });
        });
    </script>
<script>
    $('#myCarousel').carousel({
        interval: 10000
    });

    $('#myCarousel .carousel .carousel-item').each(function() {
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
        }
    });
</script>




</body>

</html>