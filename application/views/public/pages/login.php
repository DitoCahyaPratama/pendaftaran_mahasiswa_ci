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
                        <h4 class="login-title">Masuk ke akun anda</h4>
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
                            <a href="<?php echo site_url('public/daftar') ?>" class="btn btn-default">Daftar</a><br>
                            <a href="<?php echo site_url('public/forgot') ?>" class="forgot-link">Forgot password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/_partials/script.php') ?>
    <script type="text/javascript">
            $('#sukses').hide();
            $('#gagal').hide();

            function system_login(){
                var email = $('#email').val();
                var upass = $('#upass').val();
                $.ajax({
                    url: '<?php echo base_url('public/login/on_login') ?>',
                    data: {
                        email:email,
                        upass:upass
                    },
                    type: 'POST',
                    dataType : "JSON",
                    success:function(res){
                        if(res == true){
                            $('#sukses').show();
                            $('#gagal').hide();
                            setInterval(function(){ 
                                document.location = '<?php echo base_url('peserta/isi_formulir') ?>';   
                            }, 200);
                        }else{
                            console.log(res);
                            document.getElementById('gagal').innerHTML = res;
                            $('#gagal').show();
                        }
                    },
                    error:function(err){
                        alert(err);
                        console.log(err);
                    }
                })
            }
    </script>
</body>

</html>