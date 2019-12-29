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
                          <option selected>Choose...</option>
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
                <button id="hitung" type="button" class="btn btn-primary hitung" data-id="hitung">Next</button>
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
        <div class="modal-body">
            <form action="">
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
                                  Nama LifePlan
                                </td>
                                <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                </td>
                                <td class="border-top-thin" id="hasilnama" name="hasilnama" style="padding-left:80px;">

                                </td>
                         </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                    Biaya saat ini
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasilbiaya" style="padding-left:80px;">

                                  </td>
                           </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                    Tercapai Dalam
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasiltercapai" style="padding-left:80px;">
                                      50000
                                  </td>
                           </tr>

                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                   Inflasi
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasilinflasi" style="padding-left:80px;">

                                  </td>
                           </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                               Biaya yang akan datang
                                </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasildatang" style="padding-left:80px;">

                                  </td>
                           </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                  Perkiraan perbulan
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="perbulan" style="padding-left:80px;">

                                  </td>
                           </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="simpanlife">Simpan</button>
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
    
});
</script>
@endsection
