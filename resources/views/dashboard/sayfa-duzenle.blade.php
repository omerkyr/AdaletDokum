@extends('layouts.master')
@section('title')
    Sayfa Düzenle
@endsection
@section('css')
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Sayfa Düzenle
        @endslot
        @slot('title')
           " {{$editpage->title}} " Sayfa Düzenle
        @endslot
    @endcomponent
    @if(session('SayfaUpdateSuccess'))
        <div class="alert alert-success">{{session('SayfaUpdateSuccess')}}
        </div>
    @endif

{{--    {{Form::open(['route'=>['sayfaupdate',"id"=>$editpage->id,"id"],'method'=>'POST','class'=>'dropzone white', 'files' => true])}}--}}
{{--    <div class="dz-message" ui-jp="dropzone"--}}
{{--         ui-options="{ url: '{{ route("sayfaupdate",["id"=>$editpage->id]) }}' }">--}}
{{--        <h4 class="m-t-lg m-b-md">{{ __('backend.topicDropFiles') }}</h4>--}}
{{--        <span class="text-muted block m-b-lg">( {{ __('backend.topicDropFiles2') }}--}}
{{--                                        )</span>--}}
{{--    </div>--}}
{{--    {{Form::close()}}--}}
{{--    @include('dropzoner::dropzone')--}}

{{--    <div>--}}

{{--        <form action='<?php echo route("dropzoner.upload") ?>' class='dropzone' id="dropzonersDropzone">--}}
{{--            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">--}}

{{--            <div class="dz-message"></div>--}}

{{--            <div class="fallback">--}}
{{--                <input name="file" type="file" multiple />--}}
{{--            </div>--}}

{{--            <div class="dropzone-previews" id="dropzonePreview"></div>--}}

{{--        </form>--}}

{{--    </div>--}}
{{--    <!-- Dropzone Preview Template -->--}}
{{--    <div id="preview-template" style="display: none;">--}}

{{--        <div class="dz-preview dz-file-preview">--}}
{{--            <div class="dz-image"><img data-dz-thumbnail=""></div>--}}

{{--            <div class="dz-details">--}}
{{--                <div class="dz-size"><span data-dz-size=""></span></div>--}}
{{--                <div class="dz-filename"><span data-dz-name=""></span></div>--}}
{{--            </div>--}}
{{--            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>--}}
{{--            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>--}}

{{--            <div class="dz-success-mark">--}}
{{--                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">--}}
{{--                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->--}}
{{--                    <title>Check</title>--}}
{{--                    <desc>Created with Sketch.</desc>--}}
{{--                    <defs></defs>--}}
{{--                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">--}}
{{--                        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--            </div>--}}

{{--            <div class="dz-error-mark">--}}
{{--                <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">--}}
{{--                    <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->--}}
{{--                    <title>error</title>--}}


{{--                    <defs></defs>--}}
{{--                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">--}}
{{--                        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">--}}
{{--                            <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>--}}
{{--                        </g>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}



{{--    <div class="container">--}}
{{--        <h2>Dropzone Example</h2>--}}
{{--        <div class="row justify-content-md-center">--}}
{{--            <div class="col-12">--}}
{{--                <div class="dropzone" id="file-dropzone"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="card-body">
        <!-- Nav tabs -->
         <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                    <span class="d-none d-sm-block">Ayarlar</span>
                </a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                    <span class="d-none d-sm-block">Fotoğraf Ekle (Slider)</span>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="home-1" role="tabpanel">

                <form class="outer-repeater" method="post" action="{{route('sayfaupdate',['id'=>$editpage->id])}}" enctype="multipart/form-data"    >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Sayfa Ekle</h4>
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div data-repeater-item class="outer">
                                            <div class="form-group row mb-4">
                                                <label for="sayfabaslik" class="col-form-label col-lg-2">Sayfa Başlığı*</label>
                                                <div class="col-lg-10">
                                                    <input id="sayfabaslik" name="title" type="text" value="{{$editpage->title}}" class="form-control"
                                                           placeholder="Sayfa Başlığı*" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="kisaaciklama" class="col-form-label col-lg-2">Sayfa Kısa Açıklaması*</label>
                                                <div class="col-lg-10">
                                                    <input id="kisaaciklama" name="kisa_aciklama" type="text" value="{{$editpage->kisa_aciklama}}" class="form-control"
                                                           placeholder="Sayfa Kısa Açıklaması*" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="example-date-input" class="col-form-label col-lg-2">Yayınlanma Tarihi</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" type="date" name="date" value="{{$editpage->date}}" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="sayfadetayi" class="col-form-label col-lg-2">Sayfa Detayı*</label>
                                                <div class="col-lg-10">
                                        <textarea id="editorCheck" name="details" type="text"
                                                  class="form-control">{{$editpage->details}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="photofile" class="col-form-label col-lg-2">Fotoğraf Yükle</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" name="photo_file" type="file" id="photofile">
                                                    <img style="max-width:100px " src="{{asset('/fronted/')}}/images/gallery/{{$editpage->photo_file}}">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="photofile" class="col-form-label col-lg-2">Dosya Yükle</label>
                                                <div class="col-lg-5">
                                                    <div class="file-pdf">
                                                        <a type="button" class="add_file_pdf">Dosya Ekle &nbsp;
                                                            <span style="font-size:16px; font-weight:bold;">+ </span>
                                                        </a>
                                                        @if(isset($sayfa))
                                                            @foreach($sayfa as $attac)
                                                                <div class="mb-2">
                                                                    <input class="form-control" name="attach_file[]" type="file" id="photofile">
                                                                    <p class="mb-2">  <img src="{{asset('/images')}}/pdf.png" style="max-height: 20px">
                                                                        {{$attac->title}} </p><a data-dataid="{{$attac->id}}" data-title="{{$attac->title}}" style="cursor:pointer;" id="sa-pagefiledelete">Dosyayı Sil</a></div>
                                                            @endforeach
                                                        @else
                                                            <div class="mb-2">
                                                                <input class="form-control" name="attach_file[]" type="file" id="photofile">
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label col-lg-2">Site Durumu</label>
                                                <div class="col-lg-10">

                                                    <div class="form-check mb-3">
                                                        {!! Form::radio('status','1', ($editpage->status==1) ? true : false, array('id' => 'formRadios1','class'=>'form-check-input')) !!}
                                                        {{--                                <input class="form-check-input" type="radio" name="slider_status" id="formRadios1" @if($slider->slider_status == 1)checked @endif >--}}
                                                        <label class="form-check-label" for="formRadios1">
                                                            Aktif
                                                        </label>
                                                    </div>

                                                    <div class="form-check mb-3">
                                                        {!! Form::radio('status','0',($editpage->status==0) ? true : false, array('id' => 'formRadios2','class'=>'form-check-input')) !!}
                                                        {{--                                <input class="form-check-input" type="radio" name="slider_status" id="formRadios2" @if($slider->slider_status == 0)checked @endif>--}}
                                                        <label class="form-check-label" for="formRadios2">
                                                            Pasif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                kategori seçimi silinecek !!!!!! --}}
                                            <div class="form-group row mb-4">
                                                <label for="kategori_secimi" class="col-form-label col-lg-2">Kategori Seçimi</label>
                                                <div class="col-lg-10">
                                                    <div class="form-check form-switch mb-3" dir="ltr">
                                                        <input type="checkbox" class="form-check-input" name="menu_status" id="customSwitch1" @if($editpage->menu_status == 1) checked @endif>
                                                        <label class="form-check-label" id="kategori_secimi" for="customSwitch1">Kategori Aktif/Pasif</label>
                                                    </div>
                                                    {{--                        <label for="menulink" class="col-form-label col-lg-2">Menü Link</label>--}}
                                                    <div class="col-lg-12" id="bannerhide"  {!!   ($editpage->menu_status == 0) ? "style='display:none'":"" !!}>

                                                        <select id="kategori_secimi" name="kategori_id"  type="text" class="form-control">
                                                            <option value="0" >Seçiniz</option>
                                                            @foreach($kategorilist as $kategori)
                                                                <option value='{{$kategori->id}}' @if($kategori->id == $editpage->kategori_id) selected @endif>{{$kategori->kategori_title}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            {{--Tarih--}}
                                            {{--                            <div class="form-group row mb-4">--}}
                                            {{--                                <label class="col-form-label col-lg-2">Task Date</label>--}}
                                            {{--                                <div class="col-lg-10">--}}
                                            {{--                                    <div class="input-daterange input-group" data-provide="datepicker">--}}
                                            {{--                                        <input type="text" class="form-control" placeholder="Start Date" name="start" />--}}
                                            {{--                                        <input type="text" class="form-control" placeholder="End Date" name="end" />--}}
                                            {{--                                    </div>--}}
                                            {{--                                </div>--}}
                                            {{--                            </div>--}}

                                        </div>
                                    </div>

                                    <div class="row justify-content-end">
                                        <div class="col-lg-10">
                                            <button type="submit" class="btn btn-primary">Kaydet</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Seo Ayarları</h4>
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div data-repeater-item class="outer">

                                            <div class="form-group row mb-4">
                                                <label for="i-seotitle" class="col-form-label col-lg-2">Seo Title</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seotitle" name="seo_title" value="{{$editpage->seo_title}}" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="i-seodescription" class="col-form-label col-lg-2">Seo Açıklaması</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seodescription" name="seo_description" value="{{$editpage->seo_description}}" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="i-seo_keywords" class="col-form-label col-lg-2">Seo Anahtarı</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seokeywords" name="seo_keywords" value="{{$editpage->seo_keywords}}" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="i-seourlslug" class="col-form-label col-lg-2">Seo Url Slug</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seourlslug" name="seo_url_slug" value="{{$editpage->seo_url_slug}}" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-primary">Kaydet</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>


            </div>

            <div class="tab-pane" id="profile-1" role="tabpanel">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Slide Resim Ekle</h4>
                            <p class="card-title-desc">Eklediğiniz resimleri görmek için sayfayı yenileyiniz.
                            </p>
                        </div>

                <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data"
                      class="dropzone" id="dropzone">
                    <input hidden="" name="page_id" value="{{$editpage->id}}">
                    @csrf
                </form>


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slide Resimleri</h4>
                            </div><!-- end card header -->

                            <div class="card-body">

                                <div class="row">

                                @foreach($imageLists as $imageList)

                                    <div class="col-md-2">
                                        <div class="card">
                                        <img class="rounded me-2" alt="200x200" width="200" height="200" src="{{asset('/images')}}/photo/{{$imageList->photo_file}}" data-holder-rendered="true">
                                        <p class="">{{$imageList->title}}</p>
                                        <a   style="cursor:pointer;" data-dataid="{{$imageList->id}}" data-title="{{$imageList->title}}" id="sa-imageSlideDelete"><button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-block font-size-16 align-middle"></i></button></a>
                                    </div><!-- end col -->
                                    </div>
                                    @endforeach
                                </div><!-- end row -->

                            </div><!-- end card-body -->

                        </div><!-- end card -->

                    </div><!-- end col -->

                </div><!-- end row -->


            </div>
        </div>
        </div>


    </div><!-- end card-body -->





@endsection
@section('script')
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
{{--    <script src="{{ URL::asset('assets/dropzone/dropzone.min.js') }}"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>--}}
    <script src="{{ URL::asset('assets/dropzone/config.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/sweetalert.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("image/delete") }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("dosya Silme İşlemi Başarılı!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script>

    <script>
        // import Image from '@ckeditor/ckeditor5-image/src/image';
        // import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
        // import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
        // import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
        // import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';
        // import LinkImage from '@ckeditor/ckeditor5-link/src/linkimage';
        //
        // ClassicEditor
        //     .create( document.querySelector( '#ckeditor-classic' ), {
        //         plugins: [ Image, ImageToolbar, ImageCaption, ImageStyle, ImageResize, LinkImage ],
        //         image: {
        //             toolbar: [
        //                 'imageStyle:block',
        //                 'imageStyle:side',
        //                 '|',
        //                 'toggleImageCaption',
        //                 'imageTextAlternative',
        //                 '|',
        //                 'linkImage'
        //             ]
        //         }
        //     } )
        //     .then( /* ... */ )
        //     .catch( /* ... */ );

            ClassicEditor
            .create( document.querySelector( '#editorCheck' ),{
                ckfinder:{
                    uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
                }
            } )
            .then( editor => {
            console.log( editor );
        } )
            .catch( error => {
            console.error( error );
        } );


        const bannerHidden = document.querySelector('#bannerhide');
        $('#customSwitch1').change(function(){

            if(this.checked) {
                bannerHidden.style.display = "initial";
            }
            else {
                bannerHidden.style.display = "none";
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            var max_fields = 10;
            var wrapper = $(".file-pdf");
            var add_button = $(".add_file_pdf");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div class="mb-2"> <input class="form-control" name="attach_file[]" type="file" /><a href="#" class="delete">Delete</a> </div>'); //add input box
                } else {
                    alert('Limiti sayısını aştınız')
                }
            });

            $(wrapper).on("click", ".delete", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
    </script>
@endsection
