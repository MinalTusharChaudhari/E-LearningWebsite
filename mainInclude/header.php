<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning Website</title>
    
    <!-- bootstrap css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- font awesome  -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">

</head>
<body style="background-color: #875aae;">

    <!-- navigation start  -->
    <nav class="navbar navbar-expand-sm  pl-5" style="height: 85px; background-color: #875aae; !important">
        <a class="navbar-brand" href="index.php"><img src="images/E-learning-logos_white2.png" style="height:90px; padding:0px;" alt=""></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #59385b; ">
            <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="collapse navbar-collapse"        id="navbarNav">   
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item active custom-nav-item">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="courses.php">Courses</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="paymentstatus.php">Payment Status</a>
                </li>


                <?php
                    session_start();
                    if(isset($_SESSION['is_login'])){
                        echo '<li class="nav-item custom-nav-item">
                        <a class="nav-link" href="student/studentProfile.php">My Profile</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a href="logout.php" class="nav-link" href="#">Logout</a>
                    </li>';
                    }

                    else {
                        echo '<li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a>
                    </li>';
                    }
                ?>    



                
                
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="#">Feedback</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
        </div>
    </nav>

    <!-- navigation end  -->