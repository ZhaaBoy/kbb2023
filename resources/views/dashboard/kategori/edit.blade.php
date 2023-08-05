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
                        <form class="" action="{{route ('kategori.update', $kategori->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <h3 class="text-center">Tambah Kategori</h3>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Kategori</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('nama_kategori') is invalid @enderror" value="{{ old('nama_kategori') ?? $kategori->nama_kategori }}" data-validate-length-range="6" data-validate-words="2" name="nama_kategori" type="text" required="required">
                                    @error('nama_kategori')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                                </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Submit</button>
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
