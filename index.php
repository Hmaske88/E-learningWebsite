<?php
    include('./mainInclude/header.php');
    include('./dbConnection.php');
?>

    <!-- start video -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/banvid.mp4">
            </video>
            <div class="vid-overlay">
            </div>
        </div>

        <div class="vid-content">
            <!-- Heading Tag -->
            <h1 class="my-content">Welcome</h1>
            <small class="my-content">Happy Learning</small><br><br>

            <?php
                if(!isset($_SESSION['is_login']))
                {
                    echo'
                    <a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>
                    ';
                }
                else
                {
                    echo'
                    <a href="" class="btn btn-primary mt-3">My Profile</a>
                    ';
                }
            ?>
            
        </div>
    </div>
    <!-- end video -->

    <!-- start popular courses -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Courses</h1>
    <?php
        include('./mainInclude/popularCourses.php');
    ?>
    <br>
        <div style="text-align: center;">
            <a class="btn btn-danger btn-sm" href="courses.php">View all Courses</a>
        </div>
    <!-- End of most popular courses -->


    <!-- Start registration model -->
    <!-- Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Registration</h1>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- start Registration form -->
            <!-- <form id="stuLoginForm">
                <div class="mb-3">
                  <label for="RegInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="RegInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="LoginInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="LoginInputPassword1">
                </div>
            </form> -->
            <form id="stuRegForm" name="stuRegForm">
                <div class="mb-3">
                    <label for="RegInputName" class="form-label">Name</label>
                    <small id="statusMsg1"></small>
                    <input type="text" class="form-control" name="name" id="RegInputName">
                </div>
                <!-- <div class="mb-3">
                    <label for="RegUserId" class="form-label">User Id</label>
                    <input type="text" class="form-control" id="RegUserId" name="RegUserId">
                </div> -->
                <div class="mb-3">
                  <label for="RegInputEmail1" class="form-label">Email address</label>
                  <small id="statusMsg2"></small>
                  <input type="email" class="form-control" id="RegInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="RegInputPassword1" class="form-label">Password</label>
                  <small id="statusMsg3"></small>
                  <input type="password" class="form-control" id="RegInputPassword1" name="RegInputPassword1">
                </div>
                <!-- <div class="mb-3">
                  <label for="Address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="RegAddress">
                </div>
                <div class="mb-3">
                  <label for="ZipCode" class="form-label">Zip Code</label>
                  <input type="text" class="form-control" id="RegZipCode">
                </div>
                <div class="mb-3">
                    <label for="sex">Sex</label><br>
                    <input type="radio" id="male" name="sex">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex">
                    <label for="male">Female</label>
                </div>
                <div class="mb-3">
                    <label for="language">Language</label><br>
                    <input type="checkbox" id="english" name="lan1">
                    <label for="english">English</label>
                    <input type="checkbox" id="N-english" name="lan2">
                    <label for="N-english">Non English</label>
                </div> -->
                <!-- <div>
                    <button type="submit">submit</button>
                </div> -->
            </form>
            <!-- end registration form -->
        </div>
            <div class="modal-footer">
                <span id="successMsg"></span>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
                <!-- <button type="button" class="btn btn-primary" id="stuRegBtn" onclick="return validateForm">Sign Up</button> -->
            </div>
        </div>
    </div>
    </div>
    <!-- end registration model -->


    <!-- Start login model -->
    <!-- Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Login</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- start login form -->
                <form id="stuLoginForm">
                    <div class="mb-3">
                      <label for="LoginInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="LoginInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="LoginInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="LoginInputPassword1">
                    </div>
                </form>
                <!-- end login form -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="stuLoginBtn"  onclick="checkStuLogin()">Login</button>
            </div>
            </div>
        </div>
        </div>
        <!-- end login model -->


    <!-- Start Admin login model -->
    <!-- Modal -->
    <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- start Admin login form -->
                <form id="adminLoginForm">
                    <div class="mb-3">
                      <label for="adminLoginInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="adminLoginInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="adminLoginInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="adminLoginInputPassword1">
                    </div>
                </form>
                <!-- end Admin login form -->
            </div>
            <div class="modal-footer">
                <small id="statusAdminLogMsg"></small>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
            </div>
            </div>
        </div>
    </div>
    <!-- end Admin login model -->

<!-- Added below 3 lines for working of modal-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script> src="js/bootstrap.min.js"</script>
<script src="js/all.min.js"></script>
<script src="index.js"></script>

<!--Student Ajax call javascript -->
<script type="text/javascript" src="js/ajaxRequest.js"></script>

<!--Admin Ajax call javascript -->
<script type="text/javascript" src="js/adminAjaxRequest.js"></script>

</body>
</html>