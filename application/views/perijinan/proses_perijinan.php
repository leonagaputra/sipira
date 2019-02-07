<section class="content-header">
    <h1>
        <?php echo $judul;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i><?php echo $judul;?></a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->
    <div class="box" id="box_result2" style="display:block;">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12 ">                  
                    
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
                                    echo "<tr id='row_" . $data->ID . "' style='cursor:pointer;' onclick='edit_perijinan(" . $data->ID ."," . $back .",".$data->ID_MSTKATEGORIIJIN .")'>";                                                                                           
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