<section class="content-header">
    <h1>
        Rekapitulasi Pengaduan
        <small>Pengaduan Nasabah/Konsumen Industri Jasa Keuangan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Rekapitulasi Pengaduan</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form id="rekap" role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/proses_rekap" enctype="multipart/form-data">
                <!-- NOMOR: auto increment -->
                
                <div class="form-group">
                    <label>Range Tanggal Pengaduan</label>                    
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <?php
                        //print_r($values);
                        //echo (isset($submitted) && $submitted == 1) ? $values['DTGLPENG'] : "";
                        //exit;
                        ?>
                        
                        <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['DTGLPENG'] : ""; ?>" name="DTGLPENG" class="form-control pull-right" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> id="daterangepicker">
                    </div>
                </div>
                <div class="form-group">
                    <label>Sektor Industri Jasa Keuangan</label>                          
                    <select id="jenis_pengaduan" class="form-control" name="VTYPE" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <option value="ALL">TAMPILKAN SEMUA</option>
                      <option value="PERBANKAN">PERBANKAN</option>
                      <option value="ASURANSI" >ASURANSI</option>
                      <option value="PASAR MODAL">PASAR MODAL</option>
                      <option value="DANA PENSIUN">DANA PENSIUN</option>
                      <option value="PEMBIAYAAN">PEMBIAYAAN</option>
                      <option value="PERGADAIAN">PERGADAIAN</option>
                    </select>                   
                </div>
                        
                <div class="box-footer">
                    <a type="button" href="javascript:rekapitulasi_pengaduan()" class="btn btn-primary" >Process</a>                    
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
    
    <div class="box" id="box_result" style="display:none;">
        <!--<div class="box-header">
            <h3 class="box-title">Monitoring Status Document</h3>
        </div>-->
        <!-- /.box-header -->
        <div class="box-body">
            <div id="div_rekap2">
            <table id="rekap2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NOMOR</th>
                        <th>SEKTOR JASA KEUANGAN</th>
                        <th>INDUSTRI JASA KEUANGAN</th>
                        <th>JUMLAH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PERBANKAN</td>
                        <td>BPD SULUTGO</td>
                        <td>2</td>
                    </tr>
                </tbody>
                <!--<tfoot>
                    <tr>
                        <th>NOMOR</th>
                        <th>JUDUL</th>
                        <th>DESKRIPSI</th>
                        <th>TIPE</th>
                        <th>SATKER</th>
                        <th>DHUK</th>
                        <th>STATUS</th>
                    </tr>
                </tfoot>-->
            </table>
            </div>
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