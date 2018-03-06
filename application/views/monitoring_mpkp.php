<section class="content-header">
    <h1>
        Monitoring
        <small>Selamat datang di SIDOPI</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
                        <th>NOTA DINAS</th>
                        <th>KASUS POSISI</th>
                        <th>DOKUMEN PENDUKUNG</th>
                        <th>KETENTUAN YANG DILANGGAR</th>
                        <th>KETERANGAN</th>     
                        <?php
                            //if($role == "APR"){
                                echo "<th>VALIDATE</th>";
                            //}
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($datas)) {
                        foreach ($datas as $data) {
                            
                            echo "<tr id='row_" . $data->ID . "'>";
                            if($role == "PNG"){
                                echo "<td><a href='". $base_url."index.php/backend/update_mpkp/". $data->ID."'>" . $data->ID . "</a></td>";
                            } else {
                                echo "<td>" . $data->ID . "</td>";
                            }
                            
                            //echo "<td><a href=\"#detail_modal\" data-toggle=\"modal\" onclick='update_modal($(this).parent().parent()," . $is_dhuk . ");'>" . $data->VTITLE . "</a></td>";
//          
                            echo "<td>" . $data->VNOTADINAS . "</td>";
                            echo "<td>" . $data->VKASPOS . "</td>";
                            echo "<td><a href=\"#detail_modal\" data-toggle=\"modal\" onclick='get_detail_data(" . $data->ID . ")'>detail</a></td>";
                            echo "<td>" . $data->VLANGGAR . "</td>";
                            echo "<td>" . $data->VKET . "</td>";
                            if($role == "APR"){
                                if($data->VSTAT == "F")
                                    echo "<td id='validate_".$data->ID."'><a href=\"#detail_validate\" data-toggle=\"modal\" onclick='validate(" . $data->ID . ")'>VALIDATE</a></td>";
                                else
                                    echo "<td>VALIDATED</td>";
                            } else {
                                if($data->VSTAT != "F") echo "<td>VALIDATED</td>";
                                else echo "<td>-</td>";
                            }
                            echo "</tr>";
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


