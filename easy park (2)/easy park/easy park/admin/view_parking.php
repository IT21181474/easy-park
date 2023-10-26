<?php
require('../connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM parking_details WHERE parking_id = $id");
    $parking = mysqli_fetch_assoc($sql);
} else {
    header('Location: dashboard.php?option=Parking_details'); // Redirect to the Manage parkings page if no ID is provided.
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Add this line to link to the css file -->
    <title>View Parking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="bg">
    <div class="container">
        <h1>View Parking</h1>
        <hr>

        <div class="row">
            <div class="col-sm-12">
                <strong>Parking Category:</strong> <?php echo $parking['parking_category']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong>Price:</strong> <?php echo $parking['price']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong>Available Parkings:</strong> <?php echo $parking['available_parkings']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <strong>Parking Image:</strong><br><br>
                <a href="../assets/img/parking/<?php echo $parking['image']; ?>" target="_blank">
                    <img src="../assets/img/parking/<?php echo $parking['image']; ?>" alt="Parking Image" width="300" height="200">
                </a>
            </div>
        </div>
    </div>
   
            <button class="back-button" onclick="window.location.href='dashboard.php?option=Parking_details'">Back to parking Details</button>
</body>
</html>
