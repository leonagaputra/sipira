<section class="content-header">
    <h1>
        Monitoring Pengaduan
        <small>Pengaduan Nasabah/Konsumen Industri Jasa Keuangan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Monitoring Pengaduan</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box">
        <!--<div class="box-header">
            <h3 class="box-title">Monitoring Status Document</h3>
        </div>-->
        <!-- /.box-header -->
        <div class="box-body">
            <div id="alert_modal2" class="callout callout-success" style="display:none">
                <!--<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>-->
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Update Data Successful
            </div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NOMOR</th>
                        <th>TANGGAL</th>
                        <th>NAMA</th>
                        <th>NO TELP</th>
                        <th>SEKTOR INDUSTRI JASA KEUANGAN</th>
                        <th>INDUSTRI JASA KEUANGAN</th>
                        <th>MASALAH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($datas)) {
                        //print_r($datas);exit;
                        $i = 1;
                        foreach ($datas as $data) {                           
                        echo "<tr id='row_" . $data->ID . "' ".(($role == "ADM" || $role == "EPK" || $role == "REC")? "style='cursor:pointer;' onclick='edit_pengaduan(" . $data->ID . ")'":"").">";                           
                                echo "<td>".$i."</td>";                           
                                echo "<td>" . $data->DTGLPENG . "</td>";
                                echo "<td>" . $data->VNAMA . "</td>";                            
                                echo "<td>" . $data->VTELEPON . "</td>";
                                echo "<td>" . $data->VTYPE . "</td>";    
                                echo "<td>" . $data->VIJK . "</td>";
                                echo "<td>" . $data->VMASALAH . "</td>";
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
        <!-- /.box-body -->
    </div>
    <!--<a class="small-box-footer" href="#detail_modal" data-toggle="modal">More info <i class="fa fa-arrow-circle-right"></i></a>-->
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
                    <h4 class="modal-title" id="modal_title">Dokumen Pendukung</h4>
                </div>
                <div class="modal-body">
                    <!--<div>                            
                        <div id="modal_class" class="small-box bg-light-blue">
                            <div class="inner">
                                <h3 id="modal_titlesh">Bc</h3>
                                <p id="modal_title2">Basic Finance</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-people"></i>
                            </div>                            
                        </div>   
                    </div>-->   

                    <table id="detail_data" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Dokumen</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <!--<tr>
                                <td style="font-weight: bold">JUDUL</td>
                                <td id='tab_judul'>Judul</td>
                            </tr>-->
                            <tr>
                                <td>tests</td>                                
                            </tr>
                        </tbody>                   
                    </table>
                    <div id="modal_desc">
                        <!--Lorem ipsum blaasius repum normandis apsun.-->
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="$('#alert_modal').css('display', 'none');" type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                    

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->

<div class="example-modal" >
    <div class="modal" id="detail_validate">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal_title">Validate</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="hdr_id" id="hdr_id" />
                    <table id="detail_data" class="table table-bordered table-hover">
                        <thead>
                            
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <td>Catatan</td>
                                <td>
                                    <textarea  id="VDISPOS" name="VDISPOS" rows="10" cols="60"></textarea>
                                </td>
                            </tr>
                        </tbody>                   
                    </table>
                    <div id="modal_desc">
                        <!--Lorem ipsum blaasius repum normandis apsun.-->
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="$('#alert_modal').css('display', 'none');" type="button" class="btn btn-default pull-left" data-dismiss="modal" id="modal_close">Close</button>                    
                    <a href="#" type="button" id="btn-validate" data-toggle="tooltip" title="validate" class="btn btn-primary" onclick="send_validate();">Validate</a>
                    <!--<a href="#" type="button" id="btn-yes" data-toggle="tooltip" title="Ongoing Review" class="btn btn-primary">bbb</a>-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->


