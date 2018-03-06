<section class="content-header">
    <h1>
        Data Statistik BPR
        <small>Selamat datang di SIDOPI</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo $base_url; ?>index.php/backend/home"><i class="fa fa-home"></i> Home</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">
    
    <div class="box box-warning">
        <!--<div class="box-header with-border">
            <h3 class="box-title">Data Statistik (Indikator Utama BPR Konvensional)</h3>
        </div>
        -->
        <!-- /.box-header -->
        <div class="box-body">
            <form role="form" method="post" action="<?php echo $base_url; ?>index.php/backend/penjadwalan" enctype="multipart/form-data">
                <!-- NOMOR: auto increment -->
                <?php
                if (isset($submitted) && $submitted == 1) {
                    ?>
                    <div class="alert alert-success alert-dismissible">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                        Submit penjadwalan berhasil
                    </div>
                    <?php
                }
                ?>
                
                <!-- /.box-body -->
                <label>Bulan</label>
                    <select id="bulan" class="form-control" name="bulan" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                        <option value="01">JAN</option>
                        <option value="02">FEB</option> 
                        <option value="03">MAR</option>
                        <option value="04">APR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUN</option> 
                        <option value="07">JUL</option>
                        <option value="08">AUG</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option> 
                        <option value="11">NOV</option>
                        <option value="12">DEC</option>
                    </select>
                    <label>Tahun</label>
                    <select id="tahun" class="form-control" name="tahun" <?php echo (isset($submitted) && $submitted == 1) ? "disabled" : ""; ?>>
                        <option value="2017">2017</option>
                        <option selected="selected" value="2016">2016</option> 
                        <option value="2016">2015</option>  
                    </select>
                <div class="box-footer">                    
                    <!--<input type="button" name="submit" class="btn btn-primary" value="Search" />-->
                    <a type="button" onclick="show_data()" class="btn btn-primary" >Search</a>
                </div>
            </form>
            
        </div>
        <!-- /.box-body -->
    </div>
     
    <div class="box box-warning datatab" style="display:none;">
        <div class="box-header with-border">
            <h3 class="box-title">Data Statistik (Indikator Utama BPR Konvensional)</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            
            <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Indikator</th>
                            <th class="bulan1" align="right">Bulan 1</th>
                            <th class="bulan2" align="right">Bulan 2</th>
                            <th class="bulan3" align="right">Bulan 3</th>
                            <th align="right">g.ytd (%)</th>
                            <th align="right">g.yoy (%)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Aset</td>
                            <td id="aset_bulan1" align="right">234,459,223</td>
                            <td id="aset_bulan2" align="right">342,441,235</td>
                            <td id="aset_bulan3" align="right">456,231,214</td>
                            <td align="right">10</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kredit</td>
                            <td  align="right">333,329,223</td>
                            <td  align="right">352,441,235</td>
                            <td  align="right">556,531,214</td>
                            <td align="right">10</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jumlah rekening (satuan)</td>
                            <td  align="right">142,323</td>
                            <td  align="right">138,581</td>
                            <td  align="right">141,051</td>
                            <td align="right"></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Dana Pihak Ketiga</td>
                            <td  align="right">333,329,223</td>
                            <td  align="right">352,441,235</td>
                            <td  align="right">556,531,214</td>
                            <td align="right">10</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jumlah rekening (satuan)</td>
                            <td  align="right">152,323</td>
                            <td  align="right">178,581</td>
                            <td  align="right">281,051</td>
                            <td align="right"></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tabungan</td>
                            <td  align="right">353,329,223</td>
                            <td  align="right">452,451,235</td>
                            <td  align="right">456,631,114</td>
                            <td align="right">12</td>
                            <td align="right">18</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jumlah rekening (satuan)</td>
                            <td  align="right">172,323</td>
                            <td align="right">270,581</td>
                            <td align="right">181,051</td>
                            <td align="right"></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Deposito</td>
                            <td id="aset_bulan1" align="right">400,359,223</td>
                            <td id="aset_bulan2" align="right">252,551,235</td>
                            <td id="aset_bulan3" align="right">356,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Jumlah rekening (satuan)</td>
                            <td  align="right">72,323</td>
                            <td align="right">70,581</td>
                            <td align="right">81,051</td>
                            <td align="right"></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>NPL Nominal</td>
                            <td align="right">400,359,223</td>
                            <td align="right">252,551,235</td>
                            <td align="right">356,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>LDR (%)</td>
                            <td align="right">102</td>
                            <td align="right">107</td>
                            <td align="right">105</td>
                            <td align="right"></td>
                            <td align="right"></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>NPL Gross (%)</td>
                            <td align="right">6.45</td>
                            <td align="right">5.8</td>
                            <td align="right">5.72</td>
                            <td align="right"></td>
                            <td align="right"></td>
                        </tr>
                    </table>
                </div>
        </div>
        <!-- /.box-body -->
    </div>
       
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->
    <div class="row">
        <div class="col-md-7">   
    <div class="box box-warning datatab" style="display:none;">
        <div class="box-header with-border">
            <h3 class="box-title">Kredit BPR Konvensional Berdasarkan Wilayah</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            
            <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kabupaten/Kota</th>
                            <th align="right" class="bulan1">Bulan 1</th>
                            <th align="right" class="bulan2">Bulan 2</th>
                            <th align="right" class="bulan3">Bulan 3</th>
                            <th align="right">g.ytd (%)</th>
                            <th align="right">g.yoy (%)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#" data-toggle="modal" data-target="#myModal">Surakarta</a></td>
                            <td align="right">400,359,223</td>
                            <td align="right">252,551,235</td>
                            <td align="right">356,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Klaten</td>
                            <td align="right">440,359,223</td>
                            <td align="right">212,551,235</td>
                            <td align="right">356,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Boyolali</td>
                            <td align="right">400,359,223</td>
                            <td align="right">252,561,235</td>
                            <td align="right">556,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Sragen</td>
                            <td align="right">330,359,223</td>
                            <td align="right">252,120,235</td>
                            <td align="right">234,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Sukoharjo</td>
                            <td align="right">330,359,223</td>
                            <td align="right">252,120,235</td>
                            <td align="right">234,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Karanganyar</td>
                            <td align="right">330,359,223</td>
                            <td align="right">332,147,235</td>
                            <td align="right">234,342,114</td>
                            <td align="right">20</td>
                            <td align="right">24</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Wonogiri</td>
                            <td align="right">123,359,223</td>
                            <td align="right">456,120,235</td>
                            <td align="right">234,543,114</td>
                            <td align="right">21</td>
                            <td align="right">13</td>
                        </tr>   
                        <tr>
                            <td></td>
                            <td style="font-weight: bold" >Jumlah</td>
                            <td style="font-weight: bold" align="right">1,123,359,223</td>
                            <td style="font-weight: bold" align="right">1,456,120,235</td>
                            <td style="font-weight: bold" align="right">1,234,543,114</td>
                            <td style="font-weight: bold" align="right">10</td>
                            <td style="font-weight: bold" align="right">20</td>
                        </tr>   
                    </table>
                </div>
        </div>
        <!-- /.box-body -->
    </div>
        </div>
        <div class="col-md-5">
            <div class="box box-warning datatab" style="display:none;">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">  
    <div class="box box-warning datatab" style="display:none;">
        <div class="box-header with-border">
            <h3 class="box-title">Kredit BPR Konvensional Berdasarkan Jenis Penggunaan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            
            <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Jenis Penggunaan</th>
                            <th align="right" class="bulan1">Bulan 1</th>
                            <th align="right" class="bulan2">Bulan 2</th>
                            <th align="right" class="bulan3">Bulan 3</th>
                            <th align="right">g.ytd (%)</th>
                            <th align="right">g.yoy (%)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Modal Kerja</td>
                            <td align="right">220,349,625</td>
                            <td align="right">343,424,761</td>
                            <td align="right">323,342,432</td>
                            <td align="right">10</td>
                            <td align="right">14</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Investasi</td>
                            <td align="right">543,237,675</td>
                            <td align="right">209,342,764</td>
                            <td align="right">320,121,321</td>
                            <td align="right">10</td>
                            <td align="right">14</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Konsumsi</td>
                            <td align="right">332,343,232</td>
                            <td align="right">112,347,432</td>
                            <td align="right">343,678,654</td>
                            <td align="right">12</td>
                            <td align="right">14</td>
                        </tr>                        
                        <tr>
                            <td></td>
                            <td style="font-weight: bold">Jumlah</td>
                            <td style="font-weight: bold" align="right">1,221,434,656</td>
                            <td style="font-weight: bold" align="right">2,213,265,432</td>
                            <td style="font-weight: bold" align="right">3,213,234,321</td>
                            <td style="font-weight: bold" align="right">18</td>
                            <td style="font-weight: bold" align="right">12</td>
                        </tr>   
                    </table>
                </div>
        </div>
        <!-- /.box-body -->
    </div>
        </div>
        <div class="col-md-5">  
            <div class="box box-danger datatab" style="display:none;">
                <div class="box-header with-border">
                    <h3 class="box-title bulan3">Donut Chart</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:250px"></canvas>
                </div>
                <!-- /.box-body -->
          </div>
        </div>
    </div>
    <div class="box box-warning datatab" style="display:none;">
        <div class="box-header with-border">
            <h3 class="box-title">Kredit BPR Konvensional Berdasarkan Sektor  Ekonomi</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            
            <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Sektor Ekonomi</th>
                            <th align="right" class="bulan1">Bulan 1</th>
                            <th align="right" class="bulan2">Bulan 2</th>
                            <th align="right" class="bulan3">Bulan 3</th>
                            <th align="right">g.ytd (%)</th>
                            <th align="right">g.yoy (%)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pertanian, Perburuan dan Kehutanan</td>
                            <td align="right">220,349,625</td>
                            <td align="right">343,424,761</td>
                            <td align="right">323,342,432</td>
                            <td align="right">10</td>
                            <td align="right">14</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Perikanan</td>
                            <td align="right">543,237,675</td>
                            <td align="right">209,342,764</td>
                            <td align="right">320,121,321</td>
                            <td align="right">10</td>
                            <td align="right">14</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pertambangan dan Penggalian</td>
                            <td align="right">332,343,232</td>
                            <td align="right">112,347,432</td>
                            <td align="right">343,678,654</td>
                            <td align="right">18</td>
                            <td align="right">20</td>
                        </tr>  
                        <tr>
                            <td>4</td>
                            <td>Industri Pengolahan</td>
                            <td align="right">211,567,342</td>
                            <td align="right">232,223,245</td>
                            <td align="right">223,678,653</td>
                            <td align="right">16</td>
                            <td align="right">20</td>
                        </tr>  
                        <tr>
                            <td></td>
                            <td style="font-weight: bold">Jumlah</td>
                            <td style="font-weight: bold" align="right">221,434,656</td>
                            <td style="font-weight: bold" align="right">213,265,432</td>
                            <td style="font-weight: bold" align="right">213,234,321</td>
                            <td style="font-weight: bold" align="right">18</td>
                            <td style="font-weight: bold" align="right">12</td>
                        </tr>   
                    </table>
                </div>
        </div>
        <!-- /.box-body -->
    </div>
</section>

<div class="example-modal" >
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal_title">Surakarta</h4>
                </div>
                <div class="modal-body">
                    <div>                            
                        <div id="modal_class" class="small-box bg-light-blue">
                            <!--<div class="inner">
                                <h3 id="modal_titlesh">Bc</h3>
                                <p id="modal_title2">Basic Finance</p>
                            </div>-->
                            <!--div class="icon">
                                <i class="ion ion-ios-people"></i>
                            </div> -->
                            
                        </div>   
                    </div>    
                    <div id="modal_desc">
                        <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>BPR</th>
                            <th align="right" class="bulan1">Bulan 1</th>
                            <th align="right" class="bulan2">Bulan 2</th>
                            <th align="right" class="bulan3">Bulan 3</th>
                            <th align="right">g.ytd (%)</th>
                            <th align="right">g.yoy (%)</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>PT BPR Adipura Santosa</td>
                            <td align="right">40,359,223</td>
                            <td align="right">22,551,235</td>
                            <td align="right">16,731,114</td>
                            <td align="right">15</td>
                            <td align="right">20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>PT. BPR Suryamas</td>
                            <td align="right">10,323,423</td>
                            <td align="right">5,271,435</td>
                            <td align="right">6,23,212</td>
                            <td align="right">12</td>
                            <td align="right">4</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>PT BPR Central International</td>
                            <td align="right">10,232,112</td>
                            <td align="right">3,123,546</td>
                            <td align="right">21,333,211</td>
                            <td align="right">10</td>
                            <td align="right">4</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>PT. BPR Binalanggeng Mulia</td>
                            <td align="right">2,223,223</td>
                            <td align="right">3,120,235</td>
                            <td align="right">4,731,114</td>
                            <td align="right">5</td>
                            <td align="right">12</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>PD.BPR Bank Solo</td>
                            <td align="right">10,332,323</td>
                            <td align="right">22,210,765</td>
                            <td align="right">14,342,654</td>
                            <td align="right">10</td>
                            <td align="right">21</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>PT. BPR Rejeki Insani</td>
                            <td align="right">2,432,223</td>
                            <td align="right">3,123,235</td>
                            <td align="right">2,654,114</td>
                            <td align="right">5</td>
                            <td align="right">2</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>PT. BPR Sukadana</td>
                            <td align="right">3,359,223</td>
                            <td align="right">6,120,235</td>
                            <td align="right">4,543,114</td>
                            <td align="right">21</td>
                            <td align="right">13</td>
                        </tr>   
                        <tr>
                            <td></td>
                            <td style="font-weight: bold" >Jumlah</td>
                            <td style="font-weight: bold" align="right">400,359,223</td>
                            <td style="font-weight: bold" align="right">252,551,235</td>
                            <td style="font-weight: bold" align="right">356,731,114</td>
                            <td style="font-weight: bold" align="right">10</td>
                            <td style="font-weight: bold" align="right">20</td>
                        </tr>   
                    </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <!--<a href="#" type="button" id="btn-latihan" data-toggle="tooltip" title="Soal beserta jawaban" class="btn btn-default">Latihan</a>
                    <a href="#" type="button" id="btn-quis" data-toggle="tooltip" title="Latihan soal tanpa menyimpan skor" class="btn btn-default">Quis</a>
                    <a href="#" type="button" id="btn-ujian" data-toggle="tooltip" title="Uji belajarmu" class="btn btn-primary">Ujian</a>
                    -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->