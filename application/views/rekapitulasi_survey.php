<section class="content-header">
    <h1>
        Rekapitulasi Survey
        <small>Survey Nasabah/Konsumen Pengaduan Industri Jasa Keuangan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Rekapitulasi Survey</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content" id="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form id="rekap" role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/proses_rekap_survey" enctype="multipart/form-data">
                <!-- NOMOR: auto increment -->
                
                <div class="form-group">
                    <label>Range Tanggal</label>                    
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <?php
                        //print_r($values);
                        //echo (isset($submitted) && $submitted == 1) ? $values['DTGLPENG'] : "";
                        //exit;
                        ?>
                        
                        <input type="text" value="<?php echo (isset($submitted) && $submitted == 1) ? $values['DTGL'] : ""; ?>" name="DTGL" class="form-control pull-right" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> id="daterangepicker">
                    </div>
                </div>
                        
                <div class="box-footer">
                    <a type="button" href="javascript:rekapitulasi_survey()" class="btn btn-primary" >Process</a>                    
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->
    <?php
        $result = array(
            'layanan',
            'hubungan',
            'pengetahuan',
            'fasilitas',
            'rapi',
            'informasi',
            'cepat',
            'rapilingkungan',
            'peduli',
            'telepon',
            'sopan',
            'waktu'
        );
       
        $string = "";
        foreach($result as $obj) {
            $string .= '<div class="box" id="'.$obj.'" style="display:none;">';
                $string .= '<div class="box-header" id="box_header_'.$obj.'">';
                    $string .= '<h3 class="box-title"></h3>';
                $string .= '</div>';
                $string .= '<div class="box-body">';
                    $string .= '<div class="row">';
                        $string .= '<div class="col-md-4 ">';
                            $string .= '<div id="div_rekap_'.$obj.'">';       
                            $string .= '</div>';
                        $string .= '</div>';       
                        $string .= '<div class="col-md-4" id="pieChart_'.$obj.'2">';
                            $string .= '<canvas id="pieChart_'.$obj.'" style="height:250px"></canvas>';
                        $string .= '</div>';
                        $string .= '<div class="col-md-4 " id="score_'.$obj.'">';
                            $string .= '<strong>Score: </strong>';
                        $string .= '</div>';
                    $string .= '</div>';
                $string .= '</div>';
            $string .= '</div>';
        }
        echo $string;
    ?>
    
    
</section>