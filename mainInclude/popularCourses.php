


        <!-- start popular courses 1st card deck -->

        <!-- inline css is used below -->
        <div class="card-deck mt-4" style="display:flex; flex-derection:row; justify-content:space-between;">

            <?php
                $sql="SELECT * FROM course LIMIT 3";
                $result=$conn->query($sql);
                if($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        $course_id=$row['course_id'];
                        echo'
                        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                        <div class="card" style="padding:20px; width: 30vw;">
                            <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="" height="250">
                            <div class="card-body" style="height: 150px">
                                <h5 class="card-title">'.$row['course_name'].'</h5>
                                <p class="card-text">'.$row['course_desc'].'</p>
                            </div>
                            <div class="card-footer" style="text-align: center;">
                                <p class="card-text d-inline">Price: 
                                    <small><del>&#8377 '.$row['course_original_price'].'</del></small>
                                    <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                                </p>
                                <a class="btn btn-primary text-white font-weight-bolder float-right" href="courseDetails.php?course_id='.$course_id.'">Enroll</a>
                            </div>
                        </div>
                        </a>
                        ';
                    }
                }
            ?>

            <!-- <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card" style="padding:20px;">
                    <img src="images/php.jpg" class="card-img-top" alt="Guitar">
                    <div class="card-body">
                        <h5 class="card-title">Learn php full course</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat excepturi maiores molestiae quas doloremque, rem doloribus saepe quam expedita ex ducimus veritatis, fuga, enim cumque similique libero totam. Magni, architecto?</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small><del>&#8377 2000</del></small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="courseDetails.php">Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card" style="padding:20px;">
                    <img src="images/php.jpg" class="card-img-top" alt="Guitar">
                    <div class="card-body">
                        <h5 class="card-title">Learn php full course</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat excepturi maiores molestiae quas doloremque, rem doloribus saepe quam expedita ex ducimus veritatis, fuga, enim cumque similique libero totam. Magni, architecto?</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small><del>&#8377 2000</del></small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card" style="padding:20px;">
                    <img src="images/php.jpg" class="card-img-top" alt="Guitar">
                    <div class="card-body">
                        <h5 class="card-title">Learn php full course</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat excepturi maiores molestiae quas doloremque, rem doloribus saepe quam expedita ex ducimus veritatis, fuga, enim cumque similique libero totam. Magni, architecto?</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small><del>&#8377 2000</del></small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a> -->
        </div>
        <!-- End of popular course 1st card deck -->


        <!-- start popular courses 2nd card deck -->
        <div class="card-deck mt-4" style="display:flex; flex-derection:row; justify-content:space-between;">

            <?php
                $sql="SELECT * FROM course LIMIT 3,3";
                $result=$conn->query($sql);
                if($result->num_rows > 0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        $course_id=$row['course_id'];
                        echo'
                        <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                        <div class="card" style="padding:20px; width: 30vw;">
                            <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="" height="250">
                            <div class="card-body" style="height: 150px">
                                <h5 class="card-title">'.$row['course_name'].'</h5>
                                <p class="card-text">'.$row['course_desc'].'</p>
                            </div>
                            <div class="card-footer" style="text-align: center;">
                                <p class="card-text d-inline">Price: 
                                    <small><del>&#8377 '.$row['course_original_price'].'</del></small>
                                    <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                                </p>
                                <a class="btn btn-primary text-white font-weight-bolder float-right" href="courseDetails.php?course_id='.$course_id.'">Enroll</a>
                            </div>
                        </div>
                        </a>
                        ';
                    }
                }
            ?>
            <!-- <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card" style="padding:20px;">
                    <img src="images/Python.png" class="card-img-top" alt="python">
                    <div class="card-body">
                        <h5 class="card-title">Learn Python easy way</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat excepturi maiores molestiae quas doloremque, rem doloribus saepe quam expedita ex ducimus veritatis, fuga, enim cumque similique libero totam. Magni, architecto?</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small><del>&#8377 2000</del></small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card" style="padding:20px;">
                    <img src="images/Python.png" class="card-img-top" alt="python">
                    <div class="card-body">
                        <h5 class="card-title">Learn Python easy way</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat excepturi maiores molestiae quas doloremque, rem doloribus saepe quam expedita ex ducimus veritatis, fuga, enim cumque similique libero totam. Magni, architecto?</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small><del>&#8377 2000</del></small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a>
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
                <div class="card" style="padding:20px;">
                    <img src="images/Python.png" class="card-img-top" alt="python">
                    <div class="card-body">
                        <h5 class="card-title">Learn Python easy way</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat excepturi maiores molestiae quas doloremque, rem doloribus saepe quam expedita ex ducimus veritatis, fuga, enim cumque similique libero totam. Magni, architecto?</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: 
                            <small><del>&#8377 2000</del></small>
                            <span class="font-weight-bolder">&#8377 200</span>
                        </p>
                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                    </div>
                </div>
            </a> -->
        </div>

        <!-- End of popular course 2nd card deck -->
        
    </div>