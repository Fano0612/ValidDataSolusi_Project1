<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVP Club</title>
    <link rel="icon" type="image/x-icon" href="https://images.squarespace-cdn.com/content/v1/5eac426f629a1c2ac6cdb029/ec18de8f-1c31-43c4-a635-d35729fa9f26/Points.-Grey.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @media (max-width: 767px) {
            .navbar-brand.Logo {
                display: none;
            }
        }
        .navbar-nav .nav-link.active {
            text-decoration: none;
            color: darkgreen;
            position: relative;
        }

        .navbar-nav .nav-link.active::before {
            content: "";
            display: block;
            width: 100%;
            height: 3px;
            background-color: darkgreen;
            position: absolute;
            bottom: -4px;
            left: 0;
        }

        .navbar-nav .nav-link.active:hover::before {
            background-color: mintcream;
        }

        .navbar-nav .nav-link:hover {
            color: mintcream;
        }
        .navbar-nav .nav-link.active:hover {
            text-shadow: 0 0 10px rgba(0, 128, 0, 0.7);
        }
          .background-video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            filter: blur(10px); 
        }
    </style>
</head>

<body>
<video class="background-video" autoplay loop muted>
        <source src="https://www.youtube.com/watch?v=tRDzriLk5MA" type="video/mp4">

    </video>
    <div class="mx-auto p-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="rounded container-fluid" style="background-color: #79AC78;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand Logo" href="#">
                    <img class="rounded" src="https://images.squarespace-cdn.com/content/v1/5eac426f629a1c2ac6cdb029/ec18de8f-1c31-43c4-a635-d35729fa9f26/Points.-Grey.png" alt="" style="height:50px; width:auto;">
                </a>
                <div class="text-center">
                    <img class="navbar-brand d-lg-none" alt="" style="height:50px; width:auto;">
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-text="Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promotion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MyCoupon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chat</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>