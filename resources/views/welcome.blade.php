@extends('TeamContainer.header')
@section('content')



    <div class="login-img">

        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row authentication">
                        <div class="col col-login mx-auto">
                            <div class="text-center mb-6">
                                <img src="{{url('assets/images/brand/logo.png')}}" class="h-8" alt="">
                            </div>


                            <form class="card" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="card-body p-6 ">
                                    <div class="card-title text-center">Login to your Account</div>
                                    <div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="mdi mdi-account"></i>
											</span>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror


                                    </div>



                                    <div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="zmdi zmdi-lock"></i>
											</span>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror



                                    </div>

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>

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
