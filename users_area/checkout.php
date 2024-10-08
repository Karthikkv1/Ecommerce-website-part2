<!-- Including connect.php file using php syntax -->

<?php
include('../includes/connect.php');          //20-01-2024
session_start(); //08-02-2024 10:21PM //session creation


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- External css -->
    <link rel="stylesheet" href="./style.css">

    <style>
        .logo{
            width: 7%;
            height:7%;
        }
    </style>

    <title>My store-Checkout Page</title>
</head>

<body>

    <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg  bg-info navbar-light">
            <div class="container-fluid">
                <img src="../Images/logo.png" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../display_all.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user_registration.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>


                    </ul>
                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search_data">

                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
                    </form>
                </div>
            </div>
        </nav>







        <!-- Second child --> <!-- 10-01-2024 -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

            <ul class="navbar-nav me-auto">


                <?php

                //Displaying username if user logged in
                if (!isset($_SESSION['username'])) {
                    echo " <li class='nav-item'>
    <a class='nav-link' href='#'>Welcome Guest</a>
</li>";
                } else {
                    echo "  <li class='nav-item'>
    <a class='nav-link' href='#'>Welcome " . $_SESSION['username'] . " </a> 
</li>";

                }
                //For login and logout sessions //08-02-2024 10:27PM
                if (!isset($_SESSION['username'])) {
                    echo "  <li class='nav-item'>
                    <a class='nav-link' href='./user_login.php'>Login</a>
                </li>";
                } else {
                    echo "  <li class='nav-item'>
                    <a class='nav-link' href='logout.php'>Logout</a>
                </li>";

                }
                ?>


            </ul>
        </nav>

        <!-- Third child --> <!-- 10-01-2024 -->
        <div class="bg-light">
            <h3 class="text-center">Hidden Store</h3>
            <p class="text-center">Communication is at the heart of e-commerce and community</p>
        </div>

        <!-- Fourth Child -->
        <div class="row px-1">

            <div class="col-md-12">
                <div class="row">
                    <!-- PHP Sessions 28-01-2024 -->
                    <?phP
                    if (!isset($_SESSION['username'])) {
                        include('user_login.php');

                    } else {
                        include('payment.php'); //1-02-2024
                    }
                    ?>

                </div>




            </div>

        </div>


        <!-- Including footer.php -->

        <?php
        include("../includes/footer.php"); //24-01-2024
        
        ?>
    </div>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>