@extends('auth.main')

@section('content')
<div class="container">
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" style="margin-top: 3%;"
        uk-grid>

        <div class="uk-flex-last@s uk-box-shadow-large uk-padding uk-card-media-right uk-cover-container"
            style="width: 710px;">
            <img src="{{ asset('new/assets/images/Group 2.png') }}" style="width: 100%;" alt="" uk-cover>
            <canvas width="600" height="400"></canvas>
        </div>

        <div style="width: 400px;">
            <div class="uk-card-body">

                <img src="{{ asset('assets/images/Logo.png') }}" width="120" alt=""><br><br>

                <h2 class="uk-card-title">Hallo Sobat Dreamers</h2>
                <p>sudah siap untuk melakukan perjalanan<br>
                    impianmu, Yuk jelajahi sekarang</p>
                <a href="/login" class="text-dark"><b>Login</b></a>&nbsp;
                <a href="/register" class="text-primary"><b>Daftar</b></a>

                <br><br>
                <form action="">
                    <label for="email" class="text-dark"><b>Nama</b></label>
                    <input class="form-control" type="text" name="name" placeholder="Nama">
                    <br>

                    <label for="email" class="text-dark"><b>Email</b></label>
                    <input class="form-control" type="text" name="email" placeholder="Email">
                    <br>

                    <label for="password" class="text-dark"><b>Password</b></label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    <br><br>

                    <button type="submit" class="btn btn-block btn-primary">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
