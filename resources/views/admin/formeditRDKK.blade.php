@extends('layouts.mainlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Start Notification -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
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
                    <form class="form-horizontal form-material" action="{{ route('updateRDKK', $data->idRDKK) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">NIK</label>
                            <div class="col-md-12">
                                <input required value="{{ $data->nik }}" type="number" name="nik" placeholder="Ketik NIK" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Tahun</label>
                            <div class="col-md-12">
                                <input required value="{{ $data->tahun }}" type="text" placeholder="Tahun" class="form-control form-control-line" name="tahun" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">ZA</label>
                            <div class="col-md-12">
                                <input required value="{{ $data->za }}" type="number" name="za" placeholder="ZA" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">NPK</label>
                            <div class="col-md-12">
                                <input required value="{{ $data->npk }}" type="number" name="npk" placeholder="NPK" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">SP36</label>
                            <div class="col-md-12">
                                <input required value="{{ $data->sp36 }}" type="number" name="sp36" placeholder="SP36" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">UREA</label>
                            <div class="col-md-12">
                                <input required value="{{ $data->urea }}" type="number" name="urea" placeholder="UREA" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">ORGANIK</label>
                            <div class="col-md-12">
                            <input required type="number" value="{{ $data->organik }}" name="organik" placeholder="ORGANIK" class="form-control form-control-line">
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="col-sm-12">Select Country</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-line">
                                    <option>London</option>
                                    <option>India</option>
                                    <option>Usa</option>
                                    <option>Canada</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection