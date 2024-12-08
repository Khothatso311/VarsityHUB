@extends('layouts.app')

@section('content')
<br><br><br><br><br>


@if(Session::has('success'))
<div style="background:orange; color:#fff; width:70%;" role="alert">
    <br>
    <a href="{{ url('/login')}}" style="margin-left: 100px;" class="btn btn--medium">Signin Now</a>
{{Session::get('success')}}
</div>
@endif
                   
                    <form method="POST" action="{{ url('/resetEmail') }}" style="float: left;margin-left:200px;margin-top:50px;">
                        {{ csrf_field() }}

                       <h4 align='center'><b>Enter New Password</b></h4>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <div class="col-md-6">
                                <input  type="email"  name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span style="background:red;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>


@endsection
