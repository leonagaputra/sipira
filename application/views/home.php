<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SIPIRA</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
        require_once 'backend_style.php';
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="<?php echo $base_url ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>SI</b>P</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>SIPIRA</b></span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <!--
                            <li class="dropdown messages-menu">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        
                                                        <img src="<?php echo $base_url; ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            -->

                            <!-- Notifications Menu -->
                            <!--
                            <li class="dropdown notifications-menu">                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>                                        
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            -->
                            <!-- Tasks Menu -->
                            <!--
                            <li class="dropdown tasks-menu">
                               
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>                                        
                                        <ul class="menu">
                                            <li>
                                                <a href="#">                                                    
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>                                                    
                                                    <div class="progress xs">                                                        
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            -->
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?php echo $base_url; ?>img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs"><?php echo $nama; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?php echo $base_url; ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $nama; ?> <!--- Web Developer-->
                                            <!--<small>Member since <?php //echo $join;          ?></small>-->
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!--
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </li>
                                    -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!--<div class="pull-left">
                                            <a href="<?php echo $base_url; ?>index.php/backend/edit_profile" class="btn btn-default btn-flat">Profile</a>
                                        </div>-->
                                        <div class="pull-right">
                                            <a href="<?php echo $base_url; ?>index.php/backend/logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <!--
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                            -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <!--
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo $base_url; ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>                            
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    -->
                    <!-- search form (Optional) -->
                    <!--
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    -->
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">Menu</li>
                        <!-- Optionally, you can add icons to the links -->
                        <?php
                        $print = "";
                        //print_r($menus);exit;
                        foreach ($menus as $menu) {
                            //$print .= "<i class='fa fa-edit'></i>";
                            $print .= "<li class='active treeview' >";
//                                $print .= (($backend_page == $menu->VBACKEND) ? 'class="active treeview"' : '');
//                                $print .= ">";
                                $print .= "<a href='#'>";
    //                            if ($menu->VMENUS == "FED") {
    //                                $print .= "<a href='http://bit.ly/surveyDHUK'>";
    //                            } else {
    //                                $print .= "<a href='" . $base_url . $menu->VPATH . "'>";
    //                            }
                                $print .= "<i class='fa fa-edit'></i> <span>" . $menu['parent'] . "</span>";
//                                $print .= "<span class='pull-right-container'>";
//                                    $print .= "<i class='fa fa-angle-left pull-right'></i>";
//                                $print .= "</span>";
                                $print .= "</a>";
                                $print .= "<ul class='treeview-menu'>";
                                    foreach($menu['child'] as $child){
                                        //$print .= "<li class='active'>";
                                        $print .= "<li>";
                                            $print .= "<a href='" . $base_url . $child->VPATH . "'>";
                                                $print .= "<i class='fa fa-circle-o'></i> " . $child->VDESC;
                                            $print .= "</a>";
                                        $print .= "</li>";
                                    }                                    
                                $print .= "</ul>";
                            $print .= "</li>";
                        }
                        echo $print;
                        ?>
                        <!--
                        <li <?php echo (($backend_page == 'homepage.php') ? 'class="active"' : '') ?>><a href="<?php echo (($backend_page == 'homepage.php') ? '#' : $base_url . 'index.php/backend/home') ?>"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
                        <li <?php echo (($backend_page == 'paket_soal.php') ? 'class="active"' : '') ?>><a href="<?php echo (($backend_page == 'paket_soal.php') ? '#' : $base_url . 'index.php/backend/paket_soal') ?>"><i class="fa fa-book"></i> <span>Paket Soal</span></a></li>
                        -->

                        <!--
                        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Link in level 2</a></li>
                                <li><a href="#">Link in level 2</a></li>
                            </ul>
                        </li>
                        -->
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php
                require_once $backend_page;
                ?>

                <!-- Content Header (Page header) -->
                <!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    OJK Sulawesi Utara, Gorontalo, dan Maluku Utara
                </div>
                <!-- Default to the left -->
                <strong><a href="#">SIPIRA</a> &copy; <?php echo date('Y');?>.</strong> All rights reserved.                
            </footer>

            <!-- Control Sidebar -->
            <!--
            <aside class="control-sidebar control-sidebar-dark">
                
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                
                <div class="tab-content">
                    
                    <div class="tab-pane active" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>                    
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>                    
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </aside>
            -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <?php
        require_once 'backend_script.php';
        ?>


        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->

        <script>
            var nomor = 0;
            var hdr_id = 0;
            var pieChart;
            var pieChart_layanan;
            var pieChart_hubungan;
            var pieChart_pengetahuan;
            var pieChart_fasilitas;
            var pieChart_rapi;
            var pieChart_informasi;
            var pieChart_cepat;
            var pieChart_rapilingkungan;
            var pieChart_peduli;
            var global_pie;
            function validate(id){
                $("#VDISPOS").val("");
                hdr_id = id;
            }
            
            function send_validate(){
                var vdispos = $("#VDISPOS").val();
                $.ajax({
                    type: "POST",
                    data: "ID=" + hdr_id + "&VDISPOS=" + vdispos,
                    dataType: "json",
                    url: main.base_url + "index.php/backend/send_validate",
                    success: function (msg) {
                        //console.log("success");
                        //console.log(msg);
                        $("#validate_" + hdr_id).html("VALIDATED");
                        $("#modal_close").click();
                        alert('Validate successful');
                    },
                    error: function (msg) {
                        //console.log("err");
                    }
                });
            }

            

            function update_status(num, status) {
                //console.log(num);
                $.ajax({
                    type: "POST",
                    data: "num=" + num + "&status=" + status,
                    dataType: "json",
                    url: main.base_url + "index.php/backend/update_status",
                    success: function (msg) {
                        //console.log("success");
                        //console.log(msg);
                        $("#tab_stat").text(status);
                        //$("#alert_modal").show();
                        $("#alert_modal2").show();
                        $("#row_" + num).children().eq(6).text(status);
                        //close
                        $(".modal-header .close").click();
                    },
                    error: function (msg) {
                        //console.log("err");
                    }
                });
            }

            function get_bulan(str) {
                var ret = "";
                if (str == "01")
                    ret = "JAN";
                else if (str == "02")
                    ret = "FEB";
                else if (str == "03")
                    ret = "MAR";
                else if (str == "04")
                    ret = "APR";
                else if (str == "05")
                    ret = "MAY";
                else if (str == "06")
                    ret = "JUN";
                else if (str == "07")
                    ret = "JUL";
                else if (str == "08")
                    ret = "AUG";
                else if (str == "09")
                    ret = "SEP";
                else if (str == "10")
                    ret = "OCT";
                else if (str == "11")
                    ret = "NOV";
                else if (str == "12")
                    ret = "DEC";
                return ret;
            }

            function pie() {
                var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
                var pieChart = new Chart(pieChartCanvas);
                var PieData = [
                    {
                        value: 323342432,
                        color: "#f56954",
                        highlight: "#f56954",
                        label: "Modal Kerja"
                    },
                    {
                        value: 320121321,
                        color: "#00a65a",
                        highlight: "#00a65a",
                        label: "Investasi"
                    },
                    {
                        value: 343678654,
                        color: "#f39c12",
                        highlight: "#f39c12",
                        label: "Konsumsi"
                    }
                ];
                var pieOptions = {
                    //Boolean - Whether we should show a stroke on each segment
                    segmentShowStroke: true,
                    //String - The colour of each segment stroke
                    segmentStrokeColor: "#fff",
                    //Number - The width of each segment stroke
                    segmentStrokeWidth: 2,
                    //Number - The percentage of the chart that we cut out of the middle
                    percentageInnerCutout: 50, // This is 0 for Pie charts
                    //Number - Amount of animation steps
                    animationSteps: 100,
                    //String - Animation easing effect
                    animationEasing: "easeOutBounce",
                    //Boolean - Whether we animate the rotation of the Doughnut
                    animateRotate: true,
                    //Boolean - Whether we animate scaling the Doughnut from the centre
                    animateScale: false,
                    //Boolean - whether to make the chart responsive to window resizing
                    responsive: true,
                    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                    maintainAspectRatio: true,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                };
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                pieChart.Doughnut(PieData, pieOptions);
            }

            function bar() {
                //-------------
                //- BAR CHART -
                //-------------
                var areaChartData = {
                    labels: ["Surakarta", "Klaten", "Boyolali", "Sragen", "Sukoharjo", "Karanganyar", "Wonogiri"],
                    datasets: [
                        {
                            label: "last year",
                            fillColor: "rgba(210, 214, 222, 1)",
                            strokeColor: "rgba(210, 214, 222, 1)",
                            pointColor: "rgba(210, 214, 222, 1)",
                            pointStrokeColor: "#c1c7d1",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [400359223, 400359223, 400359223, 330359223, 330359223, 330359223, 123359223]
                        },
                        {
                            label: "last dec",
                            fillColor: "rgba(60,141,188,0.9)",
                            strokeColor: "rgba(60,141,188,0.8)",
                            pointColor: "#3b8bba",
                            pointStrokeColor: "rgba(60,141,188,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(60,141,188,1)",
                            data: [252551235, 212551235, 252561235, 252120235, 252120235, 332147235, 456120235]
                        },
                        {
                            label: "cur month",
                            fillColor: "rgba(120,141,188,0.9)",
                            strokeColor: "rgba(120,141,188,0.8)",
                            pointColor: "#3b8bba",
                            pointStrokeColor: "rgba(60,141,188,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(60,141,188,1)",
                            data: [356731114, 356731114, 556731114, 234731114, 234731114, 234342114, 234543114]
                        }
                    ]
                };
                var barChartCanvas = $("#barChart").get(0).getContext("2d");
                var barChart = new Chart(barChartCanvas);
                var barChartData = areaChartData;
                barChartData.datasets[1].fillColor = "#00a65a";
                barChartData.datasets[1].strokeColor = "#00a65a";
                barChartData.datasets[1].pointColor = "#00a65a";
                var barChartOptions = {
                    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                    scaleBeginAtZero: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: true,
                    //String - Colour of the grid lines
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: true,
                    //Boolean - If there is a stroke on each bar
                    barShowStroke: true,
                    //Number - Pixel width of the bar stroke
                    barStrokeWidth: 2,
                    //Number - Spacing between each of the X value sets
                    barValueSpacing: 5,
                    //Number - Spacing between data sets within X values
                    barDatasetSpacing: 1,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                    //Boolean - whether to make the chart responsive
                    responsive: true,
                    maintainAspectRatio: true
                };

                barChartOptions.datasetFill = false;
                barChart.Bar(barChartData, barChartOptions);
            }

            function show_data() {
                $(".datatab").show();
                var bulan = $("#bulan").val();
                var tahun = $("#tahun").val();
                $(".bulan1").text(get_bulan(bulan) + " " + (tahun - 1));
                $(".bulan2").text("DEC " + (tahun - 1));
                $(".bulan3").text(get_bulan(bulan) + " " + (tahun - 0));
                //alert(bulan +" "+tahun);
                bar();
                pie();
            }

            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            
            function rem_document(obj){
                $(obj).parent().parent().remove();
            }

            
            function edit_pengaduan(id){
                //alert(id);
                window.location = "edit_pengaduan/" + id;
            }
            
            function update_perusahaan(param){
                //alert(param);
                $.ajax({
                    type: "POST",
                    data: "VBTYPE=" + param,
                    dataType: "json",
                    url: main.base_url + "index.php/backend/get_mstijk",
                    success: function (msg) {  
                        //console.log(msg);
                        var tr = "";
                        for(var i = 0; i < msg.length; i++){
                            console.log(msg[i]);
                            tr += "<option value='"+msg[i].ID+"'>";
                            tr += msg[i].VNAMA;
                            tr += "</option>";
                        }   
                        $("#ijk2").empty();
                        $("#ijk2").append(tr);
                    },
                    error: function (msg) {
                        console.log(msg);
                        
                    }
                });
            }
            
            function rekapitulasi_pengaduan(){
                //alert('testing');
                $.ajax({
                    type: "POST",
                    data: $("#rekap").serialize(),
                    dataType: "json",
                    url: main.base_url + "index.php/backend/proses_rekap",
                    success: function (msg) {  
                        //console.log(msg);
                        var tr = "";
                        tr += "<tr>";
                            tr += "<th>NOMOR</th>";
                            tr += "<th>SEKTOR JASA KEUANGAN</th>";
                            tr += "<th>INDUSTRI JASA KEUANGAN</th>";
                            tr += "<th>JUMLAH</th>";
                        tr += "</tr>";
                        for(var i = 0; i < msg.IJK.length; i++){
                            //console.log(msg[i]);
                            tr += "<tr>";
                                tr += "<td>"+(i+1)+"</td>";
                                tr += "<td>"+msg.IJK[i].VTYPE+"</td>";
                                tr += "<td>"+msg.IJK[i].VIJK+"</td>";
                                tr += "<td style='text-align:right;'>"+msg.IJK[i].JUMLAH+"</td>";
                            tr += "</tr>";
                        } 
                        
                        var tr2 = "";
                        tr2 += "<table id='rekap' class='table table-bordered table-hover'>";                       
                        tr2 += "<tr>";
                            tr2 += "<th>NOMOR</th>";
                            tr2 += "<th>SEKTOR JASA KEUANGAN</th>";
                            tr2 += "<th>JUMLAH</th>";
                        tr2 += "</tr>";
                        //alert(msg.TIPE.length);
                        var chrt = "";
                        if(pieChart){
                            //pieChart = "";
                            //console.log(pieChart);
                            //pieChart.Doughnut.destroy();
                            $("#pieChart2").empty();
                            chrt = "<canvas id='pieChart' style='height:250px'></canvas>";
                            $("#pieChart2").html(chrt);
                            //global_pie = pieChart;
                        }
                        //console.log($("#pieChart2"));
                        piechart(msg.TIPE, $("#pieChart2"), $("#pieChart"),pieChart);
                        for(var i = 0; i < msg.TIPE.length; i++){
                            //console.log(msg[i]);
                            tr2 += "<tr>";
                                tr2 += "<td>"+(i+1)+"</td>";
                                tr2 += "<td>"+msg.TIPE[i].VTYPE+"</td>";
                                tr2 += "<td style='text-align:right;'>"+msg.TIPE[i].JUMLAH+"</td>";
                            tr2 += "</tr>";
                        }
                        tr2 += "</table>";
                        
                        $("#rekap2").empty();
                        $("#rekap2").append(tr);
                        
                        $("#div_rekap3").empty();
                        $("#div_rekap3").append(tr2);
//                        $("#rekap3").DataTable({
//                            "ordering": false,
//                            "searching": false
//                        });                        
                        
                        $("#box_result").show();
                        $("#box_result2").show();
                    },
                    error: function (msg) {
                        console.log(msg);
                        
                    }
                });
            }

            function rekapitulasi_survey(){
                //alert('testing');
                $.ajax({
                    type: "POST",
                    data: $("#rekap").serialize(),
                    dataType: "json",
                    url: main.base_url + "index.php/backend/proses_rekap_survey",
                    success: function (msg) {  
                        //rekapsurvey_layanan(msg);
                        //rekapsurvey_hubungan(msg);
                        rekapsurvey(msg.layanan, "layanan","OJK memberikan layanan sesuai dengan yang Anda harapkan.",pieChart);
                        rekapsurvey(msg.hubungan, "hubungan","Insan OJK di OJK menjalin hubungan yang baik dengan para stakeholders.",pieChart);
                        rekapsurvey(msg.pengetahuan, "pengetahuan","Insan OJK di OJK memiliki keterampilan dan pengetahuan yang baik sesuai bidang kerjanya.",pieChart);
                        rekapsurvey(msg.fasilitas, "fasilitas","Fasilitas fisik yang dimiliki OJK memadai bagi stakeholders untuk mendapatkan layanan yang nyaman.",pieChart);
                        rekapsurvey(msg.rapi, "rapi","Insan OJK berpakaian rapi dan profesional.",pieChart);
                        rekapsurvey(msg.informasi, "informasi","Anda mudah untuk mendapatkan informasi yang tepat terkait layanan OJK.",pieChart);
                        rekapsurvey(msg.cepat, "cepat","Anda mendapatkan layanan dengan segera tanpa perlu menunggu terlalu lama.",pieChart);
                        rekapsurvey(msg.rapilingkungan, "rapilingkungan","Kerapian lingkungan kerja terjaga dengan baik setiap waktu.",pieChart);
                        rekapsurvey(msg.peduli, "peduli","Insan OJK di OJK menunjukkan kepedulian terhadap kepentingan Anda sebagai stakeholders.",pieChart);
                        rekapsurvey(msg.telepon, "telepon","OJK menjawab telepon dengan ramah dan santun.",pieChart);
                        rekapsurvey(msg.sopan, "sopan","Insan OJK di OJK memberikan layanan secara baik dan sopan.",pieChart);
                        rekapsurvey(msg.waktu, "waktu","Pelayanan yang diberikan bersifat konsisten dan tepat waktu.",pieChart);
                    },
                    error: function (msg) {
                        console.log(msg);                      
                    }
                });
            }

            function rekapsurvey_layanan(msg){
                var tr = "";
                var pemb = 0;
                var peny = 0;
                var score = 0;
                var gbr;
                tr += "<table id='rekap_layanan' class='table table-bordered table-hover'>";
                tr += "<tr>";
                    tr += "<th>NO</th>";
                    tr += "<th>TANGGAPAN</th>";
                    tr += "<th>JUMLAH</th>";
                tr += "</tr>";
                if(msg.layanan){
                    
                    for(var i = 0; i < msg.layanan.length; i++){
                        //console.log(msg[i]);
                        pemb += msg.layanan[i].ILAYANAN*msg.layanan[i].JUMLAH;
                        peny += msg.layanan[i].JUMLAH*1;
                        tr += "<tr>";
                            tr += "<td>"+(i+1)+"</td>";
                            tr += "<td>"+msg.layanan[i].VTYPE+" ("+msg.layanan[i].ILAYANAN+")</td>";
                            tr += "<td style='text-align:right;'>"+msg.layanan[i].JUMLAH+"</td>";
                            //tr += "<td style='text-align:right;'>"+msg.IJK[i].JUMLAH+"</td>";
                        tr += "</tr>";
                    } 
                }
                //console.log(pemb);
                //console.log(peny)
                score = pemb/peny;
                score = score.toFixed(2);
                
                tr += "</table>";

                $("#div_rekap_layanan").empty();
                $("#div_rekap_layanan").append(tr);
                
                $("#score_layanan").empty();
                $("#score_layanan").append("<div><strong>Score: "+score+"</strong></div>");
                if(score > 5) gbr = 0;
                else if(score > 4) gbr = 1;
                else if(score > 3) gbr = 3;
                else if(score > 2) gbr = 4;
                else if(score > 1) gbr = 5;
                else gbr = 6;
                $("#score_layanan").append("<div><img src='"+main.base_url+"img/smiley/"+gbr+".png' /></div>");

                $("#box_header_layanan").html("<strong>OJK memberikan layanan sesuai dengan yang Anda harapkan.</strong>");
                $("#layanan").show();
                
                var chrt = "";
                if(pieChart_layanan){
                    //console.log(pieChart);
                    //pieChart.Doughnut.destroy();
                    $("#pieChart_layanan2").empty();
                    chrt = "<canvas id='pieChart_layanan' style='height:250px'></canvas>";
                    $("#pieChart_layanan2").html(chrt);

                }
                //console.log($("#pieChart2"));
                piechart(msg.layanan, $("#pieChart_layanan2"), $("#pieChart_layanan"));
            }
            
            function rekapsurvey_hubungan(msg){
                var tr = "";
                var pemb = 0;
                var peny = 0;
                var score = 0;
                var gbr;
                tr += "<table id='rekap_hubungan' class='table table-bordered table-hover'>";
                tr += "<tr>";
                    tr += "<th>NO</th>";
                    tr += "<th>TANGGAPAN</th>";
                    tr += "<th>JUMLAH</th>";
                tr += "</tr>";
                if(msg.layanan){
                    
                    for(var i = 0; i < msg.hubungan.length; i++){
                        //console.log(msg[i]);
                        pemb += msg.hubungan[i].IHUBUNGAN*msg.hubungan[i].JUMLAH;
                        peny += msg.hubungan[i].JUMLAH*1;
                        tr += "<tr>";
                            tr += "<td>"+(i+1)+"</td>";
                            tr += "<td>"+msg.hubungan[i].VTYPE+" ("+msg.hubungan[i].IHUBUNGAN+")</td>";
                            tr += "<td style='text-align:right;'>"+msg.hubungan[i].JUMLAH+"</td>";
                            //tr += "<td style='text-align:right;'>"+msg.IJK[i].JUMLAH+"</td>";
                        tr += "</tr>";
                    } 
                }
                //console.log(pemb);
                //console.log(peny)
                score = pemb/peny;
                score = score.toFixed(2);
                
                tr += "</table>";

                $("#div_rekap_hubungan").empty();
                $("#div_rekap_hubungan").append(tr);
                
                $("#score_hubungan").empty();
                $("#score_hubungan").append("<div><strong>Score: "+score+"</strong></div>");
                if(score > 5) gbr = 0;
                else if(score > 4) gbr = 1;
                else if(score > 3) gbr = 3;
                else if(score > 2) gbr = 4;
                else if(score > 1) gbr = 5;
                else gbr = 6;
                $("#score_hubungan").append("<div><img src='"+main.base_url+"img/smiley/"+gbr+".png' /></div>");

                $("#box_header_hubungan").html("<strong>Insan OJK di OJK menjalin hubungan yang baik dengan para stakeholders.</strong>");
                $("#hubungan").show();
                
                var chrt = "";
                if(pieChart_hubungan){
                    //console.log(pieChart);
                    //pieChart.Doughnut.destroy();
                    $("#pieChart_hubungan2").empty();
                    chrt = "<canvas id='pieChart_hubungan' style='height:250px'></canvas>";
                    $("#pieChart_hubungan2").html(chrt);

                }
                //console.log($("#pieChart2"));
                piechart(msg.hubungan, $("#pieChart_hubungan2"), $("#pieChart_hubungan"));
            }

            function rekapsurvey(msg, desc, longdesc, pieobj){
            //alert('testing');
                var tr = "";
                var pemb = 0;
                var peny = 0;
                var score = 0;
                var gbr;
                tr += "<table id='rekap_"+desc+"' class='table table-bordered table-hover'>";
                tr += "<tr>";
                    tr += "<th>NO</th>";
                    tr += "<th>TANGGAPAN</th>";
                    tr += "<th>JUMLAH</th>";
                tr += "</tr>";
                if(msg){
                    
                    for(var i = 0; i < msg.length; i++){
                        //console.log(msg[i]);
                        pemb += msg[i].VALUE*msg[i].JUMLAH;
                        peny += msg[i].JUMLAH*1;
                        tr += "<tr>";
                            tr += "<td>"+(i+1)+"</td>";
                            tr += "<td>"+msg[i].VTYPE+" ("+msg[i].VALUE+")</td>";
                            tr += "<td style='text-align:right;'>"+msg[i].JUMLAH+"</td>";
                            //tr += "<td style='text-align:right;'>"+msg[i].JUMLAH+"</td>";
                        tr += "</tr>";
                    } 
                }
                //console.log(tr);
                //console.log(pemb);
                //console.log(peny)
                score = pemb/peny;
                score = score.toFixed(2);
                
                tr += "</table>";             
                $("#div_rekap_"+desc).empty();
                $("#div_rekap_"+desc).append(tr);
                
                $("#score_"+desc).empty();
                $("#score_"+desc).append("<div><strong>Score: "+score+"</strong></div>");
                if(score > 5) gbr = 0;
                else if(score > 4) gbr = 1;
                else if(score > 3) gbr = 3;
                else if(score > 2) gbr = 4;
                else if(score > 1) gbr = 5;
                else gbr = 6;
                $("#score_"+desc).append("<div><img src='"+main.base_url+"img/smiley/"+gbr+".png' /></div>");

                $("#box_header_"+desc).html("<strong>"+longdesc+"</strong>");
                
                
                //alert(temp1);
                $("#" + desc).show();
                
                var chrt = "";
                if(pieobj){
                    //console.log(pieChart);
                    //pieChart.Doughnut.destroy();
                    $("#pieChart_"+desc+"2").empty();
                    chrt = "<canvas id='pieChart_"+desc+"' style='height:250px'></canvas>";
                    $("#pieChart_"+desc+"2").html(chrt);

                }
                //console.log($("#pieChart2"));
                piechart(msg, $("#pieChart_"+desc+"2"), $("#pieChart_"+desc));
            }

            function show_anggaran(){
                //alert('testing');
                $.ajax({
                    type: "POST",
                    data: $("#dashboard").serialize(),
                    dataType: "json",
                    url: main.base_url + "index.php/backend/show_anggaran",
                    success: function (msg) {  
                        //console.log(msg);
                        $("#PTOT").text(msg.PTOT);
                        $("#IOPR").text(msg.IOPRF);
                        $("#POPR").text(msg.POPR);
                        $("#SPOPR").attr("style","width:"+msg.POPR+"%");
                        
                        $("#IADM").text(msg.IADMF);
                        $("#PADM").text(msg.PADM);
                        $("#SPADM").attr("style","width:"+msg.PADM+"%");
                        
                        $("#IAST").text(msg.IASTF);
                        $("#PAST").text(msg.PAST);
                        $("#SPAST").attr("style","width:"+msg.PAST+"%");
                        
                        $("#IPEND").text(msg.IPENDF);
                        $("#PPEND").text(msg.PPEND);
                        $("#SPEND").attr("style","width:"+msg.PPEND+"%");
                        
                        $("#IBANK").text(msg.IBANKF);
                        $("#PBANK").text(msg.PBANK);
                        $("#SPBANK").attr("style","width:"+msg.PBANK+"%");
                        
                        $("#IEPK").text(msg.IEPKF);
                        $("#PEPK").text(msg.PEPK);
                        $("#SPEPK").attr("style","width:"+msg.PEPK+"%");
                        
                        $("#IBUD").text(msg.IBUDF);
                        $("#PBUD").text(msg.PBUD);
                        $("#SPBUD").attr("style","width:"+msg.PBUD+"%");
                        
                        $("#box_header").html("<strong>Last Updated:"+msg.DDATEF+"</strong>");
                        $("#box_result").show();
                    },
                    error: function (msg) {
                        console.log(msg);
                        
                    }
                });
            }
            
            function piechart(datas, obj, obj2){
                //alert(datas);
                //console.log(datas);
                //global_pie = pieobj;
                var length = datas.length;
                var pieChartCanvas = "";
//                if(pieChart){
//                    console.log($(obj).children());
//                    alert('test');                    
//                    //pieChartCanvas = ($(obj).children(0)).get(0).getContext("2d");
//                } else {
//                    pieChartCanvas = $("#pieChart").get(0).getContext("2d");      
//                    console.log($("#pieChart"));
//                }
                //pieChartCanvas = $("#pieChart").get(0).getContext("2d"); 
                pieChartCanvas = obj2.get(0).getContext("2d"); 
                pieChart = new Chart(pieChartCanvas);
                //global_pie = new Chart(pieChartCanvas);
                
                //pieChart.destroy();
                var colors = ["#00a65a","#f39c12","#f56954","#00c0ef","#3c8dbc","#d2d6de"];
                var highlights = ["#00a65a","#f39c12","#f56954","#00a65a","#f39c12","#00c0ef","#3c8dbc","#d2d6de"];
                var piedatas = [];
                var obj = {};
                for(var i = 0; i < length; i++){
                    obj = {
                        value: datas[i].JUMLAH,
                        color: colors[i],
                        highlight: highlights[i],
                        label: datas[i].VTYPE
                    };
                    piedatas.push(obj);
                }
                //console.log(piedatas);
//                var PieData = [
//                  {
//                    value: 700,
//                    color: "#f56954",
//                    highlight: "#f56954",
//                    label: "Chrome"
//                  },
//                  {
//                    value: 500,
//                    color: "#00a65a",
//                    highlight: "#00a65a",
//                    label: "IE"
//                  },
//                  {
//                    value: 400,
//                    color: "#f39c12",
//                    highlight: "#f39c12",
//                    label: "FireFox"
//                  },
//                  {
//                    value: 0,
//                    color: "#00c0ef",
//                    highlight: "#00c0ef",
//                    label: "Safari"
//                  },
//                  {
//                    value: 0,
//                    color: "#3c8dbc",
//                    highlight: "#3c8dbc",
//                    label: "Opera"
//                  },
//                  {
//                    value: 0,
//                    color: "#d2d6de",
//                    highlight: "#d2d6de",
//                    label: "Navigator"
//                  }
//                ];
                var pieOptions = {
                  //Boolean - Whether we should show a stroke on each segment
                  segmentShowStroke: true,
                  //String - The colour of each segment stroke
                  segmentStrokeColor: "#fff",
                  //Number - The width of each segment stroke
                  segmentStrokeWidth: 2,
                  //Number - The percentage of the chart that we cut out of the middle
                  percentageInnerCutout: 50, // This is 0 for Pie charts
                  //Number - Amount of animation steps
                  animationSteps: 100,
                  //String - Animation easing effect
                  animationEasing: "easeOutBounce",
                  //Boolean - Whether we animate the rotation of the Doughnut
                  animateRotate: true,
                  //Boolean - Whether we animate scaling the Doughnut from the centre
                  animateScale: false,
                  //Boolean - whether to make the chart responsive to window resizing
                  responsive: true,
                  // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                  maintainAspectRatio: true,
                  //String - A legend template
                  legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                };
                //Create pie or douhnut chart
                // You can switch between pie and douhnut using the method below.
                pieChart.Doughnut(piedatas, pieOptions);
                //global_pie.Doughnut(piedatas, pieOptions);

            }
            
            function search_buku_nomor(){
                $.ajax({
                    type: "POST",
                    data: $("#search_form").serialize(),
                    dataType: "json",
                    url: main.base_url + "index.php/backend/search_buku_nomor",
                    success: function (msg) {  
                        //console.log(data);
                    },
                    error: function (msg) {
                        console.log(msg);                       
                    }
                });
            }

            $(document).ready(function () {
                $("#example2").DataTable();
//                $("#rekap2").DataTable({
//                    "ordering": false,
//                    "searching": false
//                });
//                $("#rekap3").DataTable({
//                    "ordering": false,
//                    "searching": false
//                });
                //piechart();
                
//                $("#detail_data").DataTable({
//                    "paging": false,
//                    "ordering": false,
//                    "info": false,
//                    "searching": false
//                });
                //$("#rekap").DataTable();
                
                

                //CKEDITOR.replace('VKASPOS');
                //CKEDITOR.replace('VLANGGAR');
                //CKEDITOR.replace('VKET');
                $('#daterangepicker').daterangepicker();
                $('#datepicker').datepicker({
                    autoclose: true,
                    format:"yyyy-mm-dd"
                });
                
                $("#jenis_pengaduan").change(function(){
                    update_perusahaan($(this).val());
                });

            });
        </script>
    </body>
</html>
