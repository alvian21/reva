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
   <div class="container mt-3">
        <h4 class="text-dark">Halo, Sobat Dreamers</h4>
   </div>
      <div class="container mt-3">


          <!-- Preview -->
              <div class="row">
                  @foreach($prio as $row)
                <div class="col-3">
                  <div class="card text-white mb-3" style="background-color: #ebf1fc;">
                      <div class="card-body">
                          <h5 class="card-title" style="color: #2d6cdf;">{{ $row->name }}</h5>
                          @php $tanggal = new Datetime($row->date);
                                $hasil = $tanggal->format('F-Y');
                          @endphp
                          <p class="card-text" style="color: #2d6cdf;">{{ $hasil }}</p>
                      </div>
                      <div class="card-footer bg-white text-dark text-center">
                        <p class="text-muted">Perkiraan Menabung</p>
                        <h6>{{ $row->per_month }}</h6>
                      </div>
                  </div>
                </div>
                @endforeach


              </div>
            </div>

            <!-- End Preview -->

            <!-- Simulasi Investasi -->
          <div class="container">
            <div class="card">
              <div class="card-body">
                <h6 class="text-dark">Simulasi Investasi</h6>
                <p class="text-dark">Gerakan slider untuk melihat sebarap banyak uang kamu akan bertambah</p>

                <form>
                  <div class="form-row">
                    <div class="col">
                      <h6 class="text-dark mt-3">Investasi Awal</h6>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" placeholder="Rp.100.000">
                    </div>
                    <input type="range" class="form-control-range mt-3" id="formControlRange">
                  </div><br>

                  <div class="form-row">
                    <div class="col">
                      <h6 class="text-dark mt-3">Investasi Bulanan</h6>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" placeholder="Rp.100.000">
                    </div>
                    <input type="range" class="form-control-range mt-3" id="formControlRange">
                  </div>
                </form><br><br>

                <!-- Chart -->
                <div class="row">
                  <div class="col">
                    <h6 class="text-dark text-right">Perkiraan Nilai Investasi Kamu di Masa Depan</h6>
                    <h6 class="text-right" style="color: #2d6cdf;">Rp. 2,782,358,770.80</h6>
                    <canvas id="myChart" width="200" height="70"></canvas>
                  </div>
                </div>
                <!-- End Chart -->

                <div class="container">
                <hr>

                    <h5 class="text-center text-dark">Tahun Ke-14</h5><br>

                    <h6 class="text-dark">Mulai kembangkan uang kamu hari ini demi masa depan yang cerah, siapapun bisa!</h6>

                  <p>*Simulasi dibuat berdasarkan kinerja masa lalu, dan tidak menjamin kinerja di masa depan</p>
               </div><br><br>
              </div>
            </div>

            <!-- Quiz Investasi -->

                <div class="card">
                  <div class="card-header"><h6 class="text-dark">Quiz Investasi</h6></div>
                  <div class="card-body">

                    <div class="row">
                      <div class="col-sm">

                        <a href="https://forms.gle/uZiVgbPSfx6zoG7A7">
                        <div class="card border-top border-left border-right" style="width: 18rem;">
                          <div class="card-body">
                              <h6 class="card-title mt-2" style="color: #2d6cdf; margin-left: -4%;">Apa Itu Impianku ?</h6>
                            </div>
                            <img src="{{ asset('new/assets/img/Vector.svg') }}"class="card-img-bottom" alt="...">
                          </div>
                        </div>
                      </a>

                      <div class="col-sm">
                        <a href="https://forms.gle/WCdBVvdmLJwDUCpLA">
                        <div class="card border-top border-left border-right" style="width: 18rem;">
                          <div class="card-body" style="color: #2d6cdf; margin-left: -4%;">
                            <h6 class="card-title mt-2">Udah Kenal My Dreams Belum ?</h6>
                          </div>
                            <img src="{{ asset('new/assets/img/Vector.svg') }}"class="card-img-bottom" alt="...">
                          </div>
                      </div>
                    </a>

                      <div class="col-sm-4">
                        <a href="https://forms.gle/DgxNnuSFZEc9R1JD8">
                        <div class="card border-top border-left border-right" style="width: 18rem;">
                          <div class="card-body">
                            <h6 class="card-title mt-2" style="color: #2d6cdf; margin-left: -4%;">Tau gak cara kerja My Dreams ?</h6>
                          </div>
                          <img src="{{ asset('new/assets/img/Vector.svg') }}" class="card-img-bottom" alt="...">
                        </div>
                    </div>
                  </a>

              </div>
            </div>

          </div>
          <!-- End Simulasi Investasi -->

          <!-- News -->
            <div class="card">
              <div class="card-body">

                <h6 class="text-dark">Tips Untuk Sobat Dreamers</h6><br>

                <div class="row">
                    <div class="col">
                      <img src="https://images.unsplash.com/photo-1434725039720-aaad6dd32dfe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1198&q=80" width="400" class="rounded" alt="">
                    </div>
                    <div class="col-sm-6">
                      <h6 class="text-dark">My Dream Ajak Milenial Rencanakan Impian Masa Depan Dengan Mudah</h6>
                    </div>
                  </div><br>

                  <a href="">
                  <div class="row">
                    <div class="col">
                      <img src="https://images.unsplash.com/photo-1433838552652-f9a46b332c40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="400" class="rounded" alt="">
                    </div>
                    <div class="col-sm-6">
                      <h6 class="text-dark">Millennial Bisa Banget Kok Punya Rumah</h6>
                    </div>
                  </div>
                </a>
                  <br>

                  <a href="">
                  <div class="row">
                    <div class="col">
                      <img src="https://images.unsplash.com/photo-1524260855046-f743b3cdad07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1101&q=80" width="400" class="rounded" alt="">
                    </div>
                    <div class="col-sm-6">
                      <h6 class="text-dark">Mencicil Masa Depan dengan Investasi</h6>
                    </div><br>
                  </div>
              </div>
            </a>

              </div>
            </div>
          <!-- End News -->

      </div>
  </div>
@endsection
@section('script')
<script>


    var ctx = document.getElementById('myChart').getContext("2d");

    var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, '#80b6f4');

    var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "rgba(128, 182, 244, 0.6)");

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["JAN", "FEB", "MAR", "APR", "MAY"],
            datasets: [{
                label: "Data",
                borderColor: gradientStroke,
                pointBorderColor: gradientStroke,
                pointBackgroundColor: gradientStroke,
              pointHoverBackgroundColor: gradientStroke,
                pointHoverBorderColor: gradientStroke,
                pointBorderWidth: 10,
                pointHoverRadius: 10,
                pointHoverBorderWidth: 1,
                pointRadius: 3,
                fill: true,
                backgroundColor: gradientFill,
                borderWidth: 4,
                data: [200, 150, 100, 50, 0]
            }]
        },
        options: {
            legend: {
                position: "bottom"
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold",
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        padding: 20
                    },
                    gridLines: {
                        drawTicks: false,
                        display: false
                    }

                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold"
                    }
                }]
            }
        }
    });

  </script>

@endsection
