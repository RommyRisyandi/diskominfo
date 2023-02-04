<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread"><?php echo $r->judul; ?></h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('front/index'); ?>">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="<?php echo site_url('front/berita'); ?>">Berita <i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            
              <img src="<?php echo base_url('assets/upload/gambar/'.$r->gambar); ?>" alt="" class="img-fluid">
            </p>
            
            
            <p style="text-align: justify;"><?php echo $r->isi; ?></p>
            
          </div>
          
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
           

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> May 22, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> May 22, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> May 22, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">house</a>
                <a href="#" class="tag-cloud-link">home</a>
                <a href="#" class="tag-cloud-link">rent</a>
                <a href="#" class="tag-cloud-link">sale</a>
                <a href="#" class="tag-cloud-link">table</a>
                <a href="#" class="tag-cloud-link">interior</a>
                <a href="#" class="tag-cloud-link">exterior</a>
                <a href="#" class="tag-cloud-link">industrial</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		

    


