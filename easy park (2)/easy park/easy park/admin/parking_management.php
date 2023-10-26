<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Parkings</title>
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Manage Parkings</h1>
            
                
    <div class="col-md-19 text-right coner" style="margin-right: -30px;">
    <!-- Add parking button -->
    <a class="btn btn-primary" href="parking.php">Add Parking</a>
</div>
</div>


        </div>
        <hr>
        <div class="mx-auto" style="width: 80%;">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Serial No</th>
                    <th>Parking Category</th>
                    <th>Price</th>
                    <th>Available Parkings</th>
                    <th>Parking Image</th>
                    <th>Action</th>
                </tr>

                <?php
                require('../connection.php');
                $i = 1;
                $sql = mysqli_query($con, "select * from parking_details");
                while ($res = mysqli_fetch_assoc($sql)) {
                    $id = $res['parking_id'];
                    $parkingCategory = $res['parking_category'];
                    $price = $res['price'];
                    $availableparkings = $res['available_parkings'];
                    $image = $res['image'];
                ?>
                <tr>
                    <td><?php echo $i; $i++; ?></td>
                    <td><?php echo $parkingCategory; ?></td>
                    <td><?php echo $price; ?></td>
                    <td><?php echo $availableparkings; ?></td>
                    <td><?php echo $image; ?></td>
                    <td>
                        <a style="color: purple" href="view_parking.php?id=<?php echo $id; ?>">View</a><br>
                        <a style="color: green" href="edit_parking.php?id=<?php echo $id; ?>">Edit</a><br>
                        <a style="color: red" href="delete_parking.php?parking_id=<?php echo $id; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
