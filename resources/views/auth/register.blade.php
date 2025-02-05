@extends('layouts.app')

@section('content')


	
<section id="hero" class="s-hero target-section">

<div class="s-hero__bg">
    <div class="gradient-overlay"></div>
</div>

<div class="row s-hero__content">
    <div class="column">

        <h1>Register Now!!</h1>
        <div class="s-hero__content-about">

            <p>
            Choose University/Institute in Lesotho, you like <br>
            to proceed your Career opportunity in higher learning.
            </p>
  
   <a href="{{url('/student')}}" class="btn btn--primary btn--small" style="float:left;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
        Apply Now
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

<a class="smoothscroll" href="{{url('/')}}" title="Intro"> <b style="color: #fff;"><<< Home >>> </b></a>

<br>
<h4><b>Create......<br> Admin Account | Institute Account | Student Account</b></h4>

<form method="POST" id="form" action="{{ route('register') }}" >
{{ csrf_field() }}


       <h2>Create Account</h2>
       

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<input type="text" name="name"  placeholder="Enter Firstname..">
@if ($errors->has('name'))
<span style="background:red;">
<strong>{{ $errors->first('name') }}</strong>
 </span>
 @endif
</div>

<div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
<input type="text" name="surname"  placeholder="Enter Lastname..">
@if ($errors->has('surname'))
<span style="background:red;">
<strong>{{ $errors->first('surname') }}</strong>
 </span>
 @endif
</div>

<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
<select name="role">
	    <option value="">Select User Account Type</option>
	    <option value="admin">Admin</option>
	    <option value="institute">Institute</option>
	    <option value="student">Student</option>
	  
	  </select>
      @if ($errors->has('role'))
<span style="background:red;">
<strong>{{ $errors->first('role') }}</strong>
 </span>
 @endif
</div>



<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<input type="email" name="email"  placeholder="Enter Email address..">
@if ($errors->has('email'))
<span style="background:red;">
<strong>{{ $errors->first('email') }}</strong>
 </span>
 @endif
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

<input type="password" name="password"  placeholder="password..">

@if ($errors->has('password'))
   <span style="background:red;">
  <strong>{{ $errors->first('password') }}</strong>
   </span>
  @endif
 </div>

 <input type="password" name="password_confirmation"  placeholder="Confirm Password">

 <br>
<button class="btn btn-lg rounded-4 btn-primary btn--small" type="submit" id="login">Signup Now</button>


<br>
<h5><a href="{{url('/login')}}"><b style="color: #118AB2; text-decoration: underline;">Signin Now</b></a></h5>
</form>

</div>
</div>



<div class="row narrower s-contact__top h-text-center">
    <div class="column">
       
        <h1 class="display-1">
        Browse Institute Courses, Credits needed to qualify
        for entrance. Let us work together and make something great.
        <b style="text-decoration:underline; font-weight:italic;">Signup now</b> to access diffrent Universities Courses
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
