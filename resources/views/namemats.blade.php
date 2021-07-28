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
    <title>Name Mats</title>

    
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


            <div class="container" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                 <h1 style="font-size: 50px; color: #A1A361; font-weight:bold;">Name Mat</h1>
                                 <br>
                                 <p>Create truly unique gifts for your family and friends by designing your 
                                     own personalized mats with any words and for any occasion!
                                       
                                </p>
                                <p>
                                   You can put names, countries/cities, sports, pets and any occasion. The windows’ size will fit a 4x6” photo.
                                </p>
                                <p>
                                    You can either choose between 1 line or 2 lines for your name mat. 
                                    You can either order only the name mat or with frames too. You can choose between 6 modern and flat frames.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" style="margin-top: 180px;">
                                   <b>Update content for Name Mat</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" style="margin-left: 150px;">
                            
                               <div class="card">
                                <div class="row hidden-md-up">
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat1.jpg" width="50%" height="50%" alt=""></center>
                                           <p class="para">
                                              SF-2001 <br> 
                                              Code No. SF-2001 Signature mat Mat size 16x20” Window size 8x10” Your choice of mat color
                                              </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat2.jpg" width="50%" height="50%" alt=""></center>
                                           <p class="para">
                                               SF-2002 <br>
                                               Code No. SF-2002 Signature mat Mat size 16x20” Window size: 8x10” oval
                                              </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block"><br>
                                           <center><img src="/images/namemat3.jpg" width="70%" height="80%" alt=""></center><br>
                                           <p class="para">
                                                SF-2003 <br>
                                                Code No. SF-2003 Signature Mat size 20x24” WIndow size 8x10” 
                                            </p>                                        
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat4.jpg" width="50%" height="50%" alt=""></center>
                                           <p class="para">
                                                   SF-2004 <br>
                                                   Code No. SF-2004 Signature mat size 20x24” WIndow size 8x10” oval
                                            </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat5.jpg" width="50%" height="50%" alt=""></center><br>
                                           <p class="para">
                                                SF-2012 <br>
                                                Code No. SF-2012 Mat size 24x24” Window size 12x12” Heart
                                              </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat6.jpg" width="50%" height="50%" alt=""></center><br>
                                           <p class="para">
                                               SF-2011 <br>
                                               Code No. SF-2011 Mat size 20x20” WIndow size 8x8” heart
                                              </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat7.jpg" width="50%" height="50%" alt=""></center>
                                           <p class="para">
                                                 SF-2005 <br>
                                                 Code No. SF2005 Signature Mat size 20x24” Window size 11x14”
                                              </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat8.jpg" width="50%" height="50%" alt=""></center>
                                           <p class="para">
                                                  SF-2006 <br>
                                                  Code No. SF-2006 Signature Mat size 20x24” Window size 11x14” oval
                                              </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div>
                                        <div class="card-block">
                                           <center><img src="/images/namemat9.jpg" width="50%" height="50%" alt=""></center><br>
                                           <p class="para">
                                                  SF-2005 <br>
                                                  Code No. SF2005 Signature Mat size 20x24” Window size 11x14”
                                              </p>
                                              <center><a href="" ><button class="orderbtn">Order</button></a></center>
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