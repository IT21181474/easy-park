<?php
include('../connection.php');
extract($_REQUEST);

$available = isset($available) ? $available : '';
$available_parkings = isset($available_parkings) ? $available_parkings : '';

if(isset($savedata)) {
    // Handle the uploaded image
    $targetDir = "../assets/img/gallery"; // The directory where images will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]); // Full path to the uploaded image
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check === false) {
        $msg = "<h1 style='color:red'>File is not an image.</h1>";
    } else {
        // Move the uploaded image to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Image upload was successful, insert data into the database
            $sql = "INSERT INTO parking_details (parking_category, price, available_parkings, image) VALUES ('$parking_category', '$price', '$available', '".$_FILES["image"]["name"]."')";

            if (mysqli_query($con, $sql)) {
               
                
                $msg = "<h1 style='color:blue'>You have successfully added this parking.</h3>";
                echo '<script>alert("Feedback updated successfully");</script>'; // Display a JavaScript alert
                header('Location: dashboard.php?option=Parking_details'); // Redirect to the Manage parkings page after editing.
                }
            else {
                $msg = "<h1 style='color:red'>Error adding parking: " . mysqli_error($con) . "</h1>";
            }
        } else {
            $msg = "<h1 style='color:red'>Failed to upload the image.</h1>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/view_edit.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="../assets/css/style1.css"> <!-- Link to the CSS file -->
	<title>Add Parkings</title>
	
</head>

<body class="bg">
    <div class="container">
        <h1>Add Parkings</h1>
        
        <!-- start main -->
        <main>
            <!-- start adding form -->
            <section class="container mt-5 forms">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 pe-5">
                            <div class="form-group">
                                <div class="row mb-2">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Parking Category :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <select class="form-control" name="parking_category" required>
                                            <option>Car Parking Slot</option>
                                            <option>Van Parking Slot</option>
                                            <option>Bike Parking Slot</option>
                                            <option>Jeep Parking Slot</option>
                                            <option>Other</option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Price :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" name="price" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Available Parkings :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" name="available" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                            <div class="form-group">
                                <div class="row">
                                    <div class="control-label col-sm-12 col-md-3 col-lg-3">
                                        <h4>Parking Image :</h4>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 d-flex justify-content-center">
                           
                            <input type="submit" value="Add Now" name="savedata" class="back-button" onclick="return confirm('Are you sure you want to add this parking slot?');">
                        </div>
                    </div>
                </form>
            </section>
            <!-- end adding form -->
        </main>
        <!-- end main -->
    </div>

    
</body>
</html>