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
                        <a href="<?php echo site_url('/') ?>">Back to Home</a>
                        <h4 class="login-title">Daftar</h4>
                        <form onsubmit="system_daftar()" id="form_daftar">
                            <div class="form-group">
                                <label for="uname">Nama Lengkap</label>
                                <input type="text" class="form-control" id="uname" required="">
                            </div>
                            <div class="form-group">
                                <label for="upass">Password</label>
                                <input type="password" class="form-control" id="upass" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required="" pattern=".+@gmail\.com" title="Harus menggunakan email dari gmail.com">
                                <label style="">Pastikan masukkan email dengan benar untuk proses aktifasi akun</label>
                            </div>
                            <div class="form-group">
                                <label for="uname">No.Telp / WA</label>
                                <input type="text" class="form-control" id="telp" required="">
                            </div>
                            <div class="form-group">
                                <label for="uname">Program Studi</label>
                                <select class="form-control" id="prodi" required="">
                                    <option value="">Pilih Program Study...</option>
                                    <?php
                                    // $query = _run("SELECT * FROM studies");
                                    // while ($dataone = _get($query)) {
                                    ?>
                                        <option value="<?php echo $dataone['id'] ?>"><?php echo $dataone['name'] ?></option>
                                    <?php
                                    
                                    ?>
                                </select>
                            </div>
                            <div id="sukses">
                                <div class="alert alert-success" role="alert">
                                    Pendaftaran sukses !!
                                </div>
                            </div>
                            <div id="gagal" class="alert alert-danger" role="alert">

                            </div>
                            <button class="btn btn-primary" type="submit">Daftar</button>
                            <a href="<?php echo site_url('public/login') ?>" class="btn btn-default">Login</a><br>
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

        function system_daftar() {
            var uname = $('#uname').val();
            var upass = $('#upass').val();
            var email = $('#email').val();
            var name = $('#name').val();
            var telp = $('#telp').val();
            var prodi = $('#prodi').val();
            $.ajax({
                url: '<?php echo base_url('public/daftar/on_daftar') ?>',
                data: {
                    uname: uname,
                    upass: upass,
                    email: email,
                    name: name,
                    telp: telp,
                    prodi: prodi
                },
                type: 'POST',
                dataType: 'JSON',
                success: function(res) {
                    console.log(res.split('-')[0]);
                    if (res.split('-')[0] == 'sukses') {
                        $('#sukses').show();
                        $('#gagal').hide();
                        Swal.fire({
                            title: 'Mohon Diperhatikan?',
                            text: "Pastikan anda menyimpan bukti pendaftaran berikut!",
                            icon: 'warning',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Baik akan saya simpan!',
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.value) {
                                setInterval(function() {
                                    document.location = '<?php echo base_url('') ?>';
                                }, 1000);
                            }
                        })
                    } else {
                        document.getElementById('gagal').innerHTML = res;
                        $('#gagal').show();
                    }
                },
                error: function(err) {
                    alert(err);
                }
            })
        }

    </script>
</body>

</html>