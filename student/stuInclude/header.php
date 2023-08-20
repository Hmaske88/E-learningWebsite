<?php

include_once('../dbConnection.php');

if(!isset($_SESSION))
{
    session_start();
}

if(isset($_SESSION['is_login']))
{
    $stuLogEmail= $_SESSION['stuLogEmail'];
}

if(isset($stuLogEmail))
{
    $sql = "SELECT stu_img FROM student WHERE stu_email='$stuLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">

    <link rel="stylesheet" href="../css/adminstyle.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Student Profile</title>
</head>


<body>
    <!-- Top Navbar -->

    <nav class="navbar navbar-dark fixed-top p-0 shadow"
    style="background-color: #225470;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"
    href="adminDashboard.php">E-Learning <small class="text-white">Student Area</small></a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top:40px;">
        <div class="row">
    <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
    <ul class="nav flex-column">

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-user"></i> 
                Profile
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../stufeedback.php">
                <i class="fab fa-accessible-icon"></i>
                Feedback
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../logout.php">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </li>

    </ul>
    </div>
    </nav>