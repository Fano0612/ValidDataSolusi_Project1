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
    <link rel="stylesheet" href="css/chatstyle.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            margin-top: 0;
            border-bottom: 1px solid black;
            background-color: white;
        }
    </style>

</head>

<body>
    <div id="video-background">
        <video autoplay muted loop>
            <source src="{{asset('storage/Media/ComingSoon.mp4')}}" type="video/mp4">

        </video>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <h1>Order</h1>

        </div>
    </nav>


    <div style="height:1000px;">

    </div>



    <footer>

        <div class="Rectangular-shape">
            <div class="container text-center">
                <div class="row row-cols-1 row-cols-md-4">
                    <div class="col">
                        <div class="p-3">
                            <a href="{{route ('LandingPage')}}" style="color:black; ">
                                <img src="https://i.etsystatic.com/22467704/r/il/33f015/2535134244/il_570xN.2535134244_i9fm.jpg" class="card-img-top" alt="" style="width:auto; height: 50px;">

                                <h6>Home</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                        <a href="{{route ('Promo')}}" style="color:black;">
                            <img src="https://cdn-icons-png.flaticon.com/512/272/272535.png" class="card-img-top" alt="" style="width:auto; height: 50px;">
                            <h6>Promos</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                        <a href="{{route ('Order')}}" style="color:black;">
                            <img src="data:image/png;base64,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" class="card-img-top" alt="" style="width:auto; height: 50px;">
                            <h6>Orders</h6>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <a href="{{route ('Chat')}}" style="color:black;">
                                <img src="https://cdn-icons-png.flaticon.com/512/3593/3593684.png" class="card-img-top" alt="" style="width:auto; height: 50px;">
                                <h6>Chat</h6>
                            </a>
                        </div>
                    </div>
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