@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-lg-5">
        <div class="col-md-8">        
            <div class="card card-default h4" style="margin-top: 50px; margin-bottom: 100px;">
                <div class="card-header text-center text-white h3" style=" background-color: #0d0d1f;letter-spacing: 2px; padding: 20px 0px;">Login</div>
                <div class="card-body mt-5 mb-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="font-size: 18px;">
                            <label for="email" class="col-sm-4 col-form-label text-md-right m-0">Name</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="font-size: 18px;">
                            <label for="password" class="col-md-4 col-form-label text-md-right m-0">Password</i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row m-5">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    Login
                                </button>

                                <a class="btn" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection