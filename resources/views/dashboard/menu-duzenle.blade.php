@extends('layouts.master')
@section('title') Menü Düzenle  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Yönetim Paneli @endslot
@slot('title') Menü Düzenle @endslot
@endcomponent

@if(session('menuUpdateSuccess'))
    <div class="alert alert-success">{{session('menuUpdateSuccess')}}
    </div>
@endif

<form class="outer-repeater"  method="post" action="{{route('menusupdate',['id'=>$newmenu->id])}}" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Menü Düzenle</h4>
                    <input id="menu_type" name="menu_type" type="text" class="form-control" placeholder="Menü Başlığı" value="{{$newmenu->menu_type}}" hidden>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Menü Başlığı*</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="menu_title" type="text" class="form-control" value="{{$newmenu->menu_title}}" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="menu_ust_id1" class="col-form-label col-lg-2">Üst Menü</label>
                                <div class="col-lg-10">
                                    <select id="menu_ust_id1" name="menu_ust_id"  type="text" class="form-control">
                                    <option value="0" >Seçiniz</option>
                                            @foreach($ustmenu as $ustm)
                                                <option value="{{$ustm->id}}" @if($ustm->id == $newmenu->menu_ust_id) selected @endif>{{$ustm->menu_title}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Menü Sırası</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="menu_sira" type="number" value="{{$newmenu->menu_sira}}" class="form-control" placeholder="Menü Sırası*" required>
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


                    <div class="form-group row mb-4">
                        <label for="link_status" class="col-form-label col-lg-2">Menü Türü Seç</label>
                        <div class="col-lg-10">

                            <div class="radio">
                                <label class="ui-check ui-check-md">
                                    {!! Form::radio('menu_link_type','0',($newmenu->menu_link_type==0) ? true : false, array('id' => 'status1','class'=>'form-check-input','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="block";document.getElementById("kategori_div").style.display="none";')) !!}
                                    <i class="dark-white"></i>
                                    Link
                                </label>
                                <label class="ui-check ui-check-md">
                                    {!! Form::radio('menu_link_type','1',($newmenu->menu_link_type==1) ? true : false, array('id' => 'status2','class'=>'form-check-input','onclick'=>'document.getElementById("cat_div").style.display="none";document.getElementById("link_div").style.display="block";document.getElementById("kategori_div").style.display="none";')) !!}
                                    <i class="dark-white"></i>
                                    Sayfa Seçimi
                                </label>
                                <label class="ui-check ui-check-md">
                                    {!! Form::radio('menu_link_type','2',($newmenu->menu_link_type==2) ? true : false, array('id' => 'status3','class'=>'form-check-input','onclick'=>'document.getElementById("kategori_div").style.display="block";document.getElementById("cat_div").style.display="none";document.getElementById("link_div").style.display="none";')) !!}
                                    <i class="dark-white"></i>
                                    Kategori Sayfası Seçimi
                                </label>
                            </div>

                            <div id="cat_div" class="form-group row mb-2 mt-4" style="{{ ($newmenu->menu_link_type ==0)? "":"display: none" }}">
                                {{--                        <label for="menulink" class="col-form-label col-lg-2">Menü Link</label>--}}
                                <div class="col-lg-12">
                                    <input id="menulink" name="menu_link" type="text" value="{{$newmenu->menu_link}}"  class="form-control" placeholder="Menü Link" required>
                                </div>
                            </div>
                            <div id="link_div" class="form-group row mb-2 mt-4" style="{{ ($newmenu->menu_link_type ==1)? "":"display: none" }}">
                                {{--                        <label for="menusayfasi" class="col-form-label col-lg-2">Menü Sayfası</label>--}}
                                <div class="col-lg-12">
                                    <select class="form-select" name="menu_page_id">
                                        <option value="0">Sayfa Seçiniz</option>
                                        @foreach($selectpages as $selectpage)
                                            <option value='{{$selectpage->id}}' @if($selectpage->id == $newmenu->menu_page_id) selected @endif>{{$selectpage->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="kategori_div" class="form-group row mb-2 mt-4" style="{{ ($newmenu->menu_link_type ==2)? "":"display: none" }}">
                                {{--                        <label for="menusayfasi" class="col-form-label col-lg-2">Menü Sayfası</label>--}}
                                <div class="col-lg-12">
                                    <select class="form-select" name="kategori_id">
                                        <option value="0">Kategori Sayfası Seçimi</option>
                                        @foreach($kategorilist as $kategori)
                                            <option value='{{$kategori->id}}' @if($kategori->id == $newmenu->kategori_id) selected @endif>{{$kategori->kategori_title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="form-group row mb-4">
                        <label class="col-form-label col-lg-2">Site Durumu</label>

                        <div class="col-lg-10">

                            <div class="form-check mb-3">
                                {!! Form::radio('menu_status',1, ($newmenu->menu_status==1) ? true : false, array('id' => 'formRadios1','class'=>'form-check-input')) !!}
                                {{--                                <input class="form-check-input" type="radio" name="slider_status" id="formRadios1" @if($slider->slider_status == 1)checked @endif >--}}
                                <label class="form-check-label" for="formRadios1">
                                    Aktif
                                </label>
                            </div>

                            <div class="form-check mb-3">
                                {!! Form::radio('menu_status',0,($newmenu->menu_status==0) ? true : false, array('id' => 'formRadios2','class'=>'form-check-input')) !!}
                                {{--                                <input class="form-check-input" type="radio" name="slider_status" id="formRadios2" @if($slider->slider_status == 0)checked @endif>--}}
                                <label class="form-check-label" for="formRadios2">
                                    Pasif
                                </label>
                            </div>
                        </div>
                    </div>
{{--                    <div id="link_div" class="form-group row" style="{{ ($ustm->menu_link_type ==1)? "":"display: none" }}">--}}
{{--                        <label for="link"--}}
{{--                               class="col-sm-3 form-control-label">{!!  __('backend.linkURL') !!}--}}
{{--                        </label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            {!! Form::text('link',$ustm->menu_link_type, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')) !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div id="cat_div" class="form-group row" style="{{ ($ustm->menu_link_type ==1)? "":"display: none" }}">--}}
{{--                        <label for="link"--}}
{{--                               class="col-sm-3 form-control-label">{!!  __('backend.linkURL') !!}--}}
{{--                        </label>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            {!! Form::text('link',$ustm->menu_link_type, array('placeholder' => '','class' => 'form-control', 'dir'=>'ltr')) !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}

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
