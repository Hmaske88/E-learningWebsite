<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
</head>

<body> -->

<?php
    include('./mainInclude/header.php');
?>


    <div class="container" id="Contact" style="margin-top: 10%;">
        <h2 class="text-center mb-4">Contact Us</h2>
            <div class="col-md-8" style="margin-left: 20%;">
                <form action="" method="post">
                    <input type="text" class="form-control" name="name" placeholder="name"><br>
                    <input type="text" class="form-control" name="subject" placeholder="subject"><br>
                    <input type="text" class="form-control" name="email" placeholder="E-mail"><br>
                    <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
                    <input class="btn btn-primary" type="submit" value="send" name="submit" style="margin-left: 45%;"><br><br>
                </form>
            </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script> src="js/bootstrap.min.js"</script>
    <script src="js/all.min.js"></script>
</body>
</html>