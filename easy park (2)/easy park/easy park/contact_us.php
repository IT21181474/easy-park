<?php
include('header.php');
include('connection.php');

extract($_REQUEST);
if (isset($send)) {
    mysqli_query($con, "insert into feedback values('', '$n', '$e', '$mob', '$msg')");
    $msg = "<h4 style='color:green;'>Feedback Sent Successfully</h4>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../easy park/assets/css/style.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body class="bg" style="background-image: url('../easy park/assets/img/bg.jpg'); background-size: cover;">

    <div>
        <!-- Main content starts here -->
        <main>
            <section class="container mt-5">
                <div class="row">
                    <div class="col-md-6" >

                        <h3>Contact Us</h3>
                        <p class="card" style="border: none;">
                            Easy Park is one of the secure parking spots in Colombo, affordable for all classes.
                            For any inquiries or assistance, please feel free to reach out to us. You can use the contact
                            form provided on this page to send us a message. Additionally, you can also email us at
                            easypark@gmail.com for general inquiries. We value your feedback and look forward to assisting
                            you with your parking needs.
                        </p>
                    </div>
                    <div class="col-md-6 forms">
                        <h3>Queries</h3>
                        <?php echo @$msg; ?>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="n" class="form-control" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="e" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="mob" class="form-control" placeholder="Mobile Number" required>
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="msg" class="form-control" placeholder="Comments" required></textarea>
                            </div>
                            <input type="submit" value="Submit" name="send" class="btn btn-primary btn-group-justified" required>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <!-- Main content ends here -->

        <!-- Include the footer -->
        <?php include('footer.php') ?>
    </div>
</body>

</html>
