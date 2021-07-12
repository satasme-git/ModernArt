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
        <script src="upload.js"></script>
    <title>Print+Frame</title>
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
            <i class="fa fa-minus" aria-hidden="true" id="iconprint"></i>
            <a href="#" class="num">4</a>
            
            <a href="#" id="iconprint"><span class="glyphicon glyphicon-arrow-right"></span></a>
            </div>
            </center>
        </div>
    </div>
    <div style="margin-left: 50px; margin-right:50px;">
       <img src="/images/printbg1.jpg" width="100%" height="620vh;" alt="">
            <div class="bg-text2">
                <center>
                <div class="circle">
                    <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload your Image</button>
                        <i class="fa fa-cloud-upload" style="font-size:22px"></i>
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                            <h6>Just drag and drop your file.</h6>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                     </div>
                </div> 
                </center> 
            </div>
    </div>
    
</body>
</html>