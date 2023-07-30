<?php

if (!isset($_SESSION)) {
    session_start();
}

include('./adminInclude/header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script> location.href='../index.php';</script>";
}

$adminEmail = $_SESSION['adminLogEmail'];

if (isset($_REQUEST['adminPassUpdatebtn'])) {
    if (empty($_REQUEST['adminPass'])) {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $adminPass = $_REQUEST['adminPass'];

        $sql = "UPDATE admin SET admin_pass = ? WHERE admin_email = ?";

        // Use prepared statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $adminPass, $adminEmail);

        if ($stmt->execute()) {
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
        } else {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update</div>';
        }

        $stmt->close();
    }
}
?>


<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form action="" class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" id="inputEmail"  value="<?php echo $adminEmail ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="inputnewpassword">New Password</label>
                    <input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="adminPass">
                </div>

                <button type="submit" class="btn btn-danger mr-4 mt-4"  name="adminPassUpdatebtn" >Update</button>

                <button type="reset" class="btn btn-secondary mt-4">Reset</button>

                <?php if(isset($passmsg)) {echo $passmsg;} ?>
            </form>
        </div>
    </div>
</div>


</div>

</div>

<?php
include('./adminInclude/footer.php');
?>