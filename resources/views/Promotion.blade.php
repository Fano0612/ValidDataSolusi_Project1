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
                            <a class="nav-link " href="{{route ('Landing')}}" data-text="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route ('Promotion')}}">Promotion</a>
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





</body>

</html>