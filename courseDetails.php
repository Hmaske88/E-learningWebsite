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

    <div class="container mt-5">
        <?php
            if(isset($_GET['course_id']))
            {
                $course_id=$_GET['course_id'];
                $sql="SELECT * FROM course WHERE course_id= '$course_id'";
                $result=$conn->query($sql);
                $row=$result->fetch_assoc();
            }
        ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo str_replace('..','.',$row['course_img']) ?>" class="card-img-top" alt="php" />
            </div>
            <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Course Name : <?php echo $row["course_name"]?></h5>
                <p class="card-text"> Description : <?php echo $row["course_desc"]?></p>
                <p class="card-text"> Duration : <?php echo $row["course_duration"]?></p>
                <form action="checkout.php" method="post">
                    <p class="card-text d-inline">Price: <small> <del>&#8377 <?php echo $row["course_original_price"]?></ del></small> <span class="font-weight-bolder">&#8377 <?php echo $row["course_price"]?><span></p>
                    <button type="submit" class="btn btn-primary text-whitefont-weight-bolder float-right" name="buy">Buy Now</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduction</td>
                    </tr>';
                </tbody>
            </table>';
        </div>
    </div>

    </body>
</html>