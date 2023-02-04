<section class="content">
<div class="container-fluid">
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data E-Sakip
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
                        <a href="<?php echo site_url('back/tambah_e'); ?>"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">add</i>
                        <span>Tambah Data E-Sakip</span>
                        </button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tanggal Post</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($esakip as $row => $r) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $r->judul; ?></td>
                                <td><?php echo date('d-m-Y',strtotime($r->tanggal_post)); ?></td>
                                <td>
                                    <a href="<?php echo site_url('back/edit_e/').$r->id_esakip?>"><button type="button" class="btn btn-warning waves-effect">
                                        <i class="material-icons">edit</i>
                                    </button></a>
                                    <a href="<?php echo site_url('back/hapus_e/').$r->id_esakip ?>"
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