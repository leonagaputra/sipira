<section class="content-header">
    <h1>
        Upload Dokumen
        <small>Selamat datang di SIDOPI</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/upload_doc" enctype="multipart/form-data">
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
                    <label>Bulan</label>
                    <select class="form-control" name="bulan" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                        <option value="01">JAN</option>
                        <option value="02">FEB</option> 
                        <option value="03">MAR</option>
                        <option value="04">APR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUN</option> 
                        <option value="07">JUL</option>
                        <option value="08">AUG</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option> 
                        <option value="11">NOV</option>
                        <option value="12">DEC</option>
                    </select>
                    <label>Tahun</label>
                    <select class="form-control" name="tahun" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                        <option value="2017">2017</option>
                        <option selected="selected" value="2016">2016</option> 
                        <option value="2016">2015</option>  
                    </select>
                    <label>Tipe</label>
                    <select class="form-control" name="tipe" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                        <option value="totalaset">Total Aset BPR</option>
                        <option value="kolektibilitas">Kolektibilitas</option> 
                        <option value="sektorekonomi">Sektor Ekonomi</option> 
                        <option value="jenispenggunaan">Jenis Penggunaan</option> 
                    </select>                     
                </div>                                             
                <div class="form-group">
                    <label for="exampleInputFile">Dokumen</label>
                    <input name="dokumen" type="file" id="rancanganInputFile" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>

                    <p class="help-block">Upload File</p>
                </div>                
                <div class="box-footer">
                    <a type="button" href="<?php echo $base_url; ?>index.php/backend/upload" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "disabled"; ?>>Add New</a>
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