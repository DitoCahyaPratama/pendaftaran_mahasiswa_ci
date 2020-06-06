<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body>
        <div class="page-container">
            <?php $this->load->view("admin/_partials/sidebar.php") ?>
            <div class="page-content">
                <?php $this->load->view("admin/_partials/header.php") ?>
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Dashboard</h3>
                    </div>
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">3</span>
                                            <p class="stats-info">Mahasiswa Diterima</p>
                                        </div>
                                        <div class="pull-right">
                                            <a href=""><i class="icon-keyboard_arrow_right stats-icon"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">4</span>
                                            <p class="stats-info">Mahasiswa Ditolak</p>
                                        </div>
                                        <div class="pull-right">
                                            <a href=""><i class="icon-keyboard_arrow_right stats-icon"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">2</span>
                                            <p class="stats-info">Belum Diverifikasi</p>
                                        </div>
                                        <div class="pull-right">
                                            <a href=""><i class="icon-keyboard_arrow_right stats-icon"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">4</span>
                                            <p class="stats-info">Belum Registrasi</p>
                                        </div>
                                        <div class="pull-right">
                                            <a href=""><i class="icon-keyboard_arrow_right stats-icon"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">2</span>
                                            <p class="stats-info">Sudah Registrasi</p>
                                        </div>
                                        <div class="pull-right">
                                            <a href=""><i class="icon-keyboard_arrow_right stats-icon"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $this->load->view("admin/_partials/footer.php") ?>
                </div>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/script.php") ?>
    </body>
</html>