<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">Data <span>E-Sakip</span> Tahun 2023</h2>
			            <?php foreach ($esakip as $row => $r) { ?>
                        <p><?php echo $r->judul; ?></p>
			            <p><a href="<?php echo base_url().'front/download/'.$r->id_esakip;?>" class="btn btn-primary py-3 px-4">Download</a></p>
                        <?php } ?>
                    </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>