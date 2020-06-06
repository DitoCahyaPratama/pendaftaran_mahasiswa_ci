<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('public/_partials/head.php') ?>
</head>

<body>
    <?php $this->load->view('public/_partials/header.php') ?>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/front_end/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-3 bread">Kontak Kami</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="?p=<?php echo crypt('index', 'DitoCahyaPratama') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Kontak <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h3">Informasi Kontak</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Alamat:</span> Jl. MT. Haryono No. 193 Malang Prov. Jawa Timur, Indonesia</p>
                </div>
                <div class="col-md-3">
                    <p><span>Telepon:</span> <a href="tel://+6282332182332">+6282332182332</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:admin@polisma.ac.id">admin@polisma.ac.id</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="http://polisma.ac.id" target="blank">polisma.ac.id</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-5 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim Pesan" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=politeknik%20unisma%20malang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.poltekunisma.ac.id">poltekunisma.ac.id</a></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('public/_partials/footer.php') ?>

    <?php $this->load->view('public/_partials/loader.php') ?>

    <?php $this->load->view('public/_partials/script.php') ?>
</body>

</html>