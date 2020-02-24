@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Start Notification -->
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <!-- Tab panes -->
                <div class="card-header">
                  <h2>Forecasting Panen Tahun Ini</h2>
                </div>
                <div class="card-body">
                    
                    <table class="table table-responsive table-hover">
                      <tr>
                        <th>Tahun</th>
                        <th>Panen (Y)</th>
                        <th>Tahun Panen (X1)</th>
                        <th>(X1)<sup>2</sup></th>
                        <th>(X * Y)</th>
                        <th>Nurah Hujan (X2)</th>
                        <th>Hama (X3)</th>
                      </tr>
                      @foreach($datas as $data)
                      <tr>
                        <th>{{ $data['tahun'] }}</th>
                        <th>{{ $data['total'] }}</th>
                        <th>{{ $data['tahunPanen'] }}</th>
                        <th>{{ $data['xx'] }}</th>
                        <th>{{ $data['xy'] }}</th>
                        <th>{{ $data['curahHujan'] }}</th>
                        <th>{{ $data['hama'] }}</th>
                      </tr>
                      @endforeach
                      <tr>
                        <th>{{ $total['tahun'] }}</th>
                        <th>{{ $total['total'] }}</th>
                        <th>{{ $total['tahunPanen'] }}</th>
                        <th>{{ $total['xx'] }}</th>
                        <th>{{ $total['xy'] }}</th>
                        <th>{{ $forecasting['curahHujanSekarang'] * 100 }}</th>
                        <th>{{ $forecasting['hamaSekarang'] * 100 }}</th>
                      </tr>
                    </table>
                    <h2>Hasil Forecasting {{ $forecasting['prediksi'] }} Kg / {{ $forecasting['prediksi'] / 1000 }} Ton</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection