<?php
if (!isset($_SESSION)) {
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}
?>

<div class="col-sm-9 mt-5 mx-3">
    <form action="" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3">
            <label for="checkid">Enter Course Id:</label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

    <!-- Display course details below the search bar -->
    <?php
    if (isset($_REQUEST['checkid'])) {
        $course_id = intval($_REQUEST['checkid']);
        $sql = "SELECT * FROM course WHERE course_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $course_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            $_SESSION['course_id'] = $row['course_id'];
            $_SESSION['course_name'] = $row['course_name'];
    ?>
            <div class="mt-5 mx-3">
                <h3 class="mt-5 bg-dark text-white p-2">Course Id: <?php echo $row['course_id']; ?> Course Name: <?php echo $row['course_name']; ?> </h3>
            </div>
        
    <?php
        } else {
            echo "<div class='col-sm-9 mt-5 mx-3'>Course not found.</div>";
        }
        $stmt->close();
    }


    if (isset($_REQUEST['checkid'])) {
        $course_id = intval($_REQUEST['checkid']);
        $sql = "SELECT * FROM lesson WHERE course_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $course_id);
        $stmt->execute();
        $result = $stmt->get_result();

        






        $sql = "SELECT * FROM lesson WHERE course_id = {$_REQUEST['checkid']}";
        $result = $conn->query($sql);

        echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">Lesson ID</th>
                    <th scope="col">Lesson Name</th>
                    <th scope="col">Lesson Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>';

            while($row = $result->fetch_assoc()){  

                echo '<tr>';
                    echo'<th scope="row">'.$row['lesson_id'].'</th>';
                    echo'<td>'.$row['lesson_name'].'</td>';
                    echo'<td>'.$row['lesson_link'].'</td>';
                    echo'<td>';
                        echo'
                        
                        <form action="editlesson.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value='.$row["lesson_id"].'>
                            <button type="submit" class="btn btn-info mr-3" name="view" value="View">
                            <i class="fas fa-pen"></i>
                            </button>
                        </form>
    
                        <form action="" method="POST" class="d-inline">
                            <input type="hidden" name="id" value='.$row["lesson_id"].'>
    
                            <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                                <i class="far fa-trash-alt"></i>
                            </button>
    
                        </form>
                    </td>
                </tr>';
                }
            echo '</tbody>
          </table>';  

        
    if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM lesson WHERE lesson_id = {$_REQUEST['id']}";

        if($conn->query($sql) === TRUE){
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        }
    
        else{
            echo "Unable to Delete Data";
        }
    }
}
    ?>
</div>




 <!-- add button  -->
<?php 
if(isset($_SESSION['course_id'])){
    echo '
   
    <div>
        <a class="btn btn-danger box" href="./addLesson.php">
            <i class="fas fa-plus fa-2x"></i>
        </a>
    </div>
    ';
}
?>

<?php
include('./admininclude/footer.php')
?>