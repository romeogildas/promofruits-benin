@extends('layouts.dashboard.auth')

@section('styles')
  <style>
    .login-image {
      width: 100%;
      max-width: 200px;
      margin-bottom: 20px;
    }
  </style>
@endsection('styles')

@section('content')

    <div class="container h-p100">
        <div class="row justify-content-md-center h-p100">

            <div class="col-12 mt-100">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <img src="{{ asset('/images/IRA.png') }}" alt="logo" class="login-image" style="width: 120px; height: auto;">
                                <!-- <h2 class="text-primary">DASHBOARD</h2> -->
                                <p class="mb-0">Connectez-vous maintenant !</p>
                            </div>
                            <div class="p-40">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                            <input type="email" id="email" name="email" class="form-control ps-15 bg-transparent @error('email') is-invalid @enderror" placeholder="Email" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            @if(session('error_login'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ session('error_login') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            <input id="password" type="password" name="password" class="form-control ps-15 bg-transparent @error('password') is-invalid @enderror" placeholder="Mot de passe" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1" name="remember">
                                                <label for="basic_checkbox_1">Se souvenir</label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <div class="fog-pwd text-end">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="hover-warning"><i class="ti-lock"></i> Mot de passe oublié?</a><br>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center"><br>
                                            <button type="submit" class="btn btn-danger mt-10">SE CONNECTER</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
@endsection