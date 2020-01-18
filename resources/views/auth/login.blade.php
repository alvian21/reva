@extends('auth.main')

@section('content')
<div class="container">
<img src="{{ asset('assets/img/brand/logo.svg') }}" class="img-fluid mx-auto d-block" alt="">
</div><br>

<!-- Card -->
<div class="container d-flex justify-content-center">

    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 25rem;">
        <div class="card-body">
            <h6 class="card-title text-center"><b>Selamat Datang, Sobat Dreamers</b></h6>

        <form>
                <div class="form-group ">
                    <label for="exampleInputEmail1" style="font-size: small;"><b>Email</b></label>
                    <input type="email" class="form-control email" name="email" id="exampleInputEmail1"  aria-describedby="emailHelp"
                        placeholder="example@email.com" style="font-size: small;">
                </div>

                <div class="form-group ">
                    <label for="exampleInputPassword1" style="font-size: small;"><b>Password</b></label>
                    <input type="password" class="form-control password" name="password" id="exampleInputPassword1"  placeholder="xxxxxxxx"
                        style="font-size: small;">
                </div>

                <div class="form-group form-check text-right">
                    <p class="form-check-label" style="font-size: small;"></p>Lupa Password ?</p>
                </div><br>

                <div class="button">
                    <button type="button" name="submit" class="btn btn-block text-white submit"
                        style="background-color: #4aadda;">Login</button>
                </div>
            </form>
            <br><br>
        </div>
    </div>
</div>

<p class="text-center" style="font-size: small;"><b>Belum punya akun ? <a href="{{Route('indexreg')}}"
            class="text-primary" style="color: #4aadda;">Daftar</a></b></p>

<br><br>


@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function(){
    $('.submit').on('click', function(){
        var email = $('.email').val();
        var password = $('.password').val();

        if(email==''){
            swal("Gagal", "Email harus diisi", "error");
        }else if(password==''){
            swal("Gagal", "Password harus diisi", "error");
        }else{

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/',
                method:'POST',
                data:{'email':email,
                    'password':password
            }, success:function(response){

               if(response["result"]=="false"){
                swal("Gagal", "Password salah", "error");
               }else if(response["result"]=="true"){
                swal("Berhasil", "Login Berhasil", "success");
                window.setTimeout(function(){window.location.href="/dashboard"},1500);
               }else if(response["result"]=="notfound"){
                swal("Gagal", "Email Tidak ditemukan", "error");
               }
            }
            });
        }
    });
});
</script>
@endsection

