@extends('layouts.master')
@section('title') @lang('translation.Dashboards') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Yönetim Paneli @endslot
@slot('title') Hoş Geldiniz ! @endslot
@endcomponent


<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Sayfa Sayısı</span>
                        <h4 class="mb-3">
                           Sayfa Sayısı: <span class="counter-value" data-target="{{$pagecount}}">{{$pagecount}}</span>
                        </h4>
                    </div>

                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="file-text"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Haber Sayısı</span>
                        <h4 class="mb-3">
                           Haber Sayısı: <span class="counter-value" data-target="{{$blogcount}}"></span>
                        </h4>
                    </div>
                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="layers"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Menü Sayısı</span>
                        <h4 class="mb-3">
                           Header Menü Sayısı: <span class="counter-value" data-target="{{$menuheadercount}}"></span><br>
                           Footer Menü Sayısı: <span class="counter-value" data-target="{{$menufootercount}}"></span>
                        </h4>
                    </div>
                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="menu"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Slider Sayısı</span>
                        <h4 class="mb-3">
                           Slider Sayısı: <span class="counter-value" data-target="{{$slidercount}}"></span>
                        </h4>
                    </div>
                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="sliders"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->


@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
