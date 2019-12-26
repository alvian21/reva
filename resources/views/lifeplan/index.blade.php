@extends('main')

@section('content')
<div class="row">
    <div class="col-xl-12 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">LifePlan</h3>
            </div>
            <div class="col-4 text-right">
              <a href="#!" class="btn btn-sm btn-primary">Settings</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>

            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-username">Nama LifePlan</label>
                    <input type="text" id="input-username" class="form-control form-control-alternative" >
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Target Waktu LifePlan</label>
                    <input type="month" id="month" class="form-control form-control-alternative" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="biaya">Biaya</label>
                    <input type="number" id="biaya" class="form-control form-control-alternative"  >
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="tercapai">Tercapai Dalam</label>
                    <input type="text" disabled id="tercapai" class="form-control form-control-alternative"  value="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                    <div class="form-group focused">
                      <label class="form-control-label" for="inflasi">Inflasi</label>
                      <input type="text" id="inflasi" disabled class="form-control form-control-alternative" value="6%"  >
                    </div>
                  </div>
              </div>
            </div>
            {{-- <hr class="my-4">
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Contact information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-address">Address</label>
                    <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-city">City</label>
                    <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-country">Country</label>
                    <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Postal code</label>
                    <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                  </div>
                </div>
              </div>
            </div> --}}
            <div  style=" display: flex; align-items: center; justify-content: center;">
                <button id="hitung" type="button" class="btn btn-primary hitung" data-id="hitung">Hitung</button>
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
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="profit-loss report-table table" id="date-profit-lost">
                <thead class="report-header">
                    <tr>
                        <th colspan="2">
                     LifePlan
                        </th>
                    <th></th>

                    </tr>
                </thead>
                <tbody>
                        <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                   Diskon
                                </td>
                                <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                </td>
                                <td class="border-top-thin" style="padding-left:80px;">
                                    50000
                                </td>
                         </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('script')
<script>
$(document).ready(function(){
    var data;
    var bulan;
       $('#month').on('change', function(){
            data = $(this).val();
                ajax();
                $.ajax({
                    url: '/dashboard/lifeplan/fetch',
                    method: 'POST',
                    data:{'date': 1,
                        'data':data
                    },
                    success:function(response){
                        bulan = response;
                       $('#tercapai').val(response+' bulan');
                    }
                });
       });
       $('#hitung').on('click', function(){
                var biaya = $('#biaya').val();
                ajax();
                $.ajax({
                    url: '/dashboard/lifeplan/hitung',
                    method: 'POST',
                    data: {
                        'hitung':1,
                        'biaya':biaya,
                        'bulan':bulan,
                    },
                    success:function(data){
                        $('#exampleModal').modal('show');
                            console.log(data);
                    }
                });
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
