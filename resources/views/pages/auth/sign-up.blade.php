@extends('layout.auth')

@section('content')


<div class="card">
    <header class="auth-header">
        <h1 class="auth-title">
            <div class="logo"> 
            	<span class="l l1"></span> 
            	<span class="l l2"></span> 
            	<span class="l l3"></span> 
            	<span class="l l4"></span> 
            	<span class="l l5"></span> 
            </div> 

            {{ Config('website.sitename')}}
        </h1>
    </header>
    <div class="auth-content">
        <p class="text-xs-center">{{ __("SIGN UP") }}</p>

		<form action="{{ action('AuthController@postSignup') }}" method="post">
			
			{{ csrf_field() }}

			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				<label class="control-label">{{ __("Email") }}</label>
				<input type="text" class="form-control" name="email" placeholder="Email" value="{{ Request::old('email') }}">
				{!! $errors->first('email', '<p class="has-danger form-control-feedback">:message</p>') !!}
			</div>

            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}"> 
            	<span class="menu-icon"> <i class="fa fa-lock"></i> </span>
				<label class="control-label">{{ __("Password") }}</label>
              	<input type="password" name="password" class="form-control"> 
              	{!! $errors->first('password', '<p class="has-danger form-control-feedback">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('pass_confirm') ? 'has-error' : '' }}"> 
            	<span class="menu-icon"> <i class="fa fa-lock"></i> </span>
				<label class="control-label">{{ __("Password Confirm") }}</label>
               	<input type="password" name="pass_confirm" class="form-control"> 
               	{!! $errors->first('pass_confirm', '<p class="has-danger form-control-feedback">:message</p>') !!} 
            </div> 						
            
            <div class="form-group"> 
                <input type="submit" class="col-sm-4 pul-right btn btn-block btn-default" value="{{ __('Sign Up') }}">
            </div>
            
            <div class="form-group">
                <p class="text-muted text-xs-center">
                    {{ __("Have an account") }}? 
                    <a href="{{ action('AuthController@getSignin') }}">{{ __("Sign In!") }}</a>
                </p>
            </div>
		</form>            
	</div>
</div>

@stop

@push('script')

@endpush