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
    <title>Framing</title>
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

            <div class="container" style=" margin-top:60px; ">
                <div class="row">
                    <div class="col-sm-6" style=" margin-top:120px">
                       <h1 style="font-size: 65px;">
                          Welcome to <br> <u style="background-color: #FFE9B8;"> Modern Art Framing</u>
                       </h1>
                       <br>
                       <h5><b> We can help you with</b></h5>
                       <br>
                       <div class="container">
                            <div class="row" style="height: 100px;">
                                <div class="col">
                                  <img src="/images/frameicon1.jpg" alt="" width="10%" height="40%">
                                   &nbsp;&nbsp;&nbsp;&nbsp; <a href="/frame2"> <b style="color: #DBC36E; ">FRAMING</b> </a>
                                </div>
                                <div class="col">
                                  <img src="/images/frameicon2.jpg" alt="" width="10%" height="40%">
                                  &nbsp;&nbsp;&nbsp;&nbsp; <a href=""> <b style="color: #DBC36E;"> CANVAS STRETCHING</b></a>
                                </div>
                            </div>
                            <div class="row" style="height: 200px;">
                                <div class="col">
                                  <img src="/images/frameicon3.jpg" alt="" width="60%" height="20%">
                                  
                                </div>
                                <div class="col">
                                  <a href=""> <b style="color: #DBC36E;">BLOCK  MOUNT</b> </a>
                                  
                                </div>
                                <div class="col">
                                  <img src="/images/frameicon4.jpg" alt="" width="60%" height="30%">
                                              
                                </div>
                                <div class="col">
                                  <a href=""> <b style="color: #DBC36E;">BLOCK  MOUNT</b> </a>
                                  
                                </div>
                                <div class="col">
                                  <img src="/images/frameicon5.jpg" alt="" width="60%" height="30%">
                                  
                                </div>
                                <div class="col">
                                  <a href=""> <b style="color: #DBC36E;">BLOCK  MOUNT</b> </a>
                                  
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-sm-6">
                      <img src="/images/framehome.jpg" alt="" width="100%" height="80%">
                    </div>
                    
                </div>
            </div>
            <br><br><br>
</body>
</html>