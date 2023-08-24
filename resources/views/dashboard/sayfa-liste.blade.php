@extends('layouts.master')
@section('title') Sayfa Listesi  @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Yönetim Paneli @endslot

@slot('title') {{ $kategori['name'] }} Sayfa Listesi @endslot
@endcomponent
@if(session('PageDeleteSuccess'))
    <div class="alert alert-success">{{session('PageDeleteSuccess')}}
    </div>
@endif

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('sayfaekle',['page_type'=>$kategori['type']])}}">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Sayfa Ekle
                    </button>
                </a>
                <h4 class="card-title">Sayfa Listesi</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle justify-content-center mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Sayfa Adı</th>
                            <th>Sayfa Ziyareti</th>
                            <th>Sayfa Durumu</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($pages as $page)
                        <tr>
                            <th scope="row">{{$page->id}}</th>

                            <td>{{$page->title}}</td>

                            <td>{{$page->visits}}</td>

                            @if($page->status == 1)
                                <td><a><i data-feather="check" style="color: green;"></i></a>
                            @else
                                <td><a><i data-feather="x" style="color: red;"></i></a>
                            @endif
                            <td><a href="{{route('sayfaduzenle',['id'=>$page->id])}}"><i style="color: green;" data-feather="edit"></i></a>/
                             <a style="cursor:pointer;" data-dataid="{{$page->id}}" data-title="{{$page->title}}" id="sa-page" ><i style="color: red;" data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>



{{--                        <div class="card-body">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-nowrap align-middle justify-content-center mb-0">--}}
{{--                                    <tbody>--}}

                                    <!--<tr>
                                        <th scope="row">
                                            A Basic Message
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-basic">Click me</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            A Title with a Text Under
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-title">Click me</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            A success message!
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-success">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            A warning message, with a function attached to the "Confirm"-button...
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-warning">Click me</button>
                                        </td>
                                    </tr>--!>


                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                            <!-- end table responsive -->

                        </div>

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
