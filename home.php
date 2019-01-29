<!DOCTYPE html>
<?php
require "server/functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="Rai bular,Salis zahid,umer,haris,haider" content="Hege Refsnes">
    <title>Home</title>
    <script src="js/jquery2.js"></script>

    <link rel="stylesheet" type="text/css" href="style1.css">


    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

</head>
<body>





<?php require "Header.php ";
?>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="bg-light">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-sitemap"></i>
                    Categories
                </a>
                <!-- <ul class="collapse show list-unstyled" id="homeSubmenu">
                     <li>
                         <a class="nav-link"  href="#">Laptops</a>
                     </li>
                     <li>
                         <a class="nav-link"  href="#">Computers</a>
                     </li>
                     <li>
                         <a class="nav-link"  href="#">Mobiles</a>
                     </li>
                     <li>
                         <a class="nav-link"  href="#">Tablets</a>
                     </li>
                 </ul>-->
                <?php getCats(); ?>
            </li>


            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-paper-plane"></i>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
    <article id="content" class="container-fluid bg-white">

        <div class="row">
            <div class="col">

                <!--Slader-->
                <div class="cn-slader">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://ae01.alicdn.com/kf/HTB1R6F9XZnrK1RjSspk761uvXXax.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://ae01.alicdn.com/kf/HTB1yCR5XZfrK1RjSszc760GGFXaX.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://s3.envato.com/files/136369961/Preview/04%20Slider.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <!---->


                <!--Products-->
                <article id="content" class="container-fluid bg-white">
                    <h5>RECOMMENDATIONS FOR YOU</h5><hr>
                    <div class="row">

                        <?php getPro(); ?>
                    </div>
                </article>


            </div>
        </div>
    </article>

</div>

<?php require "Footer.php";
?>


<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>



</body>
</html>
