<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('public/_partials/head.php') ?>
  </head>
  <body>
    <?php $this->load->view('public/_partials/header.php') ?>

    <div class="hero-wrap js-fullheight" style="background-image: url('assets/front_end/images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> Buruan Daftar <br><span>Pendaftaran Gel. 2</span></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Maksimal Tgl. 21 Juli 2020</p>
            <div id="timer" class="d-flex mb-3">
				<div class="time" id="days"></div>
				<div class="time pl-4" id="hours"></div>
				<div class="time pl-4" id="minutes"></div>
				<div class="time pl-4" id="seconds"></div>
			</div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-placeholder"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Letak</h3>
                <p>Terletak di jalan MT. Haryono No. 193 tepatnya di komplek Yayasan Universitas Islam Malang</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-world"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Transportasi</h3>
                <p>Mudah dijangkau oleh moda transportasi dari arah manapun. Seperti dari arah Terminal Landungsari, Terminal Gadang dan Terminal Arjosari.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-hotel"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Penginapan</h3>
                <p>Selain di Rusunawa Unisma, terdapat penginapan di sekitar lingkungan kampus.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-idea"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Program Pendidikan</h3>
                <p>Lamanya studi selama tiga tahun (D-III) untuk Program Studi Teknik Listrik dan Teknik Mesin dan empat tahun (D-IV) untuk Program Studi Teknologi Rekayasan Komputer Jaringan</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img d-flex align-self-stretch" style="background-image:url(assets/front_end/images/unisma.jpg);"></div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Fakta Politeknik Unisma</span>
		            <h2 class="mb-4"><span>Fakta</span> Politeknik Unisma</h2>
		            <p>Fakta menarik tentang Politeknik Unisma </p>
		          </div>
		        </div>
		    		<div class="row">
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-guest"></span>
		              	</div>
		                <strong class="number" data-number="15">0</strong>
		                <span>Dosen</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-handshake"></span>
		              	</div>
		                <strong class="number" data-number="10">0</strong>
		                <span>Sponsor</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-chair"></span>
		              	</div>
		                <strong class="number" data-number="250">0</strong>
		                <span>Total Tempat Duduk</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center py-4 bg-light mb-4">
		              <div class="text">
		              	<div class="icon d-flex justify-content-center align-items-center">
		              		<span class="flaticon-idea"></span>
		              	</div>
		                <strong class="number" data-number="3">0</strong>
		                <span>Jurusan</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Alur</span>
            <h2 class="mb-4"><span>Alur</span> Pendaftaran</h2>
          </div>
        </div>
        <div class="ftco-search">
      <div class="row">
            <div class="col-md-12 nav-link-wrap">
              <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Tahap 01 <span>Daftar, Aktifasi Akun, dan Bayar Pendaftaran</span></a>

                <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Tahap 02 <span>Login, Mengisi Formulir dan Pretest</span></a>

                <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Tahap 03 <span>Pengumuman Penerimaan Mahasiswa Baru</span></a>

                <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Tahap 04 <span>Her Registrasi </span></a>

              </div>
            </div>
            <div class="col-md-12 tab-wrap">
              
              <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">Waktu 24 Jam / Hari</span>
                      <h2><a href="#">Daftar Akun</a></h2>
                      <p>Pendaftaran calon mahasiswa dilakukan pada situs <a href=http://pmb.polisma.ac.id title="Pendaftaran Online" target="blank">http://pmb.polisma.ac.id/daftar</a>, lalu pilih <a href=http://pmb.polisma.ac.id/daftar/?p=Dicg.Y2V0QvDE title="Pendaftaran Online" target="blank">Daftar Sekarang</a>.</p>
                    </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">Waktu 24 Jam / Hari</span>
                      <h2><a href="#">Aktivasi Akun</a></h2>
                      <p>Aktivasi akun dengan cara memilih tulisan <a href="http://pmb.polisma.ac.id/p=DiTNpZj5WdNRQ?p=DiTNpZj5WdNRQ" title="Aktivasi Akun" target="blank">Login</a>.</p>
                    </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">Waktu setiap hari kerja (Senin-Sabtu)  (08.00 s.d 14.00WIB)</span>
                      <h2><a href="#">Pembayaran Pendaftaran</a></h2>
                      <p>Biaya pendaftaran bisa di transferkan melalui <b>Bank BRI </b>dengan Nomor Rekening <b>1259-01-000016-56-4</b> atas nama <b>Politeknik Unisma Malang</b> dengan konfirmasi bukti pembayaran ke Contact Person <b>Humas Politeknik Unisma Malang</b> (<a href="https://wa.me/6282332182332?text=Assalamu%27alaikum%2C%20perkenalkan%20nama%20saya.....">082332182332</a>).</p>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">Waktu 24 Jam / Hari</span>
                      <h2><a href="#">Mengisi Formulir</a></h2>
                      <p>Setelah <a href="http://pmb.polisma.ac.id/p=DiTNpZj5WdNRQ?p=DiTNpZj5WdNRQ" title="Formulir Pendaftaran" target="blank">Login</a>, isi lengkap form pendaftaran.</p>
                    </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">Waktu 24 Jam / Hari</span>
                      <h2><a href="#">Cetak Formulir</a></h2>
                      <p>Formulir pendaftaran akan bisa dicetak setelah formulir pendaftaran terisi lengkap.</p>
                    </div>
                  </div>
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">Waktu 24 Jam / Hari</span>
                      <h2><a href="#">Mengerjakan Pretest</a></h2>
                      <p>Kerjakan <a href="https://docs.google.com/forms/d/1P3kwpGN7YIg7qUHnYDveuyGcxzbMN8w1HXPXpUthDnI/viewform?edit_requested=true" title="Pretest" target="blank">Prestest</a> di <a href="https://docs.google.com/forms/d/1P3kwpGN7YIg7qUHnYDveuyGcxzbMN8w1HXPXpUthDnI/viewform?edit_requested=true" title="Pretest" target="blank">Sini</a></p>
                      </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">08: 00 s.d 14:00 WIB</span>
                      <h2><a href="#">Pengumuman Penerimaan Mahasiswa Baru</a></h2>
                      <p>Pengumuman Penerimaan Mahasiswa Baru dilakukan secara <b>Langsung</b> setelah calon mahasiswa mengerjakan <a href="https://docs.google.com/forms/d/1P3kwpGN7YIg7qUHnYDveuyGcxzbMN8w1HXPXpUthDnI/viewform?edit_requested=true" title="Pretest" target="blank">Prestest</a>.</p>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                  <div class="speaker-wrap ftco-animate d-flex">
                    <div class="text pl-md-5">
                      <span class="time">08:00 s.d 14:00 WIB</span>
                      <h2><a href="#">Her Registrasi</a></h2>
                        <p align="justify">Setelah dinyatakan LULUS.</p>
                        <p align="justify">Silahkan melakukan HER Registrasi paling lambat tanggal 29 Agustus 2020 dengan membawa :
                        <ol>
                          <li>Fotocopy Ijasah legalisir (1 lembar)</li>
                          <li>Fotocopy Kartu Keluarga (1 lembar)</li>
                          <li>Foto Uk. 3x4 (2 lembar)</li>
                          <li>Fotocopy Bukti Pembayaran Pendaftaran dan Bukti Pembayaran Her Registrasi</li>
                        </ol>
                          
                        <p align="justify">Adapun Rincian Biaya untuk Diploma 4 (D4) Program Studi Teknologi Rekayasa Komputer Jaringan adalah sebagai berikut:</p>
                            <ol>
                              <li>DPP sebesar Rp. 10.000.000</li>
                              <li>SPP + HER sebesar Rp. 4.700.000</li>
                              <li>Dana Pembinaan sebesar Rp. 2.000.000</li>
                              <li>Seragam sebesar Rp. 600.000</li>
                              <li>Praktikum sebesar Rp. 6.000.000<br><b>Total = Rp. 23.300.000</b></li>
                            </ol>
                        <p align="justify">Catatan: Biaya minimal yang harus dibayar adalah :</p>
                            <ol>
                              <li>DPP sebesar 10% dari Rp.10.000.000 = Rp. 1.000.000</li>
                              <li>SPP + HER sebesar Rp. 4.700.000</li>
                              <li>Dana Pembinaan sebesar Rp. 2.000.000</li>
                              <li>Seragam sebesar Rp. 600.000</li>
                              <li>Praktikum sebesar 25% dari Rp. 6.000.000 = Rp. 1.500.000<br><b>Total = Rp. 9.800.000</b></li>
                              </ol>
                              <p align="justify">Sedangkan Rincian Biaya untuk Diploma 3 (D3) Khusus Program Studi Teknologi Listrik dan Teknologi Mesin adalah sebagai berikut:</p>
                            <ol>
                              <li>DPP sebesar Rp. 4.500.000</li>
                              <li>SPP + HER sebesar Rp. 3.600.000</li>
                              <li>Dana Pembinaan sebesar Rp. 2.000.000</li>
                              <li>Seragam sebesar Rp. 600.000</li>
                              <li>Praktikum sebesar Rp. 4.000.000<br><b>Total = Rp. 14.700.000</b></li>
                            </ol>
                        <p align="justify">Catatan: Biaya minimal yang harus dibayar adalah :</p>
                            <ol>
                              <li>DPP sebesar 10% dari Rp.4.500.000 = Rp. 450.000</li>
                              <li>SPP + HER sebesar Rp. 3.600.000</li>
                              <li>Dana Pembinaan sebesar Rp. 2.000.000</li>
                              <li>Seragam sebesar Rp. 600.000</li>
                              <li>Praktikum sebesar 25% dari Rp. 4.000.000 = Rp. 1.000.000<br><b>Total = Rp. 7.650.000</b></li>
                            </ol>
                        <p align="justify">Pembayaran selanjutnya dibayarkan sebelum pelaksanaan Ujian Tengah Semester (UTS) dan Ujian Akhir Semester (UAS) Semester Ganjil Tahun Akademik 2020/2021.</p>
                        <p align="justify">Biaya tersebut bisa dibayarkan ke Rekening <b>Bank BRI </b>dengan Nomor Rekening <b>1259-01-000016-56-4</b> atas nama <b>Politeknik Unisma Malang</b> dengan konfirmasi bukti pembayaran ke Contact Person <b>Humas Politeknik Unisma Malang</b> (<a href="https://wa.me/6282332182332?text=Assalamu%27alaikum%2C%20perkenalkan%20nama%20saya.....">082332182332</a>).</p>
                            
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php $this->load->view('public/_partials/footer.php') ?> 
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php $this->load->view('public/_partials/script.php') ?>
  </body>
</html>