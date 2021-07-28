<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <title>Aluminium Frames</title>
</head>
<body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 40px;">
                <div class="container">
                    
                    

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <b class="nav-link text-white"><i class="fa fa-map-marker" style="font-size:24px"></i> Unit 7 / 8 Victoria Ave, Castle Hill NSW 2154    </b>
                            </li>
                            <li class="nav-item">
                                <b class="nav-link text-white"><i style="font-size:24px" class="fa fa-phone"></i> +61 (02) 9659 6696</b>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <div class="container">
                    <img src="/images/logo.jpg" alt="" class="navbar-brand" width="12%" height="7%" style="border-radius: 10px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-dark active" id="text">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/product&service" class="nav-link text-dark" id="text">Products and Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="/aboutus" class="nav-link text-dark" id="text">Supplies</a>
                            </li>
                            <li class="nav-item">
                                <a href="/aboutus" class="nav-link text-dark" id="text">Clearance</a>
                            </li>
                            @if (Route::has('login'))
                            <li class="nav-item">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="login">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link text-dark" id="text">Login</a>
                            </li>
                            <li class="nav-item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link text-dark" id="text">Register</a>
                              @endif
                           @endauth
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col">
                        <div class="card-block">
                            <h4>Aluminium Frames</h4>

                            <p>
                                Aluminium is an ideal choice for a <br>
                                modern home and office. <br>
                                It is clean and simple, creating a neat and uniform look.

                            </p>
                            <p style="color: #EAB400;">
                               The ALD-222 is <br>
                              a budget series in a competitive price range for everyday usage, while the <br>
                              hick ALD-66 series is  more contemporary both in shape and design. <br>
                               Both aluminium <br>
                              frames are available in different colour combinations for your selection. 

                            </p>
                            <p>
                              1. Budget Aluminium Frame- Series ALF- 22- A <br>
                              2. Budget Aluminium Frame-  Series ALF 22-B <br>
                              3. Deluxe Aluminium Frame - Series ALF- 66
                            </p>

                            <hr>
                        </div>
                    </div>
                    <div class="col">
                         <div class="caed-block">
                             <img src="/images/aluminium1.jpg" width="100%" height="100%" alt="">
                         </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px; ">
                    <div class="col">
                        <center>
                        <h3>How to Order</h3>
                        <img src="/images/aluminium2.jpg" width="50%" height="50%" alt="">
                        </center>
                         <br>
                         <div   style=" width:50%; margin-left:25%;">
                            <p style="background-color: #e2e5e6;">Budget Aluminium Frame - Series ALF 22-A</p>

                            <div class="row">
                                <div class="col-4">
                                    <img src="/images/aluframe1.jpg" width="70%" height="100%" alt="">
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col">
                                            <img src="/images/aluframe2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                       
                     
                    </div>
                </div>
            </div>

</body>
</html>


