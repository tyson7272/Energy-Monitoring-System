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
        .dropbtn {
        border: none;
        cursor: pointer;
        color: white;
        background-color: #3B3C46;
        border-radius: 2px;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
        position: relative;
        display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        background-color: #D7D7DF;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #2E2F39;
            color:white;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
        display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
        background-color: #3B3C46;
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
                <a class="navbar-brand" href="index.html">Admin</a>
                <div class="dropdown" >
                <button class="dropbtn" style="padding: 10px;">Menu</button>
                <div class="dropdown-content">
                    <a href="manageusers.php">Manage Users</a>
                    <a href="managedevices.php">Manage devices</a>
                    <a href="managelocations.php">Manage Locations</a>
                    
                </div>
                </div>
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
                                    <h1 style="text-align: center; margin-top: 35px;">Energy Monitoring System</h1>
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
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;" onclick="floor1()">
                                    <div class="card-body">
                                        <h3>Floor 1</h3>
                                        <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 43</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>

                                        <div id="preview-textfield" style= "text-align: center; "></div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;" onclick="floor2()">
                                    <div class="card-body">
                                        <h3>Floor 2</h3>
                                        <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 23</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>
                                        <div id="preview-textfield1" style= "text-align: center;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;">
                                    <div class="card-body">
                                    <h3>Floor 3</h3>
                                    <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 13</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>
                                        <div id="preview-textfield2" style= "text-align: center;"></div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;">
                                    <div class="card-body">
                                    <h3>Floor 4</h3>
                                    <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 33</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>
                                        <div id="preview-textfield3" style= "text-align: center;"></div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                                
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;">
                                    <div class="card-body">
                                        <h3>Basement</h3>
                                        <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 31</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>
                                        <div id="preview-textfield" style= "text-align: center;"></div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;">
                                    <div class="card-body">
                                        <h3>Ground Floor</h3>
                                        <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 12</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>
                                        <div id="preview-textfield1" style= "text-align: center;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;">
                                    <div class="card-body">
                                    <h3>Terrace</h3>
                                    <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 23</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>
                                        <div id="preview-textfield2" style= "text-align: center;"></div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card" style="background-color: #CCE0FF;">
                                    <div class="card-body">
                                    <h3>Floor 5</h3>
                                    <div style="display:inline-block;"><img src="../images/thermometer.png" style="height: 40px; display:inline-block;"><h3 style="display:inline-block;"> : 34</h3></div>
                                        <div style="display:inline-block;"><img src="../images/humidity.png" style="height: 40px; display:inline-block; margin-left: 30px;"><h3 style="display:inline-block;"> : 24</h3></div>
                                        <div id="preview-textfield3" style= "text-align: center;"></div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                                
                        </div>
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
    <script>
        function floor1(){
            window.location.href="../locations/floor1.php";
        }
        function floor2(){
            window.location.href="../locations/floor2.php";
        }
    </script>
</body>
 
</html>