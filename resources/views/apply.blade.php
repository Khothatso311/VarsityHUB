@extends('layouts.user')

@section('content')


	
<section id="hero" class="s-hero target-section">

<div class="s-hero__bg">
    <div class="gradient-overlay"></div>
</div>

<div class="row s-hero__content">
    <div class="column">

        <h1>Apply Now</h1>
        <div class="s-hero__content-about">

            <p>
            Apply to any University/Institute in Lesotho, and provide <br>
            qualification you have obtained from LGCSE results in oder to proceed career.
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

<h2>Apply For Universities Available</h2>

	<br>

	
<form method="POST" id="form" action="{{ url('applyform') }}" >
{{ csrf_field()}}


       <h2>Application Form</h2>
       
   @foreach($data as $row)
    <input type="hidden" name="varsity_id"  value="{{$row->id}}">

    @endforeach

<input type="hidden" name="name_id"  value="{{Auth::user()->id}}">


<div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
<label style="float:left;">Select Institute</label>
<select name="school">
        @foreach($data as $row)
		
	    <option value="{{$row->id}}">{{$row->name}}</option>
	    
	     @endforeach
	  </select>
      
</div>


<div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
<label style="float:left;">Select Course</label>
<select name="course">
        @foreach($data as $row)
			
	    <option value="{{$row->course}}">{{$row->course}}</option>
	    
	     @endforeach
	  </select>
      
</div>

<p><b>Choose Subject Grade You Obtained</b></p>
<table class="table" style="float:left;">
<thead>
<tr>
<th>Accounting</th>
<th>Computer(ICT)</th>
<th>Sesotho</th>
<th>Business Studies</th>
</tr>


</thead>
<tbody>

<tr>
<td>
<select name="Accounting">
		<option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
		
	   </select>
</td>

<td>
<select name="Computer">
		<option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
	  </select>

</td>
<td>
<select name="Sesotho">
     <option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
	  </select>

</td>
<td>
<select name="Business_Studies">
		<option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
	   </select>

</td>
</tr>




</tbody>
</table>

<table class="table" style="float:left;">
<thead>
<tr>
<th>English</th>
<th>Mathematics</th>
<th>Physical Science</th>
<th>Biology</th>
</tr>


</thead>
<tbody>

<tr>
<td>
<select name="English">
		<option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
	   </select>
</td>

<td>
<select name="Mathematics">
		<option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
	   </select>

</td>
<td>
<select name="Physical_Science">
		<option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
	   </select>

</td>
<td>
<select name="Biology">
	  <option value="0">Select Grade</option>
	    <option value="10">A*</option>
		<option value="9">A</option>
		<option value="8">B</option>
		<option value="7">C</option>
		<option value="6">D</option>
		<option value="5">E</option>
		<option value="0">F</option>
		<option value="0">G</option>
		<option value="0">U</option>
	   </select>

</td>
</tr>

</tbody>

</table>



<br>
<button class="btn btn-lg rounded-4 btn-primary btn--small" type="submit" id="login">Apply Now</button>

</form>
       

</div>
</div>



<div class="row narrower s-contact__top h-text-center">
    <div class="column">
       
        <h1 class="display-1">
        Browse Institute Courses, Credits needed to qualify
        for entrance. Let us work together and make something great.
        <b style="text-decoration:underline; font-weight:italic;">Apply Now</b> to access diffrent Universities Courses
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
