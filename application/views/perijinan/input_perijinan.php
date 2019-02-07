<section class="content-header">
    <h1>
        Input Perijinan
        <small>Input Perijinan KOJK SGM</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Input Perijinan</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/perijinan/input_perijinan" enctype="multipart/form-data">
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
                        <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['DTGLSURAT'] : $today; ?>" name="DTGLSURAT" class="form-control pull-right tanggal" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> >
                    </div>
                </div>
                <div class="form-group">
                    <label>Tanggal Diterima</label>                    
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <?php
                        //print_r($values);
                        //echo (isset($submitted) && $submitted == 1) ? $values['DTGLPENG'] : "";
                        //exit;
                        ?>
                        <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['DTGLTERIMA'] : $today; ?>" name="DTGLTERIMA" class="form-control pull-right tanggal" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> >
                    </div>
                </div> 
                <!--<div class="form-group" id="ijk">
                    <label>Status </label>
                    <select id="VSTAT" class="form-control" name="VSTAT" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                     
                        <?php                                                
                        foreach($list_stat_dok as $obj){
                            echo "<option value='".$obj->ID."' ".(((isset($submitted) && $submitted == 1)&&($values['VSTAT']==$obj->ID)) ? "selected" : "")." >".$obj->VDESC."</option>";
                        }
                      ?>                        
                    </select>                        
                </div>-->
                <div class="form-group" id="ijk">
                    <label>Status Surat</label>
                    <select id="VSTATSRT" class="form-control" name="VSTATSRT" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                     
                        <?php                                                
                        foreach($list_stat as $obj){
                            echo "<option value='".$obj->ID."' ".(((isset($submitted) && $submitted == 1)&&($values['VSTATSRT']==$obj->ID)) ? "selected" : "")." >".$obj->VNAMA."</option>";
                        }
                      ?>                        
                    </select>                        
                </div>
                <div class="form-group" id="ijk">
                    <label>Bank Pengirim</label>
                    <select id="ijk2" class="form-control" name="ID_MSTIJK" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                     
                        <?php
                        foreach($list_ijk as $obj){
                            echo "<option value='".$obj->ID."' ".(((isset($submitted) && $submitted == 1)&&($values['ID_MSTIJK']==$obj->ID)) ? "selected" : "")." >".$obj->VNAMA."</option>";
                        }
                      ?>                        
                    </select>                        
                </div> 
                <div class="form-group">
                    <label>PIC OJK</label>                          
                    <select id="pic_ojk" class="form-control" name="VPIC" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <option value="-" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VPIC']=="-")) ? "selected" : ""; ?>>-</option>
                      <?php
                        foreach ($pics as $pic){
                            echo "<option value='".$pic->VEMAIL."'>".$pic->VNAMA."</option>";
                        }
                      ?>                     
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Nomor Surat</label>
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VNOSURAT'] : ""; ?>" maxlength="100" name="VNOSURAT" class="form-control" placeholder="Input Nomor Surat"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Perihal</label>
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VPERIHAL'] : ""; ?>" maxlength="100" name="VPERIHAL" class="form-control" placeholder="Input Perihal Surat"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Kategori</label>                          
                    <select id="pic_ojk" class="form-control" name="ID_MSTKATEGORIIJIN" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <option value="-" <?php echo ((isset($submitted) && $submitted == 1)&&($values['ID_MSTKATEGORIIJIN']=="-")) ? "selected" : ""; ?>>-</option>
                      <?php
                        foreach ($kategoris as $kategori){
                            echo "<option value='".$kategori->ID."'>".$kategori->VDESC."</option>";
                        }
                      ?>                     
                    </select>                   
                </div>                
                <div class="form-group">
                    <label>Perijinan</label>                          
                    <select id="tipe_kantor" class="form-control" name="VTIPEKANTOR" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <option value="-" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTIPEKANTOR']=="-")) ? "selected" : ""; ?>>-</option>
                      <option value="KP" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTIPEKANTOR']=="KP")) ? "selected" : ""; ?>>KANTOR PUSAT</option>
                      <option value="KC" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTIPEKANTOR']=="KC")) ? "selected" : ""; ?>>KANTOR CABANG</option>
                      <option value="KCP" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTIPEKANTOR']=="KCP")) ? "selected" : ""; ?>>KANTOR CABANG PEMBANTU</option>
                      <option value="KK" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTIPEKANTOR']=="KK")) ? "selected" : ""; ?>>KANTOR KAS</option>
                      <option value="FPT" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTIPEKANTOR']=="FPT")) ? "selected" : ""; ?>>FIT AND PROPER</option>
                      <option value="FPT" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTIPEKANTOR']=="MOD")) ? "selected" : ""; ?>>PERMODALAN</option>
                    </select>                   
                </div>              
                
                <div class="form-group">
                    <label>Alamat Lama</label>
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VALAMAT'] : ""; ?>" maxlength="100" name="VALAMAT" class="form-control" placeholder="Input Alamat"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Alamat Baru</label>
                    <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['VALAMATBARU'] : ""; ?>" maxlength="100" name="VALAMATBARU" class="form-control" placeholder="Input Alamat Baru"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                
                
                           
                <div class="box-footer">
                    <a type="button" href="<?php echo $base_url; ?>index.php/perijinan/input_perijinan" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "disabled"; ?>>Add New</a>
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