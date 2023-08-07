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
    <title>Dashboard</title>
</head>


<body>
    <!-- Top Navbar -->

    <nav class="navbar navbar-dark fixed-top p-0 shadow"
    style="background-color: #225470;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"
    href="adminDashboard.php">E-Learning <small class="text-white">Admin Area</small></a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top:40px;">
        <div class="row">
    <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
    <ul class="nav flex-column">

        <li class="nav-item">
            <a class="nav-link" href="adminDashboard.php">
                <i class="fas fa-tachometer-alt"></i> 
                Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="courses.php">
                <i class="fab fa-accessible-icon"></i>
                Courses
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-accessible-icon"></i>
                Lessons
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="students.php">
                <i class="fas fa-users"></i>
                Students
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-table"></i>
                Sell Report
            </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-table"></i>
                Payment Status
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-accessible-icon"></i>
                Feedback
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="adminChangePass.php">
                <i class="fas fa-key"></i>
                Change Password
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../logout.php">
                <i class="fab fa-sign-out-alt"></i>
                Logout
            </a>
        </li>
    </ul>
    </div>
    </nav>