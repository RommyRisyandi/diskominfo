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

    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Kontak</h2>
            <p></p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">ALAMAT</h3>
                <p>Jl.A.Yani No.76 Singkawang Barat,79121</p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">KONTAK</h3>
                <p><a href="tel://0562636331">0562-636331</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">ALAMAT E-MAIL</h3>
                <p><a href="mailto:kominfo@singkawangkota.go.id">kominfo@singkawang kota.go.id</a></p>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center bg-light">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">WEBSITE</h3>
                <p><a href="http://www.singkawangkota.go.id">singkawangkota.go.id</a></p>
              </div>
          </div>
        </div>
        
      </div>
    </section>

    