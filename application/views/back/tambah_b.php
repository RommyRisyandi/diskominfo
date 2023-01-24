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
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float form-group-lg">
                                        <div class="form-line">
                                            <input type="text" class="form-control" />
                                            <label class="form-label">Judul Berita</label>
                                        </div>
                                    </div>
                                    <b>Tanggal Post</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control datetime" placeholder="Cth: 30/07/2019 23:59">
                                            </div>
                                        </div>

                                    <p>
                                        <b>Jenis Berita</b>
                                    </p>
                                    <select class="form-control show-tick">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                            <h2 class="card-inside-title">Isi Berita</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Masukkan isi berita..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <h2 class="card-inside-title">Foto Berita</h2>
                            <div class="body">
                            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>

                         <button type="button" class="btn bg-indigo waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SIMPAN</span>
                                </button>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>