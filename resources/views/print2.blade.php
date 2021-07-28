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
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="upload.js"></script>
    <title>Review image</title>
    <style>
        p {
            font-size: 12px;
        }
        h1 {
            font-size: 80px;
            color: #947139;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
          <center>
          <div class="pagination">
            <a href="#" id="iconprint"><span class="glyphicon glyphicon-arrow-left"></span></a>
            <a href="#" class="num" >1</a>
            <i class="fa fa-minus" aria-hidden="true" id="iconprint"></i>
            <a href="#" class="num" style="background-color:#D6C589; color:white">2</a>
            <i class="fa fa-minus" aria-hidden="true" id="iconprint"></i>
            <a href="#" class="num">3</a>
            <i class="fa fa-minus" aria-hidden="true" id="iconprint"></i>
            <a href="#" class="num">4</a>
            
            <a href="#" id="iconprint"><span class="glyphicon glyphicon-arrow-right"></span></a>
            </div>
            </center>
        </div>
    </div>
    <div class="container" style="text-align: center; border-width:5px; border-bottom-style:outset; border-right-style:outset;">
        <div class="row">
            <div class="col-4">
                <div class="row">
                   <div class="col">
                   <img src="/images/reviewimg.jpg" width="90%" height="100%" alt="">
                   </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm">
                      <img src="/images/reviewicon1.jpg" width="40%" height="40%" alt=""><br>
                      <p>Rotate Left</p>
                    </div>
                    <div class="col-sm">
                    <img src="/images/reviewicon2.jpg" width="40%" height="40%" alt=""><br>
                    <p>Rotate Right</p>
                    </div>
                    <div class="col-sm">
                    <img src="/images/reviewicon3.jpg" width="40%" height="40%" alt=""><br>
                    <p>Square</p>
                    </div>
                    <div class="col-sm">
                    <img src="/images/reviewicon4.jpg" width="40%" height="40%" alt=""><br>
                    <p>Crop and Resize</p>
                    </div>
                    <div class="col-sm">
                    <img src="/images/reviewicon5.jpg" width="40%" height="40%" alt=""><br>
                    <p>New Image</p>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-8" style="margin-top: 80px; position: relative;">
                <center><h1> Let’s Review <br><b>your</b> <br> image.</h1>
                        <p>*Maximum Printable Size Based on Image Uploaded 1200x450mm</p>
                        
               </center>
               
                <button class="nextbtn">Next<i class="fas fa-arrow-alt-circle-right"></i></button>
                
            </div>
           
        </div>
    </div>
</body>
</html>