<section class="content">
        <div class="container-fluid">
<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Berita
                            </h2>
                            </div>
                           <?php echo form_open_multipart('back/atambah_b', 'class="form-horizontal"'); ?> 
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
                            <div class="row-clearfix">
                                <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" placeholder="Masukan Judul..." required autofocus>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-12">
                                    <p>
                                        <b>Jenis Berita</b>
                                    </p>
                                    <select class="form-control show-tick" name="jenis">
                                        <option value="Berita">Berita</option>
                                        <option value="Siaran Pers">Siaran Pers</option>
                                        <option value="Infografis">Infografis</option>
                                    </select>
                                </div>
                                
                                
                                <div class="col-sm-12">
                                    <h2 class="card-inside-title">Isi Berita</h2>
                                        <textarea id="ckeditor"  name="isi" required autofocus></textarea>
                                </div>
                            
                                <div class="col-md-12">
                                <h2 class="card-inside-title">Foto Berita</h2>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">images</i>
                                    </span>
                                <div class="form-line">
                                    <input type="file" class="form-control" name="userfile" placeholder="Masukan File Foto/Gambar..." required autofocus>
                                </div>
                                </div>
                        <button type="submit" name="submit" class="btn bg-indigo waves-effect">
                            <i class="material-icons">save</i>
                            <span>SIMPAN</span>
                        </button>
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