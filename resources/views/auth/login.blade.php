@extends('auth.main')
@section('content')
<div class="container">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" style="margin-top: 3%;"
        uk-grid>

        <div class="uk-flex-last@s uk-box-shadow-large uk-padding uk-card-media-right uk-cover-container"
            style="width: 710px;">
<img src="{{asset('/new/assets/images/Group 1.png')}}" style="width: 100%;" alt="" uk-cover>
            <canvas width="600" height="400"></canvas>
        </div>

        <div style="width: 400px;">
            <div class="uk-card-body">
                <img src="{{ asset('assets/images/Logo.png') }}" width="120" alt=""><br><br>

                {{-- <div id="modal-example">
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>Maaf kata sandi atau email yang kamu masukan salah</p>
                    </div>
                </div> --}}


                <h2 class="uk-card-title">Hallo Sobat Dreamers</h2>
                <p>sudah siap untuk melakukan perjalanan<br>
                    impianmu, Yuk jelajahi sekarang</p>
                <a href="/login" class="text-primary"><b>Login</b></a>&nbsp;
                <a href="/register" class="text-dark"><b>Daftar</b></a>

                <br><br>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <label for="email" class="text-dark"><b>Email</b></label>
                    <input class="form-control" type="text" name="email" placeholder="Email">

                    <br>

                    <label for="password" class="text-dark"><b>Password</b></label>
                    <input class="form-control" type="password" name="password" placeholder="Password"><br>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        <a href="" class="text-dark float-right">Forgot me ?</a>
                    </div>

                    <button class="btn btn-block btn-primary" type="submit"
                        uk-toggle="target: #modal-example">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
