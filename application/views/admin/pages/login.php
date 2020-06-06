<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
    <div class="page-container">
        <div class="page-inner login-page">
            <div id="main-wrapper" class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-3 login-box">
                        <a href="<?php echo site_url('home') ?>">Back to Home</a>
                        <h4 class="login-title">Admin Login</h4>
                        <form onsubmit="system_login(); return false" id="form_login">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required="">
                            </div>
                            <div class="form-group">
                                <label for="upass">Password</label>
                                <input type="password" class="form-control" id="upass" required="">
                            </div>
                            <div id="sukses">
                                <div class="alert alert-success" role="alert">
                                    Login berhasil !!
                                </div>
                            </div>
                            <div id="gagal" class="alert alert-danger" role="alert">

                            </div>
                            <button class="btn btn-primary" type="submit">Login</button>
                            <a href="?p=<?php echo crypt('daftar', 'DitoCahyaPratama') ?>" class="btn btn-default">Daftar</a><br>
                            <a href="?p=<?php echo crypt('forgot', 'DitoCahyaPratama') ?>" class="forgot-link">Forgot password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/_partials/script.php') ?>
</body>

</html>