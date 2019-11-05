<div class="panel-heading">
                          <center> Lapor Online</center>
                              
                            </div>
                            <div class="panel-body">
                               
                             <div class="col-md-8 col-sm-8">
                               <form method="post" action="simpan.php" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Lapor Online
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#pelapor" data-toggle="tab">Pelapor</a>
                                </li>
                                <li class=""><a href="#peristiwa" data-toggle="tab">peristiwa yang dilaporkan</a>
                                </li>
                             
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="pelapor">
                                  <h4>Data Diri Pelapor</h4>
                                   <div class="form-group">
                                     <label for="form-field-select-3">Foto Pelapor</label>
                                     <div>
                                      <input type="file" name="fupload" class="form-control" />
                                  
                                      </div>
                                      </div>

                                  <div class="form-group">
                              <label for="form-field-select-3">Nomor KTP</label>

                              <div>
                                <input type="text" id="noktp" name="noktp" placeholder="Nomor KTP" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Nama</label>

                              <div>
                                <input type="text" id="nama" name="nama" placeholder="Nama Pelapor" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                              <label for="form-field-select-3">Tempat Lahir</label>

                              <div>
                                <input type="text" id="tempatlhr" name="tempatlhr" placeholder="Tempat Lahir" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Tanggal Lahir</label>

                              <div>
                                <input type="text" id="tgllahr" name="tgllahr" placeholder="tanggal Lahir" class="form-control"/>
                              </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                              <label for="form-field-select-3">Jenis Kelamin</label>

                              <div>
                                <input type="text" id="jenkel" name="jenkel" placeholder="Jenis Kelamin" class="form-control"/>
                              </div>
                            </div>
                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Alamat</label>

                              <div>
                                <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>

                              </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                              <label for="form-field-select-3">Lurah Desa</label>

                              <div>
                                <input type="text" id="lurah_desa" name="lurah_desa" placeholder="Lurah / Desa" class="form-control"/>
                              </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                              <label for="form-field-select-3">Nomor Hp</label>

                              <div>
                                <input type="text" id="nohp" name="nohp" placeholder="Nomor Hp" class="form-control"/>
                              </div>
                            </div>

                                 <div class="form-group">
                              <label for="form-field-select-3">E-mail</label>

                              <div>
                                <input type="text" id="email" name="email" placeholder="E-mail" class="form-control"/>
                              </div>
                            </div>
                              
                            <div class="space-4"></div>
                                </div>
                                <div class="tab-pane fade" id="peristiwa">
                                  <h4>Peristiwa Yang Dilaporkan</h4>
                                   <div class="form-group">
                              <label for="form-field-select-3">Tanggal Laporan</label>

                              <div>
                                <input type="text" id="tanggal" name="tanggal" placeholder="Tanggal Laporan" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Isi Laporan</label>

                              <div>
                                <input type="text" id="isi_laporan" name="isi_laporan" placeholder="Isi Laporan" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Kasus</label>

                              <div>
                                <input type="text" id="kasus" name="kasus" placeholder="Kasus" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Lokasi Kejadian</label>

                              <div>
                                <input type="text" id="lokasi_kejadian" name="lokasi_kejadian" placeholder="Lokasi Kejadian" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Tanggal Kejadian</label>

                              <div>
                                <input type="text" id="tgl_kejadian" name="tgl_kejadian" placeholder="Tanggal Kejadian" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Ciri Ciri Pelaku</label>

                              <div>
                                <input type="text" id="ciri_ciri_pelaku" name="ciri_ciri_pelaku" placeholder="Ciri Ciri Pelaku" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                             <div class="form-group">
                              <label for="form-field-select-3">Kronologis</label>

                              <div>
                                <input type="text" id="kronologis" name="kronologis" placeholder="Kronologis" class="form-control"/>
                              </div>
                            </div>

                            <div class="space-4"></div>
                                </div>
                            </div>
                                
                                
                            </div>


                        </div>
                       
                        <div class="panel-footer">
                           <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user">Laporkan</button>
                        </div>
 </form>
                       
                    </div>
             

<div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Petunjuk
                        </div>
                        <div class="panel-body">
                         <div class="alert alert-danger">
                         <p>semua data yang ada di <b>Pelapor, Peristiwa Yang Dilaporkan, saksi</b> Harus disi !</p>
                         </div>
                           <ol><b>Pelapor</b> adalah pihak yang melaporkan suatu peristiwa, silahkan isi data diri anda dengan benar dan dapat sipertanggungjawabkan</ol>
                           <ol><b>Peristiwa yang dilaporkan</b> harus dibuat dengan rinci apa persitiwa yang anda laporkan, disertai waktu kejadian, tempat kejadian, dan apa yang terjadi</ol>
                           <ol><b>Saksi</b> merupakan pihak yang berada dilokasi ketika peristiwa terjadi</ol>
                        </div>
                        
                    </div>
                </div>

                            </div>
                              