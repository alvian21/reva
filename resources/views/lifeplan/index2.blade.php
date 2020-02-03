@extends('main2')

@section('content')
<style>
input[type="radio"][id^="cb"] {
  display: none;
}

label {

  cursor: pointer;
}

label:before {

  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label img {

  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked + label {
  border-color: #ddd;
}

:checked + label:before {
  content: "✓";
  background-color: greenyellow;
  transform: scale(1);
}

:checked + label img {
  transform: scale(0.9);

}
</style>

<div class="main-content">


    <!-- ModalProfile -->
    <div class="container">
      <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button> -->
           </div>

           <div class="container" style="margin-top: 2%">
             <div class="row">
               <div class="col" style="margin-left: 3%;">
                 <img src="https://i.insider.com/5d55a8d4f4fc2436e96f3e36?width=1100&format=jpeg&auto=webp" style="width: 168px; height: 168px;" class="rounded-circle img-circle img-fluid" alt="">
               </div>
               <div class="col-md-6" style="margin-right: 5%;">
                 <label for="" class="text-dark"><b>Nama</b></label>
                 <input type="text" class="form-control" placeholder="Reva" disabled><br>

                 <label for="" class="text-dark"><b>Email</b></label>
                 <input type="text" class="form-control" placeholder="Reva@gmail.com" disabled><br><br>
               </div>
             </div>

                 <div class="btn d-flex justify-content-center">
                   <button class="btn btn-lg text-white" type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: #2d6cdf; margin-bottom: 10%;">Kembali</button>
               </div>

           </div>

         </div>
       </div>
     </div>
     </div><br><br>
   <!-- End ModalProfile -->

  <div class="conatiner">
      <div class="card" style="margin-top: 3%;">
          <div class="card-header mt-3 d-flex justify-content-center">
              <h5 class="text-dark">Apa tujuan impian mu sobat Dreamers ?</h5><br>
          </div>
          <p class="text-dark text-center" style="margin-top: -1%;">Tidak usah terburu -buru cukup kamu pikirkan matang - matang  apa yang kamu wujudkan</p>
          <div class="card-body">

              <div class="container">
                  <div class="row" id="rowall">

                    <div class="col-sm">
                        <input type="radio" name="radio" class="radio" id="cb" value="rumah">
`                   <label for="cb">
                          <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 12rem">
                              <img src="{{ asset('new/assets/img/icon-rumah-01.svg') }}" class="img-fluid float" alt="...">
                                  <div class="card-body">
                                  <h6 class="text-dark text-center">Rumah</h6>
                                  </div>
                              </div>
                        </label>
                </div>

                  <div class="col-sm">
                    <input type="radio" name="radio" class="radio" id="cb1" value="liburan">
                    ` <label for="cb1">
                      <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 12rem">
                          <img src="{{ asset('new/assets/img/icon-liburan-01.svg') }}" class="img-fluid" alt="...">
                          <div class="card-body">
                              <h6 class="text-dark text-center">Liburan</h6>
                          </div>
                      </div>
                    </label>
                    </div>


                  <div class="col-sm">
                    <input type="radio" name="radio" class="radio" id="cb2" value="mobil">
                    ` <label for="cb2">
                      <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 12rem">
                          <img src="{{ asset('new/assets/img/icon-mobil-01.svg') }}" class="img-fluid" alt="...">
                          <div class="card-body">
                              <h6 class="text-dark text-center">Mobil</h6>
                          </div>
                          </div>
                        </label>
                    </div>


                  <div class="col-sm">
                    <input type="radio" name="radio" id="cb3" class="radio" value="pendidikan">
                    ` <label for="cb3">
                      <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 12rem;">
                          <img src="{{ asset('new/assets/img/icon-pendidikan-01.svg') }}" class="img-fluid" alt="...">
                          <div class="card-body">
                              <h6 class="text-dark text-center">Pendidikan</h6>
                          </div>
                      </div>
                    </label>
                    </div>


                  </div>
                <a href="{{route('lifeplan.create')}}" class="btn btn-block btn-outline-primary"><i class="fas fa-plus" style="margin-right: 2%;"></i>Lainnya</a><br><br>

                  <a href="#" class="btn btn-lg btn-primary text-white float-right" id="lanjut">Selanjutnya</a>
                </div>

          </div>
      </div>
  </div>

</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        var value;
        $('.radio').on('click', function(){
            var value = $(this).val();
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
            url:'/dashboard/lifeplan/fetchurl',
            method:'POST',
            data:{'value':value},
            success:function(data){
                $('#lanjut').attr('href',data);
            }
            });
        });
    });
 </script>
@endsection
