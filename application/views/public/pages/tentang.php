<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('public/_partials/head.php') ?>
  </head>
  <body>
    <?php $this->load->view('public/_partials/header.php') ?>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/front_end/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Tentang Kami</h1>
            <?php $this->load->view('public/_partials/breadcrumb.php') ?>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-section d-md-flex bg-light">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-7">
            <ul>
                <li><p align=justify>Politeknik berbasis <b>Teknopreneur</b></li></p>
                <li><p align=justify>Melalui Program Diploma, Lulusan SMA/SMK/MA sederajat mampu untuk <b>mengembangkan keterampilan</b> dan <b>penalaran</b> dalam <b>penerapan ilmu pengetahuan dan teknologi (IPTEK)</b>. </li></p>
                <li><p align=justify>Perkuliahan lebih mementingkan <b>aspek praktik</b> dibandingkan <b>aspek teori</b>.</li></p>
                <li><p align=justify>Mahasiswa mampu menjadi <b>praktisi</b> yang <b>terampil</b> untuk memasuki dunia kerja sesuai dengan bidang keahliannya.</li></p>
                <li><p align=justify>Gelar yang akan diperoleh adalah <b>Ahli Madya (A.Md)</b> untuk D-III dan <b>Sarjana Terapan (S.Tr.)</b>.</li></p>
          </div>
        </div>
      </div>
    </section>

    <?php $this->load->view('public/_partials/footer.php') ?> 
    
    <?php $this->load->view('public/_partials/loader.php') ?>
  
    <?php $this->load->view('public/_partials/script.php') ?>
  </body>
</html>