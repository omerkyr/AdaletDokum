@extends('layouts.master')
@section('title') Slider Liste  @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Yönetim Paneli @endslot
@slot('title') Slider Liste @endslot
@endcomponent
<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <a href="{{route('sliderekle')}}">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Slider Ekle
                    </button>
                </a>
                <h4 class="card-title">Haberler</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Slider Başlığı</th>
                            <th>Slider Resim</th>
                            <th>Slider Türü</th>
                            <th>Slider Durum</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <th scope="row">{{$slider->id}}</th>
                                <td>{{$slider->slider_title}}</td>
                                <td><img class="rounded me-2" alt="taseli-turkuaz" width="90" src="{{asset('/fronted/')}}/images/slider/{{$slider->slider_resim}}" data-holder-rendered="true"></td>
                                @if($slider->slider_tur == 1)
                                    <td>Slider</td>
                                @else
                                    <td>{{$slider->slider_tur}}</td>
                                @endif

                                @if($slider->slider_status == 1)
                                    <td><a><i data-feather="check" style="color: green;"></i></a>
                                @else
                                    <td><a><i data-feather="x" style="color: red;"></i></a>
                                @endif

                                <td>
                                    <a href="slider-duzenle/{{$slider->id}}"><i style="color: green;" data-feather="edit"></i></a>/
                                    <a data-dataid="{{$slider->id}}" data-title="{{$slider->slider_title}}" style="cursor:pointer;" id="sa-slidersil">
                                        <i style="color: red;" data-feather="trash-2"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/sweetalert.init.js') }}"></script>
@endsection
