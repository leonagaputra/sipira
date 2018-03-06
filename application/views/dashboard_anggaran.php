<section class="content-header">
    <h1>
        Dashboard Anggaran
        <small>Realisasi Anggaran KOJK Sulawesi Utara, Gorontalo, dan Maluku Utara</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Dashboard Anggaran</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form id="dashboard" role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/show_anggaran" enctype="multipart/form-data">
                <!-- NOMOR: auto increment -->
                <?php
                //echo date("m");exit;
                ?>
                <div class="form-group">
                    <label>Bulan</label>                          
                    <select id="bulan" class="form-control" name="bulan">
                        <option value="01" <?php echo (date("m")=="01")?"selected":""; ?>>JANUARI</option>
                        <option value="02" <?php echo (date("m")=="02")?"selected":""; ?>>FEBRUARI</option>
                        <option value="03" <?php echo (date("m")=="03")?"selected":""; ?>>MARET</option>
                        <option value="04" <?php echo (date("m")=="04")?"selected":""; ?>>APRIL</option>
                        <option value="05" <?php echo (date("m")=="05")?"selected":""; ?>>MEI</option>
                        <option value="06" <?php echo (date("m")=="06")?"selected":""; ?>>JUNI</option>
                        <option value="07" <?php echo (date("m")=="07")?"selected":""; ?>>JULI</option>
                        <option value="08" <?php echo (date("m")=="08")?"selected":""; ?>>AGUSTUS</option>
                        <option value="09" <?php echo (date("m")=="09")?"selected":""; ?>>SEPTEMBER</option>
                        <option value="10" <?php echo (date("m")=="10")?"selected":""; ?>>OKTOBER</option>
                        <option value="11" <?php echo (date("m")=="11")?"selected":""; ?>>NOVEMBER</option>
                        <option value="12" <?php echo (date("m")=="12")?"selected":""; ?>>DESEMBER</option>
                    </select>          
                </div>
                <div class="form-group">
                    <label>Tahun</label>                          
                    <select id="tahun" class="form-control" name="tahun">                     
                      <?php
                        $print = "";
                        $year = date("Y");
                        for ($i = $year; $i > ($year - 5); $i--){
                            $print .= "<option value='".$i."'>".$i."</option>";
                        }
                        echo $print;
                      ?>
                    </select>                   
                </div>
                        
                <div class="box-footer">
                    <a type="button" href="javascript:show_anggaran()" class="btn btn-primary" >Process</a>                    
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->
    <div class="box" id="box_result" style="display:none;">
        <div class="box-header" ID="box_header">
            <h3 class="box-title">Monitoring Status Document</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><span id="PTOT">53</span><sup style="font-size: 20px">%</sup></h3>
                            <p>Realisasi Anggaran</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Operasional</span>
                            <span class="info-box-number" id="IOPR">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%" id="SPOPR"></div>
                            </div>
                            <span class="progress-description">
                                <span id="POPR">70</span>% 
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-files-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Administratif</span>
                            <span class="info-box-number" id="IADM">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%" id="SPADM"></div>
                            </div>
                            <span class="progress-description">
                                <span id="PADM">70</span>% 
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="fa fa-star-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pengadaan Aset</span>
                            <span class="info-box-number" id="IAST">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%" id="SPAST"></div>
                            </div>
                            <span class="progress-description">
                                <span id="PAST">70</span>% 
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple">
                        <span class="info-box-icon"><i class="fa fa-flag-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pendukung Lain</span>
                            <span class="info-box-number" id="IPEND">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%" id="SPEND"></div>
                            </div>
                            <span class="progress-description">
                                <span id="PPEND">70</span>% 
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-olive">
                        <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Perbankan</span>
                            <span class="info-box-number" id="IBANK">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%" id="SPBANK"></div>
                            </div>
                            <span class="progress-description">
                                <span id="PBANK">70</span>% 
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue">
                        <span class="info-box-icon"><i class="fa fa-files-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">EPK</span>
                            <span class="info-box-number" id="IEPK">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%" id="SPEPK"></div>
                            </div>
                            <span class="progress-description">
                                <span id="PEPK">70</span>% 
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-maroon">
                        <span class="info-box-icon"><i class="fa fa-star-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">OJK Way</span>
                            <span class="info-box-number" id="IBUD">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%" id="SPBUD"></div>
                            </div>
                            <span class="progress-description">
                                <span id="PBUD">70</span>% 
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>
            <!-- /.info-box -->
        </div>
        
        <!-- /.box-body -->
    </div>
</section>

<div class="example-modal" >
    <div class="modal" id="detail_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal_title">Basic Finance</h4>
                </div>
                <div class="modal-body">
                    <div>                            
                        <div id="modal_class" class="small-box bg-light-blue">
                            <div class="inner">
                                <h3 id="modal_titlesh">Bc</h3>
                                <p id="modal_title2">Basic Finance</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-people"></i>
                            </div>                            
                        </div>   
                    </div>    
                    <div id="modal_desc">
                        Lorem ipsum blaasius repum normandis apsun.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <a href="#" type="button" id="btn-latihan" data-toggle="tooltip" title="Soal beserta jawaban" class="btn btn-default">Latihan</a>
                    <a href="#" type="button" id="btn-quis" data-toggle="tooltip" title="Latihan soal tanpa menyimpan skor" class="btn btn-default">Quis</a>
                    <a href="#" type="button" id="btn-ujian" data-toggle="tooltip" title="Uji belajarmu" class="btn btn-primary">Ujian</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->