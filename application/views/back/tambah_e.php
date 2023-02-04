<section class="content">
        <div class="container-fluid">
<!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Data E-Sakip
                            </h2> 
                        </div>
                        <?php echo form_open_multipart('back/atambah_e', 'class="form-horizontal"'); ?>
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
                                    <div class="col-sm-12">
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" placeholder="Masukan Nama File...." required autofocus>
                                    </div>
                                </div>
                                </div>

                                <div class="col-md-12">
                                <h2 class="card-inside-title">Data E-Sakip</h2>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">description</i>
                                    </span>
                                
                                    <div class="form-line">
                                    <input type="file" class="form-control" name="userfile" placeholder="Masukan File E-Sakip" required autofocus>
                                </div>
                                </div>

                                <button type="submit" name="submit" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SIMPAN</span>
                                </button>
                                </div>
                            </div>
                                </div> 
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>