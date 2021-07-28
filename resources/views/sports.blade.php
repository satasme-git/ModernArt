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
    <title>Sports Jersey Framing</title>
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
                        <img src="/images/sports1.jpg" width="100%" height="100%" alt="">
                    </div>
                    <div class="col">
                       <img src="/images/sports2.jpg" width="100%" height="100%" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col" >
                      <center>  
                        <p style="color: #B19D5B; font-weight:bold;">
                            With over 15 years experience, we not only offer skilled worksmanship in our <br>
                            custom framing, but professional advice on layout and color matching, turning your <br>
                             jersey into a treasure piece of memorabilia.
                        </p>
                       <hr style="width: 50%;">
                       </center>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 30px; border: 2px solid #B7ACAC;">
              <center>
                  <br><br>
                 <h5 style="color: #436035; font-weight:bold;">We Ship Australia Wide!</h5>
                 <br>
                 <b>How to Order</b>

                 <div class="row">
                     <div class="col">
                          <img src="/images/sports3.jpg" width="80%" height="100%" alt="">
                     </div>
                 </div>
                 <div class="row" style="margin-bottom: 40px;">
                     <div class="col" style="margin-left:30px; font-size:12px;">
                         <p><u>Bulk Order Discount for Sports Clubs and Corporate Customers</u> </p>
                     </div>
                     <div class="col" style="margin-left:100px;">
                         <h4>Order Ready</h4>
                     </div>
                 </div>

                 <h3 style="color: #EAB400;">Junior Jersey Framing</h3>
                 <b>Frame Your Childs Sports Jersey for Display</b>
                 <br><br>
                 <h2 style="color: #00ADA6;">$199</h2>
                 <br>

                 <div class="row" style="margin-left: 150px;">
                     <div class="col">
                        <img src="/images/sports4.jpg" width="100%" height="100%" alt="">
                     </div>
                     <div class="col">
                         <h4 style="text-align:left;">All Frames Include:</h4>
                        <ul style="list-style-type: none; text-align:left;">
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Light Shadow Box</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Team Colour Matboards</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Black Satin Box Frame</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Clear Glass or Perspex Glazing</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Name Plate (optional)</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; Maximum Dimensions</li>
                            <li><b> &#10004;</b> &nbsp;&nbsp;&nbsp; 81x81 cm (81x 101 cm for Option 3)</li>
                            
                        </ul>
                     </div>
                 </div>
              </center>
              <br><br>
            </div>

            <div style="margin-top: 30px;">
                <h3 style="color:#B19D5B; font-weight:bold; text-align:center;">Framing Styles to chose from!</h3>
            </div>

            <div class="container" style="margin-top: 50px; border-style:double; border-width:5px; border-color:#B7ACAC; ">
            <br><br>
                <div class="row">
                   
                    <div class="col-4" style="text-align: right;">
                        <img src="/images/sports5.jpg" width="50%" height="100%" alt="">
                    </div>
                    <div class="col-4" style="text-align: center;">
                        <div class="card-block">
                            <img src="/images/sports6.jpg" width="45%" height="50%" alt="">
                        </div>
                        <div class="card-block" style="margin-top: 20px;">
                            <img src="/images/sports7.jpg" width="45%" height="50%" alt="">
                        </div>
                        <div class="card-block" style="margin-top: 20px;">
                            <img src="/images/sports8.jpg" width="45%" height="50%" alt="">
                        </div>
                        <div class="card-block" style="margin-top: 20px;">
                            <img src="/images/sports9.jpg" width="45%" height="50%" alt="">
                        </div>
                        <div class="card-block" style="margin-top: 20px;">
                            <img src="/images/sports10.jpg" width="45%" height="50%" alt="">
                        </div>
                    </div>
                    <div class="col-3" style="border: 2px solid #B7ACAC;">
                        <div class="card-block">
                            <p style="font-size: 14px;">
                              Economic <br>
                             •Single Color Background Mat <br>
                             •Jersey Mounted on Matboard <br>
                             •Frame spacer separates jersey from <br> glass <br>
                             •Name Plaque (optional) <br><br>

                               <b>$250-$300</b>
                               <hr>
                            </p>
                        </div>
                        <div class="card-block" style="margin-top: 20px;">
                            <p style="font-size: 14px;">
                               Shadow Box #1 <br>
                               • Jersey mounted on background <br> mat <br>
                               • Single or double color top mat <br> (team color matching) <br>
                               • 4-6 photos bottom <br>
                               • Name Plaque (optional) <br><br>

                               <b> $250-$300</b>
                               <hr>
                            </p>
                        </div>
                        <div class="card-block" style="margin-top: 50px;">
                            <p style="font-size: 14px;">
                              
                             Shadow Box #2 <br>
                             • Jersey Mounted on Background <br> Mat <br>
                             • Single or Double color Top Mat <br> (Team color Matching) <br>
                             • Name Plaque(optional) <br><br>

                             <b>$300-$350</b> 
                             <hr>
                            </p>
                        </div>
                        <div class="card-block" style="margin-top: 50px;">
                            <p style="font-size: 14px;">
                             Shadow Box #3 <br>
                            • Jersey Mounted on Background <br> Mat <br>
                            • Single or Double color Top Mat <br> (Team color Matching) <br>
                            • Name Plaque(optional) <br><br>

                             <b>$250-$300</b> 
                            <hr>
                            </p>
                        </div>
                        <div class="card-block">
                            <p style="font-size: 14px;">
                              Shadow Box #4 <br>
                             • Jersey Mounted on Background <br> Mat <br>
                             • T-window, Single or Double color Top Mat <br> (Team color Matching) <br>
                             • 2x 6x8” Photos (One on Both Sides) <br>
                             • Name Plaque (optional) <br><br>

                             <b>$350-$400</b> 
                            </p>
                        </div>
                    </div>
                </div>
                <br><br>

                <div style="background-color: #436035; width:40%; text-align:center; margin-left:220px;">
                    <h3 style="font-weight: bold; color:white;">SPORTS PHOTOGRAPHY</h3>
                   
                </div>
                <div style="text-align: center;">
                <img src="/images/sports11.jpg" width="85%" height="100%" alt="">
                <br><br>
                <a href="/contact"><button style="background-color: #CCA929; border:none; width:200px; border-radius:50px;">Contact Us</button></a>
                <br><br><br><br>
                </div>
            </div>
            
</body>
</html>