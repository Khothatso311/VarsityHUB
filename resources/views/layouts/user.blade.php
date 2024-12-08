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


@media only screen and (max-width:760px), (min-device-with:768px) and (max-device-width:1024px) {

table, thead, tbody, th, td, tr {
           display: block;

}

thead tr{
  position: absolute;
  top: -9999px;
  left: -9999px;

}

tr{
margin: 0 0 1rem 0;
}


tr:nth-child(odd){
        background: #fff;
       

}

td{
border: none;
border-bottom: 1px solid #eee;
position: relative;
padding-left: 50%;
}
td:before {

    position: absolute;
    top: 0;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
}

td:nth-of-type(1):before {
      
     content: "HAPPY NICE DAY!!"; 

}

td:nth-of-type(2):before {
      

}

}

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
            <li><a class="smoothscroll" href="{{url('/login')}}" title="Intro">Admin Panel</a></li>
            <li><a class="smoothscroll" href="{{url('/login')}}" title="Intro">Login</a></li> 
            <li><a class="smoothscroll" href="{{ url('/register')}}" title="Works">New Account</a></li>
            @else
			<li><a class="smoothscroll" href="{{url('/student')}}" title="Intro">Student Portal |</a></li>
            <li><a class="smoothscroll" href="{{url('/apply')}}" title="Intro">Apply Now |</a></li>
            <li><a class="smoothscroll" href="#hube" title="About">Universities |</a></li>
            <li><a class="smoothscroll" href="{{url('/notification')}}" title="Services">Notification |</a></li>
            <li><a href="#hube"><span style="color:rgb(77, 133, 246);">{{ Auth::user()->name }} {{ Auth::user()->surname }}  |</span></a></li>
       
       
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

   
   

</div> 

<br><br>
@if(Session::has('error'))
<div style="background:red; color:#fff; width:70%;" role="alert">
{{Session::get('error')}}
</div>
@endif

@if(Session::has('success'))
<div style="background:orange; color:#fff; width:70%;" role="alert">
{{Session::get('success')}}
</div>
@endif

</header>





@yield('content')


</body>
</html>
