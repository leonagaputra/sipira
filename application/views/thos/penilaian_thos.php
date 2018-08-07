<section class="content-header">
    <h1>
        Penilaian Thos
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Penilaian THOS</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="box box-warning">       
        <!-- /.box-header -->
        <div class="box-body">
            <form id="search_form" role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/penilaian_thos" enctype="multipart/form-data">
                <!-- NOMOR: auto increment -->
                
                <div class="form-group">
                    <label>Tahun</label> 
                    <select id="IYEAR" class="form-control" name="IYEAR" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <?php
                        /*foreach ($tipe as $obj){
                            echo "<option value='".$obj->ID."' ".((isset($submitted) && $submitted == 1)&&($values['ID_SURAT']==$obj->ID) ? "selected" : "").">".$obj->VDESC." (".$obj->VKODE.")</option>";
                        }*/
                      $year = date('Y');
                      for($i = $year; $i > $year-5; $i--){
                        echo "<option value='".$i."' ".((isset($submitted) && $submitted == 1)&&($values['IYEAR']==$i) ? "selected" : "").">".$i."</option>";
                      }
                      ?>
                        
                      <!--<option value="ALL">TAMPILKAN SEMUA</option>
                      <option value="PERBANKAN">PERBANKAN</option>
                      <option value="ASURANSI" >ASURANSI</option>
                      <option value="PASAR MODAL">PASAR MODAL</option>
                      <option value="DANA PENSIUN">DANA PENSIUN</option>
                      <option value="PEMBIAYAAN">PEMBIAYAAN</option>
                      <option value="PERGADAIAN">PERGADAIAN</option>-->
                    </select>                   
                </div>
                <div class="form-group">
                    <label>Semester</label> 
                    <select id="ISEMESTER" class="form-control" name="ISEMESTER" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                      <option value="1">I</option>
                      <option value="2" >II</option>
                    </select>                   
                </div>               
                <div class="box-footer">                  
                    <a type="button" href="<?php echo $base_url; ?>index.php/backend/penilaian_thos" class="btn btn-primary" <?php echo (isset($submitted) && $submitted == 1) ? "" : "style='display:none;'"; ?>>New Search</a>
                    <input type="submit" name="submit" class="btn btn-primary" value="Search" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>/>                    
                    <a type="button" href="javascript:input_penilaian_thos();" class="btn btn-primary" >Add New</a>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->
    <div class="box" id="box_result2" style="display:block;">
        <div class="box-header">                  
            <!--<a type="button" href="javascript:input_penilaian_thos();" class="btn btn-primary" >Add New</a> -->
            <!--<input type="submit" name="submit" class="btn btn-primary" value="Add New" />   -->                 
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 ">                  
                    
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>NILAI RATA-RATA</th> 
                                    <th>TGL ENTRI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($datas)) {
                                    //print_r($datas);exit;
                                    $i = 1;
                                    foreach ($datas as $data) { 
                                        //print_r($data);exit;
                                    echo "<tr id='row_" . $data->HDRID . "_". $data->ID ."_". $data->ISEMESTER ."_". $data->IYEAR ."_". $data->VCREA ."' style='cursor:pointer;' onclick='show_penilaian_thos(". $data->ID .", ".$data->IYEAR.",  ".$data->ISEMESTER.")' >";                                                                                           
                                            echo "<td>".$i."</td>";
                                            echo "<td>" . $data->VNAMA . "</td>";
                                            echo "<td style='text-align:right'>" . $data->DNILAI . "</td>";                            
                                            echo "<td>" . $data->DCREA . "</td>";                                            
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