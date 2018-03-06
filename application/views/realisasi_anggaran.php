<section class="content-header">
    <h1>
        Realisasi Anggaran
        <small>Realisasi Anggaran KOJK Sulawesi Utara, Gorontalo, dan Maluku Utara</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Realisasi Anggaran</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/realisasi_anggaran" enctype="multipart/form-data">
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
                    <label>Tanggal</label>                    
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <?php
                        //print_r($values);
                        //echo (isset($submitted) && $submitted == 1) ? $values['DTGLPENG'] : "";
                        //exit;
                        ?>
                        <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['DDATE'] : $today; ?>" name="DDATE" class="form-control pull-right" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> id="datepicker">
                    </div>
                </div>
                <div class="form-group">
                    <label>Kegiatan Operasional</label>                          
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['IOPR'] : ""; ?>" maxlength="100" name="IOPR" class="form-control" placeholder="Input Realisasi Keg. Operasional"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                      
                </div>
                <div class="form-group">
                    <label>Kegiatan Administratif</label>                          
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['IADM'] : ""; ?>" maxlength="100" name="IADM" class="form-control" placeholder="Input Realisasi Keg. Administratif"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                      
                </div>
                <div class="form-group">
                    <label>Kegiatan Pengadaan Aset</label>                          
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['IAST'] : ""; ?>" maxlength="100" name="IAST" class="form-control" placeholder="Input Realisasi Keg. Pengadaan Aset"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                      
                </div>
                <div class="form-group">
                    <label>Kegiatan Pendukung Lainnya</label>                          
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['IPEND'] : ""; ?>" maxlength="100" name="IPEND" class="form-control" placeholder="Input Realisasi Keg. Pendukung Lainnya"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                      
                </div>
                <div class="form-group">
                    <label>Perbankan</label>                          
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['IBANK'] : ""; ?>" maxlength="100" name="IBANK" class="form-control" placeholder="Input Realisasi Perbankan"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                      
                </div>  
                <div class="form-group">
                    <label>EPK</label>                          
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['IEPK'] : ""; ?>" maxlength="100" name="IEPK" class="form-control" placeholder="Input Realisasi EPK"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                      
                </div> 
                <div class="form-group">
                    <label>Budaya Kerja (OJK Way)</label>                          
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['IBUD'] : ""; ?>" maxlength="100" name="IBUD" class="form-control" placeholder="Input Realisasi Budaya Kerja (OJK Way)"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                      
                </div> 
                <div class="box-footer">
                    <!--<a type="button" href="<?php echo $base_url; ?>index.php/backend/realisasi_anggaran" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "disabled"; ?>>Add New</a>-->
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->

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