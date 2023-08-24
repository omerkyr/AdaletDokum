@extends('layouts.master')
@section('title') Menü Listesi  @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Yönetim Paneli @endslot

@slot('title') {{$menutipi['name']}} @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('menuekle',['id'=>$menutipi['type']])}}">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Menü Ekle
                    </button>
                </a>
                <h4 class="card-title">Menü Listesi</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle justify-content-center mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Menu Sırası</th>
                            <th>Üst Menü</th>
                            <th>Menü Başlığı</th>
                            <th>Menü Durumu</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($menus as $menu)
                        <tr>
                            <th scope="row">{{$menu->id}}</th>
                            @if($menu->menu_ust_id == 0)
                            <td>{{$menu->menu_sira}}</td>
                            <td>-</td>
                            @else
                                <td>{{ $menu->ust_menu->menu_sira}} - {{$menu->menu_sira}} </td>
                                <td> {{ $menu->ust_menu->menu_title}} </td>
                            @endif
                                <td>{{$menu->menu_title}}</td>
                            @if($menu->menu_status == 1)
                                <td><a><i data-feather="check" style="color: green;"></i></a>
                            @else
                                <td><a><i data-feather="x" style="color: red;"></i></a>
                            @endif
                            <td><a href="/admin/menu-duzenle/{{$menu->id}}"><i style="color: green;" data-feather="edit"></i></a>/
                             <a style="cursor:pointer;" data-dataid="{{$menu->id}}" data-title="{{$menu->menu_title}}" id="sa-warning" ><i style="color: red;" data-feather="trash-2"></i></a>
                            </td>
                        </tr>

                            @if(\PHPUnit\Framework\isEmpty($menu->alt_menu))
                            @foreach($menu->alt_menu as $altmenu)

                            <tr>
                            <th scope="row">{{$altmenu->id}}</th>
                            @if($altmenu->menu_ust_id == 0)
                            <td>{{$altmenu->menu_sira}}</td>
                            <td>-</td>
                            @else
                            <td>{{ $altmenu->ust_menu->menu_sira}} - {{$altmenu->menu_sira}} </td>
                            <td> {{ $altmenu->ust_menu->menu_title}} </td>
                            @endif
                            <td>{{$altmenu->menu_title}}</td>
                            @if($altmenu->menu_status == 1)
                            <td><a><i data-feather="check" style="color: green;"></i></a>
                            @else
                            <td><a><i data-feather="x" style="color: red;"></i></a>
                            @endif
                            <td>
                                <a href="/admin/menu-duzenle/{{$altmenu->id}}">
                                    <i style="color: green;" data-feather="edit"></i></a>/
                                <a data-dataid="{{$altmenu->id}}" data-title="{{$altmenu->menu_title}}" style="cursor:pointer;" id="sa-warning">
                                    <i style="color: red;" data-feather="trash-2"></i></a>
                            </td>
{{--                                href="/admin/menusil/{{$altmenu->id}}"--}}
                            </tr>

                            @endforeach
                            @else

                            @endif

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
