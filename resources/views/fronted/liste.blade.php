@extends('fronted.layouts.master')
@section('title', $kategori->seo_title)
@section('description', $kategori->seo_description)
@section('keywords', $kategori->seo_keywords)
@section('content')

    <body>
    <div class="cursor"></div>

    <!-- PageWrapper -->
    <div class="page-wrapper">

        @include('fronted.layouts.header')

        <!-- Page Title -->
        <section class="page-title" style="background-image: url({{asset('/fronted')}}/images/background/9.jpg)">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="">Anasayfa</a></li>
                    @if($kategori->kategori_type == 3)
                    <li>Projelerimiz</li>
                    @elseif($kategori->kategori_type == 1)
                        <li>Blog</li>
                    @endif
                </ul>
                @if($kategori->kategori_type == 3)
                    <h2>Projelerimiz</h2>
                @elseif($kategori->kategori_type == 1)
                    <h2>Blog</h2>
                @endif

            </div>
        </section>
        <!-- End Page Title -->
    @if($kategori->kategori_type == 3)

        <!-- Project Page Section -->
        <div class="project-page-section">
            <div class="pattern-layer" style="background-image:url({{asset('/fronted')}}/images/background/pattern-25.png)"></div>
            <div class="auto-container">
                <div class="sec-title alternate centered">
                    <div class="title style-two">Adalet Döküm Kalitesiyle</div>
                    <h2>Yapılan Son Projelerimiz</h2>
                </div>

                <!-- MixitUp Galery -->
                <div class="mixitup-gallery">



                    <!-- Filter -->
                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns text-center clearfix">
                            <li class="active filter" data-role="button" data-filter="all">Hepsini Göster</li>
                            @foreach($kategoris as $kat)
                                    <?php
                                    $metin = $kat->kategori_title;
                                    $metinParcalari = explode(".",$metin);
                                    ?>
                            <li class="filter" data-role="button" data-filter=".<?php echo $metinParcalari[0] ?>">{{$kat->kategori_title}}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="filter-list row clearfix">


                        @foreach($kategori->pages as $page)
                        <!-- Project Block Two -->
                        <div class="project-block-two mix all <?php echo $metinParcalari[0] ?>  col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('/fronted')}}/images/gallery/{{$page->photo_file}}" alt="" />
                                    <div class="overlay-box">
                                        <a class="plus flaticon-plus" href="{{$page->seo_url_slug}}"></a>
                                        <div class="content">
                                            <div class="title">{{$page->title}}</div>
                                            <h4><a href="{{$page->seo_url_slug}}">{{$page->kisa_aciklama}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>


                </div>
            </div>
        </div>
        <!-- End Project Page Section -->

@elseif($kategori->kategori_type == 1)

        <!-- Sidebar Page Container -->

        <div class="sidebar-page-container">
            <div class="pattern-layer" style="background-image:url({{asset('/fronted')}}/images/background/pattern-25.png)"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Side -->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-classic">

                            @foreach($kategori->pages as $page)
                            <!-- News Block Four -->
                            <div class="news-block-four">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{$page->seo_url_slug}}"><img src="{{asset('/fronted')}}/images/default-resim.jpg" alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            @isset($page->kategori->kategori_title)
                                            <li>{{$page->kategori->kategori_title}}</li>
                                            @endisset
                                            <li><span class="icon flaticon-calendar"></span>{{ \Carbon\Carbon::parse($page->created_at)->day }} {{ \Carbon\Carbon::parse($page->created_at)->monthName }} - {{ \Carbon\Carbon::parse($page->created_at)->year }}</li>
                                        </ul>
                                        <h3><a href="{{$page->seo_url_slug}}">{{$page->title}}</a></h3>
                                        <div class="text">{{$page->kisa_aciklama}} </div>
                                        <a class="explore" href="{{$page->seo_url_slug}}">Devamını Oku <span class="flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

                    <!-- Sidebar Side -->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar padding-left sticky-top">

                            <!-- Service Widget -->
                            <div class="sidebar-widget service-widget">
                                <div class="widget-content">
                                    <div class="sidebar-title-two">
                                        <h4>Kategoriler</h4>
                                    </div>
                                    <ul class="service-list-two">
                                        @foreach($kategoriler as $kategori)
                                            <li><a href="{{$kategori->seo_url_slug}}">{{$kategori->kategori_title}} <span>{{count($kategori->pages)}}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Popular Posts -->
                            <div class="sidebar-widget popular-posts">
                                <div class="widget-content">
                                    <div class="sidebar-title-two">
                                        <h4>Projelerimiz</h4>
                                    </div>
                                    @foreach($kategori->pages as $page)
                                    <article class="post">
                                        <figure class="post-thumb"><img src="{{asset('/fronted')}}/images/adokum58-68.png" alt=""><a href="blog-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                        <div class="text"><a href="blog-detail.html">{{$page->title}}...</a></div>
                                        <div class="post-info">{{ \Carbon\Carbon::parse($page->created_at)->day }} {{ \Carbon\Carbon::parse($page->created_at)->monthName }} - {{ \Carbon\Carbon::parse($page->created_at)->year }}</div>
                                    </article>
                                    @endforeach

                                </div>
                            </div>

                            <!-- Gallery Widget -->
{{--                            <div class="sidebar-widget gallery-widget">--}}
{{--                                <div class="widget-content">--}}
{{--                                    <div class="sidebar-title-two">--}}
{{--                                        <h4>Gallery</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="images-outer clearfix">--}}
{{--                                        @foreach($sayfa_photo->photos as $imageList)--}}
{{--                                        <figure class="image-box"><a class="lightbox-image" href="images/gallery/1.jpg"><img src="{{asset('/fronted')}}/images/slider/{{$imageList->photo_file}}" alt=""></a></figure>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


                        </aside>
                    </div>

                </div>
            </div>
        </div>

    @endif
@endsection
        @section('script')

        @endsection
