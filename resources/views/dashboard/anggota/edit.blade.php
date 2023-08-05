@extends('dashboard.dasmin')
@section('content')
@include('sweetalert::alert')

 <!-- page content -->
 <div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="" action="{{route ('anggota.update', $anggotum->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <h3 class="text-center">Edit Anggota</h3>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">nama</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('nama') is invalid @enderror" value="{{ old('nama') ?? $anggotum->nama }}" data-validate-length-range="6" data-validate-words="2" name="nama" type="text" required="required">
                                    @error('nama')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nim</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control summernote @error('nim') is invalid @enderror" value="{{ old('nim') ?? $anggotum->nim }}" " class='optional' name="nim" data-validate-length-range="5,15" type="text">
                                    @error('nim')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Email</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('email') is invalid @enderror" value="{{ old('email') ?? $anggotum->email }}" class='optional' name="email" data-validate-length-range="5,15" type="text">
                                    @error('email')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Handphone</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('no_hp') is invalid @enderror" value="{{ old('no_hp') ?? $anggotum->no_hp }}" type="text" class='email' name="no_hp" required='required'>
                                    @error('no_hp')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Angkatan </label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name="id_angkatan" id="id_kategori">
                                        <<option value="{{ $anggotum->id_angkatan }}">{{ $anggotum->angkatan->angkatan }}</option>
                                        @foreach ($angkatans as $angkatan)
                                            <option value="{{ $angkatan->id }}">{{ $angkatan->angkatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Submit</button>
                                        <button type='reset' class="btn btn-success">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- /page content -->
@endsection
