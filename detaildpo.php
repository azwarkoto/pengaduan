<script type="text/javascript">
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<?php 
include "include/koneksi.php";
include "include/fungsi_thumb.php";
$a=$_GET['id'];
$b=mysqli_query($koneksi,"SELECT dpo.id,dpo.nama,dpo.tempatlahir,dpo.tgl,dpo.jk,dpo.umur,dpo.wni,dpo.pterakhir,dpo.alamat,dpo.pernahterkaitkasus,dpo.ciriciri,dpo.keteranganpolisi,dpo.foto,pasal.nopasal,pasal.ket_pasal FROM dpo join pasal ON dpo.nopasal=pasal.nopasal");
while($data=mysqli_fetch_array($b)):
?>
			 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
			
                            <div class="panel-body">
<div class="col-md-2 col-sm-2"></div>
                             <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary" id="print">
                                               
                        <div class="panel-body">
                             <center> <img src="assets/img/logo_reskrimsus.png" /></center><br>   
                             <center><h1>DPO</h1></center><br>
                             <center><img src="admin/controller/dpo/foto/<?php echo $data['foto'] ?>" width="400" height="400"></center>
                             
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['nama'] ?> </label>
                                        </div>
                            </div>


                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['tempatlahir'].'/'. $data['tgl'] ?> </label>
                                        </div>
                            </div>

                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['jk'] ?> </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Umur</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['umur'] ?> </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kewarganegaraan</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['wni'] ?> </label>
                                        </div>
                            </div>
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> pendidikan terakhir</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['pterakhir'] ?> </label>
                                        </div>
                            </div>
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['alamat'] ?> </label>
                                        </div>
                            </div>
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pernah Terkait KAsus</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['pernahterkaitkasus'] ?> </label>
                                        </div>
                            </div>
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ciri - Ciri </label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['ciriciri'] ?> </label>
                                        </div>
                            </div>
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pasal Yang dilanggar</label>
                                        <div class="col-sm-9">
         <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['nopasal']."    "."Tentang"."   ".$data['ket_pasal'] ?> </label>
                                        </div>
                            </div>
                              <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keterangan Polisi</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-12 control-label no-padding-right" for="form-field-1"><?php echo $data['keteranganpolisi'] ?> </label>
                                        </div>
                            </div>

                             

                            
                                 
                          



                        </div>
                        <div class="panel-footer">
                          <button type="button" onclick="printDiv('print')" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print
          </button>
                        </div>

                      
                    </div>
                    <div class="col-md-2 col-sm-2"></div>
                   
                </div>



                            </div>
                              <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
 

<?php endwhile;?>