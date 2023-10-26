<?php
include('header.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../easy park/assets/css/style.css" rel="stylesheet">
   
    <title>View</title>
</head>
<body class="bg">
    <div class="container">
        <!-- start #header -->
        <header id="header">
           
        </header>
        <!-- end #header -->


        <!-- start banner -->

      

<br>
   
    <div style="margin-left: 100px;" class="col-md-12">
                        <h3 class="master-parking borderrr text-center">View Available Parking Slots</h3></div>
        
        <hr>
        <div class="row">
            <?php
            require('connection.php');
            $sql = mysqli_query($con, "select * from parking_details");
            while ($res = mysqli_fetch_assoc($sql)) {
                $parkingCategory = $res['parking_category'];
                $price = $res['price'];
                $availableparkings = $res['available_parkings'];
                $image = $res['image'];
            ?>
          <div class="col-md-4 mb-4">
    <div class="card" style="background: transparent; border: none;">
        <img src="assets/img/parking/<?php echo $image; ?>" class="card-img-top" alt="parking Image" style="height: 200px;">
        <div class="card-body" style="background-color: rgba(128, 0, 128, 0.2); border-radius: 5px;">
            <h5 class="card-title text-white"><?php echo $parkingCategory; ?></h5>
            <p class="card-text text-white">Price: Rs. <?php echo $price; ?></p>
            <p class="card-text text-white">Available Parking Slots: <?php echo $availableparkings; ?></p>
            
        </div>
    </div>
</div>

            


            <?php
            }
            ?>
        

        </div>
        <br>
    <?php
        include('footer.php')
        ?>
    </div>
    </body>
</html>