<div class="page-sidebar">
    <a class="logo-box" href="index.php">
        <span>E-PMB</span>
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li>
                    <a href="<?php echo site_url('adm_dashboard') ?>">
                        <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('adm_aktifasi_akun') ?>">
                        <i class="menu-icon icon-key"></i><span>Aktifasi Akun</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-format_list_bulleted"></i><span>Data Mahasiswa</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo site_url('adm_data_semua_mahasiswa') ?>">Data Semua Mahasiswa</a></li>
                        <li><a href="<?php echo site_url('adm_mahasiswa_diterima') ?>">Diterima</a></li>
                        <li><a href="<?php echo site_url('adm_mahasiswa_ditolak') ?>">Ditolak</a></li>
                        <li><a href="<?php echo site_url('adm_mahasiswa_belum_verifikasi') ?>">Belum Diverifikasi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-show_chart"></i><span>Pembayaran</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo site_url('adm_bayar_data_semua_mahasiswa') ?>">Data Semua Mahasiswa</a></li>
                        <li><a href="<?php echo site_url('adm_mahasiswa_sudah_registrasi') ?>">Sudah Registrasi</a></li>
                        <li><a href="<?php echo site_url('adm_mahasiswa_belum_registrasi') ?>">Belum Registrasi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-public"></i><span>Pengaturan</span><i class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo site_url('adm_pendaftaran') ?>">Pendaftaran</a></li>
                        <li><a href="<?php echo site_url('adm_pengumuman') ?>">Pengumuman</a></li>
                        <li><a href="<?php echo site_url('adm_prodi') ?>">Edit Program Studi</a></li>
                        <li><a href="<?php echo site_url('adm_gelombang') ?>">Edit Gelombang</a></li>
                    </ul>
                </li>
                <li class="menu-divider"></li>
                <li>
                    <a href="#" onclick="" href="server.php?p=logout">
                        <i class="menu-icon"></i><span>Logout</span>
                    </a> 
                </li>
            </ul>
        </div>
    </div>
</div>