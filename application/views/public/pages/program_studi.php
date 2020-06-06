<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('public/_partials/head.php') ?>
  </head>
  <body>
    <?php $this->load->view('public/_partials/header.php') ?>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/front_end/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Program Studi</h1>
            <?php $this->load->view('public/_partials/breadcrumb.php') ?>
        </div>
        </div>
      </div>
    </section>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Program Diploma</span>
            <h2 class="mb-4"><span>Diploma</span> IV <span>(D4)</span></h2>
          </div>
        </div>
        <div class="row">
        	<h2>TRKJ</h2>
            <ol>
            	<li>Teknologi Rekayasa Komputer dan Jaringan</li>
            	<ul>
            		<li><p align=justify>Mencetak tenaga ahli aswaja, terampil dan professional bidang TRKJ. Pembelajaran diarahkan mampu merancang/merekayasa computer, menganalisis kerusakan, perbaikan serta pemeliharaan pada software/hardware, sistem keamanan dan jaringan. Lulusan diharapkan mampu membuat/menciptakan produk unggul TRKJ yang mampu meningkatkan pengetahuan IPTEK, diterima masyarakat dan mampu membuka peluang usaha serta berwirausaha (technopreneur). Terkonsentrasikan pada bidang Multimedia, Rekayasa Perangkat Lunak dan Jaringan Komputer.</p></li>
            	</ul>
            </ol>
        </div>
        <br>
         <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Diploma</span> III<span> (D3)</span></h2>
          </div>
        </div>
        <div class="row">
            <h2>Teknologi Mesin</h2>
            <ol>
            	<li>Terkonsentrasikan pada Konversi Energi </li>
            	<ul>
            		<li><p align=justify>Tenaga ahli madya beraswaja, terampil dan professional dibidang teknologi mesin, mampu menganalisis, melakukan pemeliharaan, perawatan dan berkarya usaha dengan dibekali keahlian kompetensi bidang Teknologi Mesin. Memiliki jiwa teknopreneur untuk mandiri dalam bekerja dan berkarya.</p></li>
            	</ul>
            </ol>
            <h2>Teknologi Listrik</h2>
            <ol>
            	<li>Terkonsentrasikan pada bidang Sistem Tenaga Listrik dan Kontrol</li>
            	<ul>
            		<li><p align=justify>Mencetak tenaga ahli madya beraswaja, profesional, mampu menguasai sistem operasi dan peralatan listrik di lingkungan industri, mampu menganalisis, melakukan perbaikan, perawatan dan kemampuan technopreneur di bidang perangkat system tenaga listrik dan control dengan dibekali kompetensi.</p></li>
            	</ul>
            </ol>
          </div>
        	
            
        </div>
      </div>
    </section>

    <?php $this->load->view('public/_partials/footer.php') ?> 
    
    <?php $this->load->view('public/_partials/loader.php') ?>

    <?php $this->load->view('public/_partials/script.php') ?> 
  </body>
</html>