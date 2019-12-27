@extends('main')
@section('content')
<div class="row mt-5">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Data LifePlan</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
              <tr>
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
                      <a class="dropdown-item" href="#">Detail</a>
                      <a class="dropdown-item" href="#">Delete</a>
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