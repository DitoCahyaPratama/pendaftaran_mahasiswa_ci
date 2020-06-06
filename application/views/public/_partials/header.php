<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('home') ?>">Daftar <span>PMB.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('/') ?>" class="nav-link">Home</a></li>
                <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('public/program_studi') ?>" class="nav-link">Program Studi</a></li>
                <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('public/tentang') ?>" class="nav-link">Tentang</a></li>
                <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('public/alur') ?>" class="nav-link">Alur</a></li>
                <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('public/kontak') ?>" class="nav-link">Kontak</a></li>
                <?php
                if ($this->session->userdata('user_logged') != null) {
                ?>
                    <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('peserta/isi_formulir') ?>" class="nav-link">Isi Formulir Pendaftaran</a></li>
                    <li class="nav-item cta mr-md-2"><a href="#" onclick="system_logout()" class="nav-link">Logout</a></li>
                <?php
                } else {
                ?>
                    <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('public/login') ?>" class="nav-link">Login</a></li>
                    <li class="nav-item cta mr-md-2"><a href="<?php echo site_url('public/daftar') ?>" class="nav-link">Daftar Sekarang</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">
    function system_logout(){
        Swal.fire({
					  title: 'Apakah anda yakin?',
					  text: 'Anda akan logout dari akun ini!',
					  type: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Iya, Logout Sekarang!'
					}).then((result) => {
					  if (result.value) {
					  	$.ajax({
					    	url: '<?php echo base_url('public/login/on_logout') ?>',
					    	type: 'POST',
                            dataType : 'JSON',
					    	success:function(res){
					            if(res == true){
                                    Swal.fire({
                                        title: 'Logout!',
                                        text: 'Anda berhasil logout!',
                                        type: 'success'
                                    }).then((result) => {
                                        console.log(result);
                                        if (result.value) {
                                            setInterval(function(){ 
                                                document.location = '<?php echo base_url('/') ?>';   
                                            }, 200);
                                        }
                                    })
                                }else{
                                    console.log(res);
                                }
					        },
                            error:function(err){
                                alert(err);
                                console.log(err);
                            }
					    })
					  }
                    })
    }
</script>