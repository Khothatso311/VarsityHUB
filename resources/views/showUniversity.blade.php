@extends('layouts.route')

@section('content')


	
<section id="hero" class="s-hero target-section">

<div class="s-hero__bg">
    <div class="gradient-overlay"></div>
</div>

<div class="row s-hero__content">
    <div class="column">

        <h1>Display Universities</h1>
        <div class="s-hero__content-about">

            <p>
            Manage University/Institute in Lesotho, Modify Information <br>
            of Universities in oder to be in timely Updates.
            </p>
  
   <a href="{{url('/varsityProfile')}}" class="btn btn--primary btn--small" style="float:left;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
        Profile
    </a>

<br>

            <footer>
                <div class="s-hero__content-social">
                    <a href="#0">facebook</a>
                    <a href="#0">twitter</a>
                    <a href="#0">instagram</a>
                    <a href="#0">email</a>
                </div>
            </footer>
        </div>

    </div>
</div>

<div class="s-hero__video">
    <a class="s-hero__video-link" href="#" data-lity="">
       
        
    </a>
</div>

<div class="s-hero__scroll">
    <a href="#about" class="s-hero__scroll-link smoothscroll">
        About Us
    </a>
</div>

</section> 



<section class="s-contact">

<div class="row narrower s-contact__top h-text-center">
<div class="column" id="hube">

<h3 class="h6">Get In Touch</h3>

<h2>Universities Availables</h2>
<table class="table" style="float: left;">
        <thead role="rowgroup">
        <tr role="row">
         <th role="columnheader">Universities</th>
		 <th role="columnheader">Description</th>
         <th role="columnheader">Faculty</th>
         <th role="columnheader">Course</th> 
		  <th role="columnheader">qualification</th>
         
        </tr>

        </thead>
        <tbody role="rowgroup">

        

         <tr role="row">
         <td role="cell">
          {{$docx->name}}
         </td>
		 <td role="cell">
          {{$docx->description}}
         </td>
         <td role="row">
          {{$docx->faculty}}

         </td>
           <td role="cell" id="goToMe">
          {{$docx->course}}
           </td>
		    <td role="cell" id="goToMe">
          {{$docx->qualification}}
           </td>
         </tr>
        
        </tbody>


       </table>
	   
        
	   <h5>Credits for {{$docx->course}}</h5>
         <b>{{$docx->credits}}</b>
		    <hr>
		 <br>
          <h5>Mathematics requirement</h5>
           <b>{{$docx->maths}}</b>
		      <hr>
		   <br>
		   <h5>English requirement</h5>
           <b>{{$docx->english}}</b>
		      <hr>
		   <br>
		   <h5>Admission Opened</h5>
           <b>{{$docx->startDate}}</b>
		      <hr>
            <br>
			<h5>Admission Due Date</h5>
           <b>{{$docx->endDate}}</b>
		   <hr>
		   <a href="{{url('/addInstitute')}}" class="btn btn--small">Add Faculties</a>
            <br><br>

</div>
</div>



<div class="row narrower s-contact__top h-text-center">
    <div class="column">
       
        <h1 class="display-1">
        Browse Institute Courses, Credits needed to qualify
        for entrance. Let us work together and make something great.
        <b style="text-decoration:underline; font-weight:italic;">Signin now</b> to access diffrent Universities Courses
        </h1>
    </div>
</div> 

<div class="row h-text-center">
    <div class="column">
        <p class="s-contact__email">
          <h4 style="text-decoration:underline; font-weight:italic;">Intitute Online Application</h4> 
        </p>
    </div>
</div>

</section>  



<footer class="s-footer" id="about">
<div class="row row-y-top">

    <div class="column large-8 medium-12">
        <div class="row">
            <div class="column large-7 tab-12 s-footer__block">
                <h4 class="h6">Where to Find Us</h4>

                <p>
                250 Maseru KingSway <br>
                VersityHUB , Lesotho <br>
                100  Maseru <br>
                <a href="tel:197-543-2345">+266 5038 2345</a>
                </p>
            </div>

            <div class="column large-5 tab-12 s-footer__block">
                <h4 class="h6">Follow Us</h4 class="h6">

                <ul class="s-footer__list">
                    <li><a href="#0">Facebook</a></li>
                    <li><a href="#0">Twitter</a></li>
                    <li><a href="#0">Instagram</a></li>
                    <li><a href="#0">LinkIn</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="column large-4 medium-12 s-footer__block--end">
        <a href="mailto:#0" class="btn h-full-width">Let's Talk</a>

        <div class="ss-copyright">
            <span>&copy;Copyright VersityHUB 2024</span> 
            <span>Design by Lesotho VersityHUB Team</span>
        </div>
    </div>

    

</div>
</footer>
												   
	@endsection
