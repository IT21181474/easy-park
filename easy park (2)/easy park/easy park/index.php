<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../easy park/assets/css/style.css" rel="stylesheet">
    <title>Home</title>
</head>

<body class="bg" style="background-image: url('../easy park/assets/img/bg.jpg'); background-size: cover;">
    <div class="container w-100">
        <!-- start #header -->
        <header id="header">
            
        </header>
        <!-- end #header -->

        <!-- start #main -->
        <main>
            <!-- start slider -->
            <?php
            include('slider.php')
            ?>
            <!-- end slider -->

           

            <!-- start gallery -->
            <section class="mt-5" id="gallery">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="margin-left: 500px;" class="master-parking borderrr text-center">Gallery</h3>
                        <div id="lb-back">
                            <div id="lb-img"></div>
                        </div>
                        <div class="container gallery-img-height mt-5 zoom">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/_DSC0110.JPG" class="d-block w-100 zoomPic" alt="Image1"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/_DSC0118.JPG" class="d-block w-100 zoomPic" alt="Image2"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/OIP.jpg" class="d-block w-100 zoomPic" alt="Image3"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery4.JPG" class="d-block w-100 zoomPic" alt="Image4"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery5.JPG" class="d-block w-100 zoomPic" alt="Image5"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery2.JPG" class="d-block w-100 zoomPic" alt="Image6"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery7.JPG" class="d-block w-100 zoomPic" alt="Image7"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery8.JPG" class="d-block w-100 zoomPic" alt="Image8"></div>
                            </div>
                            <div  style="margin-left: 500px;" class="row mt-3">
                            
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery9.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery10.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end gallery -->

         
            
        </main>
        <!-- end #main -->
        <br>
        <?php
        include('footer.php')
        ?>
    </div>
    </body>
</html>


