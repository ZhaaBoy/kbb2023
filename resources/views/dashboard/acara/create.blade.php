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
                        <form class="" action="{{route ('acara.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3 class="text-center">Tambah Acara</h3>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Tittle</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('tittle') is invalid @enderror" value="{{ old('tittle') }}" data-validate-length-range="6" data-validate-words="2" name="tittle" type="text" required="required">
                                    @error('tittle')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Deskripsi</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control summernote @error('deskripsi') is invalid @enderror" value="{{ old('tittle') }}" " class='optional' name="deskripsi" data-validate-length-range="5,15" type="text">
                                    @error('deskripsi')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jadwal</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('jadwal') is invalid @enderror" value="{{ old('jadwal') }}" class='optional' name="jadwal" data-validate-length-range="5,15" type="text">
                                    @error('jadwal')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Lokasi</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control @error('lokasi') is invalid @enderror" value="{{ old('lokasi') }}" type="text" class='email' name="lokasi" required='required'>
                                    @error('lokasi')
                                        <div class="alert alert-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Kategori </label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name="id_kategori" id="id_kategori">
                                        <option>---Pilih Kategori---</option>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <input class="form-control" class='date' type="file" name="image" id="image" required='required' onchange="previewImage()"></div>
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
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const OFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        OFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
    }
}
</script>
<!-- /page content -->
@endsection
