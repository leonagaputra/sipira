<section class="content-header">
    <h1>
        Input Buku Nomor
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Input Buku Nomor</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form id="search_form" role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/input_buku_nomor" enctype="multipart/form-data">
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
                
                <!-- NOMOR: auto increment -->
                <div class="form-group">
                  <label>Nomor</label>
                  <input class="form-control" placeholder="" disabled="" type="text" name="INOMOR" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['INOMOR'] : ""; ?>">
                </div>
                <div class="form-group">
                    <label>Tipe</label> 
                    <select id="ID_SURAT" class="form-control" name="ID_SURAT" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <?php
                        foreach ($tipe as $obj){
                            echo "<option value='".$obj->ID."' ".((isset($submitted) && $submitted == 1)&&($values['ID_SURAT']==$obj->ID) ? "selected" : "").">".$obj->VDESC." (".$obj->VKODE." )</option>";
                        }
                      ?>
                        
                      <!--<option value="ALL">TAMPILKAN SEMUA</option>
                      <option value="PERBANKAN">PERBANKAN</option>
                      <option value="ASURANSI" >ASURANSI</option>
                      <option value="PASAR MODAL">PASAR MODAL</option>
                      <option value="DANA PENSIUN">DANA PENSIUN</option>
                      <option value="PEMBIAYAAN">PEMBIAYAAN</option>
                      <option value="PERGADAIAN">PERGADAIAN</option>-->
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Kode</label> 
                    <select id="ID_JABATAN" class="form-control" name="ID_JABATAN" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <?php
                        foreach ($kode as $obj){
                            echo "<option value='".$obj->ID."' ".((isset($submitted) && $submitted == 1)&&($values['ID_JABATAN']==$obj->ID) ? "selected" : "").">".$obj->VKODE." - ".$obj->VJABATAN."</option>";
                        }
                      ?>
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Tahun</label> 
                    <select id="IYEAR" class="form-control" name="IYEAR" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <?php
                      $year = date("Y");
                        //foreach ($kode as $obj){
                        for($i = $year; $i > ($year - 5); $i--){
                            echo "<option value='".$i."' ".((isset($submitted) && $submitted == 1)&&($values['IYEAR']==$i) ? "selected" : "").">".$i."</option>";
                        }
                      ?>

                    </select>                   
                </div>
                <div class="form-group">
                    <label>Tanggal Surat</label>                    
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
                    <label>Perihal</label>
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VPERIHAL'] : ""; ?>" maxlength="200" name="VPERIHAL" class="form-control" placeholder="Perihal Surat"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VKETERANGAN'] : ""; ?>" maxlength="100" name="VKETERANGAN" class="form-control" placeholder="Keterangan Surat"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="box-footer">                    
                    <a type="button" href="<?php echo $base_url; ?>index.php/backend/input_buku_nomor" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "disabled"; ?>>Add New</a>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->
    <div class="box" id="box_result2" style="display:block;">
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 ">
                    <div id="div_rekap3">
                    <table id="rekap3" class="table table-bordered table-hover">      
                    </table>
                    </div>
                </div>       
                <div class="col-md-6" id="pieChart2">
                    <canvas id="pieChart" style="height:250px"></canvas>
                </div>
            </div>
        </div>
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