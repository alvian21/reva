@extends('auth.main')

@section('content')
<div class="container">
    <img src="{{ asset('assets/img/brand/logo.svg') }}" class="img-fluid mx-auto d-block" alt="">
</div>

<div class="container d-flex justify-content-center" style="margin-top: 3%;">

    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 50rem;">
        <div class="card-body">
            <h6 class="card-title text-center"><b>Daftar Yuk Biar Terwujud Impian mu</b></h6>

            <br>
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
            @endif
        <form method="POST" action="{{Route('register')}}">
            @csrf
                <div class="form-row">
                    <div class="col">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="example@email.com" name="email">
                    </div>
                    <div class="col">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="name" name="name">
                    </div>
                </div><br>

                <div class="form-row">
                    <div class="col">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="col">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="c_password">
                    </div>
                </div><br><br>

                <div class="container col-6">
                    <button class="btn btn-block text-white" style="background-color: #4aadda;">Daftar</button>
                </div><br>

                <p class="text-center">Sudah Punya Akun ? <a href="/" style="color: #4aadda;">Masuk</a></p>
            </form>

            <br><br>
        </div>
    </div>

</div>
@endsection
