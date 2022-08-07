<!doctype html>
<html lang="en">
<?php 
include '../config.php'; 
session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        .card:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            cursor: pointer;
            
        }
        
    </style>
    <title>Energy Monitoring</title>
</head>

<body >
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div style="margin-left: -250px;">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="home.php">Admin</a>
                <a href="home.php" class="btn btn-dark">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">

                                <a href="../logout.php" style="margin-left: 1150px; margin-bottom:10px;" class="btn btn-dark">Logout</a>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Energy Monitoring Dashboard</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <h1 style="text-align: center; margin-top: 35px;">Manage Locations</h1>
                                </div>
                            </div>
                            
                            <hr></hr>

                            <div style="display: inline-block;"><h4 style="color: #CF3B3B; font-weight: bold; ">Note: </h4></div><div style="display: inline-block; margin-left: 10px;"><h4>The values for temperature are in degree celcius.</h4></div>
                        </div>
                    </div>
                    
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                    <!-- Details about number of devices -->
                    <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #FFFFFF;">
                                    <div class="card-body">
                                        <h3>Total Devices:</h3>
                                        <div style="height: 20px;"></div>
                                        
                                        <h2 style="text-align: center;">233</h2>
                                        
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #FFFFFF;">
                                    <div class="card-body">
                                        <h3>Active Devices:</h3>
                                        <div style="height: 20px;"></div>
                                       
                                        <h2 style="text-align: center;">200</h2>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #FFFFFF;">
                                    <div class="card-body">
                                        <h3>Inactive Devices:</h3>
                                        <div style="height: 20px;">
                                        
                                        </div>
                                        <h2 style="text-align: center;">33</h2>

                                        
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                    <hr></hr>
                    <h3>Locations:</h3>
                    <!-- Floor cards -->
          
                        <!-- Zoom Chart 
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Zoom Chart</h5>
                                    <div class="card-body" >
                                        <div id="c3chart_zoom"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Scatter Plot</h5>
                            <div class="card-body">
                                <div id="c3chart_scatter"></div>
                            </div>
                        </div>
                    </div>
    -->
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            
                            <!-- ============================================================== -->
              				                        <!-- product category  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end product category  -->
                                   <!-- product sales  -->
                            <!-- ============================================================== -->
                           
                            <!-- ============================================================== -->
                            <!-- end product sales  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== -->
                               
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end sales  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- new customer  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                           
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->
  
                            
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- category revenue  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end category revenue  -->
                            <!-- ============================================================== -->

                            
                                <!-- ============================================================== -->
                                <!-- social source  -->
                                <!-- ============================================================== -->
                                
                                <!-- ============================================================== -->
                                <!-- end social source  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- sales traffice source  -->
                                <!-- ============================================================== -->
                                
                            <!-- ============================================================== -->
                            <!-- end sales traffice source  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- sales traffic country source  -->
                            <!-- ============================================================== -->
                            
                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
    <!--Gauges-->
    <script src="../gauge.js"></script>
    <?php 
    //$temperature = "SELECT * FROM SensorData ORDER BY id DESC LIMIT 1";
	//$res = mysqli_query($conn, $temperature);
	//if ($res->num_rows > 0) {
	//	$answer = mysqli_fetch_assoc($res);
    //    $tempp1 = $answer['temp'];
    //    $tempp2 = $answer['temp2'];
    //}
    ?>
    <!--Floor 1-->
    
</body>
 
</html>