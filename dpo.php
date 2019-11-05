
			 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
			
                            <div class="panel-body">
<div class="col-md-2 col-sm-2"></div>
                             <div class="col-md-8 col-sm-8">
                    <div class="panel panel-primary" id="print">
                                               
                        <div class="panel-body">
                            
                           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                 <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ciri Ciri </th>
                                            <th>Foto</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <?php 
                        include "include/koneksi.php";
                        $no=1;
                          $tampil=mysqli_query($koneksi,"SELECT * FROM dpo order by id") or die(mysqli_error());
                          
                            while($r=mysqli_fetch_array($tampil)):
                          
                         ?>
                                      <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $r['ciriciri']; ?></td>
                                            <td><img src="admin/controller/dpo/foto/small_<?php echo $r['foto']; ?>"></td>
                                            <td><a href="detaildpo.php?id=<?php echo $r['id'] ;?>" class="btn btn-info">Detail DPO</a></td>
                                        </tr>
                                        
                                    </tbody>
                                  <?php endwhile; ?>
                                </table>
                                </div> 

                       
                             

                        </div>
                        
                        </div>

                      
                    </div>
                    <div class="col-md-2 col-sm-2"></div>
                   
                </div>



                            </div>
                              <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
