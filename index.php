<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div>
            <br>
            <h1 class="text-center">Upload Your Scaned Image</h1>
            <p>It is a API based application, which can be used in banks and goverment offices to convert user application form into digital data within few seconds.<br>For more info <a href="#">Click Here</a></p>
        </div>
        <div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="file" class="form-control-file border">
                    <br>
                    <input type="submit" value="Get Info" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</body>
</html>