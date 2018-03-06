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
                        <th>JUDUL</th>
                        <th>DESKRIPSI</th>
                        <th>TIPE</th>
                        <th>SATKER</th>
                        <th>DHUK</th>
                        <th>STATUS</th>
                        <th>DUE DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($datas)) {
                        foreach ($datas as $data) {
                            echo "<tr id='row_" . $data->VNOMOR . "'>";
                            echo "<td>" . $data->VNOMOR . "</td>";
                            echo "<td><a href=\"#detail_modal\" data-toggle=\"modal\" onclick='update_modal($(this).parent().parent()," . $is_dhuk . ");'>" . $data->VTITLE . "</a></td>";
//                            if ($is_dhuk)
//                                echo "<td><a href=\"#detail_modal\" data-toggle=\"modal\" onclick='update_modal($(this).parent().parent()," . $is_dhuk . ");'>" . $data->VTITLE . "</a></td>";
//                            else
//                                echo "<td>" . $data->VTITLE . "</td>";
                            echo "<td>" . $data->VDESC . "</td>";
                            echo "<td>" . $data->VTYPE . "</td>";
                            echo "<td>" . $data->VSATKER . "</td>";
                            echo "<td>" . $data->VDHUK . "</td>";
                            echo "<td>" . $data->VSTAT . "</td>";
                            if($data->VSTAT != "submitted")
                                echo "<td>20 Okt 2016</td>";
                            else 
                                echo "<td></td>";
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
                    <h4 class="modal-title" id="modal_title">Detail Data Document</h4>
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
                                <th>Field</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-weight: bold">JUDUL</td>
                                <td id='tab_judul'>Judul</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">DESKRIPSI</td>
                                <td id='tab_desc'>deskripsi</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">TIPE</td>
                                <td id='tab_tipe'>POJK</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">DHUK</td>
                                <td id='tab_dhuk'>DHK1</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">STATUS</td>
                                <td id="tab_stat">submitted</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">RANCANGAN</td>
                                <td><a href='#'>download</a></td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">KAJIAN</td>
                                <td><a href='#'>download</a></td>
                            </tr>
                        </tbody>                   
                    </table>
                    <div id="modal_desc">
                        <!--Lorem ipsum blaasius repum normandis apsun.-->
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="$('#alert_modal').css('display', 'none');" type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>                    
                    <a href="#" type="button" id="btn-no" data-toggle="tooltip" title="Returned" class="btn btn-primary">aaa</a>
                    <a href="#" type="button" id="btn-yes" data-toggle="tooltip" title="Ongoing Review" class="btn btn-primary">bbb</a>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->


