@extends('layouts.master')
@section('title') @lang('translation.Starter_Page')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Haber Düzenle @endslot
@slot('title') Starter Page @endslot
@endcomponent

<form class="outer-repeater"  method="post" action="{{route('habereklesave')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Gener Ayarları Düzenle</h4>

                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Haber Başlığı</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="haber_title" type="text" class="form-control" placeholder="Haber Başlığı">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Haber İçeriği</label>
                                <div class="col-lg-10">
                                    <textarea id="taskname" name="haber_content" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Haber Kategorisi</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="haber_kategori" type="text" class="form-control" placeholder="Haber Kategorisi">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Haber Yazarı</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="haber_yetkili" type="text" class="form-control" placeholder="Haber Yazarı">
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
</form>



@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
