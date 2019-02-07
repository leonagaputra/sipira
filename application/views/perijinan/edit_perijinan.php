<section class="content-header">
    <h1>
        Proses Perijinan
        <small>Proses Perijinan KOJK SGM</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Proses Perijinan </a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/perijinan/edit_perijinan/<?php echo $values['ID']; ?>/<?php echo $perijinan_menu; ?>" enctype="multipart/form-data">
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
                        <input type="text" value="<?php echo $values['DTGLSURAT']; ?>" name="DTGLSURAT" class="form-control pull-right tanggal" <?php echo "disabled"; ?> >
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
                        <input type="text" value="<?php echo $values['DTGLTERIMA']; ?>" name="DTGLTERIMA" class="form-control pull-right tanggal" <?php echo "disabled"; ?> >
                    </div>
                </div> 
                <div class="form-group" id="ijk">
                    <label>Deadline</label>
                    <input type="text" value="<?php echo $values['DDEADLINE']; ?>" name="DDEADLINE" class="form-control pull-right tanggal" <?php echo "disabled"; ?> >                                    
                </div>
                <div class="form-group" id="ijk">
                    <label>Status Surat</label>
                    <input type="text" value="<?php echo $values['VSTATSRT']; ?>" name="VSTATSRT" class="form-control pull-right tanggal" <?php echo "disabled"; ?> >                                                       
                </div>
                <div class="form-group" id="ijk">
                    <label>Status Dokumen</label>
                    <input type="text" value="<?php echo $values['VSTAT']; ?>" name="status" class="form-control pull-right tanggal" <?php echo "disabled"; ?> >                                                                               
                    <?php if ($values['VSTATS'] == 1 || $values['VSTATS']==4) {?>
                        <input type="hidden" value="2" name="VSTAT" />  
                    <?php } else if ($values['VSTATS'] == 2) {?> 
                        <input type="hidden" value="3" name="VSTAT" /> 
                    <?php } else if ($values['VSTATS'] == 3) {?> 
                        <input type="hidden" value="6" name="VSTAT" /> 
                    <?php } ?> 
                </div>
                <div class="form-group" id="ijk">
                    <label>Bank Pengirim</label>
                    <input type="text" value="<?php echo $values['NAMABANK']; ?>" name="NAMABANK" class="form-control pull-right tanggal" <?php echo "disabled"; ?> >                                                                               
                </div> 
                <div class="form-group">
                    <label>PIC OJK</label>   
                    <input type="text" value="<?php echo $values['VNAMA']; ?>" name="VNAMA" class="form-control pull-right tanggal" <?php echo "disabled"; ?> >                                                                                                                    
                </div>
                <div class="form-group">
                    <label>Nomor Surat</label>
                    <input type="text" value="<?php echo $values['VNOSURAT']; ?>" maxlength="100" name="VNOSURAT" class="form-control" placeholder="Input Nomor Surat"  <?php echo "disabled" ; ?>>                    
                </div> 
                <div class="form-group">
                    <label>Perihal</label>
                    <input type="text" value="<?php echo $values['VPERIHAL']; ?>" maxlength="100" name="VPERIHAL" class="form-control"  <?php echo "disabled" ; ?>>                                        
                </div> 
                <div class="form-group">
                    <label>Kategori</label> 
                    <input type="text" value="<?php echo $values['VDESC']; ?>" maxlength="100" name="VDESC" class="form-control"  <?php echo "disabled" ; ?>>                                                                              
                    <input type="hidden" value="<?php echo $values['ID_MSTKATEGORIIJIN']; ?>" name="ID_MSTKATEGORIIJIN" /> 
                </div>                
                <div class="form-group">
                    <label>Perijinan</label>                          
                    <select id="tipe_kantor" class="form-control" name="VTIPEKANTOR" <?php echo "disabled"; ?>>
                      <option value="-" <?php echo (($values['VTIPEKANTOR']=="-")) ? "selected" : ""; ?>>-</option>
                      <option value="KP" <?php echo (($values['VTIPEKANTOR']=="KP")) ? "selected" : ""; ?>>KANTOR PUSAT</option>
                      <option value="KC" <?php echo (($values['VTIPEKANTOR']=="KC")) ? "selected" : ""; ?>>KANTOR CABANG</option>
                      <option value="KCP" <?php echo (($values['VTIPEKANTOR']=="KCP")) ? "selected" : ""; ?>>KANTOR CABANG PEMBANTU</option>
                      <option value="KK" <?php echo (($values['VTIPEKANTOR']=="KK")) ? "selected" : ""; ?>>KANTOR KAS</option>
                      <option value="FPT" <?php echo (($values['VTIPEKANTOR']=="FPT")) ? "selected" : ""; ?>>FIT AND PROPER</option>
                      <option value="FPT" <?php echo (($values['VTIPEKANTOR']=="MOD")) ? "selected" : ""; ?>>PERMODALAN</option>
                    </select>                   
                </div>              
                
                <div class="form-group">
                    <label>Alamat Lama</label>
                    <input type="text" value="<?php echo $values['VALAMAT']; ?>" maxlength="100" name="VALAMAT" class="form-control"  <?php echo "disabled" ; ?>>                                                            
                </div> 
                <div class="form-group">
                    <label>Alamat Baru</label>
                    <input type="text" value="<?php echo $values['VALAMATBARU']; ?>" maxlength="100" name="VALAMATBARU" class="form-control"  <?php echo "disabled" ; ?>>                                                                                
                </div>  
                <?php if($perijinan_menu == 1 || $perijinan_menu == 2) {?>
                    <?php if ($values['VSTATS'] == 1 || $values['VSTATS'] == 2 || $values['VSTATS'] == 4 || ($values['VSTATS'] == 3 && isset($submitted) && $submitted == 1)) {?>
                        <div class="form-group">
                            <label>Next PIC </label>
                            <input type="text" value="<?php echo $values['VNEXTPIC']; ?>" maxlength="100" name="VNEXTPIC" class="form-control"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                                                                
                        </div>
                    <?php } else {?>
                        <div class="form-group">
                            <label>No Surat Kirim </label>
                            <input type="text" value="<?php echo $values['VNOSURATKELUAR']; ?>" maxlength="100" name="VNOSURATKELUAR" class="form-control"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                                                                                
                        </div>
                    <?php } ?>
                <?php }  ?>
                
                
                           
                <div class="box-footer">
                    <a type="button" href="<?php echo $base_url.$back; ?>" class="btn btn-primary" >Back</a>
                    <?php if($perijinan_menu == 1 || $perijinan_menu == 2) {?>
                        <input type="submit" name="submit" class="btn btn-primary" value="<?php echo $tombol;?>" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/>
                        <?php if($perijinan_menu == 1 && ($values['VSTATS'] == 1 || $values['VSTATS'] == 2 || ($values['VSTATS'] == 3 && isset($submitted) && $submitted == 1)) ) {?>
                            <a type="button" href="<?php echo $base_url;?>index.php/perijinan/edit_perijinan/<?php echo  $values['ID'];?>/1/4/1" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>Tidak Lengkap</a>
                            <a type="button" href="<?php echo $base_url;?>index.php/perijinan/edit_perijinan/<?php echo  $values['ID'];?>/1/5/1" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>Dikembalikan</a>
                        <?php }  ?>
                    <?php }  ?>
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