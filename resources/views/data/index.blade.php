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

   <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>
          <div class="modal-body d-flex justify-content-center">
            <img src="./assets/img/icon-rumah-01.svg" width="200" style="margin-top: -4%;" alt="">
          </div>
          <div class="modal-footer d-flex justify-content-center"style="margin-top: -4%; margin-bottom: 5%">
            <h6 class="text-dark">Rumah</h6>
          </div>

          <div class="container">
            <div class="row">
              <div class="col" style="margin-left: 5%;">
                  <h6 class="text-dark">Biaya yang kamu tempuh</h6>
              </div>
              <div class="col-md-4">
                  <p>Rp 150,000,000</p>
              </div>
          </div>

              <div class="row">
                  <div class="col">
                      <h6 class="text-dark" style="margin-left: 8%;">Target waktu yang kamu tentukan </h6>
                  </div>
                  <div class="col-md-4">
                      <p>Februari 2025</p>
                  </div>
              </div>

              <div class="row">
                  <div class="col">
                      <h6 class="text-dark" style="margin-left: 8%;">Tercapai dalam waktu </h6>
                  </div>
                  <div class="col-md-4">
                      <p>5 Tahun 1 Bulan</p>
                  </div>
              </div>

              <div class="row">
                  <div class="col">
                      <h6 class="text-dark" style="margin-left: 8%;">Inflasi</h6>
                  </div>
                  <div class="col-md-4">
                      <p>6%</p>
                  </div>
              </div>

              <div class="btn d-flex justify-content-center">
                  <button class="btn btn-lg text-white" type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: #2d6cdf; margin-bottom: 10%;">Kembali</button>
              </div>
          </div>


        </div>
      </div>
    </div><br><br>
  <!-- End Modal -->

  <!-- Table1 -->
  <div class="container" style="margin-top: -5%;">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="text-dark">Prioritas</h4>
            <div class="card-header-form">
              <h6>{{ $hasil }}</h6>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all" disabled>
                      <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                    </div>
                  </th>
                  <th>Nama Impian</th>
                  <th>Perkiraan Waktu</th>
                  <th>Biaya yang ditempuh</th>
                  <th>Inflasi</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach($data as $row)
                @if($row->priority=="true")

              <tr>
                <td>
                      <input type="checkbox"  data-id="{{$row->id}}" @if($row->priority=="true") checked @else @endif  class="cekbok" >
                  </td>


                <td>{{ $row->name }} </td>
                <td>{{$row->month}} bulan</td>
                <td>{{ $row->cost }} </td>
                <td>{{ $row->inflation }}</td>
                <td></td>
                <td>
                  <div class="dropdown">
                    <button class="btn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu bg-primary" aria-labelledby="dLabel">
                      <a href="{{ Route('detail',[$row->id]) }}" class="dropdown-item">Detail</a>
                      <a href="{{ Route('editdata',[$row->id]) }}" class="dropdown-item">Edit</a>
                      <button class="dropdown-item delete" data-id="{{ $row->id }}">Delete</button>
                    </div>
                  </div>
                </td>
              </tr>
              @endif
              @endforeach

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Table1 -->

  <!-- Table2 -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="text-dark">Tertunda</h4>
            <div class="card-header-form">
              <h6>{{ $result }}</h6>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all" disabled>
                      <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                    </div>
                  </th>
                  <th>Nama Impian</th>
                  <th>Perkiraan Waktu</th>
                  <th>Biaya yang ditempuh</th>
                  <th>Inflasi</th>
                  <th></th>
                  <th>

                  </th>
                </tr>
                @foreach($data as $row)
                @if($row->priority=="false" or $row->priority=="")
                <tr>
                    <td><input type="checkbox" class="cekbok" data-id="{{$row->id}}"></td>
                  <td>{{ $row->name }} </td>
                  <td>{{$row->month}} bulan</td>
                  <td>{{ $row->cost }} </td>
                  <td>{{ $row->inflation }}</td>
                  <td></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                          <i class="fas fa-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu bg-primary" aria-labelledby="dLabel">
                        <a href="{{ Route('detail',[$row->id]) }}" class="dropdown-item">Detail</a>
                        <a href="{{ Route('editdata',[$row->id]) }}" class="dropdown-item">Edit</a>
                        <button class="dropdown-item delete" data-id="{{ $row->id }}">Delete</button>
                      </div>
                    </div>
                  </td>
                </tr>
                @endif
                @endforeach

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Table2 -->



</div>
</div>
@endsection
@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function(){
        $('.delete').on('click', function(){
                var id = $(this).data('id');
                swal({
                    title: "Apa kamu yakin?",
                    text: "Setelah dihapus, Anda tidak akan dapat memulihkan data Impian ini!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: '/dashboard/data/delete',
                            method: 'GET',
                            data: {'delete':1,
                                    'id':id
                            },
                            success:function(data){
                                swal("Berhasil", "LifePlan berhasil dihapus", "success");
                                window.setTimeout(function(){window.location.reload()}, 2000);
                            }
                        });
                    }
                 });
        });

        $('.cekbok').on('change', function(){
                var cek = this.checked;
           var id = $(this).data('id');


            ajax();

            $.ajax({
                url:'/dashboard/lifeplan/cekbox',
                method:'POST',
                data:{
                    'cekbox':1,
                    'id':id,
                    'cek':cek},
                success:function(response){
                    swal("Berhasil", "data Impian berhasil diubah", "success");
                    window.setTimeout(function(){window.location.reload()}, 1500);
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
