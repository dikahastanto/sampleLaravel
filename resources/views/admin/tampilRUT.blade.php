@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Start Notification -->
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <!-- Tab panes -->
                <div class="card-body">
                    @if(session('afterInput'))
                        @if(session('sukses'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{ session('msg') }}
                            </div>
                        @else
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{ session('msg') }}
                            </div>
                        @endif
                    @endif
                    <table class="table table-responsive table-hover">
                      <tr>
                        <th>NIK</th>
                        <th>Tahun</th>
                        <th>Jumlah ZA</th>
                        <th>Jumlah NPK</th>
                        <th>Jumlah SP36</th>
                        <th>Jumlah Urea</th>
                        <th>Jumlah Organik</th>
                        <th>Jumlah Gabah</th>
                        <th>Jumlah Gabah Kering</th>
                        <th>Jumlah Beras</th>
                      </tr>
                      @foreach($listData as $data)
                        <tr>
                          <td>{{ $data->nik }}</td>
                          <td>{{ $data->tahun }}</td>
                          <td>{{ $data->jumlahZa }}</td>
                          <td>{{ $data->jumlahNpk }}</td>
                          <td>{{ $data->jumlahSp36 }}</td>
                          <td>{{ $data->jumlahUrea }}</td>
                          <td>{{ $data->jumlahOrganik }}</td>
                          <td>{{ $data->jumlahGabah }}</td>
                          <td>{{ $data->jumlahGabahKering }}</td>
                          <td>{{ $data->jumlahBeras }}</td>
                        </tr>
                      @endforeach
                    </table>
                    {{ $listData->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection