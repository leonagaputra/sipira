<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Survey</title>

        <?php
        require_once 'frontpage_style.php';
        ?>
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">Survey Kepuasan</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a href="<?php echo $base_url; ?>index.php/main/">Home</a>
                        </li>
                        <!--<li class="page-scroll">
                            <a href="#portfolio">Kelas</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">Servis</a>
                        </li>-->                      
                        <li>
                            <!--<a href="#" data-toggle="modal" data-target="#myModal">Log In</a>-->
                        </li>
                        <!--<li>
                            <a href="<?php echo $base_url; ?>index.php/main/signup">Daftar Baru</a>
                        </li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- Modal -->
        <!-- Modal -->
        <?php
        require_once 'frontpage_login.php';
        ?>

        <!--modal kelas-->
        <div class="modal fade" id="kelasModal1" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">                    
                    <div class="modal-body" style="text-align:center;">
                        <h2>Basic Finance</h2>
                        <hr class="star-primary">
                        <!--<img src="<?php echo $base_url ?>img/portfolio/cabin.png" class="img-responsive img-centered" alt="">-->
                        <div class="row">
                            <div class="portfolio-item">
                                <!-- small box -->
                                <div class="small-box bg-light-blue">
                                    <div class="inner" style="text-align:left;">
                                        <h3>Bc</h3>
                                        <p>Basic Finance</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-ios-people"></i>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Basic Finance berisi soal-soal latihan beserta ujian soal untuk level dasar. Ribuan soal yang kami miliki dapat kami sajikan sebagai bahan latihan Anda untuk menghadapi ujian dengan hanya Rp 10.000.</p>                            
                        </div>
                        <div>
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="<?php echo $base_url; ?>index.php/main/signup/1" class="btn btn-primary pull-right" >Free Trial</a>
                            <div style="clear: both;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--modal kelas 2-->
        <div class="modal fade" id="kelasModal2" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">                    
                    <div class="modal-body" style="text-align:center;">
                        <h2>Managerial Finance</h2>
                        <hr class="star-primary">
                        <!--<img src="<?php echo $base_url ?>img/portfolio/cabin.png" class="img-responsive img-centered" alt="">-->
                        <div class="row">
                            <div class="portfolio-item">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner" style="text-align:left;">
                                        <h3>Mgr</h3>
                                        <p>Managerial Finance</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-ios-people-outline"></i>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Managerial Finance berisi soal-soal latihan beserta ujian soal untuk level managerial. Ribuan soal yang kami miliki dapat kami sajikan sebagai bahan latihan Anda untuk menghadapi ujian dengan hanya Rp 30.000.</p>                            
                        </div>
                        <div>
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="<?php echo $base_url; ?>index.php/main/signup/2" class="btn btn-primary pull-right" >Free Trial</a>
                            <div style="clear: both;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--modal kelas 3-->
        <div class="modal fade" id="kelasModal3" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">                    
                    <div class="modal-body" style="text-align:center;">
                        <h2>Collection Finance</h2>
                        <hr class="star-primary">
                        <!--<img src="<?php echo $base_url ?>img/portfolio/cabin.png" class="img-responsive img-centered" alt="">-->
                        <div class="row">
                            <div class="portfolio-item">
                                <!-- small box -->
                                <div class="small-box bg-yellow">
                                    <div class="inner" style="text-align:left;">
                                        <h3>CN</h3>
                                        <p>Collection Finance</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-ios-person"></i>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Collection Finance berisi soal-soal latihan beserta ujian soal untuk level advanced. Ribuan soal yang kami miliki dapat kami sajikan sebagai bahan latihan Anda untuk menghadapi ujian dengan hanya Rp 50.000.</p>                            
                        </div>
                        <div>
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="<?php echo $base_url; ?>index.php/main/signup/3" class="btn btn-primary pull-right" >Free Trial</a>
                            <div style="clear: both;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Header -->
        <header>        
            <div class="container">
                <!--<span class="skills" style='font-size: 1.75em;font-weight:300;'>Bagaimana tanggapan Anda terhadap pelayanan kami?</span>
                <br/>
                <div class="row">-->
                <div class="row">
                    <form role="form" method="post" action="<?php echo $base_url; ?>index.php/main/input_surveys" enctype="multipart/form-data">
                        <!-- NOMOR: auto increment -->
                        <?php
                        if (isset($submitted) && $submitted == 1) {
                            ?>
                            <div class="alert alert-success alert-dismissible">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <h4><i class="icon fa fa-check"></i> Success!</h4>
                                Submit document successful
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <label>Nama</label>                    
                            <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VNAMA'] : ""; ?>" maxlength="100" name="VNAMA" class="form-control" placeholder="Input Nama"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                        </div>
                        <div class="form-group">
                            <label>Nama Instansi/Pekerjaan</label>                    
                            <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VINSTANSI'] : ""; ?>" maxlength="100" name="VINSTANSI" class="form-control" placeholder="Input Instansi/Pekerjaan"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>                    
                            <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VALAMAT'] : ""; ?>" name="VALAMAT" class="form-control" placeholder="Input Alamat"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                        </div>
                        <div class="form-group">
                            <label>HP</label>                    
                            <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VHP'] : ""; ?>" maxlength="100" name="VHP" class="form-control" placeholder="Input HP"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                        </div>  
                        <div class="form-group">
                            <label>Email</label>                    
                            <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VEMAIL'] : ""; ?>" maxlength="100" name="VEMAIL" class="form-control" placeholder="Input Email"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                        </div>
                        <div class="form-group">
                            <label>OJK memberikan layanan sesuai dengan yang Anda harapkan.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ILAYANAN" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ILAYANAN" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ILAYANAN" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ILAYANAN" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ILAYANAN" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ILAYANAN" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Insan OJK di OJK menjalin hubungan yang baik dengan para stakeholders.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IHUBUNGAN" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IHUBUNGAN" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IHUBUNGAN" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IHUBUNGAN" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IHUBUNGAN" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IHUBUNGAN" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Insan OJK di  OJK memiliki keterampilan dan pengetahuan yang baik sesuai bidang kerjanya.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPENG" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPENG" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPENG" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPENG" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPENG" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPENG" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fasilitas fisik yang dimiliki OJK memadai bagi stakeholders untuk mendapatkan layanan yang nyaman.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IFASI" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IFASI" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IFASI" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IFASI" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IFASI" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IFASI" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Insan OJK berpakaian rapi dan profesional.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPI" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPI" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPI" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPI" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPI" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPI" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Anda mudah untuk mendapatkan informasi yang tepat terkait layanan OJK</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IINFO" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IINFO" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IINFO" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IINFO" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IINFO" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IINFO" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Anda mendapatkan layanan dengan segera tanpa perlu menunggu terlalu lama.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ICEPAT" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ICEPAT" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ICEPAT" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ICEPAT" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ICEPAT" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ICEPAT" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kerapian lingkungan kerja terjaga dengan baik setiap waktu.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPILING" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPILING" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPILING" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPILING" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPILING" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IRAPILING" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Insan OJK di  OJK menunjukkan kepedulian terhadap kepentingan Anda sebagai stakeholders.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPEDULI" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPEDULI" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPEDULI" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPEDULI" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPEDULI" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IPEDULI" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>OJK menjawab telepon dengan ramah dan santun. </label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ITELRAMAH" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ITELRAMAH" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ITELRAMAH" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ITELRAMAH" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ITELRAMAH" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ITELRAMAH" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Insan OJK di  OJK memberikan layanan secara baik dan sopan.</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ISOPAN" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ISOPAN" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ISOPAN" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ISOPAN" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ISOPAN" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="ISOPAN" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pelayanan yang diberikan bersifat konsisten dan tepat waktu</label>                    
                            <div class="form-group">                               
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IWAKTU" value="6">
                                        Sangat Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IWAKTU" value="5">
                                        Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IWAKTU" value="4">
                                        Agak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IWAKTU" value="3">
                                        Agak Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IWAKTU" value="2">
                                        Tidak Setuju  
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <input type="radio" name="IWAKTU" value="1">
                                        Sangat Tidak Setuju  
                                    </div>
                                </div>                                                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Sebutkan 2 (dua) hal yang sudah berjalan dengan baik terkait pelayanan OJK:</label>                    
                            <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VBAIK'] : ""; ?>" name="VBAIK" class="form-control" >                    
                        </div>
                        <div class="form-group">
                            <label>Sebutkan 2 (dua) hal yang perlu ditingkatkan terkait pelayanan OJK:</label>                    
                            <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VTINGKAT'] : ""; ?>" name="VTINGKAT" class="form-control" >                    
                        </div>
                        <div class="form-group">
                            <!--<a type="button" href="<?php echo $base_url; ?>index.php/backend/input_pengaduan" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "disabled"; ?>>Add New</a>-->
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/>
                        </div>
                    </form>
                </div>
            </div>
        </header>    


        <!-- Portfolio Grid Section -->
        <!--
        <section id="portfolio">
            <div class="container">            
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Kelas</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        
                        <div class="small-box bg-light-blue">
                            <div class="inner">
                                <h3>Bc</h3>
                                <p>Basic Finance</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-people"></i>
                            </div>
                            <a class="small-box-footer" href="#kelasModal1" data-toggle="modal">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>Mgr</h3>
                                <p>Managerial Finance</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-people-outline"></i>
                            </div>
                            <a class="small-box-footer" href="#kelasModal2" data-toggle="modal">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>Cn</h3>
                                <p>Collection Finance</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-person"></i>
                            </div>
                            <a class="small-box-footer" href="#kelasModal3" data-toggle="modal">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
        <!--<div class="row">

            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $base_url ?>img/portfolio/cabin.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $base_url ?>img/portfolio/cake.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $base_url ?>img/portfolio/circus.png" class="img-responsive" alt="">
                </a>
            </div>
            
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $base_url ?>img/portfolio/game.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $base_url ?>img/portfolio/safe.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $base_url ?>img/portfolio/submarine.png" class="img-responsive" alt="">
                </a>
            </div>
            
        </div>
    </div>
</section>-->

        <!-- About Section -->
        <!--
        <section class="success" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Servis</h2>
                        <hr class="star-light">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-2">
                        <p>BelajarUjian merupakan sarana pembelajaran yang menyediakan latihan soal bagi Anda untuk mempersiapkan diri menghadapi segala jenis ujian baik itu ujian sertifikasi, ujian masuk universitas, ujian masuk kantor dan ujian lain. </p>
                    </div>
                    <div class="col-lg-4">
                        <p>Dengan ragam soal yang bervariasi dan tingkat kesulitan yang sudah disesuaikan dengan ragam ujian, Anda akan lebih siap dan lebih percaya diri dalam menghadapi ujian yang sebenarnya. </p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <a href="<?php echo $base_url; ?>index.php/main/signup" class="btn btn-lg btn-outline">
                            <!--<i class="fa fa-download"></i> Free Trial -->
        <!-- </a>
     </div>
 </div>
</div>
</section>-->

        <!-- Footer -->
        <!--<footer class="text-center">            
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; BelajarUjian.com 2015
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        -->
        <?php
        require_once 'frontpage_footer.php';
        ?>



        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll visible-xs visible-sm">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>

        <!-- Portfolio Modals -->
        <!--<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="<?php echo $base_url ?>img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">

                            <div class="modal-body">
                                <h2>Basic Finance</h2>
                                <hr class="star-primary">
                                <!--<img src="<?php echo $base_url ?>img/portfolio/cabin.png" class="img-responsive img-centered" alt="">-->
                                <div class="row">
                                    <div class="portfolio-item">
                                        <!-- small box -->
                                        <div class="small-box bg-light-blue">
                                            <div class="inner" style="text-align:left;">
                                                <h3>Bc</h3>
                                                <p>Basic Finance</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-ios-people"></i>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p>Basic Finance berisi soal-soal latihan beserta ujian soal untuk level dasar.  Ribuan soal yang kami miliki dapat kami sajikan sebagai bahan latihan Anda untuk menghadapi ujian dengan hanya Rp 10.000 / tahun.</p>                            
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Managerial Finance</h2>
                                <hr class="star-primary">
                                <img src="<?php echo $base_url ?>img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                                <p>Managerial Finance berisi soal-soal latihan beserta ujian soal untuk level managerial.  Ribuan soal yang kami miliki dapat kami sajikan sebagai bahan latihan Anda untuk menghadapi ujian dengan hanya Rp 30.000 / tahun.</p>                            
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Collection Finance</h2>
                                <hr class="star-primary">
                                <img src="<?php echo $base_url ?>img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                                <p>Collection Finance berisi soal-soal latihan beserta ujian soal untuk level advanced.  Ribuan soal yang kami miliki dapat kami sajikan sebagai bahan latihan Anda untuk menghadapi ujian dengan hanya Rp 50.000 / tahun.</p>
                                <!--<ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>-->
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="<?php echo $base_url ?>img/portfolio/game.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="<?php echo $base_url ?>img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="<?php echo $base_url ?>img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require_once 'frontpage_script.php';
        ?>
        <script>
            function survey(val) {
                $.ajax({
                    type: "POST",
                    data: "IVALUE=" + val,
                    dataType: "json",
                    url: main.base_url + "index.php/main/input_survey",
                    success: function (msg) {
                        //console.log(msg);
                        alert("Terimakasih telah datang ke OJK");
                        window.location = main.base_url;
                    },
                    error: function (msg) {
                        console.log(msg);
                    }
                });
            }
        </script>
    </body>

</html>
