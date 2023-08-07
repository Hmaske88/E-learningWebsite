<?php
    include("./admininclude/header.php");
    include("../dbConnection.php");

    if(isset($_REQUEST['courseSubmitBtn']))
    {
        // Checking for Empty Fields
        if(($_REQUEST['course_name'] == "") || ($_REQUEST['course_desc'] == "") || ($_REQUEST['course_author']=="") || ($_REQUEST['course_duration'] == "") || ($_REQUEST['course_price']=="") || ($_REQUEST['course_original_price']== ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }
        else
        {
            $course_name = $_REQUEST['course_name']; 
            $course_desc= $_REQUEST['course_desc']; 
            $course_author = $_REQUEST['course_author']; 
            $course_duration = $_REQUEST['course_duration']; 
            $course_price = $_REQUEST['course_price']; 
            $course_original_price = $_REQUEST['course_original_price']; 

            // For adding the image-> below lines are used
            $course_image = $_FILES['course_img']['name']; 
            $course_image_temp = $_FILES['course_img']['tmp_name']; 
            $img_folder='../images/courseimg/'.$course_image; 
            move_uploaded_file($course_image_temp, $img_folder);

            // For Inserting into the database name course
            $sql = "INSERT INTO course (course_name, course_desc, course_author, course_img, course_duration, course_price, course_original_price) VALUES ('$course_name', '$course_desc', '$course_author', '$img_folder', '$course_duration', '$course_price', '$course_original_price')";

            if($conn->query($sql) == TRUE) 
            {
                $msg = '<div class="alert alert-success col-sm-6 m1-5 mt-2">Course Added Succesfully</div>'; 
            }

            else 
            {
                $msg = '<div class="alert alert-danger col-sm-6 m1-5 mt-2">Unable to Add Course</div>';
            }
        } 
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Course</h3>
<form action="" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="course_name">Course Name</label>
    <input type="text" class="form-control" id="course_name" name="course_name">
</div>

<div class="form-group">
    <label for="course_desc">Course Description</label> 
    <textarea class="form-control" id="course_desc" name="course_desc" rows=2></textarea>
</div>

<div class="form-group">
    <label for="course_author">Author</label> 
    <input type="text" class="form-control" id="course_author" name="course_author"></input>
</div>

<div class="form-group">
    <label for="course_duration">Course Duration</label> 
    <input type="text" class="form-control" id="course_duration" name="course_duration"></input>
</div>

<div class="form-group">
    <label for="course_original_price">Course Original Price</label> 
    <input type="text" class="form-control" id="course_original_price" name="course_original_price"></input>
</div>

<div class="form-group">
    <label for="course_price">Course Selling Price</label> 
    <input type="text" class="form-control" id="course_selling_price" name="course_selling_price"></input>
</div>

<div class="form-group">
    <label for="course_img">Course Image</label> 
    <input type="file" class="form-control-file" id="course_img" name="course_img"></input>
</div>

<div class="text-center">
    <button type="submit" class="btn btn-danger" id="courseSubmitBtn" name="courseSubmitBtn">Submit</button>
    <a href="courses.php" class="btn btn-secondary">Close</a>
</div>

<div>
    <?php
        if(isset($msg))
        {
            echo $msg;
        }
    ?>
</div>

</form>
</div>

</div> <!-- div row closed from header -->
</div> <!-- div Conatiner-fluid close from header -->



<?php
    include("./admininclude/footer.php");
?>