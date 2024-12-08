@extends('layouts.app')

@section('content')

<br><br><br>

@if(Session::has('success'))
<div style="background:orange; color:#fff; width:70%;" role="alert">
    <br>
    <a href="{{ url('/reset')}}" style="margin-left: 100px;" class="btn btn--medium">Reset Now</a>
{{Session::get('success')}}
</div>
@endif

<br><br><br><br>
<a class="smoothscroll" href="{{url('/')}}" title="Intro"> <b style="color: #fff;margin-left:300px;"><<< Home >>> </b></a>



<br>
<form  method="POST" action="{{ url('/passwordRequest') }}" style="float: left;margin-left:200px;margin-top:50px;">
{{ csrf_field() }}



     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email">E-Mail Address</label>

     <div class="col-md-6">
     <input id="email" type="email"  name="email" value="{{ $email or old('email') }}" required autofocus>

    @if ($errors->has('email'))
         <span style="background:red;">
     <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        </div>
        </div>

          <div class="form-group">
         
          <button type="submit" class="btn btn-primary">
             Reset Password
          </button>
                            
    </div>

</form>

@endsection
