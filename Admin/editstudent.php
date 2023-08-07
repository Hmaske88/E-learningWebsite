<?php
        // For security as user should not directly go to the admin courses through url
        if(!isset($_SESSION))
        { 
            session_start();
        }

        include("./admininclude/header.php");
        include("../dbConnection.php");
        
        if(isset($_SESSION['is_admin_login']))
        { 
            $adminEmail= $_SESSION['adminLogEmail'];
        }
        else 
        {
            echo "<script> location.href='../index.php'; </script>"; 
        }


        
    // Update
    if(isset($_REQUEST['req_update']))
    {
        // Checking for Empty Fields
        if(($_REQUEST['stu_id'] =="") || ($_REQUEST['stu_name']=="") || ($_REQUEST['stu_email'] =="") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ']==""))
        {
            // msg displayed if required field missing
            $msg = '<div class="alert alert-warning col-sm-6 m1-5 mt-2" role="alert"> Fill All Fileds </div>';
        } 
        else 
        {
            // Assigning User Values to Variable
            $sid = $_REQUEST['stu_id'];
            $sname = $_REQUEST['stu_name']; 
            $semail= $_REQUEST['stu_email']; 
            $spass = $_REQUEST['stu_pass']; 
            $socc = $_REQUEST['stu_occ']; 

            $sql = "UPDATE student SET stu_id = '$sid', stu_name ='$sname', stu_email= '$semail', stu_pass='$spass', stu_occ='$socc' WHERE stu_id = '$sid'";
            
            if($conn->query($sql) == TRUE) 
            {
                // below msg display on form submit success
                $msg = '<div class="alert alert-success col-sm-6 m1-5 mt-2" role="alert"> Updated Successfully </div>';
            }
            else
            {
                // below msg display on form submit failed
                $msg = '<div class="alert alert-danger col-sm-6 m1-5 mt-2" role="alert"> Unable to Update </div>';
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">


<?php
if(isset($_REQUEST['view']))
{
    $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>


<h3 class="text-center">Update New Student</h3>
<form action="" method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="stu_id">Student ID</label>
    <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row["stu_id"])) {echo $row["stu_id"];} ?>" readonly>
</div>

<div class="form-group">
    <label for="stu_name">Name</label>
    <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if(isset($row["stu_name"])) {echo $row["stu_name"];} ?>">
</div>

<div class="form-group">
    <label for="stu_email">Email</label> 
    <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php if(isset($row["stu_email"])) {echo $row["stu_email"];} ?>"></input>
</div>

<div class="form-group">
    <label for="stu_pass">Password</label> 
    <input type="text" class="form-control" id="stu_pass" name="stu_pass" value="<?php if(isset($row["stu_pass"])) {echo $row["stu_pass"];} ?>"></input>
</div>

<div class="form-group">
    <label for="stu_occ">Occupation</label> 
    <input type="text" class="form-control" id="stu_occ" name="stu_occ" value="<?php if(isset($row["stu_occ"])) {echo $row["stu_occ"];} ?>"></input>
</div>

<div class="text-center">
    <button type="submit" class="btn btn-danger" id="req_update" name="req_update">Update</button>
    <a href="students.php" class="btn btn-secondary">Close</a>
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