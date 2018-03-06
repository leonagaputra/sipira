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
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/input_mpkp" enctype="multipart/form-data">
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
                    <label>Nomor Nota Dinas</label>
                    <input type="text" name="VNOTADINAS" class="form-control" placeholder="Enter Nomor Nota Dinas"  <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>                    
                </div>
                <div class="form-group">
                    <label>Kasus Posisi</label>
                    <textarea  name="VKASPOS" rows="10" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label>Ketentuan Yang Dilanggar</label>
                    <textarea  name="VLANGGAR" rows="10" cols="80"></textarea>
                </div> 
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea  name="VKET" rows="10" cols="80"></textarea>
                </div> 
                <div class="form-group">
                    <label for="exampleInputFile">Dokumen Pendukung</label>
                    <br />
                    <table id="table_dok">
                        <tr id="tr">
                            <td><button id="rem_dokumen" type="button" onclick="rem_document(this)" class="" >-</button></td>
                            <td><input name="dokumen[]" type="file" class="rancanganInputFile" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>></td>
                        </tr>
                    </table>
                    
                    
                    <a id="add_dokumen" type="button" onclick="add_document(this)" class="btn btn-primary" >+</a>
                    
                </div>                
                <div class="box-footer">
                    <a type="button" href="<?php echo $base_url; ?>index.php/backend/input_mpkp" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "disabled"; ?>>Add New</a>
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