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
    <title>Frameless Clip</title>
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
                <h1>Frameless Clip</h1>

                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Simple and Modern</h5><hr>
                                <h6>Light Weighted | No Breakage | Economic</h6>
                                <br>
                                <p style="font-size: 10px;">
                                A clip frame is the least expensive way to hang your poster <br> And/or artwork.
                                <br> The frame-less display gives a modern look for the images. 
                                 <br> We provide best snap frames, across Australia. It comes with several steel clips to 
                                   <br> Hold the two parts symmetrically.

                                </p>

                                <p style="font-size: 10px; font-weight:bold;">
                                You can easily change the content inside the clip frame by simply unclipping the clips.
                                <br> Because of its frame-less Display, it is east to place anther, and has no danger or breakage.
                                 <br> It would be the best choice for a poster indoor interior
                                 <br> and/or advertising material in your office.
                                 <br> You can give a dynamic look to your wall by refreshing the poster or picture inside it from time to time.
                                 <br> We use a 2mm clear Perspex on the front with a 3mm smooth MDF Backing with the European made stainless
                                  <br> Clips to hold the 2pieces together. You can either hang it in portrait or landscape using our stamped hanger on the back.
                                  <br> We use a acrylic Perspex instead of glass, so it is absolutely safe and there is no breakage.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="/images/fless.jpg" width="90%" height="80%" alt="">
                            </div>
                            <div class="col" style="border: 2px solid #B2AAAA;">
                                <b>For your Custom Need</b><hr>

                                <p style="font-size: 12px;">
                                    You can select the standard size from the drop-down or
                                    <br> enter the custom size in accordance with 
                                    <br> your picture or artwork.
                                </p>
                                <p style="font-size: 12px; color:#BE7802;">
                                    The default glazing option is clear Perspex.
                                    <br>  It you want to upload your photo or artwork,
                                    <br> And to have it framed with a clip frame,
                                    <br> Then simply jump to our custom upload page,
                                    <br> otherwise in case of just wanting
                                    <br> The perspex frame you can order it within no time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-block">
                           <img src="/images/frameless1.jpg" width="100%" height="100%" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
            <br><br>
</body>
</html>