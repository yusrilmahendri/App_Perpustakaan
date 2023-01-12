@extends('frontend.templates.default') @section('content')
<div class="container">
    <h3>LOGIN</h3>
    <form action="{{ route('login') }}" class="col 12" method="post">
        @csrf
            <div class="input-field col-s12">
                <i class="material-icons prefix">email</i>
                <input class="validate @error('email') invalid @enderror" name="email" type="email" value="{{  old('email') }}">
                <label for="">Email</label> @error('password')
                <span class="helper-text" data-error="{{  $message }}"></span> @enderror()
            </div>

            <div class="input-field col-s12">
                <i class="material-icons prefix">lock</i>
                <input class="@error('password') is-invalid @enderror" name="password" type="password" value="">
                <label for="">Password</label> @error('password_confirmation')
                <span class="helper-text" data-error="{{  $message }}"></span> @enderror()
            </div>

            <div class="input field right">
                <input class="vawes-effect waves-light btn red accent-1" type="submit" value="Login">
            </div>
        </div>
    </form>
</div>
@endsection

	<!-- WRAPPER -->
	{{-- <div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center">
                                    <img src="assets/img/logo-dark.png"
                                    alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>

							<form method="POST" class="form-auth-small" action="{{ route('login') }}">
								@csrf

                                <div class="form-group">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">
                                        {{ __('E-Mail Address') }}
                                    </label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

                                <div class="form-group">
                                    <label for="password" class="col-md-4 col-form-label" style="text-align:left">
                                        {{ __('Password') }}
                                    </label>

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>

								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">

									<span class="helper-text"><i class="fa fa-lock"></i>
                                      @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot password?</a></span>
								      @endif
                                </div>
							</form>
						</div>
					</div>

                    <div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div> --}}

