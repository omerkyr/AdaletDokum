@extends('layouts.master')
@section('title') @lang('translation.Starter_Page')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Yönetim Paneli @endslot
@slot('title') Haber Listesi @endslot
@endcomponent


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('haberekle')}}">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Haber Ekle
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
                            <th>Haber Başlığı</th>
                            <th>Haber İçeriği</th>
                            <th>Haber Türü</th>
                            <th>Haber Resmi</th>
                            <th>Haber Kategorisi</th>
                            <th>Haber Yazarı</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($habers as $haber)
                        <tr>
                            <th scope="row">{{$haber->id}}</th>
                            <td>{{$haber->haber_title}}</td>
                            <td>{{$haber->haber_content}}</td>
                            <td>{{$haber->haber_tur}}</td>
                            <td><img class="rounded me-2" alt="taseli-turkuaz" width="40" src="{{asset('/images/')}}/{{$haber->haber_image}}" data-holder-rendered="true"></td>
                            <td>{{$haber->haber_kategori}}</td>
                            <td>{{$haber->haber_yetkili}}</td>
                            <td><a href="haber-duzenle/{{$haber->id}}"><i style="color: green;" data-feather="edit"></i></a>/
                                <a href="haber-sil/{{$haber->id}}"><i style="color: red;" data-feather="trash-2"></i></a>
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
@endsection
