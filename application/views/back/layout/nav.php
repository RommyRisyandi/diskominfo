<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url(); ?>/assets2/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo site_url('back/edit_profil'); ?>"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo site_url('back/logout'); ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo site_url('back/index'); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url('back/tambah_b'); ?>"> <i class="material-icons">publish</i><span>Tambah Berita</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('back/tambah_e'); ?>"><i class="material-icons">mail</i><span>Tambah E-Sakip</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('back/tambah_p'); ?>"><i class="material-icons">group</i><span>Tambah Petugas</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo site_url('back/berita'); ?>"><i class="material-icons">view_list</i><span>Berita</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('back/esakip'); ?>"><i class="material-icons">drafts</i><span>E-Sakip</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('back/petugas'); ?>"><i class="material-icons">person</i><span>Petugas</span></a>
                            </li>
                        </ul>
                    </li>
                    
    
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">Dinas Komunikasi dan Informatika</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
         </section>