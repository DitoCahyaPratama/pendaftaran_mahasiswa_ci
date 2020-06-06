<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body class="error-page">
    <div class="page-container page-error">
        <div class="page-content">
            <div class="page-inner">
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6 center">
                            <h1 class="error-page-logo">404</h1>
                            <p class="error-page-top-text">Oops.. Ada yang salah..</p>
                            <p class="error-page-bottom-text">Tampaknya kami tidak dapat menemukan halaman yang Anda cari.</p>
                            <a href="<?php echo site_url('home') ?>" class="btn btn-default m-b-xxs">Kembali ke dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/_partials/script.php') ?>
</body>

</html>