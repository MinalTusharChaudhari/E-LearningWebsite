    <!-- including header start   -->
    <?php
        include('./dbConnection.php');
        include('./mainInclude/header.php');
    ?>
    <!-- including header end   -->





    <!-- home page start  -->
    <div class="container-fluid">
        <div class="img-parent">
            <img src="images/boy2..png" class="laptop" alt="">
            <img src="images/html5.png" class="html" alt="">
            <img src="images/css.png" class="css" alt="">
            <img src="images/javascript.png" class="javascript" alt="">
            <img src="images/bootstrap.png" class="bootstrap"  alt="">
        </div>

        <div class="home-content">
            <h1 class="my-content">Welcome to <br/> <span>E-Learning</span></h1>
            <h5 class="my-content">Keep Learning</h5><br><br>


            <?php
                if(!isset($_SESSION['is_login'])){
                    echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
                }

                else{
                    echo '<a class="btn btn-primary btn-danger mt-3" href="student/studentProfile.php">My Profile</a>';
                }
            ?>




        </div>
    </div>
    <!-- home page end  -->
    

    <!-- text banner start  -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner" style="color: white; padding: 10px;">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>

            <div class="col-sm">
                <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee</h5>
            </div>
        </div>
    </div>
    <!-- text banner end  -->



    






    <!-- cards start  --> 
    <!-- <small><del>&#8377</del></small> -->

    <h1 class="text-center" style="margin-top: 19px;">Courses</h1>
    <!-- <div class="card-deck">
        
        <div class="card">
            
        
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200<span></p>
                <a href="coursedetails.php" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
        </div>

        <div class="card">
            <img src="images/boy1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200<span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
        </div>

        <div class="card">
            <img src="images/boy1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200<span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
        </div>



        <div class="card">
            <img src="images/boy1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200<span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
        </div>

        <div class="card">
            <img src="images/boy1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200<span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
        </div>

        <div class="card">
            <img src="images/boy1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200<span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
        </div>
    </div> -->







    <div class="row card-deck mt-4 " style="padding: 0rem 5rem 0rem 5rem ;">

        <?php 

            $sql = "SELECT * FROM course LIMIT 3";
            $result = $conn-> query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '
                    
                
                        <div class="card" >
                            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">


                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['course_name'].'</h5>
                                <p class="card-text" ></p>
                            </div>
                        
                            <div class="card-footer">
                                <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p>
                                <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                            </div>
                        </div>
                    </a>
                    
                    ';
                }
            }
        ?>
    </div>




    <div class="row card-deck mt-4 " style="padding: 0rem 5rem 0rem 5rem ;">

        <?php 

            $sql = "SELECT * FROM course LIMIT 3, 3";
            $result = $conn-> query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '
                    
                
                        <div class="card" >

                            <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">



                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['course_name'].'</h5>
                                <p class="card-text" ></p>
                            </div>
                        
                            <div class="card-footer">
                                <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'<span></p>
                                <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                            </div>
                        </div>
                    </a>
                    
                    ';
                }
            }
        ?>
    </div>


    <!-- cards end  -->



    <div class="text-center m-2" style="margin-top : 10rem;">
        <a class="btn btn-danger " href="courses.php">View All Course</a>
    </div>


    

    <!-- cards end  -->
        
        
    <!-- contact us start -->
    <?php
    include('./contact.php');
    ?>
    <!-- contact us end  -->
    




    <!-- social start  -->
    <div class="container-fluid bg-danger" style="color: white; padding: 10px; height: 3rem;">
        <div class="row text-white text-center p-1" >
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>

            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
            </div>
        </div>
    </div>
    <!-- social end   -->



    <!-- footer start     -->
    <div class="container-fluid p-4 text-white" style="background-color: white; height: 15rem; background-color: #83428e; width: 100%;">
    <div class="container" style="background-color: #83428e;">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                <p>We are a dedicated team of educators and technology enthusiasts who believe in the power of education to transform lives. Our mission is to provide accessible and high-quality online courses to learners from all walks of life, empowering them to acquire new skills and knowledge.</p>
            </div>
            
            <div class="col-sm ">
                <h5>Categeory</h5>
                <a class="text-white" href="#">Web Develepment</a><br>
                <a class="text-white" href="#">Web Designing</a><br>
                <a class="text-white" href="#">Android Develepment</a><br>
                <a class="text-white" href="#">IOSDevelepment</a><br>
                <a class="text-white" href="#">Data Analysis</a>
            </div>
            
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>E-Learning Pvt Ltd <br> Near VIIT College <br> Kondhwa, Pune <br> Ph. 9876543210</p>
            </div>    
        </div>
    </div>
    </div>
    <!-- footer end  -->


    


    <!-- incuding footer start  -->
    <?php
        include('./mainInclude/footer.php');
    ?>

    <!-- including footer end   -->