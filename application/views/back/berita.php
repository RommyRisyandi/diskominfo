<section class="content">
<div class="container-fluid">
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Berita
                </h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <?php
                        // Notifikasi
                        if($this->session->flashdata('sukses')) {
                            echo '<p class="alert alert-success">';
                            echo $this->session->flashdata('sukses');
                            
                        }
                        ?>
                    </div>
                </div>
                <div class="form-group">
                 <a href="<?php echo site_url('back/tambah_b'); ?>"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">add</i>
                        <span>Tambah Berita</span>
                </button></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Penulis Berita</th>
                                <th>Judul Berita</th>
                                <th>Jenis Berita</th>
                                <th>Tanggal Post</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($berita as $row => $r) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $r->nama; ?></td>
                                <td><?php echo $r->judul; ?></td>
                                <td><?php echo $r->jenis; ?></td>
                                <td><?php echo $r->tanggal_post; ?></td>
                                <td><a href="<?php echo site_url('back/edit_b/').$r->id_berita?>"><button type="button" class="btn btn-warning waves-effect">
                                    <i class="material-icons">edit</i>
                                    </button></a>
                                    <a href="<?php echo site_url('back/hapus_b/').$r->id_berita ?>"
                                    onClick="return confirm('apakah anda yakin ingin menghapus Data ini?')">
                                    | <button type="button" class="btn btn-danger waves-effect">
                                    <i class="material-icons">delete</i>
                                    </button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
</div>
</section>