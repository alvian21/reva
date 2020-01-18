@extends('main')
@section('content')
<div class="row mt-5">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Data LifePlan Prioritas</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Prioritas</th>
                <th scope="col">No</th>
                <th scope="col">Nama LifePlan</th>
                <th scope="col">Biaya Saat ini</th>
                <th scope="col">Inflasi</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="text-black mb-0">Data LifePlan Non Prioritas</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center  table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Prioritas</th>
                <th scope="col">No</th>
                <th scope="col">Nama LifePlan</th>
                <th scope="col">Biaya Saat ini</th>
                <th scope="col">Inflasi</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
              <tr>
              <td><input type="checkbox" id="cekbok" data-id="{{$row->id}}"></td>
                <th scope="row">{{ $loop->iteration }} </th>
                <td>{{ $row->name }} </td>
                <td>{{ $row->cost }} </td>
                <td>{{ $row->inflation }}</td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="{{ Route('detail',[$row->id]) }}">Detail</a>
                      <a class="dropdown-item" href="{{ Route('editdata',[$row->id]) }}">Edit</a>
                      <button class="dropdown-item delete" data-id="{{ $row->id }}">Delete</button>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
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
                    text: "Setelah dihapus, Anda tidak akan dapat memulihkan FilePLan ini!",
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

        $('#cekbok').on('change', function(){
           var cek = $(this).val();
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
                   console.log(response);
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
