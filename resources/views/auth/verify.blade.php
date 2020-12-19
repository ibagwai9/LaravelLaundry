@extends('auth.layout')

@section('content')

<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-8">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                  <img src="/img/logo.png" class="responsive-img">
                </h1>
              </div>
              <form method="POST" action="{{ route('login') }}" class="user" id="formLogin">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-info btn-user btn-block">
                  Login
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Reset passord</a>
                <hr />
                <a class="small" href="{{route('register')}}">Create account</a>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



@stop

@section('js-validation')
    {!! JsValidator::formRequest(\App\Http\Requests\LoginRequest::class, '#formLogin') !!}
@stop
