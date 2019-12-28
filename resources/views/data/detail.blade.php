@extends('main')
@section('content')

<section class="card shadow page-content reports new-design">
    <div class="col-lg-12 content-wrapper">
        <div class="table-container list-table">
        <div class="report-title">
        <div class="table-responsive dragscroll">
        <table class="profit-loss report-table table" id="date-profit-lost">
        <thead class="report-header">
            <tr>
                <th colspan="2">
             Detail LifePlan
                </th>
            <th></th>

            </tr>
        </thead>
        <tbody>
        <tr>
            <td class="report-header report-subheader-noindent" colspan="4">
            <b>Dibuat Tanggal : </b>
            </td>
        </tr>

            <tr>
                  <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                      Nama LifePlan
                    </td>
                    <td class="report-subtotal text-right" id="assets-type-1-total-data">
                    </td>
                    <td class="border-top-thin" id="hasilnama" name="hasilnama" style="padding-left:80px;">
                        {{ $data->name }}
                    </td>
             </tr>
               <tr>
                    <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                        Biaya saat ini
                      </td>
                      <td class="report-subtotal text-right" id="assets-type-1-total-data">
                      </td>
                      <td class="border-top-thin" id="hasilbiaya" style="padding-left:80px;">
                            {{ $data->cost }}
                      </td>
               </tr>
               <tr>
                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                  Tercapai Dalam
                  </td>
                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                  </td>
                  <td class="border-top-thin" id="hasilbiaya" style="padding-left:80px;">
                        {{ $data->month }} bulan
                  </td>
           </tr>
               <tr>
                    <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                       Inflasi
                      </td>
                      <td class="report-subtotal text-right" id="assets-type-1-total-data">
                      </td>
                      <td class="border-top-thin" id="hasilinflasi" style="padding-left:80px;">
                            {{ $data->inflation }}
                      </td>
               </tr>
               <tr>
                    <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                   Biaya yang akan datang
                    </td>
                      <td class="report-subtotal text-right" id="assets-type-1-total-data">
                      </td>
                      <td class="border-top-thin" id="hasildatang" style="padding-left:80px;">
                            {{ $data->upcoming_costs }}
                      </td>
               </tr>
               <tr>
                    <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                      Perkiraan perbulan
                      </td>
                      <td class="report-subtotal text-right" id="assets-type-1-total-data">
                      </td>
                      <td class="border-top-thin" id="perbulan" style="padding-left:80px;">
                        {{ $data->per_month }}
                      </td>
               </tr>


                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
</section>
@endsection
