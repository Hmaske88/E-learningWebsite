<?php
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

?>

<div class="col-sm-9 mt-5">
    <p class="bg-dark text-white p-2 text-center">List of Courses</p>

    <?php
        $sql="SELECT * FROM course";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
    ?>
            <table class="table">
                <!--Table-->
                <thead>
                    <tr>
                        <th scope="col">Course ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                <!-- this is inner php -->
                <?php
                    while($row=$result->fetch_assoc())
                    {
                        echo'
                        <tr>
                            <th scope="row">'.$row["course_id"].'</th>
                            <td>'.$row['course_name'].'</td>
                            <td>'.$row['course_author'].'</td>
                            <td>
                                <form action="editcourse.php" method="POST" class="d-inline">
                                <input type="hidden" name="id" value='.$row["course_id"].'>
                                    <button type="submit" class="btn btn-info mr-3" name="view" vaLue ="View">
                                    <i class="fas fa-pen"></i>
                                    </button>
                                </form>
                    
                                <form action="" method="POST" class="d-inline">
                                <input type="hidden" name="id" value='.$row["course_id"].'>
                                    <button type="submit" class="btn btn-secondary" name="delete" vaLue ="Delete">
                                    <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        ';
                    }
                ?>
                <!-- end of inner php -->

                </tbody>
            </table>

    <?php
        }

        else
        {
            echo "0 Result";
        }

        if(isset($_REQUEST['delete']))
        {
            $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
            
            if ($conn->query($sql)== TRUE) {
                echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
            }
            else
            {
                echo "Unable to Delete Data";    
            }
        }
    ?>

    
</div>
</div>
<!-- div row close from header -->

<div>
    <a class="btn btn-danger box" href="./addCourse.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>

<?php
    include("./admininclude/footer.php");
?>