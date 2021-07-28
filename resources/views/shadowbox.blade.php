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
    <title>Shadow Box Frames</title>

    <style>
        .btn {
            background-color: #A1A361;
            border:none;
            color: white;
            border-radius: 50px;
            width: 150px;
        }
    </style>
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

            <div class="container" style="text-align: center; margin-top:50px;">
                <h2 style="color: #425F34;">Shadow Box Frames</h2>
                <br><br>
                <img src="/images/shadow1.jpg" width="75%" height="100%" alt="">
            </div>
            
            <div style="background-color: #436035;">
                <div class="container" style="text-align: center; color:white;">
                    <div class="row" >
                        <div class="col" style="margin-top:100px;">
                            <b>Shadow Box Frame</b>
                            <hr style="background-color: white;">
                            <p >
                              A shadow box frame is an <br>
                              excellent way to protect and <br>
                             display your valuable <br>
                             memorabilia such as medals, <br>
                             plaques, 3D objects and other <br>
                             sentimental items. You have a <br>
                             choice of a single or double mat <br>
                              design along
                            </p>

                            <a href="/shadow1"><button class="btn">Order Now</button></a>
                             <br><br>
                             <img src="/images/shadow2.jpg" width="60%" height="50%" alt="">
                        </div>
                        <div class="col" style="margin-top:100px;">
                            <b>Box Frame</b>
                            <hr>
                            <p>
                             A box frame is also great to show <br>
                             off your favourite items such as <br>
                             medals, plaques and 3D objects. <br>
                             The main difference between this <br>
                             design and a shadow box is the <br>
                             fact that there is no mat pressed <br>
                             against the g
                            </p>
                             <br>
                            <a href="/shadow2"><button class="btn">Order Now</button></a>
                            <br><br>
                            <img src="/images/shadow3.jpg" width="60%" height="50%" alt="">
                        </div>
                        <div class="col" style="margin-top:100px;">
                            <b>Box Frame with Rebate</b>
                            <hr>
                            <p>
                            A box frame with rebate is a <br>
                            special type of box frame which is <br>
                            more customisable. While also <br>
                            being fantastic for displaying and <br>
                            protecting your treasured items, <br>
                            the design can be modified so <br>
                            that you can choose.
                            </p>
                           <br>
                            <a href="/shadow3"><button class="btn">Order Now</button></a>
                            <br><br>
                            <img src="/images/shadow4.jpg" width="60%" height="50%" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
</body>
</html>