<?php
session_start();
if(!isset($_SESSION['username']) && empty($_SESSION['username'])) {
    header('location: ../index.php');
}
include 'fetch_table.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href='index.php'>
                        <img src="images/logo.png" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                      
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <!--                                <div class="image">-->
                            <!--                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />-->
                            <!--                                </div>-->
                            <div class="content">
                                <a class="js-acc-btn" href="#">Admin</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="account-dropdown__footer">
                                    <a href="logout.php">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->

    <!-- HEADER MOBILE-->
    <header class="header-mobile header-mobile-2 d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.php">
                        <img src="images/logo.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                   
                        <a href="#">
                            <i class="fas fa-table"></i>Tables</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="sub-header-mobile-2 d-block d-lg-none">
        <div class="header__tool">
            <div class="account-wrap">
                <div class="account-item account-item--style2 clearfix js-item-menu">
                    <!--                        <div class="image">-->
                    <!--                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />-->
                    <!--                        </div>-->
                    <div class="content">
                        <a class="js-acc-btn" href="#">Admin</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="account-dropdown__footer">
                            <a href="logout.php">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER MOBILE -->

    <!-- PAGE CONTAINER-->
    <div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>Room</th>
                                                <th>Plan</th>
                                                <th>Arrival Date</th>
                                                <th>Departure Date</th>
                                                <th>Group name</th>
                                               
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($data as $key=>$value){
                                        ?>

                                            <tr class="tr-shadow">
                                                <td><?php echo $value['date']; ?></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $value['email']; ?></span>
                                                </td>
                                                <td><?php echo $value['phone']; ?></td>
                                                <td><?php echo $value['room']; ?></td>
                                                <td><?php echo $value['plan']; ?></td>
                                                <td><?php echo $value['checkin']; ?></td>
                                                <td><?php echo $value['checkout']; ?></td>
                                                <td><?php echo $value['group_name']; ?></td>
                                                
<!--                                                <td>-->
<!--                                                    <span class="status--process">Processed</span>-->
<!--                                                </td>-->
<!--                                                <td>$679.00</td>-->
                                                <td>
                                                    <div class="table-data-feature">
                                                       <!--  <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                            <i class="zmdi zmdi-mail-send"></i>
                                                        </button> -->
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" onClick="Javascript:window.location.href='edit.php?reserve_id=<?php echo $value['reserve_id'];?>';">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="del(<?php echo $value['reserve_id'];?>)"> 
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
<!--                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">-->
<!--                                                            <i class="zmdi zmdi-more"></i>-->
<!--                                                        </button>-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<footer>
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2020. All rights reserved. Developed by <a href="https://www.zetacomputers.com.np" target="_blank">NRS Group</a> .</p>
            </div>
        </div>
    </div>
</footer>



    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function del(idd) {
               if( confirm('Are you sure you want to delete')){
                    location.href = "delete.php?id=" + idd;
               } else {
                return false;
               }
               
                
                



        }

    </script>

</body>

</html>
<!-- end document-->
