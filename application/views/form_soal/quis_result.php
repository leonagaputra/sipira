<section class="content-header">
    <h1>
        Hasil Quis
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i>Hasil Quis</a></li>
        <!--<li class="active">Here</li>-->
    </ol>
</section>


<!-- Main content -->
<section class="content">    
    <div class="box box-default color-palette-box">
        
        <div class="box-body">
            <?php
                if($summary['lulus'] == TRUE){
                    echo "<div>Selamat, Anda dinyatakan lulus pada soal quis ini</div>";
                }
                else {
                    echo "<div>Anda tidak lulus soal quis ini, silakan latihan kembali <a href='".$base_url."index.php/backend/latihan/".$summary['soal_id']."'>di sini</a>.</div>";
                }
            ?>
            Skor yang Anda peroleh :<br/> <?php echo "<div><span style='font-size:100px;'>".$skor . "</span>/100</div>"; ?> 
        </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Your Page Content Here -->

</section>