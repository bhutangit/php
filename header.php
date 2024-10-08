<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>share food</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start-->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Share Food Share Happiness</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="ngolist.php" class="nav-item nav-link">NGO List</a>
                    
                    <?php 

                        if(isset($_SESSION['isRegisterAsDonar']) && $_SESSION['isRegisterAsDonar']==1){
                            ?>
                            <a href="donateItem.php" class="nav-item nav-link">Donate</a>
                            <a href="mydonated.php" class="nav-item nav-link">My Donation</a>
                            <a href="openrequest.php" class="nav-item nav-link">Open Requests</a>
                            <?php
                        }else if(isset($_SESSION['isRegisterAsDonar'])){
                            ?>
                            <a href="requestItem.php" class="nav-item nav-link">Request</a>
                            <a href="myrequests.php" class="nav-item nav-link">My Req</a>                              
                            <a href="allopendonations.php" class="nav-item nav-link">Open Donations</a>
                            <?php
                        }else{
                            ?>
                            <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Register</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <!-- <a href="facility.php" class="dropdown-item">LOGIN</a> -->
                            <a href="register.php" class="dropdown-item">Donar</a>
                            <a href="register.php" class="dropdown-item">Requester</a>
                        </div>
                    </div>
                            
                            <?php
                        }
                    ?>
                </div>
                <?php 
                    if(isset($_SESSION['useremail'])){
                        echo '<a href="logout2.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">LOGOUT<i class="fa fa-arrow-right ms-3"></i></a>';
                    }else{
                        echo '<a href="login.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">LOGIN<i class="fa fa-arrow-right ms-3"></i></a>';
                    }
                ?> 
            </div>
        </nav>
        <!-- Navbar End -->
