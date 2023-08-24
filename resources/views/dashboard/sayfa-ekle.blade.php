@extends('layouts.master')
@section('title')
    @lang('translation.Starter_Page')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Haber Düzenle
        @endslot
        @slot('title')
            Yeni Sayfa Ekle
        @endslot
    @endcomponent
    @if(session('PageSuccess'))
        <div class="alert alert-success">{{session('PageSuccess')}}
        </div>
    @endif
    <form class="outer-repeater" method="post" action="{{route('sayfaeklesave')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sayfa Ekle</h4>
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">

                                <input name="page_type" type="text" class="form-control"
                                       placeholder="Sayfa Başlığı*" value="{{$page_type}}" hidden>

                                <div class="form-group row mb-4">
                                    <label for="sayfabaslik" class="col-form-label col-lg-2">Sayfa Başlığı*</label>
                                    <div class="col-lg-10">
                                        <input id="sayfabaslik" name="title" type="text" class="form-control"
                                               placeholder="Sayfa Başlığı*" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="sayfadetayi" class="col-form-label col-lg-2">Sayfa Detayı*</label>
                                    <div class="col-lg-10">
                                        <textarea id="ckeditor-classic" name="details" type="text"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="photofile" class="col-form-label col-lg-2">Fotoğraf Yükle</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="photo_file" type="file" id="photofile">
                                        <img style="max-width:100px " src="{{asset('/fronted/')}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Site Durumu</label>
                                    <div class="col-lg-10">

                                        <div class="form-check mb-3">
                                            {!! Form::radio('status','1', array('id' => 'formRadios1','class'=>'form-check-input')) !!}
                                            {{--                                <input class="form-check-input" type="radio" name="slider_status" id="formRadios1" @if($slider->slider_status == 1)checked @endif >--}}
                                            <label class="form-check-label" for="formRadios1">
                                                Aktif
                                            </label>
                                        </div>

                                        <div class="form-check mb-3">
                                            {!! Form::radio('status','0', array('id' => 'formRadios2','class'=>'form-check-input')) !!}
                                            {{--                                <input class="form-check-input" type="radio" name="slider_status" id="formRadios2" @if($slider->slider_status == 0)checked @endif>--}}
                                            <label class="form-check-label" for="formRadios2">
                                                Pasif
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="sayfa_type1" class="col-form-label col-lg-2">Kategori Türü Seç</label>
                                    <div class="col-lg-10">
                                        <select id="sayfa_type1" name="kategori_id"  type="text" class="form-control">
                                            <option value="0" >Seçiniz</option>
                                            @foreach($kategoris as $kategori)
                                                <option value="{{$kategori->id}}">{{$kategori->kategori_title}}</option>
                                            @endforeach
                                        </select>
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
        </div>
    </form>

@endsection
@section('script')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js') }}"></script>
@endsection
