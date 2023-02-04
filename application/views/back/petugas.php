<section class="content">
<div class="container-fluid">
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Petugas
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
                <a href="<?php echo site_url('back/tambah_p'); ?>"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">add</i>
                        <span>Tambah Petugas</span>
                </button></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Petugas</th>
                                <th>Posisi/Akses Level</th>
                                <th>E-Mail</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($petugas as $row => $r) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $r->nama; ?></td>
                                <td><?php echo $r->akses_level; ?></td>
                                <td><?php echo $r->email; ?></td>
                                <td><?php echo $r->username; ?></td>
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