<?php
    include('./dbConnection.php');
    include('./mainInclude/header.php');
?>
    <!-- start image -->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./images/studyImage.jpg" alt="courses"
            style="height: 500px; width:100%; object-fit:cover; box-shadow: 10px;"/>
        </div>
    </div>
    <!-- End image -->

    <!-- start courses -->
    <div class="container mt-5">
        <h1 class="text-center">All Courses</h1>
    <?php
        include('./mainInclude/popularCourses.php');
    ?>
    <!-- end courses -->
</body>
</html>