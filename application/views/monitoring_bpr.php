<section class="content-header">
    <h1>
        Penjadwalan
        <small>Selamat datang di SIDOPI</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>index.php/backend/home"><i class="fa fa-home"></i> Home</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">
        <!--<div class="box-header with-border">
            <h3 class="box-title">General Elements</h3>
        </div>-->
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/penjadwalan" enctype="multipart/form-data">
                <!-- NOMOR: auto increment -->
                <?php
                if (isset($submitted) && $submitted == 1) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                        Submit penjadwalan berhasil
                    </div>
                    <?php
                }
                ?>
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Bank</th>
                            <th>Total Asset</th>
                            <th>KC</th>
                            <th>KK</th>
                            <th style="width: 40px">Label</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>PT. BPR Sinar Baru Perkasa</td>
                            <td>100.000.000</td>
                            <td>2</td>
                            <td>1</td>
                            <td><span class="badge bg-red">55%</span></td>
                        </tr>
                        <!--<tr>
                            <td>2.</td>
                            <td>Clean database</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-yellow">70%</span></td>
                        </tr>-->
                    </table>
                </div>
                <!-- /.box-body -->


                <!--
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="VTITLE" class="form-control" placeholder="Enter ..."  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="VDESC" class="form-control" placeholder="Enter ..."  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="form-group">
                    <label>Tipe Dokumen</label>
                    <select class="form-control" name="VTYPE">
                        <option value="POJK">POJK</option>
                        <option value="SEOJK">SEOJK</option>
                        <option value="PDK">PDK</option>
                        <option value="SEDK">SEDK</option>
                        <option value="KDK">KDK</option>
                    </select>
                    
                </div>
                <div class="form-group">
                    <label>Skala Prioritas</label>
                    <select class="form-control" name="VSKPR">
                        <option value="umum">umum</option>
                        <option value="mendesak">mendesak</option>
                        <option value="konversi">konversi</option>
                    </select>
                    <input name="VDHUK" type="hidden" class="form-control" value="<?php echo (($VDEP == "DPB1" || $VDEP == "DPB2" || $VDEP == "DPB3") ? "DHK1" : "DHK2"); ?>" />
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $VNAME; ?>" disabled>
                    <input name="VOWNER" type="hidden" class="form-control" value="<?php echo $VNAME; ?>" />
                </div>
                <div class="form-group">
                    <label>Satker</label>
                    <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $VDEP; ?>" disabled>
                    <input name="VSATKER" type="hidden" class="form-control" value="<?php echo $VDEP; ?>" />
                </div>
                
                <input type="hidden" name="VSTAT" value="submitted" />
                
                <div class="form-group">
                    <label>Direktorat Hukum</label>
                    <select class="form-control" disabled>
                        <option <?php echo (($VDEP == "DPB1" || $VDEP == "DPB2" || $VDEP == "DPB3") ? "selected='selected'" : ""); ?> value="DHK1">DHK1</option>
                        <option <?php echo (($VDEP == "DPSI") ? "selected='selected'" : ""); ?> value="DHK2">DHK2</option>
                        <option <?php echo (($VDEP == "LBH") ? "selected='selected'" : ""); ?> value="LBH">LBH</option>
                        <option <?php echo (($VDEP == "GRUP") ? "selected='selected'" : ""); ?> value="GRUP">GRUP</option>
                    </select>
                    <input name="VDHUK" type="hidden" class="form-control" value="<?php echo (($VDEP == "DPB1" || $VDEP == "DPB2" || $VDEP == "DPB3") ? "DHK1" : "DHK2"); ?>" />
                </div>   
                
                
                <div class="form-group">
                    <label for="exampleInputFile">Rancangan</label>
                    <input name="rancangan" type="file" id="rancanganInputFile" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>

                    <p class="help-block">Upload File</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Kajian</label>
                    <input name="kajian" type="file" id="kajianInputFile" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>

                    <p class="help-block">Upload File</p>
                </div>
                -->
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