   <!-- including header start   -->
   <?php
        include('./mainInclude/header.php');
    ?>
    <!-- including header end   -->



    <!-- course page start  -->

    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="images/boy1.png" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
        </div>
    </div>
   <!-- course page end  -->




   <!-- main content start  -->

   <div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label for="" class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>

            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
   </div>
   <!-- main content end  -->




   <!-- contact us include start  -->

    <?php
    include('./contact.php');
    ?>
   <!-- contact us include end  -->



   <!-- incuding footer start  -->
   <?php
        include('./mainInclude/footer.php');
    ?>

    <!-- including footer end   -->