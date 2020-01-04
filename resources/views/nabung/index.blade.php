@extends('main')

@section('content')
<div class="row">
    <div class="col-xl-12 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Menabung</h3>
            </div>

          </div>
        </div>
        <div class="card-body">
          <form id="formlifeplan">

            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                    <div class="input-group-prepend">
                        <label class="form-control-label" for="inputGroupSelect01">Pilih LifePlan</label>
                      </div>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected value="null">Choose...</option>
                          @foreach($data as $row)
                          <option value="{{ $row->id }}">{{ $row->name }}</option>
                          @endforeach
                        </select>
                      </div>
                </div>

              </div>

              <div class="row" id="rowlife">

              </div>
            </div>

            <div  style=" display: flex; align-items: center; justify-content: center;">
                <button id="next" type="button" class="btn btn-primary hitung" data-id="hitung">Next</button>
             </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
           <div class="modal-header">
                <h2 class="modal-title">Menabung</h2>
            </div>
        <div class="modal-body">
            <form id="menabungku">
                <div class="form-group">
                    <label for="money">Jumlah uang untuk ditabung</label>
                    <input type="text" class="form-control" id="money" >

                  </div>
                  <div class="form-group">
                    <label for="kurang">Kekurangan</label>
                    <input type="text" class="form-control" id="kurang" disabled>
                  </div>

                  <div class="form-group">
                    <label for="bulan">Jumlah Bulan</label>
                    <input type="text" class="form-control" id="bulanabung" disabled>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" id="tabung">Tabung Sekarang</button>
        </form>
        </div>
      </div>
    </div>
</div>
@endsection


@section('script')
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function(){
    var data;
    var id;
    $('#inputGroupSelect01').on('change', function(){

        $('#menabungku')[0].reset();
        data = $(this).val();
        if(data == 'null'){
            $('#rowlife').html('');
        }else{
            ajax();
        $.ajax({
            url: '/dashboard/deposit/fetch',
            method:'POST',
            data: {'id':data},
            success:function(data){
               $('#rowlife').html(data);
                id = $('#id').val();
            }
        });
        }
            $('#next').on('click', function(){
            if(data == 'null'){
                swal("error", "Pilih dulu life plannya", "error");
            }else{
                $('#exampleModal').modal('show');

            }
             var money;
             var kurang;
            $('#money').on('keyup keydown keypress', function(){
                money = $(this).val();
                var hasilnya = money.replace(/\./g,"");
                $.ajax({
                    url:'/dashboard/deposit/fetchprice',
                    method: 'POST',
                    data:{'id':id,
                        'money':money
                    }, success:function(response){
                         kurang = ((response['result'].replace(/Rp/g,'')).replace(/\./g,"")).replace(/\,00/g,"");


                        $('#kurang').val(response['result']);

                        $('#bulanabung').val(response['month']);
                    }

                });



            });


        });


        $( '#money' ).mask('000.000.000.000', {reverse: true});
    });





    function ajax()
       {
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
       }
});
</script>
@endsection
