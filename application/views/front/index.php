<section class="hero-wrap js-fullheight" style="background-image: url(<?php echo base_url(); ?>/assets/images/bg_3.jpg);" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      
    </section>
        <section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 heading-section heading-section-white">
                        <span class="subheading">Fun facts</span>
                        <h2 class="mb-4">Over 5,100 patients trust us</h2>
                        <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Make an appointment</a></p>
                    </div>
                    <div class="col-md-7">
                        <div class="row pt-4">
                  <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="30">0</strong>
                        <span>Years of Experienced</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="4500">0</strong>
                        <span>Happy Patients</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="84">0</strong>
                        <span>Number of Doctors</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="300">0</strong>
                        <span>Number of Staffs</span>
                      </div>
                    </div>
                  </div>
              </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        
        <div class="row d-flex">
        <?php foreach ($berita as $row => $r) { ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="<?php echo site_url('front/detail/').$r->id_berita; ?>" class="block-20">
              <img src="<?php echo base_url('assets/upload/gambar/thumbs/'.$r->gambar); ?>"></a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><?php echo $r->tanggal_post; ?></div>
                  <div><?php echo $r->nama; ?></div>
                </div>
                <h3 class="heading"><a href="<?php echo site_url('front/detail/').$r->id_berita; ?>"><?php echo $r->judul; ?></a></h3>
                <p><?php echo character_limiter($r->isi, 200); ?></p>
                <p><a href="<?php echo site_url('front/detail/').$r->id_berita; ?>" class="btn btn-primary py-2 px-3">Selengkapnya</a></p>
              </div>
            </div>
          </div>
          <?php } ?>

            <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-block">
                <div class="meta mb-3">
                  <div><a href="#">June 9, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Scary Thing That You Don’t Get Enough Sleep</a></h3>
                <p>Far far away, behind the word mountains asda asdasd asdas asdasd asdasd , far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
              </div>
            </div>
            </div>

        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Layanan</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <a href="http://ppid.singkawangkota.go.id" target="_blank">
                  <div class="user-img" style="background-image: url(<?php echo base_url();?>assets/images/ppid.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  </a>
                  <div class="text px-4">
                    <p class="name">Pejabat Pengelola Informasi dan Dokumentasi</p>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <a href="http://data.go.id" target="_blank">
                  <div class="user-img" style="background-image: url(<?php echo base_url();?>assets/images/satu-data-indonesia.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    </a>
                  </div>
                  <div class="text px-4">
                    <p class="name">Satu Data Indonesia</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <a href="http://jdih.pontianakkota.go.id" target="_blank">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>assets/images/jdih.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    </a>
                  </div>
                  <div class="text px-4">
                    <p class="name">Jaringan Dokumentasi dan Informasi</p>
                  </div>
                </div>
                </div>

                <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <a href="http://lpse.pontianakkota.go.id" target="_blank">
                  <div class="user-img" style="background-image: url(<?php echo base_url(); ?>assets/images/lpse.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    </a>
                  </div>
                  <div class="text px-4">
                    <p class="name">Layanan Pengadaan Secara Elektronik</p>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    