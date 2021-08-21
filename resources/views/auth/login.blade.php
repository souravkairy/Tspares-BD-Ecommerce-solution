@extends('admin.admin_layouts')
@section('admin_content')
<div class="accountbg"></div>
<div class="wrapper-page">
  <div class="card card-pages shadow-none">
    <div class="card-body">
        <div class="text-center m-t-0 m-b-15">
           <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
        </div>
        <h5 class="font-18 text-center">Admin Panel</h5>
        <form class="form-horizontal m-t-30" action="{{ route('admin.login') }}" method="post">
          @csrf
          <div class="form-group">
            <div class="col-12">
                <label>Username Or Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
            </div>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong style="color: red;">{{ $message }}</strong>
            </span>
          @enderror

          <div class="form-group">
            <div class="col-12">
                <label>Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          <div class="form-group">
            <div class="col-12">
              <div class="checkbox checkbox-primary">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1"> Remember me</label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group text-center m-t-20">
            <div class="col-12">
                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
            </div>
          </div>

          <div class="form-group row m-t-30 m-b-0">
            <div class="col-sm-7">
                <a href="" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

@endsection
