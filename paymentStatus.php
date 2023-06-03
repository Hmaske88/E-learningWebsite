<?php
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

    <!-- start main content -->
    <div class="container">
        <h2 class="text-center my-4">Payment Status </h2>
        <form method="post" action="">
            <div class="form-group row">
                <label class="offset-sm-3 col-form-label">Order ID: </label>
                <div>
                    <input type="text" class="form-control mx-3" >
                </div>
                <div style="text-align: center;">
                    <input type="submit" class="btn btn-primary mx-4" value="View">
                </div>
            </div>
        </form>
    </div>
    <!-- end main content -->

    </body>
</html>