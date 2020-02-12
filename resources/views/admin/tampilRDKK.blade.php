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
                    <a href="{{ route('formInputRDKK') }}">
                      <button class="btn btn-success">Input RDKK</button>
                    </a>
                    <table class="table table-responsive table-hover">
                      <tr>
                        <th>NIK</th>
                        <th>Tahun</th>
                        <th>ZA</th>
                        <th>NPK</th>
                        <th>SP36</th>
                        <th>Urea</th>
                        <th>Organik</th>
                        <th>Aksio</th>
                      </tr>
                      @foreach($listData as $data)
                        <tr>
                          <td>{{ $data->nik }}</td>
                          <td>{{ $data->tahun }}</td>
                          <td>{{ $data->za }}</td>
                          <td>{{ $data->npk }}</td>
                          <td>{{ $data->sp36 }}</td>
                          <td>{{ $data->urea }}</td>
                          <td>{{ $data->organik }}</td>
                          <td>
                            <a href="{{ route('formEditRDKK', $data->idRDKK) }}">
                              <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href="{{ route('deleteRDKK', $data->idRDKK) }}">
                              <button onClick='return konfirmasi()' class="btn btn-danger">Delete</button>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection