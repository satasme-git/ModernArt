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
    <title>Block Mount</title>
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
                    <div class="col-8">
                        <div class="card-block">
                            <img src="/images/bmount1.jpg" width="90%" height="80%" alt="">
                        </div>
                    </div>
                    <div class="col-4">
                         <div class="card-block">
                             <h2 style="color: #000B8D;">Block Mount</h2>
                             <br>

                             <h5 style="margin-left: 80px;">A Contemporary and Stylish way to <br> develop your photo or art work.</h5><hr>
                             <br>
                             <div>
                                 <ul style="list-style-type: none; color:#436035;">
                                     <li>&#10004; <b>Lightweight and Frameless</b></li>
                                     <li>&#10004; <b>Matte or Gloss Laminate available</b></li>
                                     <li>&#10004; <b>20mm Foam Board with Plastic Edging</b></li>
                                     <li>&#10004; <b>No Nail on Wall, 3M hooks recomended</b></li>
                                     <li>&#10004; <b>No Glass, No breakage, Safe for Kids.</b></li>
                                 </ul>
                             </div>
                         </div>
                    </div>
                </div>
            </div>

            <div style="background-color: #436035; color:white; height:80px; margin-top:40px; margin-bottom:40px; text-align:center;">
                <h5 style="top:30px; position:relative;">Why do you need to laminate your photos, Posters or Prints?</h5>
            </div>

            <div class="container" style="text-align: center;">
                <img src="/images/bmount2.jpg" width="100%" height="50%" alt="">
            </div>

            <div class="container" style="margin-top:60px; border: 2px solid #AFA8A8;">
                <div class="row" style="margin-top:30px;">
                    <div class="col">
                        <h4 style="text-align: center; font-weight:bold;">Features</h4>
                        <br>
                        <ul style="list-style-type: none; margin-left:100px;">
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; 5mm Thickness</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Clean Cut</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Light Weight</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Cost effective</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp; No nailed on wall</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 style="text-align: center; font-weight:bold;">Features</h4>
                        <br>
                        <ul style="list-style-type: none; margin-left:100px;">
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; 10mm Thickness</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Clean Cut</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Light Weight</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Cost effective</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; No nailed on wall</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4 style="text-align: center; font-weight:bold;">Features</h4>
                        <br>
                        <ul style="list-style-type: none; margin-left:100px;">
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; 20mm Thickness</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Durable and Solid</li>
                            <li><b> &#10004;</b>&nbsp;&nbsp;&nbsp; Modern and Stylish</li>
                            <li><b> &#10004;</b>&nbsp;&nbsp;&nbsp; Lightweight</li>
                            <li><b> &#10004;</b>&nbsp;&nbsp;&nbsp; Laminate surface</li>
                            <li><b> &#10004;</b>&nbsp;&nbsp;&nbsp; Scuff Resistance</li>
                            <li><b> &#10004;</b>&nbsp;&nbsp;&nbsp; No nailed on wall</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                       <center><button style="background-color: #432828; color:white; width:200px; border-radius:50px; font-weight:bold;">Ideal for</button></center>
                       <br>
                        <ul style="list-style-type: none; margin-left:100px;">
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Exhibition</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Showroom Display</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Multi Images Display</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; School Projects</li>
                            
                        </ul> 
                    </div>
                    <div class="col">
                       <center><button style="background-color: #432828; color:white; width:200px; border-radius:50px; font-weight:bold;">Ideal for</button></center>
                       <br>
                        <ul style="list-style-type: none; margin-left:100px;">
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Exhibition</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Showroom Display</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Multi Images Display</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; School Projects</li>
                            
                        </ul> 
                    </div>
                    <div class="col">
                       <center><button style="background-color: #432828; color:white; width:200px; border-radius:50px; font-weight:bold;">Ideal for</button></center>
                       <br>
                        <ul style="list-style-type: none; margin-left:100px;">
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Luxury Display</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Modern Home Display</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Multi Images Display</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Modern Office Display</li>
                            
                        </ul> 
                    </div>
                </div>
            </div>
            <br><br>

</body>
</html>