<!doctype html>
<html lang="en">
<?php
    include 'config.php';
    //include 'index.php';
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
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <title>Energy Monitoring</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div style="margin-left: -250px;">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html"><?php echo $_SESSION['username']; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">

                                <a href="logout.php" style="margin-left: 1150px;" class="btn btn-dark">Logout</a>
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
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Energy Monitoring</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>D1</h4>
                                        <canvas id="demo" style = "margin-right: -30px;"></canvas>
                                        <div id="preview-textfield" style= "text-align: center;"></div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>D2</h4>
                                        <canvas id="demo1" style = "margin-right: -30px;"></canvas>
                                        <div id="preview-textfield1" style= "text-align: center;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <canvas id="demo2" style = "margin-right: -30px;"></canvas>
                                        <div id="preview-textfield2" style= "text-align: center;"></div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <canvas id="demo3" style = "margin-right: -30px;"></canvas>
                                        <div id="preview-textfield3" style= "text-align: center;"></div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                                
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Zoom Chart</h5>
                                    <div class="card-body" >
                                        <div id="c3chart_zoom"></div>
                                    </div>
                                </div>
                            </div>
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
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <!--Gauges-->
    <script src="gauge.js"></script>
    <?php 
    $temperature = "SELECT * FROM SensorData ORDER BY id DESC LIMIT 1";
	$res = mysqli_query($conn, $temperature);
	if ($res->num_rows > 0) {
		$answer = mysqli_fetch_assoc($res);
        $tempp1 = $answer['temp'];
        $tempp2 = $answer['temp2'];
    }
    ?>
    
    <script>
        var opts = {
            // options here
             // color configs
            colorStart: "#6fadcf",
            colorStop: void 0,
            gradientType: 0,
            strokeColor: "#e0e0e0",
            generateGradient: true,
            percentColors: [[0.0, "#a9d70b" ], [0.50, "#f9c802"], [1.0, "#ff0000"]],
            // customize pointer
            pointer: {
            length: 0.8,
            strokeWidth: 0.035,
            iconScale: 1.0
            },
            // static labels
            staticLabels: {
            font: "10px sans-serif",
            labels: [10, 20, 30, 40],
            fractionDigits: 0
            },
            // static zones
            staticZones: [
            {strokeStyle: "#F03E3E", min: 0, max: 10},
            {strokeStyle: "#FFDD00", min: 10, max: 20},
            {strokeStyle: "#30B32D", min: 20, max: 30},
            {strokeStyle: "#FFDD00", min: 30, max: 40},
            {strokeStyle: "#F03E3E", min: 40, max: 50}
            ],
            // render ticks
            renderTicks: {
            divisions: 5,
            divWidth: 1.1,
            divLength: 0.7,
            divColor: 333333,
            subDivisions: 3,
            subLength: 0.5,
            subWidth: 0.6,
            subColor: 666666
            },
            // the span of the gauge arc
            angle: 0.15,
            // line thickness
            lineWidth: 0.44,
            // radius scale
            radiusScale: 1.0,
            // font size
            fontSize: 40,
            // if false, max value increases automatically if value > maxValue
            limitMax: false,
            // if true, the min value of the gauge will be fixed
            limitMin: false,
            // High resolution support
            highDpiSupport: true
        };
        
        var target = document.getElementById('demo'); 
        var gauge = new Gauge(target).setOptions(opts);
        document.getElementById("preview-textfield").className = "preview-textfield";
        gauge.setTextField(document.getElementById("preview-textfield"));
        gauge.maxValue = 50;
        gauge.setMinValue(0); 
        gauge.set(<?php echo $tempp1 ?>);
        gauge.animationSpeed = 32

    </script>
    <!--gauge 2-->
    <script>
        var opts = {
            // options here
             // color configs
            colorStart: "#6fadcf",
            colorStop: void 0,
            gradientType: 0,
            strokeColor: "#e0e0e0",
            generateGradient: true,
            percentColors: [[0.0, "#a9d70b" ], [0.50, "#f9c802"], [1.0, "#ff0000"]],
            // customize pointer
            pointer: {
            length: 0.8,
            strokeWidth: 0.035,
            iconScale: 1.0
            },
            // static labels
            staticLabels: {
            font: "10px sans-serif",
            labels: [10, 20, 30, 40],
            fractionDigits: 0
            },
            // static zones
            staticZones: [
            {strokeStyle: "#F03E3E", min: 0, max: 10},
            {strokeStyle: "#FFDD00", min: 10, max: 20},
            {strokeStyle: "#30B32D", min: 20, max: 30},
            {strokeStyle: "#FFDD00", min: 30, max: 40},
            {strokeStyle: "#F03E3E", min: 40, max: 50}
            ],
            // render ticks
            renderTicks: {
            divisions: 5,
            divWidth: 1.1,
            divLength: 0.7,
            divColor: 333333,
            subDivisions: 3,
            subLength: 0.5,
            subWidth: 0.6,
            subColor: 666666
            },
            // the span of the gauge arc
            angle: 0.15,
            // line thickness
            lineWidth: 0.44,
            // radius scale
            radiusScale: 1.0,
            // font size
            fontSize: 40,
            // if false, max value increases automatically if value > maxValue
            limitMax: false,
            // if true, the min value of the gauge will be fixed
            limitMin: false,
            // High resolution support
            highDpiSupport: true
        };
        
        var target = document.getElementById('demo1'); 
        var gauge = new Gauge(target).setOptions(opts);
        document.getElementById("preview-textfield1").className = "preview-textfield1";
        gauge.setTextField(document.getElementById("preview-textfield1"));
        gauge.maxValue = 50;
        gauge.setMinValue(0); 
        gauge.set(<?php echo $tempp2 ?>);
        gauge.animationSpeed = 32

    </script>
       <!-- <script>
            var opts = {
                // options here
                 // color configs
                colorStart: "#6fadcf",
                colorStop: void 0,
                gradientType: 0,
                strokeColor: "#e0e0e0",
                generateGradient: true,
                percentColors: [[0.0, "#a9d70b" ], [0.50, "#f9c802"], [1.0, "#ff0000"]],
                // customize pointer
                pointer: {
                length: 0.8,
                strokeWidth: 0.035,
                iconScale: 1.0
                },
                // static labels
                staticLabels: {
                font: "10px sans-serif",
                labels: [10, 20, 30, 40],
                fractionDigits: 0
                },
                // static zones
                staticZones: [
                {strokeStyle: "#F03E3E", min: 0, max: 10},
                {strokeStyle: "#FFDD00", min: 10, max: 20},
                {strokeStyle: "#30B32D", min: 20, max: 30},
                {strokeStyle: "#FFDD00", min: 30, max: 40},
                {strokeStyle: "#F03E3E", min: 40, max: 50}
                ],
                // render ticks
                renderTicks: {
                divisions: 5,
                divWidth: 1.1,
                divLength: 0.7,
                divColor: 333333,
                subDivisions: 3,
                subLength: 0.5,
                subWidth: 0.6,
                subColor: 666666
                },
                // the span of the gauge arc
                angle: 0.15,
                // line thickness
                lineWidth: 0.44,
                // radius scale
                radiusScale: 1.0,
                // font size
                fontSize: 40,
                // if false, max value increases automatically if value > maxValue
                limitMax: false,
                // if true, the min value of the gauge will be fixed
                limitMin: false,
                // High resolution support
                highDpiSupport: true
            };
            
            var target = document.getElementById('demo2'); 
            var gauge = new Gauge(target).setOptions(opts);
            document.getElementById("preview-textfield2").className = "preview-textfield2";
            gauge.setTextField(document.getElementById("preview-textfield2"));
            gauge.maxValue = 50;
            gauge.setMinValue(0); 
            gauge.set(30);
            gauge.animationSpeed = 32
    
        </script>
            <script>
                var opts = {
                    // options here
                     // color configs
                    colorStart: "#6fadcf",
                    colorStop: void 0,
                    gradientType: 0,
                    strokeColor: "#e0e0e0",
                    generateGradient: true,
                    percentColors: [[0.0, "#a9d70b" ], [0.50, "#f9c802"], [1.0, "#ff0000"]],
                    // customize pointer
                    pointer: {
                    length: 0.8,
                    strokeWidth: 0.035,
                    iconScale: 1.0
                    },
                    // static labels
                    staticLabels: {
                    font: "10px sans-serif",
                    labels: [10, 20, 30, 40],
                    fractionDigits: 0
                    },
                    // static zones
                    staticZones: [
                    {strokeStyle: "#F03E3E", min: 0, max: 10},
                    {strokeStyle: "#FFDD00", min: 10, max: 20},
                    {strokeStyle: "#30B32D", min: 20, max: 30},
                    {strokeStyle: "#FFDD00", min: 30, max: 40},
                    {strokeStyle: "#F03E3E", min: 40, max: 50}
                    ],
                    // render ticks
                    renderTicks: {
                    divisions: 5,
                    divWidth: 1.1,
                    divLength: 0.7,
                    divColor: 333333,
                    subDivisions: 3,
                    subLength: 0.5,
                    subWidth: 0.6,
                    subColor: 666666
                    },
                    // the span of the gauge arc
                    angle: 0.15,
                    // line thickness
                    lineWidth: 0.44,
                    // radius scale
                    radiusScale: 1.0,
                    // font size
                    fontSize: 40,
                    // if false, max value increases automatically if value > maxValue
                    limitMax: false,
                    // if true, the min value of the gauge will be fixed
                    limitMin: false,
                    // High resolution support
                    highDpiSupport: true
                };
                
                var target = document.getElementById('demo3'); 
                var gauge = new Gauge(target).setOptions(opts);
                document.getElementById("preview-textfield3").className = "preview-textfield3";
                gauge.setTextField(document.getElementById("preview-textfield3"));
                gauge.maxValue = 50;
                gauge.setMinValue(0); 
                gauge.set(44);
                gauge.animationSpeed = 32
        
            </script> -->
</body>
 
</html>