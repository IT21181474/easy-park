<?php
require('../connection.php');

if (isset($_GET['parking_id'])) {
    $id = $_GET['parking_id'];

    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        // User has confirmed the deletion
        $sql = "DELETE FROM parking_details WHERE parking_id = $id";

        if (mysqli_query($con, $sql)) {
            header('Location: dashboard.php?option=Parking_details'); // Redirect to the Manage parkings page after deleting.
        } else {
            echo "Error deleting parking.";
        }
    } else {
        // Display a confirmation alert
        echo '<script>
            if (confirm("Are you sure you want to delete this parking slots?")) {
                window.location.href = "delete_parking.php?parking_id=' . $id . '&confirm=yes";
            } else {
                window.location.href = "dashboard.php?option=Parking_details";
            }
        </script>';
    }
}
?>
