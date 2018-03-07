<section class="content-header">
    <h1>
        Edit Pengaduan
        <small>Pengaduan Nasabah/Konsumen Industri Jasa Keuangan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Edit Pengaduan</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/edit_pengaduan/<?php echo $ID;?>" enctype="multipart/form-data">
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
                    <label>Tanggal Pengaduan</label>                    
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <?php
                        //print_r($values['DTGLPENG']);
                        //echo (isset($submitted) && $submitted == 1) ? $values['DTGLPENG'] : "";
                        //exit;
                        ?>
                        <input type="text" value="<?php echo $values['DTGLPENG']; ?>" name="DTGLPENG" class="form-control pull-right" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> id="datepicker">
                    </div>
                </div>
                <div class="form-group">
                    <label>PIC OJK</label>                          
                    <select id="pic_ojk" class="form-control" name="VPIC" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <option value="-" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VPIC']=="-")) ? "selected" : ""; ?>>-</option>
                      <?php
                        foreach ($pics as $pic){
                            //echo $values['VPIC']. " ". $pic->VEMAIL. "test";
                            //echo "testing: " (((isset($submitted) && $submitted == 1)&&($values['VPIC']==".$pic->VEMAIL."))?"selected":"");
                            echo "<option value='".$pic->VEMAIL."' ".((($values['VPIC']==$pic->VEMAIL))?"selected":"")." >".$pic->VNAMA."</option>";
                        }
                      ?>
                      <!--<option value="PERBANKAN" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VPIC']=="PERBANKAN")) ? "selected" : ""; ?>>PERBANKAN</option>
                      <option value="ASURANSI" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTYPE']=="ASURANSI")) ? "selected" : ""; ?>>ASURANSI</option>
                      <option value="PASAR MODAL" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTYPE']=="PASAR MODAL")) ? "selected" : ""; ?>>PASAR MODAL</option>
                      <option value="DANA PENSIUN" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTYPE']=="DANA PENSIUN")) ? "selected" : ""; ?>>DANA PENSIUN</option>
                      <option value="PEMBIAYAAN" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTYPE']=="PEMBIAYAAN")) ? "selected" : ""; ?>>PEMBIAYAAN</option>
                      <option value="PERGADAIAN" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTYPE']=="PERGADAIAN")) ? "selected" : ""; ?>>PERGADAIAN</option> -->
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Sektor Industri Jasa Keuangan</label>                          
                    <select id="jenis_pengaduan" class="form-control" name="VTYPE" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <option value="-" <?php echo ((isset($submitted) && $submitted == 1)&&($values['VTYPE']=="-")) ? "selected" : ""; ?>>-</option>
                      <option value="PERBANKAN" <?php echo (($values['VTYPE']=="PERBANKAN")) ? "selected" : ""; ?>>PERBANKAN</option>
                      <option value="ASURANSI" <?php echo (($values['VTYPE']=="ASURANSI")) ? "selected" : ""; ?>>ASURANSI</option>
                      <option value="PASAR MODAL" <?php echo (($values['VTYPE']=="PASAR MODAL")) ? "selected" : ""; ?>>PASAR MODAL</option>
                      <option value="DANA PENSIUN" <?php echo (($values['VTYPE']=="DANA PENSIUN")) ? "selected" : ""; ?>>DANA PENSIUN</option>
                      <option value="PEMBIAYAAN" <?php echo (($values['VTYPE']=="PEMBIAYAAN")) ? "selected" : ""; ?>>PEMBIAYAAN</option>
                      <option value="PERGADAIAN" <?php echo (($values['VTYPE']=="PERGADAIAN")) ? "selected" : ""; ?>>PERGADAIAN</option>
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Nama Konsumen</label>
                    <input type="text" value="<?php echo $values['VNAMA']; ?>" maxlength="100" name="VNAMA" class="form-control" placeholder="Input Nama Konsumen"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Alamat Konsumen</label>
                    <input type="text" value="<?php echo $values['VALAMAT']; ?>" maxlength="100" name="VALAMAT" class="form-control" placeholder="Input Alamat Konsumen"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Nomor Identitas Konsumen</label>
                    <input type="text" value="<?php echo $values['VIDENTITAS']; ?>"  maxlength="100" name="VIDENTITAS" class="form-control" placeholder="Input NIK Konsumen"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Telepon/Hp Konsumen</label>
                    <input type="text" value="<?php echo $values['VTELEPON']; ?>" maxlength="100" name="VTELEPON" class="form-control" placeholder="Input Telp/Hp Konsumen"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group" id="ijk">
                    <label>Perusahaan yang Diadukan</label>
                    <select id="ijk2" class="form-control" name="ID_MSTIJK" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                     
                        <?php
                        foreach($list_ijk as $obj){
                            echo "<option value='".$obj->ID."' ".((($values['ID_MSTIJK']==$obj->ID)) ? "selected" : "")." >".$obj->VNAMA."</option>";
                        }
                      ?>                        
                    </select>                        
                </div> 
                <div class="form-group">
                    <label>Alamat Perusahaan yang Diadukan</label>
                    <input type="text" value="<?php echo $values['VALAMATPENG']; ?>" maxlength="100" name="VALAMATPENG" class="form-control" placeholder="Input Alamat Perusahaan"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Nama Pengurus</label>
                    <input type="text" value="<?php echo $values['VNAMAPENG']; ?>" maxlength="100" name="VNAMAPENG" class="form-control" placeholder="Input Nama Pengurus"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="form-group">
                    <label>Nomor Telepon Pengurus/Perusahaan</label>
                    <input type="text" value="<?php echo $values['VTELPENG']; ?>" maxlength="100" name="VTELPENG" class="form-control" placeholder="Input Nomor Telepon Pengurus/Perusahaan"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="form-group">
                    <label>Masalah yang Diadukan</label>
                    <input type="text" value="<?php echo $values['VMASALAH']; ?>" name="VMASALAH" class="form-control" placeholder="Input Masalah yang Diadukan"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="form-group">
                    <label>Tanggapan OJK</label>
                    <input type="text" value="<?php echo $values['VTANGGAPAN']; ?>"  name="VTANGGAPAN" class="form-control" placeholder="Input Tanggapan"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="form-group">
                    <label>Saran dan Tindak Lanjut</label>
                    <input type="text" value="<?php echo $values['VSARAN']; ?>"  name="VSARAN" class="form-control" placeholder="Input Saran dan Tindak Lanjut"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <!--<div class="form-group">
                    <label for="exampleInputFile">Dokumen Pendukung</label>
                    <br />
                    <table id="table_dok">
                        <tr id="tr">
                            <td><button id="rem_dokumen" type="button" onclick="rem_document(this)" class="" >-</button></td>
                            <td><input name="dokumen[]" type="file" class="rancanganInputFile" <?php //echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>></td>
                        </tr>
                    </table>
                    
                    
                    <a id="add_dokumen" type="button" onclick="add_document(this)" class="btn btn-primary" >+</a>
                    
                </div> -->               
                <div class="box-footer">                   
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/>
                    <a type="button" href="<?php echo $base_url; ?>index.php/backend/monitoring_pengaduan" class="btn btn-primary" >Back</a>
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