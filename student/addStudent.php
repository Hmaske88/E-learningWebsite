<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    include_once("../dbconnection.php");

    // Checking Email Already Registered
    if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){

        $stuemail = $_POST['stuemail'];
        
        $sql = "SELECT stu_email FROM student WHERE stu_email = '".$stuemail."'";
        
        $result = $conn->query($sql);
        
        $row = $result->num_rows;
        
        echo json_encode($row);
    }

    // Insert student
    if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])){
        $stuname= $_POST['stuname'];
        $stuemail= $_POST['stuemail'];
        $stupass= $_POST['stupass'];

        $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$stuname', '$stuemail', '$stupass')";

        if($conn->query($sql)==TRUE)
        {
            echo json_encode("ok");
        }
        else
        {
            echo json_encode("failed");
        }
    }



    // Student Login Verification
    if(!isset($_SESSION['is_login']))
    {
        if(isset($_POST['checkLogEmail']) && isset($_POST['stuLoginEmail']) && isset($_POST['stuLoginPass']))
        {
            $stuLogEmail = $_POST['stuLoginEmail'];
            $stuLogPass = $_POST['stuLoginPass'];

            $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '".$stuLogEmail."' AND stu_pass='".$stuLogPass."'";

            $result = $conn->query($sql);

            $row = $result->num_rows;

            if($row===1)
            {
                $_SESSION['is_login']=true;
                $_SESSION['stuLogEmail']=$stuLogEmail;
                echo json_encode($row);
            }
            else if($row===0)
            {
                echo json_encode($row);
            }
        }
    }
    

?>