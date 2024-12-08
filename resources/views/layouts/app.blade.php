<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>VarsityHUB</title>
 

 <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">

<style>

#form{float:left;}

</style>



</head>
<body id="top">




   
<header class="s-header">

<div class="s-header__logo">
    <a href="#hube">
      <b style="font-weight:italic; float:left;"> VersityHUB Portal</b>
    </a>
</div>

<div class="s-header__content">

    <nav class="s-header__nav-wrap">
        <ul class="s-header__nav" style="margin-left:20px;">
           
            @if (Auth::guest())
            <li><a class="smoothscroll" href="{{url('/')}}" title="Intro">Home</a></li>
           <li><a class="smoothscroll" href="{{url('/login')}}" title="Intro">Admin Panel</a></li>
            <li><a class="smoothscroll" href="{{url('/login')}}" title="Intro">Login</a></li> 
            <li><a class="smoothscroll" href="{{ url('/register')}}" title="Works">New Account</a></li>
            @else
            <li><a class="smoothscroll" href="{{url('/admin')}}" title="Intro">Admin Panel |</a></li>
            <li><a class="smoothscroll" href="{{url('/varsity')}}" title="About">Varsitity |</a></li>
            <li><a class="smoothscroll" href="{{url('/student')}}" title="Services">Students Portal |</a></li>
            <li><a href="{{url('/home')}}"><span style="color:rgb(77, 133, 246);">{{ Auth::user()->name }} {{ Auth::user()->surname }}  |</span></a></li>
       
       
            <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Signout Now
                    </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                   </form>
                   </li>
        @endif
       
        </ul>
    </nav> 

   <br>
   @if(Session::has('error'))
<div style="background:red; color:#fff; width:70%;" role="alert">
{{Session::get('error')}}
</div>
@endif


   

</div> 



</header>


@yield('content')


</body>
</html>
