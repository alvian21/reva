@extends('main2')
@section('content')
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

      <div class="container">


          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body d-flex justify-content-center">
                    <img src="{{ asset('new/assets/img/Icon_Berhasil.svg') }}" width="100" style="margin-top: -4%;" alt="">
                  </div>
                  <div class="modal-footer d-flex justify-content-center"style="margin-top: -4%; margin-bottom: 5%">
                    <h5 class="text-dark">Impian mu berhasil terwujud </h5>
                  </div>
                </div>
              </div>
            </div><br><br>
          <!-- End Modal -->


          <div class="card" style="margin-top: -8%;">
              <div class="card-title"><h5 class="text-dark text-center" style="margin-top: 3%;">Selangkah lagi nih untuk mewujudkan impian mu</h5></div>
              <div class="card-body">

                  <form  id="formimpianku">
                      <div class="form-row">
                        <div class="col">
                          <img src="{{ asset('new/assets/img/icon-pendidikan-01.svg') }}" width="400" style="margin-left: 5%;" class="img-fluid" alt="">
                        </div>
                        <div class="col" style="margin-right: 4%;">
                            <h5 class="text-dark" id="pendidikan">Pendidikan Impian</h5><br>
                            <label for="" class="text-dark"><b>Biaya yang kamu tempuh ? </b></label>
                            <input type="text" class="form-control" id="biaya" placeholder="Rp.100.000"><br>


                            <label for="" class="text-dark"><b>Target waktu yang kamu tentukan ?</b></label>
                            <input type="text" id="month" class="form-control"><br>

                            <h6 class="text-dark">Tercapai dalam waktu</h6>
                            <p><input type="text" id="tercapai" disabled class="form-control"></p>

                            <h6 class="text-dark">Inflasi</h6>
                            <p>6%</p>

                      </div>



                  </div><br>
              </form>

              <a href="/dashboard/lifeplan" class="btn btn-lg btn-outline-primary">Kembali</a>
              <button class="btn btn-lg btn-primary float-right" id="hitung" data-id="hitung">Wujudkan</button>

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
                     impianku
                        </th>
                    <th></th>

                    </tr>
                </thead>
                <tbody>
                        <tr>
                              <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                  Nama impianku
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
    var data;
    var hasil;
    var bulan;
    var date;
    var tanggal;
    var $dp1 = $("#month");
      $dp1.datepicker({
        changeYear: true,
        changeMonth: true,
        minDate: '0',
        dateFormat: "yy-m",
        yearRange: "-100:+20",
        onSelect: function (selectedDate) {
                    date = selectedDate;
                    ajax();
                $.ajax({
                    url: '/dashboard/lifeplan/fetch',
                    method: 'POST',
                    data:{'date': 1,
                        'data':date
                    },
                    success:function(response){
                        bulan = response;
                        if(response < 1){
                            $('#hitung').attr('disabled','disabled');
                            swal("Warning", "minimal 1 bulan", "info");
                        }else{
                            $('#hitung').removeAttr('disabled');
                            $('#tercapai').val(response+' bulan');
                        }

                    }
                });
                }

      });

       $('#hitung').on('click', function(){
                var month = $('#month').val();
                var biaya = $('#biaya').val();
                var nama = $('#pendidikan').text();
               if(month == ''){
                    swal("Gagal", "Pilih bulan dan tahun", "error");
                }else  if(biaya == ''){
                    swal("Gagal", "Isi form biaya", "error");
                }
                else{
                    ajax();
                $.ajax({
                    url: '/dashboard/lifeplan/hitung',
                    method: 'POST',
                    data: {
                        'hitung':1,
                        'nama':nama,
                        'biaya':biaya,
                        'bulan':bulan,
                        'date':date
                    },
                    success:function(data){
                          $('#formimpianku')[0].reset();
                        hasil = data;
                        tanggal = data['date'];
                        $('#exampleModal').modal('show');
                        $('#hasilnama').text(data['nama']);
                        $('#hasilbiaya').text(data['biaya']);
                        $('#hasiltercapai').text(data['bulan']+' bulan');
                        $('#hasilinflasi').text(data['inflasi']);
                        $('#hasildatang').text(data['biayadatang']);
                        $('#perbulan').text(data['perbulan']);


                    }
                });
                }

       });
       function ajax()
       {
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
       }
       $( '#biaya' ).mask('000.000.000.000', {reverse: true});


       $('#simpanlife').on('click', function() {
                ajax();
                $.ajax({
                    url: '/dashboard/lifeplan/save',
                    method: 'POST',
                    data: hasil,
                    success:function(data){
                        $('#exampleModal').modal('hide');
                        swal("Success", "impianku Berhasil di Simpan", "success");
                    }
                });
       });
});
</script>
@endsection
