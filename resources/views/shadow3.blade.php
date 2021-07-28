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
    <title>Box Frame with Rebate</title>
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
                  <h2 style="color: #A1A361; font-weight:bold;">Box Frame with Rebate</h2>
                  <br>
                  <b style="font-size: 15px;">With Background mat</b>
                  <br>
                  <b style="font-size: 15px;">Select any frame from our frame categories below</b>
                  <br><br>
                  <p style="font-size: 13px;">
                      A box frame with rebate is a special type of box frame which is more <br>
                     customisable. While also being fantastic for displaying and protecting <br>
                     your treasured items, the design can be modified so that you can <br>
                     choose from three different depths between the glass and mat board. <br>
                     For the clear glazing you can choose from the standard option, UV <br>
                     protected which protects your frame against sunlight or Perspex <br>
                     which has low breakage. A specially built, solid timber rebate builder <br>
                     is used to achieve this and is available in either black or white. The <br>
                     Backing mat board can also be customised and is available in various <br>
                     colours and materials. Another significant advantage of the box frame <br>
                     with rebate is that you can choose any frame from our vast range to <br>
                     decorate your box. Extra window cut outs are available as you desire.

                  </p>
                  
                  <br>
                  <b style="font-size: 15px;">4 Easy steps to ordering a box frame with rebate</b>
                  <br><br>
                  <b style="font-size: 15px;">Select Frame > Select Size > Select Mat Color > Select rebate height/ <br> color</b>
               </div>
               <div class="col" style="border: 2px solid #A79C9C;">
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">
                            <img src="/images/boxr1.jpg" width="120%" height="100%" alt="">
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 20px;">
                           <img src="/images/boxr2.jpg" width="120%" height="100%" alt="">
                        </div>
                        <div class="col" style="margin-top: 20px;">
                           <img src="/images/box3.jpg" width="120%" height="100%" alt="">
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href=""><button style="background-color: white; border:none; font-weight:bold; float:right;">Next</button></a>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <br><br><br>
</body>
</html>