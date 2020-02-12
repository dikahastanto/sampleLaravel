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
                    <form class="form-horizontal form-material" action="{{ route('insertPetani') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">NIK</label>
                            <div class="col-md-12">
                                <input required type="number" name="nik" placeholder="Ketik NIK" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input required type="password" placeholder="Password" class="form-control form-control-line" name="password" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nomor Telp</label>
                            <div class="col-md-12">
                                <input required type="text" name="noTelp" placeholder="123 456 7890" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Luas Lahan Masa Tanam 1</label>
                            <div class="col-md-12">
                                <input required type="number" name="lt_mt_1" placeholder="Luas Lahan Masa Tanam 1" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Luas Lahan Masa Tanam 2</label>
                            <div class="col-md-12">
                                <input required type="number" name="lt_mt_2" placeholder="Luas Lahan Masa Tanam 1" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Luas Lahan Masa Tanam 3</label>
                            <div class="col-md-12">
                                <input required type="number" name="lt_mt_3" placeholder="Luas Lahan Masa Tanam 1" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Alamat</label>
                            <div class="col-md-12">
                                <textarea required rows="5" name="alamat" class="form-control form-control-line" placeholder="Alamat"></textarea>
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