<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- internal css -->
    <style>
        video{
            width: 100%;
            height: 100%;
        }
    </style>

    <title>E Learning</title>
</head>


<body>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">E-Learning</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
            <li class="nav-item"><a href="paymentStatus.php" class="nav-link">Payment Status</a></li>

            <?php
                session_start();
                if(isset($_SESSION['is_login']))
                {
                    echo'
                    <li class="nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    ';
                }
 
                else
                {
                    echo'
                    <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
                    <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>
                    ';
                }
                ?>
                <!-- <li class="nav-item"><a href="" class="nav-link" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a></li> -->

            <li class="nav-item"><a href="stufeedback.php" class="nav-link">Feedback</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- end navigation -->