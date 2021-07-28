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
    <title>Acrylic Photo Blocks & Mounts</title>

    
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

            <div class="container" style="margin-top: 50px;  margin-bottom: 50px;">
                <div class="row" >
                    <h1>Acrylic Photo <br> Blocks & Mounts</h1>
                    <hr>
                    <img src="/images/acrylic1.jpg" alt="">
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col">
                        <div class="card-block">
                           <img src="/images/acrylic2.jpg" width="80%" height="100%" alt="">
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="card-block">
                            <h4><b> Acrylic Desktop Block</b></h4>
                            <hr>

                            <p>
                                Acrylic desktop blocks are ideal for presenting your picture memories at <br>
                                your home and office. Tour image is printed on a high gloss photo paper <br>
                                then face mounted onto 20mm or 30mm thick clear acrylic using optically <br>
                                clear adhesive. <br><br>
                                The thick acrylic with daimond polished edges will give the images a <br>
                                floating 3D effect especially when you view it from the sides or top edge.
                                <br><br>
                                Such a stunning piece looks beautiful in your home or office, and makes <br>
                                a wonderful gift for your friends, family or business partners. Acrylic Desk <br>
                                Mounts are available in range of size and custom formats to ensure <br>
                                you're getting the right one for tour decor needs. 
                            </p>
                            <br>
                            <a href="/acrylicdesktop" ><button class="orderbtn">Order Now</button></a>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col">
                        <div class="card-block">
                           <img src="/images/acrylic3.jpg" width="80%" height="100%" alt="">
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="card-block">
                            <h4><b> Acrylic Permanent Block</b></h4>
                            <hr>

                            <p>
                             Showcase your image in a contemporary and stylish way using a <br>
                             permanent block. Your image is printed on high glossy photo paper, then <br>
                             face mounted with optically clear adhesive on a 6mm clear acrylic. It is <br>
                             then professionally sealed on a 3mm alu-panel ensuring there are no air <br>
                             bubbles or dust, creating a stunning 3D floating effect.
                            </p>
                            <br><br><br><br><br>
                            <a href="/acrylicpermanent" ><button class="orderbtn">Order Now</button></a>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col">
                        <div class="card-block">
                           <img src="/images/acrylic4.jpg" width="80%" height="100%" alt="">
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="card-block">
                            <h4><b> Acrylic Photo Block</b></h4>
                            <hr>

                            <p>
                               Capture your best moments and put them into one piece of artwork! With <br>
                               our acrylic photo block, you can select one or even several photos and <br>
                               images to be arranged in the same display to give it a neat and stunning <br>
                               look. The images are printed on high gloss photo paper and are <br>
                               permanently mounted behind a 6mm clear acrylic which is then fixed <br>
                               onto another 4.5mm acrylic board as the baking in a colour of your <br>
                              choice! It is mounted on the wall using anodized silver standoff corners to <br>
                              give that unique 3D look.
                            </p>
                            <br><br>
                            <a href="/acrylicblock" ><button class="orderbtn">Order Now</button></a>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <div class="col">
                        <div class="card-block">
                           <img src="/images/acrylic5.jpg" width="80%" height="100%" alt="">
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="card-block">
                            <h4><b> Acrylic Sandwich Mount</b></h4>
                            <hr>

                            <p>
                              Give your wall a modern touch through ur acrylic sandwich mount! We <br>
                              print your images onto high gloss paper then sandwich it in between 2 <br>
                              acrylio sheets which are held together using anodised silver standoffs to <br>
                              give a spectacular raised effect from the wall. Our sandwich mounts are <br>
                              simple and straight forward, moaning you can switch the content in a <br>
                              matter of minutes! Our sandwich mounts are the perfect way to preserve <br>
                              and display your photos, certificates, artworks and much more!
                            </p>
                            <br><br><br>
                            <a href="/acrylicsandwich" ><button class="orderbtn">Order Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>