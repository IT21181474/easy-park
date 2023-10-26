<?php
require('../connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM parking_details WHERE parking_id = $id");
    $parking = mysqli_fetch_assoc($sql);
} else {
    header('Location: dashboard.php?option=Parking_details'); // Redirect to the Manage parkings page if no ID is provided.
}

if (isset($_POST['savedata'])) {
    $parking_category = $_POST['parking_category'];
    $price = $_POST['price'];
    $available = $_POST['available'];
    
    $sql = "UPDATE parking_details SET parking_category='$parking_category', price='$price', available_parkings='$available' WHERE parking_id=$id";

    if (mysqli_query($con, $sql)) {
      
        $success = "<h3 style='color:green'>parking updated successfully</h3>";
        echo '<script>alert("parking updated successfully");</script>'; // Display a JavaScript alert
        header('Location: dashboard.php?option=Parking_details'); // Redirect to the parking Management page after editing.
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Link to the CSS file -->
    <title>Edit Parking</title>
   
</head>
<body class="bg">
    <div class="container">
        <h1>Edit Parking</h1>
       
        <div style="text-align: center;"> 
        <form class="form-horizontal" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-5 pe-5">
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                <h4>Parking Category:</h4>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">
                                <input type="text" name="parking_category" class="form-control" value="<?php echo $parking['parking_category']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                <h4>Price:</h4>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">
                                <input type="text" name="price" class="form-control" value="<?php echo $parking['price']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                <h4>Available Parkings:</h4>
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">
                                <input type="text" name="available" class="form-control" value="<?php echo $parking['available_parkings']; ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 d-flex justify-content-center">
                    
                    <input type="submit" value="Save Changes" name="savedata" class="blue-button" onclick="return confirm('Are you sure you want to update this parking details?');">
                </div>
            </div>
        </form>
</div>
    </div>
</body>
</html>
