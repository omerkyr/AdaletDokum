@extends('layouts.master')
@section('title') @lang('translation.Starter_Page')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Dropzone @endslot
@slot('title') Starter Page @endslot
@endcomponent

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">
@endsection
<form method="post" action="{{ route('front.upload') }}"
      enctype="multipart/form-data" class="dropzone" id="my-dropzone">
    {{ csrf_field() }}
<div class="container">
    <h2>Dropzone Example</h2>
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="dropzone" id="file-dropzone"></div>
        </div>
    </div>
</div>
</form>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
<script>
    Dropzone.options.fileDropzone = {
        url: '{{ route('front.upload') }}',
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        maxFilesize: 8,
        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        },
        removedfile: function(file)
        {
            var name = file.upload.filename;
            $.ajax({
                type: 'POST',
                url: '{{ route('front.file-destroy') }}',
                data: { "_token": "{{ csrf_token() }}", name: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function (file, response) {
            console.log(file);
        },
    }
</script>
@endsection
