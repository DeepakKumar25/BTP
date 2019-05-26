<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>processing...</h1>
                <img src="uploads/photo.png" alt="" width="300">
                <hr>
                <h6>Status</h6>
                <span id="progress"></span>
                <!-- <div id="result"></div> -->
                <form action="filter.php" method="post" id="myform">
                    <input type="hidden" name="data" value="" id="resultdata">
                </form>
                
            </div>
        </div>
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--    <script src='https://cdn.jsdelivr.net/gh/naptha/tesseract.js@v1.0.14/dist/tesseract.min.js'></script>-->
    <script src="tessaract.js"></script>
    <script>
        let img = new Image();
        img.src = "uploads/photo.png";
        img.onload = function(){
            console.log("loaded...","$$$$");
            Tesseract.recognize(img).progress((progress)=>{
                console.log(progress,"$$$");
                
                if(progress.status === "recognizing text"){
                    $('#progress').text(progress.progress*100 + "%");
                }
            }).then((result)=>{
                console.log(result,"$$$");
                //$('#result').text(result.text);
                $('#resultdata').val(result.text);
                document.forms["myform"].submit();

            })

        }
    </script>
</body>
</html>