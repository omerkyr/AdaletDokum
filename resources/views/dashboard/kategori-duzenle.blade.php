@extends('layouts.master')
@section('title') {{$kategori->kategori_title}}  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Kategori Düzenle @endslot
@slot('title') {{$kategori->kategori_title}} @endslot
@endcomponent

@if(session('KategoriEkleSuccess'))
    <div class="alert alert-success">{{session('KategoriEkleSuccess')}}
    </div>
@endif


<form class="outer-repeater"  method="post" action="{{route('kategoriupdate',['id'=>$kategori->id])}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kategori Düzenle</h4>

                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Kategori Başlığı</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="kategori_title" type="text" value="{{$kategori->kategori_title}}" class="form-control" placeholder="Kategori Başlığı">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Kategori Açıklaması</label>
                                <div class="col-lg-10">
                                    <textarea id="ckeditor-classic" name="kategori_aciklama" type="text" class="form-control">{{$kategori->kategori_aciklama}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="kategori_link" class="col-form-label col-lg-2">Kategori Link</label>
                                <div class="col-lg-10">
                                    <input id="kategori_link" name="kategori_link" type="text" value="{{$kategori->kategori_link}}" class="form-control" placeholder="Haber Kategorisi">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="banner_durumu" class="col-form-label col-lg-2">Banner Durumu</label>
                                <div class="col-lg-10">
                                    <div class="form-check form-switch mb-3" dir="ltr">
                                        <input type="checkbox" class="form-check-input" name="kategori_banner_status" id="customSwitch1" @if($kategori->kategori_banner_status == 1) checked @endif>
                                        <label class="form-check-label" id="banner_durumu" for="customSwitch1">Banner Göster/Gizle</label>
                                    </div>
                                    {{--                        <label for="menulink" class="col-form-label col-lg-2">Menü Link</label>--}}
                                    <div class="col-lg-12" id="bannerhide"  {!!   ($kategori->kategori_banner_status == 0) ? "style='display:none'":"" !!}>
                                        <input class="form-control mb-4" name="kategori_banner" type="file" id="banner">
                                        <img style="max-width: 600px;" src="{{asset('/fronted/')}}/images/banner/{{$kategori->kategori_banner}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="kategori_durumu" class="col-form-label col-lg-2">Kategori Durumu</label>
                                <div class="col-lg-10">
                                    <div class="form-check form-switch mb-3" dir="ltr">
                                        <input type="checkbox" class="form-check-input" name="kategori_status" id="customSwitch2" @if($kategori->kategori_status == 1) checked @endif>
                                        <label class="form-check-label" id="kategori_durumu" for="customSwitch2">Kategoriyi Göster/Gizle</label>
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
                                    <input id="i-seotitle" name="seo_title" value="{{$kategori->seo_title}}" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="i-seodescription" class="col-form-label col-lg-2">Seo Açıklaması</label>
                                <div class="col-lg-10">
                                    <input id="i-seodescription" name="seo_description" value="{{$kategori->seo_description}}" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="i-seokeywords" class="col-form-label col-lg-2">Seo Anahtarı</label>
                                <div class="col-lg-10">
                                    <input id="i-seokeywords" name="seo_keywords" value="{{$kategori->seo_keywords}}" type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="i-seourlslug" class="col-form-label col-lg-2">Seo Url Slug</label>
                                <div class="col-lg-10">
                                    <input id="i-seourlslug" name="seo_url_slug" value="{{$kategori->seo_url_slug}}" type="text" class="form-control" placeholder="">
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
    </div>
</form>



@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
    <script>
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
@endsection
