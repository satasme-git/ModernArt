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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
    <title>Document</title>
    <style>
        .card-block {
    min-height: 220px;
    margin-bottom: 15px;
}
    </style>
</head>
<body>
  
    <div class="container">
        <div class="row">
          <center>
          <div class="pagination">
            <a href="#" id="iconprint"><span class="glyphicon glyphicon-arrow-left"></span></a>
            <a href="#" class="num" style="background-color:#D6C589; color:white">1</a>
            <i class="fa fa-minus" aria-hidden="true" id="iconprint"></i>
            <a href="#" class="num">2</a>
            <i class="fa fa-minus" aria-hidden="true" id="iconprint"></i>
            <a href="#" class="num">3</a>
            
            <a href="#" id="iconprint"><span class="glyphicon glyphicon-arrow-right"></span></a>
            </div>
            </center>
        </div>

        
    </div>

    <div class="container" style="border: 1px solid #000000;">
        <div class="row">
            <div class="col-5" style="break-inside: avoid; overflow: hidden;">
                <img src="/images/frameimg.jpg" width="95%" height="95%" alt="">
            </div>
            <div class="col" style="break-inside: avoid; overflow: hidden;">
                <div class="row">
                    <div class="col">
                         <input type="radio"  name="frame" value="custom"> &nbsp;&nbsp;
                                   <label for="custom"><p style="font-size: 11px; margin-right:50px;"> CUSTOM INPUT SIZE (MM)</p></label>

                                   <input type="radio"  name="frame" value="standard"> &nbsp;&nbsp;
                                  <label for="standard"><p style="font-size: 11px;">STANDARD SIZE</p></label>
                                  <br>
                                  <input type="submit" class="printbtn" name="width" value="Width">
                                 <input type="submit" class="printbtn" name="height" value="Height">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Choose a Frame</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <a href=""><button class="framebtn">Black and White</button></a>
                         
                    </div>
                    <div class="col">
                        <a href=""><button class="framebtn">Modern gold,<br> Silver and Metalic</button></a>
                    </div>
                    <div class="col">
                        <a href=""><button class="framebtn">Ornate Gold,<br> Silver and Black</button></a>
                    </div>
                    <div class="col">
                        <a href=""><button class="framebtn">Colour</button></a>
                    </div>
                    <div class="col">
                        <a href=""><button class="framebtn">Modern Timber</button></a>
                    </div>
                    <div class="col">
                        <a href=""><button class="framebtn">Traditional Black</button></a>
                    </div>
                    <div class="col">
                        <a href=""><button class="framebtn">Oak-like Timber</button></a>
                    </div>
                    
                </div><br>
                <div class="row">
                    <div class="col">
                        <a href=""><button class="framebtn">Distressed <br> and Shabby</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <div class="container-fluid pt-3">
        
                                <div class="row flex-row flex-sm-nowrap pt-3">
                                    <div class="col-sm-4 col-md-3">
                                        <div class="card card-block card-primary card-inverse">
                                            <img src="/images/m1.jpg" width="100%" height="100%" alt="">
                                            <center><p>Code: BW-1009</p></center>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="card card-block card-primary card-inverse">
                                        <img src="/images/m2.jpg" width="100%" height="100%" alt="">
                                        <center><p>Code: BW-1009</p></center>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="card card-block card-primary card-inverse">
                                            <img src="/images/m3.jpg" width="100%" height="100%" alt="">
                                            <center><p>Code: BW-1009</p></center>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="card card-block card-primary card-inverse">
                                            <img src="/images/m4.jpg" width="100%" height="100%" alt="">
                                            <center><p>Code: BW-1009</p></center>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <div class="container">
                             <h3>Choose a Mat Colour</h3>
                             <p>Select Number of Mats</p>
                             <div style="display: flex;">
                                   <input type="radio"  name="frame" value="standard"> &nbsp;&nbsp;
                                  <label for="standard"><p style="font-size: 11px;">1</p></label>

                                  <input type="radio"  name="frame" value="standard"> &nbsp;&nbsp;
                                  <label for="standard"><p style="font-size: 11px;">2</p></label>

                                  <input type="radio"  name="frame" value="standard"> &nbsp;&nbsp;
                                  <label for="standard"><p style="font-size: 11px;">3</p></label>
                             </div>
                         </div>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>