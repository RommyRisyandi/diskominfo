<section class="content">
        <div class="container-fluid">
<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Petugas Admin
                            </h2>
                        </div>
                        <?php echo form_open_multipart('back/atambah_p', 'class="form-horizontal"'); ?>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <?php 
                                    // Notifikasi
                                    if($this->session->flashdata('gagal')) {
                                        echo '<p class="alert alert-danger">';
                                        echo $this->session->flashdata('gagal');
                                    }
                                    ?>  
                                </div>

                                <div class="col-sm-12">
                                   <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama..." required autofocus>
                                        </div>
                                    </div>
                                   <div class="input-group">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" placeholder="Masukan E-Mail..." required autofocus>
                                        </div>
                                    </div>
                                   <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="username" placeholder="Masukan Username..." required autofocus>
                                        </div>
                                    </div>
                                   <div class="input-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" placeholder="Masukan Password..." required autofocus>
                                        </div>
                                        
                                            <input type="hidden" class="form-control" name="akses_level" value="petugas" placeholder="Masukan Akses Level..." required autofocus>
                                        
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <h2 class="card-inside-title">Foto Petugas (Optional)</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">images</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="file" class="form-control" name="userfile" placeholder="Masukan File Foto/Gambar...">
                                        </div>
                                    </div>
                            
                            <div class="form-group ">
                                <button type="submit" name="submit" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SIMPAN</span>
                                </button>
                            </div>

                                </div>
                            </div>
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>