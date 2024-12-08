<?php $__env->startSection('content'); ?>


											   
	<!-- ======= Hero Section ======= -->
  <section style="width: 100%;  height: 50vh;  background:rgb(70, 150, 182);" class="d-flex flex-column justify-content-center align-items-center">
  	
  <h2><i class="bi bi-gear-fill"></i> Settings</h2>
    <h2><i class="bi bi-folder-symlink-fill" style="color:orange;"></i> <b style="color:#fff;">Generate Lesotho Adventure Magazine PDF</b></h2>
    <img src="assets/img/ads/coats.png" width="100" height="100" alt="" > 
            
	
	
  </section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container">

        <div class="section-title"style="background:#fff;">
         <h2><i class="bi bi-arrow-right-circle-fill"></i> Select the District of your choice</h2>
		 <form  name="form" role="form" class="php-email-form" onsubmit="return generatePDF()">
		  <div class="col-md-6">
                            <select type="number" name="location" id="id" class="form-control">
                          <option value="0">Maseru</option>
						  <option value="333">Quthing</option>
                          <option value="1">Mafeteng</option>
						  <option value="55555">Leribe</option>
                          <option value="666666">Berea</option>
						  <option value="88888888">Thaba Tseka</option>
                          <option value="4444">Qacha'S Nek</option>
						  <option value="22">Mohale'S Hoek</option>
						  <option value="7777777">Botha Buthe</option>
						  <option value="999999999">Mokhotlong</option>
                           </select>

                                
                            </div>
		 <br>
		  <div class="text-center">
		  <button type="submit"  style=" color:#fff; font-weight:bold;"  class="btn btn-primary" id="search"><i class="bi bi-cloud-download-fill"></i> Generate Information
		  </button>
		  </div>
		 </form>
		 
		 </div>

        
        

      </div>
    </section><!-- End About Section -->
	
	
	
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><i class="bi bi-stickies-fill"></i> District Information</h2>
		  
	   <?php if(Auth::guest()): ?>
		  <?php else: ?>
		  
          <p><i class="bi bi-people-fill"></i> <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?> your information you want to print out magazine must be display below.</p>
		  
		  <?php endif; ?>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
			<?php if(Auth::guest()): ?>
		          <?php else: ?>
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
				 <p><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?>, <?php echo e(Auth::user()->district); ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo e(Auth::user()->email); ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo e(Auth::user()->mobile); ?></p>
              </div>
              <?php endif; ?>
			  
              <img src="assets/img/ads/lesotho mokorotlo.jpg"  style="border:0; width: 100%; height: 290px;" alt="">
            </div>
			
			 <div class="info" style="background:rgb(11, 26, 58);">
			<h2 style="color:#fff;">Creat New Lesotho Adventure Magazine</h2>
			<br>
			<h1 style="font-size: 60px;"><i class="bi bi-sticky-fill"></i></h1>
			
			<div id="aboutb" class="row">
			
			
			</div><br>
			<img src="assets/img/ads/masitise5.png" width="150" height="150" name="ChangeBanner" style="border:2px solid orange;  border-radius:70%; padding:4px 4px;  cursor:pointer; ">
        <br>       
  
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
           
		   <form action="<?php echo e(url('magazine/pdf')); ?>"  method="post" role="form" class="php-email-form">
			  <?php echo e(csrf_field()); ?>

			  
			<p><i class="bi bi-file-earmark-richtext-fill"></i> <b>Information Available</b><p>
			
			   <div class="form-group col-md-6">
                <?php if(Auth::guest()): ?>
		          <?php else: ?>
                  <input type="hidden" name="mobile" class="form-control" id="mobile" value="<?php echo e(Auth::user()->mobile); ?>">
				   <?php endif; ?>
                </div>
			
              <div id="town" class="row">
                
              </div>
			  
			   <div id="hotels" class="row">
               
              </div>
			  
              <div id="townurl" class="form-group">
              
			  </div>
			  
			     <div id="lesotho" class="form-group">
             
			 
			 </div>
			  
              <div id="placeurl" class="form-group">
			  
              </div>
			  
			  <div id="placedscr" class="form-group">
			  
			  
               </div>
			  
              <div id="hotelurl" class="form-group">
			  
               </div>
			  
			   <div id="hoteldscr" class="form-group">
			   
             </div>
			  
			    <div id="sportsurl" class="form-group">
				
               </div>
			  
			    <div id="sportsdscr" class="form-group">
				
               </div>
			  
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div id="btn" class="text-center"></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
	
	

 <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Haeso Lesotho Mokhotlong named after the river nearby with the same name, which means place of Bald ibis. It boasts the highest terrain in te Maloti Range and is the source of the Senqu River, Lesotho's primary watershed.
            In the east, Mokhotlong bordes on the KwaZulu-Natal province of South Arica, with its north point boedering the Free State Provice.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Masitise Cave</a></h4>
            <p class="description">Built directly into the rock,the Masitise Cave House Mesuseum is the former private home of Revered David-Frederic Ellenberger, a Swiss missionary.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Lets'eng-La-Letsie</a></h4>
            <p class="description">Lets'eng-la-letsie is Lesotho's only Ramsar wetland, located in the south-eastern part of the mountain kingdom.It is not easy to reach this piece of paradise high-up in the mountains.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Maluti  Mount Hotel</a></h4>
            <p class="description">Offering an outdoor pool, Hotel Mount Maluti is located in peaceful surroundings in Mohale's Hoek and provides accommodationg and free WiFi access.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Mekhorong-Ea-Khotla</a></h4>
            <p class="description">The place is historically significant and its tales are connected closely to the history of Lesotho itself. on our cultural village Thaba-bosiu is a flat topped mountain.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Qiloane Fall</a></h4>
            <p class="description">The Qiloane Falls, like so many of Lesotho's most beatiful places, is rarely seen by most tourists and it's only a two-hour horseback ride or hike from the road.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Katse Dam</a></h4>
            <p class="description">The katse dam, a concrete arch dam on the malibamats'o river in Lesotho, is Africa's second largest dam.The dam is part of the Lesotho Highlands water projects.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Lesotho Adventure</span></strong>
      </div>
      <div class="credits">
      Designed by <a href="#">Retselisitsoe Mathibeli</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.express', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>