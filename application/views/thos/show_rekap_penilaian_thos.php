<section class="content-header">
    <h1>
        Show Rekap Penilaian Thos
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Show Rekap Penilaian Thos</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form id="search_form" role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/show_rekap_penilaian_thos/<?php echo $ID_MSTTHOS; ?>/<?php echo $IYEAR; ?>/<?php echo $ISEMESTER; ?>" enctype="multipart/form-data">
                <?php
                /*if (isset($submitted) && $submitted == 1) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        Submit document successful
                    </div>
                    <?php
                }*/
                ?>
                
                <!-- NOMOR: auto increment -->
                <div class="form-group">
                    <label>Tahun</label> 
                    <select id="tahun" class="form-control" name="IYEAR" <?php //echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> disabled="disabled" >
                      <?php
                        /*foreach ($tipe as $obj){
                            echo "<option value='".$obj->ID."' ".((isset($submitted) && $submitted == 1)&&($values['ID_SURAT']==$obj->ID) ? "selected" : "").">".$obj->VDESC." (".$obj->VKODE.")</option>";
                        }*/
                      $year = date('Y');
                      for($i = $year; $i > $year-5; $i--){
                        echo "<option value='".$i."' ".(($IYEAR==$i) ? "selected" : "").">".$i."</option>";
                      }
                      ?>
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Semester</label> 
                    <select id="ISEMESTER" class="form-control" name="ISEMESTER" <?php //echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?> disabled="disabled" >
                      <option value="1" <?php echo ($ISEMESTER==1)?  "selected": ""; ?>>I</option>
                      <option value="2" <?php echo ($ISEMESTER==2)?  "selected": ""; ?>>II</option>
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Nama</label> 
                    <select id="ID_MSTTHOS" class="form-control" name="ID_MSTTHOS" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <?php
                        foreach ($list_thos as $obj){
                            echo "<option value='".$obj->ID."' ".((isset($submitted) && $submitted == 1)&&($ID_MSTTHOS==$obj->ID) ? "selected" : "").">".$obj->VNAMA."</option>";
                        }                                         
                      ?>
                    </select>                   
                </div>
                <?php
                    $i = 1;
                    foreach($dtlnilaithos as $obj){
                        //print_r($obj);exit;
                        echo "<div class='form-group'>";
                            echo "<input type='hidden' name='DTL_ID[]' value='".$obj->ID."' />";
                            echo "<label>" . $i . ". " . $obj->GRPVDESC . " - " . $obj->VDESC . "</label>";
                            echo "<input type='text' value='".$obj->DNILAI."' maxlength='100' name='DTL_NILAI[]' class='form-control' placeholder='Keterangan Surat'  disabled = 'disabled'>";
//                            echo "<select class='form-control' name='DTL_NILAI[]' disabled='disabled'>";
//                                for($j = 1; $j <= 10; $j++){
//                                    echo "<option value='".($j*10)."' ".((($j*10)==$obj->DNILAI) ? "selected": "" )." >".($j*10)."</option>";
//                                }
//                            echo "</select>";
                        echo "</div>";
                        $i++;
                    }
                ?>
                
                <div class="box-footer">                    
                    <!-- <a type="button" href="<?php echo $base_url; ?>index.php/backend/input_penilaian_thos/<?php echo $IYEAR; ?>/<?php echo $ISEMESTER; ?>" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "disabled"; ?>>Add New</a> -->
                    <!-- <input type="submit" name="submit" class="btn btn-primary" value="Submit" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/> -->
                    <a type="button" href="<?php echo $base_url; ?>index.php/backend/rekap_penilaian_thos/" class="btn btn-primary" >Back</a>
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