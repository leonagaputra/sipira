<section class="content-header">
    <h1>
        Monitoring Perijinan
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Monitoring Perijinan</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form id="search_form" role="form" method="post" action="<?php echo $base_url; ?>index.php/perijinan/monitoring_perijinan" enctype="multipart/form-data">
                <!-- NOMOR: auto increment -->
 
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
                    <label>Status</label> 
                    <select id="STATUS" class="form-control" name="STATUS" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                        <option value="1" <?php if($status == 1)echo "selected"?>>Semua</option>
                        <option value="2" <?php if($status == 2)echo "selected"?>>Masih Dalam Proses</option>
                        <option value="3" <?php if($status == 3)echo "selected"?>>Selesai</option>                       
                    </select>
                </div>
                <div class="box-footer">                  
                    <a type="button" href="<?php echo $base_url; ?>index.php/perijinan/monitoring_perijinan" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "style='display:none;'"; ?>>New Search</a>
                    <input type="submit" name="submit" class="btn btn-primary" value="Search" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/>
                    <!--<a type="button" href="javascript:download_buku_nomor(1);" class="btn btn-primary" >Download All To Excel</a>
                    <a type="button" href="javascript:download_buku_nomor();" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "style='display:none'"; ?>>Download Result To Excel</a>-->
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <div class="box" id="box_result3" style="display:<?php echo $display;?>">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo ($rekap[0]->JML+$rekap[1]->JML+$rekap[2]->JML +
                                    $rekap[3]->JML+$rekap[4]->JML+$rekap[5]->JML+$rekap[6]->JML) ?></span></h3>
                            <p>TOTAL JUMLAH SURAT PERIJINAN YANG MASUK</p>
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
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[0]->JML?></span><sup style="font-size: 20px"></sup></h3>
                            <p><?php echo $rekap[0]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[1]->JML?></span></h3>
                            <p><?php echo $rekap[1]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[2]->JML?></span></h3>
                            <p><?php echo $rekap[2]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[5]->JML?></span></h3>
                            <p><?php echo $rekap[5]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[3]->JML?></span><sup style="font-size: 20px"></sup></h3>
                            <p><?php echo $rekap[3]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[4]->JML?></span></h3>
                            <p><?php echo $rekap[4]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[6]->JML?></span></h3>
                            <p><?php echo $rekap[6]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="small-box bg-light-blue-active">
                        <div class="inner">
                            <h3><span id="PTOT"><?php echo $rekap[7]->JML?></span></h3>
                            <p><?php echo $rekap[7]->VDESC?></p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <!--<a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>-->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->
    <div class="box" id="box_result2" style="display:<?php echo $display;?>">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12 ">    
                    <div style="font-weight: bold;" >KETERANGAN</div>
                        <div class="bg-green color-palette" style="margin:2px;padding:2px;"><span>Selesai/Tembusan/Eksekusi/Dikembalikan</span></div>
                        <div class="bg-yellow color-palette" style="margin:2px;padding:2px;"><span>Kurang dari 10 Hari Kerja</span></div>
                        <div class="bg-purple color-palette" style="margin:2px;padding:2px;"><span>Kurang dari 5 Hari Kerja</span></div>
                        <div class="bg-red color-palette" style="margin:2px;padding:2px;"><span>Terlambat</span></div>
                        <br/>
                        <br/>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>TGL SURAT</th>
                                    <th>TGL DITERIMA</th>
                                    <th>DEADLINE</th>
                                    <!--<th>STATUS DOKUMEN</th>-->
                                    <th>NOMOR SURAT</th>
                                    <th>PERIHAL</th> 
                                    <th>KATEGORI</th>
                                    <th>TIPE KANTOR</th>
                                    <th>BANK</th>
                                    <th>STATUS</th>
                                    <th>PIC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($datas)) {
                                    //print_r($datas);exit;
                                    $i = 1;
                                    foreach ($datas as $data) { 
                                        //print_r($data);exit;
                                    //echo "<tr id='row_" . $data->ID . "' ".((($role == "ADM")||($role == "KPL"))? "style='cursor:pointer;' onclick='edit_perijinan(" . $data->ID .")'":"").">";                                                                                           
                                    echo "<tr id='row_" . $data->ID . "' style='cursor:pointer;' onclick='view_perijinan(" . $data->ID .",3)' class='".$data->COLOR."'>";                                                                                           
                                        //echo "<tr id='row_" . $data->ID . "' >";                                                                                           
                                            echo "<td>".$i."</td>";
                                            echo "<td>" . $data->DTGLSURAT . "</td>";
                                            echo "<td>" . $data->DTGLTERIMA . "</td>";                            
                                            echo "<td>" . $data->DDEADLINE . "</td>";
                                            //echo "<td>" . $data->VSTATSRT . "</td>";
                                            echo "<td>" . $data->VNOSURAT . "</td>";    
                                            echo "<td>" . $data->VPERIHAL . "</td>";
                                            echo "<td>" . $data->VDESC . "</td>";                                            
                                            echo "<td>" . $data->VTIPEKANTOR . "</td>";
                                            echo "<td>" . $data->NAMABANK . "</td>";
                                            echo "<td>" . $data->VSTAT . "</td>";
                                            echo "<td>" . $data->VNAMA . "</td>";
                                        echo "</tr>";
                                        $i++;
                                    }
                                }
                                ?>
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