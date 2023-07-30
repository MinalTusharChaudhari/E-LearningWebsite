   <!-- including header start   -->
   <?php
        include('./dbConnection.php');
        include('./mainInclude/header.php');
    ?>
    <!-- including header end   -->



    <!-- course page start  -->

    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="images/bigimg.jpg" alt="courses" style="height: 750px; width: 100%;  box-shadow: 10px; ">
        </div>
    </div>
   <!-- course page end  -->




   <!-- cards start  --> 
    <!-- <small><del>&#8377</del></small> -->

    <h1 class="text-center" style="margin-top: 190px;">All Courses</h1>

    <div class="row mt-4" style="padding: 0rem 2rem 0rem 2rem;">
        
        <?php 

        $sql = "SELECT * FROM course ";
        $result = $conn-> query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '
                
            
                    <div class="col-sm-4 mb-4" >

                        <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">
                    
                        <div class="card">
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
                    </div>
                
                ';
            }
        }
        ?>
    </div>

    <!-- <div class="card-deck">
        
        <div class="card">
            <img src="images/boy1.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        
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


    <!-- cards end  -->















    <!-- incuding footer start  -->
    <?php
        include('./mainInclude/footer.php');
    ?>

    <!-- including footer end   -->