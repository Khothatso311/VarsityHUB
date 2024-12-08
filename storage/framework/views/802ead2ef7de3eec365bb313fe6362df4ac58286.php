<?php $__env->startSection('content'); ?>


											   
	<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  
                    <?php if(session('status')): ?>
   
                     <div class="alert alert-success">
 
                           <?php echo e(session('status')); ?>

    
                    </div>
 
                   <?php endif; ?>	
  
    <div class="hero-container" data-aos="fade-in">
      <h1 style="margin-top:70px"><i class="bi bi-binoculars-fill" style="color:orange; margin-left:60px;"></i> Lesotho Adventures</h1>
      <p style="color:orange; margin-left:60px; margin-top:70px">Lesotho <span class="typed" 
	  data-typed-items="Tourism and Travelers and also Riding Horse for sports and ricration, Hotels and Guest House and also Lodges for booking, Place of Intrest like Katse Dam, Contituency in Districts Lesotho...................."></span></p>
       
	 <div class="text-center" >
	 
	   <?php if(Auth::guest()): ?>
		  <?php else: ?>
                                           
   <h5 style="color:#fff;"><i class="bi bi-person-plus-fill" ></i>Your <b style="color:orange;">welcome</b> <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->surname); ?> to Lesotho Adventure </h5>
                                
		<?php endif; ?>

		</div> 

   </div>
      
	
<img src="assets/img/ads/masitise5.png" width="200" height="150" name="ChangeBanner" style="border:2px solid rgb(78, 149, 175);  border-radius:70%; padding:4px 4px;  cursor:pointer; ">
        <br>       
            
	 <div class="section-title"style="background:rgb(78, 149, 175); margin-left:3opx; float:left; ">
	 <h2 style="text-align:center;">Failures of likatola horse riding adventure</h2>
          <p style="margin-left:30px; font-size:16px; float:left;">According to one of the staff Mr. Tjakata one of the problems they have is that Facebook page is not always active. The industry also needs to extend kitchen and bar because the bar also work as reception. It also has need of providing indoor restaurant as people are not able to eat outdoor restaurant in winter or when it is cold. In terms of addition of the staffs likatola have need of increase staffs as the staff are little in assisting people in horse riding and also helping people in other services while holding their function.</p>
        
		  
            
		
		</div> 
	
  </section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container">

        <div class="section-title"style="background:#fff;">
         
		 <form  name="form" role="form" class="php-email-form" onsubmit="return validateform()">
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
		  <button type="submit"  style="background:rgb(214, 140, 0); color:#fff; font-weight:bold;"  class="btn btn-primary" id="search"><i class="bi bi-search"></i> Click me to Search District
		  </button>
		  </div>
		 </form>
		 
		 </div>

        
        

      </div>
    </section><!-- End About Section -->
	
	
	<!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
     
	 <div  class="container">  
 <div class="row gy-4">

     <div class="col-lg-8">
       <div class="portfolio-details-slider swiper-container" style="height:400px;">
         <div class="swiper-wrapper align-items-center">

           <div  class="swiper-slide">
             <img src="assets/img/portfolio/sehlabathebe park lodge.jpg" height="300" alt="" > 
           </div>

           <div id="slide2" class="swiper-slide">
            
           </div>

           <div  class="swiper-slide">
            <img src="assets/img/portfolio/MAP4.png" width="270" height="400" alt="" > 
           </div>

         </div>
         <div class="swiper-pagination"></div>
       </div>
    
     <div id="back" class="portfolio-info">
       
       </div>
	   
       <div id="back2" class="portfolio-description">
       
       </div>
	   
       <div id="back3" class="portfolio-description">
         
        
           
        </div>
      
    
     <div id="back4" class="portfolio-description">
         
        
           
        </div>
    
    
   
    
     </div>

     <div id="output" class="col-lg-4">
      
     </div>

   </div>
   </div>
	 
	 
	 
    </section><!-- End Portfolio Details Section -->
	
	

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