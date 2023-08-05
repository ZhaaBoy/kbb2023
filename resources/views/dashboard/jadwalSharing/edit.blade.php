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
                        <form class="" action="{{route ('jadwal-sharing.update', $jadwal_sharing->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <h3 class="text-center">Edit sharing <br> {{ $jadwal_sharing->tittle }}</h3>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Tittle</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('tittle') is invalid @enderror" value="{{ old('tittle') ?? $jadwal_sharing->tittle }}" data-validate-length-range="6" data-validate-words="2" name="tittle" type="text" required="required">
                                    @error('tittle')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Deskripsi</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control summernote @error('deskripsi') is invalid @enderror" value="{{ old('tittle') ?? $jadwal_sharing->deskripsi }}" " class='optional' name="deskripsi" data-validate-length-range="5,15" type="text">
                                    @error('deskripsi')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jadwal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('jadwal') is invalid @enderror" value="{{ old('jadwal') ?? $jadwal_sharing->jadwal }}" class='optional' name="jadwal" data-validate-length-range="5,15" type="text">
                                    @error('jadwal')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Kategori </label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name="id_kategori" id="id_kategori">
                                        <<option value="{{ $jadwal_sharing->id_kategori }}">{{ $jadwal_sharing->kategori->nama_kategori }}</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <img src="{{ asset('storage/'.$jadwal_sharing->image) }}" alt="gambar" width="50px"class="tumbnail img-fluid">
                                    <input class="form-control" class='date' type="file" name="image"></div>
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
