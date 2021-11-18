<?php
//
////include './connection.php';
//include "insert_data.php";
//
////$sql = "SELECT * FROM `reservation`";
//
////parse and execute the statement
////$query = mysqli_query($connect, $sql);
//
////$data = array();
////while ($row = mysqli_fetch_array($query)) {
////    array_push($data, $row);
////}
//if(isset($_POST['create_pdf'])){
//    require_once 'tcpdf/tcpdf.php';
//    $obj_pdf = new TCPDF('p',PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
//    $obj_pdf -> SetCreator(PDF_CREATOR);
//    $obj_pdf-> SetTitle('Reservation');
//    $obj_pdf-> SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
//    $obj_pdf-> SetHeaderFont(PDF_FONT_NAME_MAIN, '',PDF_FONT_NAME_MAIN);
//    $obj_pdf-> SetFooterFont(PDF_FONT_NAME_DATA, '',PDF_FONT_NAME_DATA);
//    $obj_pdf-> SetDefaultMonospacedFont('helvetica');
//    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//    $obj_pdf-> SetMargins(PDF_MARGIN_LEFT,5,PDF_MARGIN_RIGHT);
//    $obj_pdf->SetPrintHeader(false);
//    $obj_pdf-> SetPrintFooter(false);
//    $obj_pdf-> SetAutoPageBreak(TRUE,10);
//    $obj_pdf -> SetFont('helvetica','',12);
//
//
//    $content .= "<h3 align='center'>Reservation</h3>
//    <table border='1px' cellspacing='0' cellpadding='0'>
//                                        <tbody>
//                                        <tr>
//                                            <td>Name/ Agency name</td>
/*                                            <td><?php echo $name; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Phone</td>
/*                                            <td><?php echo $phone; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Email</td>
/*                                            <td><?php echo $email; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Number of rooms</td>
/*                                            <td><?php echo $email; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Plan</td>
/*                                            <td><?php echo $plan; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Arrival Date</td>
/*                                            <td><?php echo $checkin; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Departure Date</td>
/*                                            <td><?php echo $checkout; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Group Name</td>
/*                                            <td><?php echo $groupname; ?></td>*/
//                                        </tr>
//                                        <tr>
//                                            <td>Remarks</td>
/*                                            <td><?php echo $remarks; ?></td>*/
//                                        </tr>
//                                        </tbody>
//                                    </table>";
//    $obj_pdf-> writeHTML($content);
//    echo $content;
//    $obj_pdf-> Output("reservation.pdf","I");
//}
//?>
<?php
include "connection.php";
include "insert_data.php";
//include once
    require_once 'dompdf/autoload.inc.php';

    use Dompdf\Dompdf;
if(isset($_POST['create_pdf'])) {
//initiate dompdf
    $dompdf = new Dompdf();
//load HTML
    $html = (file_get_contents("reserved.php"));
    $dompdf->load_html($html);
//    $dompdf->load_html("<h3 align='center'>Reservation</h3>
//    <table border='1px' cellspacing='0' cellpadding='0'>
//                                        <tbody>
//                                        <tr>
//                                            <td>Name/ Agency name</td>
//                                            <td>$name</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Phone</td>
//                                            <td>$phone</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Email</td>
//                                            <td>$email</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Number of rooms</td>
//                                            <td>$email</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Plan</td>
//                                            <td>$plan</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Arrival Date</td>
//                                            <td>$checkin</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Departure Date</td>
//                                            <td>$checkout</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Group Name</td>
//                                            <td>$groupname</td>
//                                        </tr>
//                                        <tr>
//                                            <td>Remarks</td>
//                                            <td> $remarks </td>
//                                        </tr>
//                                        </tbody>
//                                    </table>");

//setup proper size
    $dompdf->setPaper('A4', 'landscape');

//Render the html as pdf
    $dompdf->render();

//output the generated PDF
    $dompdf->stream("reserved", array("Attachment" => 0));
}
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
    <link href="vendor/font-face.css" rel="stylesheet" media="all">
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
    <link href="vendor/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
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
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.png" alt="Cool Admin" />
            </a>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Reservation successful</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                        <tr>
                                            <td>Name/ Agency name</td>
                                            <td><?php echo $name; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td><?php echo $phone; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo $email; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Number of rooms</td>
                                            <td><?php echo $room; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Plan</td>
                                            <td><?php echo $plan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Arrival Date</td>
                                            <td><?php echo $checkin; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Departure Date</td>
                                            <td><?php echo $checkout; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Group Name</td>
                                            <td><?php echo $groupname; ?></td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <br>
<!--                                <input type="submit" name="create_pdf" class="btn btn-info" value="download"/SS>-->
                                <form method="post">
                                <button type="submit" name="create_pdf" class="btn btn-info">Download</button>
                               
                                </form>
                            </div>
                            <!--  END TOP CAMPAIGN-->
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
                <p>Copyright © 2020. All rights reserved. Developed by <a href="https://www.zetacomputers.com.np" target="_blank">Zeta Computers</a> .</p>
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
<script src="vendor/main.js"></script>

</body>

</html>
<!-- end document-->
