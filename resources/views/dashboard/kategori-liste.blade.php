@extends('layouts.master')
@section('title') @lang('translation.Starter_Page')  @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Yönetim Paneli @endslot
@slot('title') {{ $kategori['name'] }} Kategori Listesi @endslot
@endcomponent


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('kategoriekle',$kategori['type'])}}">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Kategori Ekle
                    </button>
                </a>
                <h4 class="card-title">Kategoriler</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Kategori Başlığı</th>
                            <th>Kategori Durumu</th>
                            <th>Sayfa Sayısı</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kategoris as $kategori)
                        <tr>
                            <th scope="row">{{$kategori->id}}</th>
                            <td>{{$kategori->kategori_title}}</td>
                            @if($kategori->kategori_status == 1)
                                <td><a><i data-feather="check" style="color: green;"></i></a>
                            @else
                                <td><a><i data-feather="x" style="color: red;"></i></a>
                            @endif
                            <td>sayfa sayısı 22</td>
                            <td><a href="{{route('kategoriduzenle',['id'=>$kategori->id])}}"><i style="color: green;" data-feather="edit"></i></a>/
                                <a data-dataid="{{$kategori->id}}" data-title="{{$kategori->kategori_title}}" style="cursor:pointer;" id="sa-kategorisil">
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
