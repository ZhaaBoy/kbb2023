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
                        <form class="" action="{{route ('angkatan.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="text-center">Tambah Angkatan</h3>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Angkatan</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('angkatan') is invalid @enderror" value="{{ old('angkatan') }}" data-validate-length-range="6" data-validate-words="2" name="angkatan" type="text" required="required">
                                    @error('angkatan')
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
