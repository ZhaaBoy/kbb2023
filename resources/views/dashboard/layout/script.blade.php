{{-- java script --}}
<script src="{{ asset('template/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('template/assets/js/app.js') }}"></script>
<script src="{{ asset('template/assets/js/pages/horizontal-layout.js') }}"></script>

<script src="{{ asset('template/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('template/assets/js/pages/dashboard.js') }}"></script>
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


