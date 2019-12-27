@extends('auth.main')

@section('content')
<div class="col-lg-6 col-md-8">
    <div class="card bg-secondary shadow border-0">
      <div class="card-header bg-transparent pb-5">
        <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
        <div class="text-center">
          <a href="#" class="btn btn-neutral btn-icon mr-4">
            <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
            <span class="btn-inner--text">Github</span>
          </a>
          <a href="#" class="btn btn-neutral btn-icon">
            <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
            <span class="btn-inner--text">Google</span>
          </a>
        </div>
      </div>
      <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
          <small>Or sign up with credentials</small>
        </div>
        <form role="form" method="POST" action="{{ Route('register') }}">
            @csrf
          <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
              </div>
              <input class="form-control" placeholder="Name" type="text" name="name">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
              </div>
              <input class="form-control" placeholder="Email" type="email" name="email">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control" placeholder="Password" type="password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control" placeholder="Confirm Password" type="password" name="c_password">
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary mt-4">Create account</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
