@extends('admin.auth.layout.app', ['bodyClass' => 'login-page'])

@section('title') {{ "Login"}} @endsection

@section('content')
    <div class="login-box">
        <!-- /.login-box-body -->
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="{{ route('admin.home') }}">
                    <img src="{{ asset('images/logo-small.png') }}" class="img-fluid"/>
                </a>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('Sign in to start your session') }}</p>

                <form method="post" action="{{ url('/painel/login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{ old('email') }}"
                               placeholder="{{ __('E-mail') }}"
                               autocomplete="username"
                               class="form-control @error('email') is-invalid @enderror">
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                        @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" placeholder="{{ __('Password') }}"
                               autocomplete="current-password"
                               class="form-control @error('password') is-invalid @enderror">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">{{ __('Login') }}</button>
                        </div>
                    </div>
                </form>

                <p class="mb-0 mt-3">
                    <a href="{{ route('admin.password.request') }}" class="text-success">{{ __('Forgot Your Password') }}?</a>
                </p>

                <div class="row">
                    <div class="col-12">
                        @include('flash::message', ['class' => 'mt-3 mb-0'])
                    </div>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>

    </div>
    <!-- /.login-box -->
@endsection