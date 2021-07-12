<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <title>Modern Art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
            
        
    </head>
    <body class="antialiased">

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
        
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/slide1.jpg" width="100%" height="700" alt="First slide">
                    <div class="bg-text"><br>
                        <h1 class="text-dark">Welcome to <br> <u style="background-color: #FFE9B8;"> Modern Art Framing</u></h1>
                        <br><br>
                        <b class="text-dark" style="font-size:20px;">We can help you print images <br> to</b><br>

                        <div class="container" style="color: black;">
                            <div class="row" style="height: 150px;">
                                <div class="col">
                                  <img src="/images/frameicon1.jpg" alt="" width="10%" height="40%">
                                   &nbsp;&nbsp;&nbsp;&nbsp; <a href="/frame2"> <b>FRAMING</b> </a>
                                </div>
                                <div class="col">
                                  <img src="/images/frameicon2.jpg" alt="" width="10%" height="40%">
                                  &nbsp;&nbsp;&nbsp;&nbsp; <a href=""> <b > CANVAS STRETCHING</b></a>
                                </div>
                            </div>
                            <div class="row" style="height: 150px;">
                                <div class="col">
                                  <img src="/images/frameicon3.jpg" alt="" width="60%" height="20%">
                                  
                                </div>
                                <div class="col">
                                  <a href=""> <b >BLOCK  MOUNT</b> </a>
                                  
                                </div>
                                <div class="col">
                                  <img src="/images/frameicon4.jpg" alt="" width="60%" height="30%">
                                              
                                </div>
                                <div class="col">
                                  <a href=""> <b >BLOCK  MOUNT</b> </a>
                                  
                                </div>
                                <div class="col">
                                  <img src="/images/frameicon5.jpg" alt="" width="60%" height="30%">
                                  
                                </div>
                                <div class="col">
                                  <a href=""> <b >BLOCK  MOUNT</b> </a>
                                  
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    
                    <div class="carousel-item">
                    <div style="width:100%; height:700px; "></div>
                    <div class="bg-text2"><br><br><br>
                        <h2 class="text-dark" style="padding-top: 80px; ">Hot Selling Frames</h2>
                        <img  src="/images/frame1.jpg" width="25%" height="340" alt="First slide" style="margin-top: 100px; margin-right: 30px;">   
                        <img  src="/images/frame2.jpg" width="25%" height="340" alt="First slide" style="margin-top: 100px; margin-right: 30px;">
                        <img  src="/images/frame3.jpg" width="25%" height="340" alt="First slide" style="margin-top: 100px;"><br>
                        <hr style="background-color: black; border:black">
                    </div>
                    </div>

                    <div class="carousel-item">
                    <div style="width:100%; height:700px; "></div>
                     <div class="bg-text2" style="text-align: center;">
                        <div class="row d-flex " >
                            <div class="column" style="width: 50%; margin-top: 350px;">
                                <div >
                                    <img src="/images/slide3img1.jpg" alt="" width="80%" height="100%"><br>
                                    <h3 style="color: black;">Custom Frames</h3>
                                    <button class="inputbtn">View</button>
                                </div>
                            </div>
                            <div class="column" style="margin-top: 300px; position:relative;">
                                <div class="container1">
                                   <img src="/images/slide3img2.jpg" alt="print" style="width:120%" height="100%">
                                   <div  class="top-left">
                    
                                        <div class="specialview">
                                               <h3>Special Frames</h3>
                                                 

                                                <div style="text-align: left;"><a href="#"><button class="inputbtn" ">About Us</button></a></div><br>
                                            </div>
                        
                        
                                     </div>
                                </div>
                                
                            </div>
                        </div>
                        
                      </div>
                    </div>

                    <div class="carousel-item">
                    <div style="width:100%; height:700px; "></div>
                     <div class="bg-text2">
                        <div class="row d-flex " >
                            <div class="column" style="width: 50%; margin-top: 350px;">
                                <div >
                                    <img src="/images/slidemat1.jpg" alt="" width="60%" height="100%"><br>
                                    <b><h3 style="color: black;">Mats</h3></b>
                                    <button class="inputbtn">View</button>
                                </div>
                            </div>
                            <div class="column" style="margin-top: 300px;">
                                <div class="container1">
                                   <img src="/images/slidemat2.jpg" alt="print" style="width:140%" height="120%">
                                   <div  class="top-left">
                    
                                        <div class="specialview">
                                                <h3>Framing</h3>
                                               <br>

                                                <div style="text-align: left;"><a href="#"><button class="inputbtn" ">About Us</button></a></div><br>
                                            </div>
                        
                        
                                     </div>
                                </div>
                                
                            </div>
                        </div>
                        
                      </div>
                    </div>

                    <div class="carousel-item">
                    <div style="width:100%; height:700px; "></div>
                    <div class="bg-text3"><br><br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                     <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <h1 style="color: black; font-size:60px; margin-top:20px;">Choose a <br> Product</h1>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div style="margin-top:150px;">
                                                <b style="color: black;">More Products</b><br>
                                                <a href="#"><button class="inputbtn">View</button></a>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="col">
                                     <div class="container">
                                         <div class="row">
                                             <div class="col">
                                                <div class="con" id="thumbnail">
                                                    <b style="color: black;">Framing</b>
                                                    <img src="/images/slide4img1.jpg" class="img-thumbnail"  alt="" width="100%" height="200%">
                                                    <button class="btn" style="width: 70px; margin-left:10px;">View</button>
                                                </div>
                                             </div>
                                             <div class="col">
                                                   <div class="con" id="thumbnail">
                                                    <b style="color: black;">Block Mount</b>
                                                    <img src="/images/slide4img2.jpg" class="img-thumbnail"  alt="" width="100%" height="200%">
                                                    <button class="btn" style="width: 70px; margin-left:10px;">View</button>
                                                  </div>
                                             </div>
                                             <div class="col">
                                                  <div class="con" id="thumbnail">
                                                    <b style="color: black;">Acrylic Sandwich</b>
                                                    <img src="/images/slide4img3.jpg" class="img-thumbnail"  alt="" width="100%" height="100%">
                                                    <button class="btn" style="width: 70px; margin-left:10px;">View</button>
                                                  </div>
                                             </div>
                                         </div><br>
                                         <div class="row">
                                                 <div class="con" id="thumbnail">
                                                    
                                                    <img src="/images/slide4img4.jpg" class="img-thumbnail"  alt="" width="100%" height="100%">
                                                    <button class="btn" style="width: 70px; margin-left:10px;">View</button>
                                                    <b style="color: black;">Canvas Stretching</b>
                                                </div>
                                         </div>
                                     </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
             </div><br>

             <div class="container">
                 <h1 class="header" style="margin-top: 50px; text-align:center; color:#CCA929; font-weight: bold">Build your perfect frame</h1>
                 <h3 class="header" style="text-align:center; color: #848484; font-weight: bold">In 4 easy steps</h3>
                  <br>
                  <br>
                  <br>
                 <div class="container py-5" id="twoimages">
                     <div class="row d-flex justify-content-center text-center">
                         <div class="column">
                             <center><a href="#"><button class="btn btn-warning text-white" style="border-radius: 50px; font-weight: bold; background:#CCA929">Print + Frame</button></a></center><br><br>
                             <img src="/images/print.jpg" alt="print" style="width:100%">
                         </div>
                         <div class="column" style="margin-left: 100px;">
                             <center><a href="#"><button class="btn btn-warning" style="border-radius: 50px; font-weight: bold; background:#CCA929">Frame Only</button></a></center><br><br>
                             <img src="/images/printless.jpg" alt="print" style="width:100%">
                         </div>
                     </div>
                 </div>
             </div>

             <div style="margin-top: 100px; margin-bottom: 100px;">
                 <center><h2 class="text-dark" style="font-weight: bold;">Brighten up your living room huge range of Art Frame</h2></center>
             </div>

             <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center" id="banner1">
        
             </div><br><br><br>
            
                <div class="container1" style="margin-top: 100px; margin-right: 100px; margin-left: 100px;">
                    <img src="/images/home.jpg" width="100%" alt="">
                    <div class="top-right"><b>Find the right</b><br><b>Frame from you</b></div>
                    
                    <div  class="bottom-left" style="background-color: #FAFAFA;">
                    
                       <div class="imgabout">
                            <br> With over <br>
                           20 years experience, <br>
                            <b> Modern Art Framing </b><br>
                            Can help you bring <br>
                            A special touch to your wall. <br><br>

                            <div style="text-align: left;"><a href="#"><button class="inputbtn" ">About Us</button></a></div><br>
                        </div>
                        
                        
                    </div>
                    
                    
                </div>

                <br><br><br><br>
             
                  <div class="hotdiv"><br>
                      <center><h3 class="text-white" id="div3">Hot <br> Selling <br> Frames</h3></center>
                  </div>
                  <br>
                  <br><br>

                  <div class="container">
                      
                        <div class="row d-flex justify-content-center text-center">
                             
                            <!--bootstrap card with 3 horizontal images-->
                            <div class="row" style="border: outset gray 1px;">
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Mirrors</h5>
                                        
                                    </div>
                                    
                                    <div class="con">
                                      <img src="/images/hframe1.jpg" width="80%" height="400">
                                      <button class="btn" >View</button>
                                    </div>
                                   
                                      
                                    
                                </div><br>
                
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title ">Block Mount</h5>
                                        
                                    </div>

                                    <div class="con">
                                      <img src="/images/hframe2.jpg" width="80%" height="400">
                                      <button class="btn">View</button>
                                    </div>
                                    
                                    
                                </div><br>
                                
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title ">Art Prints</h5>
                                        
                                    </div>

                                    <div class="con">
                                      <img src="/images/hframe3.jpg" width="80%" height="400">
                                      <button class="btn">View</button>
                                    </div>
                                    
                                   
                                </div><br><br><br>
                            </div>
                        </div>
                        
                    </div><br><br><br><br>

                    <div class="bestdiv"><br>
                      <center><h3 class="text-white" style="color: white;">Best <br> Selling <br> Frames</h3></center>
                  </div>
                  <br><br><br>

                  <div class="container">
                      
                        <div class="row d-flex justify-content-center text-center">
                
                            <!--bootstrap card with 3 horizontal images-->
                            <div class="row" style="border: outset gray 1px; ">
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Aluminium Frames</h5>
                                        
                                    </div>

                                    <div class="con">
                                      <img src="/images/bframe1.jpg" width="80%" height="400">
                                      <button class="btn">View</button>
                                    </div>
                
                                    
                                </div><br>
                
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title ">Frameless Clip</h5>
                                        
                                    </div>

                                    <div class="con">
                                      <img src="/images/bframe2.jpg" width="80%" height="400">
                                      <button class="btn">View</button>
                                    </div>
                                    
                                    
                                </div><br>
                                
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h5 class="card-title ">Sports Jersey <br> Framing</h5>
                                        
                                    </div>

                                   <div class="con">
                                      <img src="/images/bframe3.jpg" width="80%" height="400">
                                      <button class="btn">View</button>
                                    </div>
                                    
                                   
                                </div><br>
                            </div>
                        </div>
                        
                    </div><br><br><br>


                  <div class="hotdiv"><br>
                      <center><h1 class="text-white" id="div3">Reviews</h1></center>
                  </div>
                  <br><br><br>

                  <div>
                  <center>
                      <div style="height: 100%; width: 40%; border: 1px solid #D0D1D8; "><br>
                          <b> “ I would highly recommend this framing shop! Went to Frame Today earlier
                               who were extremely expensive and couldn’t do my artwork for 3 weeks. 
                               Ironic considering the name!Brian was really professional and got my artwork framed in less then 24hrs for me. 
                               He did really professional finish and have now recommended him to friends. 
                               Very well priced and will get future work framed there again! ”
                            </b><br><br>
                            <h5 style="text-align: left;"><u><b>LORRAINE, NSW.</b></u></h5>
                            <br>
                      </div>
                      </center>
                  </div>
                  <br><br><br><br><br>

                  <div>
                    <div class="container">
                        <div class="row" >
                            <div class="col-sm" >
                               <img src="/images/icon1.jpg" alt="" width="60%" height="70%"> 
                               
                            </div>
                            <div class="col-sm" style="width: 100%;">
                            Our Guarantee To You 
                            Using only top-of-the range canvases, inks, printing, mouldings, 
                            acid-free mats and equipment, Modern Art Framing will deliver 
                            professional results first time, every time.
                            </div>
                            <div class="col-sm" style="margin-right: 100px;">
                            <img src="/images/icon2.jpg" alt="" width="60%" height="70%" > 
                            </div>
                            <div class="col-sm">
                            No Hidden Costs 
                            At Modern Art Framing, there are no hidden charges. 
                            The price of your chosen print, frame or mat, 
                            inclusive of delivery is included in your total cost at checkout.
                            </div>
                        </div>
                    </div>
                 </div> 
                 <br><br><br><br><br><br><br><br>


                 <div class="container">
                     <div class="row">
                         <div class="col">
                             <div class="row">
                                   <h2>Subscribe To Our Email List <br>
                                        To Discover All The Latest <br> Offers
                                        & Inspiration 
                                    </h2>
                             </div>
                             <br><br>
                             <div class="row">
                                    <p>
                                        Interested on our product and services?<br>
                                        Or, want to get all the latest offers and framing inspiration directly to
                                        your inbox? <br>
                                        Just provide us your email in the following box, <br>
                                        we'll make sure you're getting all the latest insights instantly.
                                    </p>
                             </div>
                             <br><br>
                             <div class="row">
                                   <form action="#" method="post">
                                            <input type="text" name="email" placeholder="Your Email" class="inputcls" required>  
                                            <input type="text" name="fname" placeholder="First Name" class="inputcls" required>  
                                            <input type="text" name="lname" placeholder="Last Name" class="inputcls" required>
                                            <input type="submit" name="submit" value="SUBSCRIBE" class="inputbtn">
                                    </form>
                             </div>
                         </div>
                         <div class="col">
                              <img src="/images/footerimg.jpg" alt="print" style="width:100%">
                         </div>
                     </div>
                 </div>
                 <br><br><br>

                 <div class="footer-dark" style="background-color: black;">
                        <footer >
                            <div class="container" >
                                <div class="row" >
                                    <div class=" col-md-3">
                                    
                                        <ul>
                                            <li><div class="col item social" style="margin-right: 90px;"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div></li><br>
                                            <li style="color: #CCA929;">
                                                <b> OUR STORE TODAY</b>
                                            </li>
                                            <br>
                                            <li>
                                                <p>CASTLE HILL : Unit 7, Victoria Industrial Park,
                                                No. 8, Victoria Avenue, Castle Hill NSW 2154, Australia
                                                </p>
                                            </li>
                                            <li><hr style="background-color: white;"></li>
                                            
                                            <li><i class="fa fa-envelope-o" style="font-size:24px"></i> sales@modernartframing.com.au <br>Modern Art Framing 2020 ©</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 col-md-3 item"></div>
                                    
                                    
                                    <div class="col-md-6 item text" style="text-align: right;">
                                       <img src="/images/payment.jpg" alt="" width="80%" height="70%"><br>
                                       <p class="copyright" style="text-align: right;">All Rights Reserved. Designed by <br> Muka Studio.</p>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </footer>
                    </div>
               
            
        
    </body>
</html>






