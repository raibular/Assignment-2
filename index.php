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



    <link rel="stylesheet" href="css/bootstrap.css">
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
                <ul class="collapse show list-unstyled" id="homeSubmenu">
                    <?php getCats(); ?>
                </ul>
            </li>
            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-briefcase"></i>
                    Brands
                </a>
                <ul class="collapse show list-unstyled" id="pageSubmenu">
                    <?php getBrands(); ?>
                </ul>
            </li>
            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-question"></i>
                    FAQ
                </a>
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
            <?php getPro(); ?>
        </div>
    </article>


</div>

<?php require "Footer.php";
?>


<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>



</body>
</html>
