@extends('fronted.layouts.master')
@section('title', $sayfa->seo_title)
@section('description', $sayfa->seo_description)
@section('keywords', $sayfa->seo_keywords)
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
                    @if($sayfa->page_type == 3)
                    <li>Projelerimiz</li>
                    <li>{{$sayfa->title}}</li>
                    @elseif($sayfa->page_type == 1)
                        <li>Blog</li>
                        <li>{{$sayfa->title}}</li>
                    @endif
                </ul>
                @if($sayfa->page_type == 3)
                    <h2>{{$sayfa->title}}</h2>
                @elseif($sayfa->page_type == 1)
                    <h2>{{$sayfa->title}}</h2>
                @endif

            </div>
        </section>
        <!-- End Page Title -->
    @if($sayfa->page_type == 3)

            <!-- Project Detail Section -->
            <div class="project-detail-section">
                <div class="pattern-layer" style="background-image:url({{asset('/fronted')}}/images/background/pattern-25.png)"></div>
                <div class="pattern-layer-two" style="background-image:url({{asset('/fronted')}}/images/background/pattern-31.png)"></div>
                <div class="auto-container">
                    <!-- Upper Box -->
                    <div class="upper-box">
                        <div class="image">
                            <img src="{{asset('/fronted')}}/images/gallery/{{$sayfa->photo_file}}" alt="{{$sayfa->title}}" />
                        </div>
                        <!-- Info Box -->
                        <div class="info-box">
                            <div class="title">{{$sayfa->title}}</div>
                            <ul class="info-list">
                                <li>Adı:<span>{{$sayfa->title}}</span></li>
                                <li>Tarih:<span>{{ \Carbon\Carbon::parse($sayfa->created_at)->day }} {{ \Carbon\Carbon::parse($sayfa->created_at)->monthName }} - {{ \Carbon\Carbon::parse($sayfa->created_at)->year }}</span></li>
                                <li>Etiketler:<span>{{$sayfa->title}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Upper Box -->

                    <!-- Middle Box -->
                    <div class="middle-box">
                        <h3>Proje Açıklaması</h3>
                     {!! $sayfa->details !!}




                    </div>
                    <!-- End Middle Box -->

                    <div class="gallery-box">
                        <div class="row clearfix">
                            @foreach($sayfa->photos as $imageList)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="image">
                                        <img src="{{asset('/images')}}/photo/{{$imageList->photo_file}}" alt="{{$imageList->title}}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
            <!-- End Project Detail Section -->

        @elseif($sayfa->page_type == 1 )


            <!-- Team Detail Section -->
            <section class="team-detail-section">
{{--                <div class="pattern-layer" style="background-image:url({{asset('/fronted')}}/images/background/pattern-25.png)"></div>--}}
                <div class="auto-container">
                    <div class="row clearfix">

                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                            <h3>{{$sayfa->title}}</h3>
                            {!! $sayfa->details !!}
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Team Page Section -->



    @elseif($sayfa->page_type == 2)


            <div class="sidebar-page-container">
                <div class="pattern-layer" style="background-image:url({{asset('/fronted')}}/images/background/pattern-25.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Side -->
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">
                            <!-- News Detail -->
                            <div class="news-detail">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{asset('/fronted')}}/images/gallery/{{$sayfa->photo_file}}" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li>Blog</li>
                                            <li><span class="icon flaticon-calendar"></span>{{ \Carbon\Carbon::parse($sayfa->created_at)->day }} {{ \Carbon\Carbon::parse($sayfa->created_at)->monthName }} - {{ \Carbon\Carbon::parse($sayfa->created_at)->year }}</li>
                                        </ul>
                                        <h3>{{$sayfa->title}}</h3>
                                        {!! $sayfa->details !!}

                                        <div class="gallery-box">
                                            <div class="row clearfix">
                                                <!-- Carousel Column -->
                                                <div class="carousel-column col-lg-6 col-md-6 col-sm-12">
                                                    <div class="single-item-carousel owl-carousel owl-theme">
                                                        @foreach($sayfa->photos as $imageList)
                                                        <div class="slide">
                                                            <div class="image">
                                                                <img src="{{asset('/images')}}/photo/{{$imageList->photo_file}}" alt="{{$imageList->title}}" />
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Post Share Options-->
                                    <div class="post-share-options">
                                        <div class="post-share-inner clearfix">
                                            <ul class="social-box">
                                                <span class="share">Sosyal Medya</span>
                                                <li><a href="{{$ayar->sosyal_facebook}}"><span class="fa fa-facebook-f"></span></a></li>
                                                <li><a href="{{$ayar->sosyal_instagram}}"><span class="fa fa-instagram"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- End Post Share Options-->

                                </div>
                            </div>

                            <!-- Related Post -->
                            <div class="related-posts">
                                <h4>Blog</h4>
                                <div class="related-post-carousel owl-carousel owl-theme">
                                @foreach($kategoripages->pages as $page)
                                    <!-- News Block Three -->
                                    <div class="news-block-three">
                                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="image">
                                                <a href="{{$page->seo_url_slug}}"><img src="{{asset('/fronted')}}/images/gallery/{{$sayfa->photo_file}}" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info">
                                                    <li><span class="icon flaticon-calendar"></span>{{ \Carbon\Carbon::parse($page->created_at)->day }} {{ \Carbon\Carbon::parse($page->created_at)->monthName }} - {{ \Carbon\Carbon::parse($page->created_at)->year }}</li>
                                                </ul>
                                                <h4><a href="{{$page->seo_url_slug}}">{{$page->title}}</a></h4>
                                                <a class="explore" href="{{$page->seo_url_slug}}">Devamını Oku <span class="flaticon-plus"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- End Related Post -->


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
                                            <h4>Son Haberler</h4>
                                        </div>
                                        @foreach($kategori->pages as $page)
                                            <article class="post">
                                                <figure class="post-thumb"><img src="{{asset('/fronted')}}/images/adokum58-68.png" alt=""><a href="{{$page->seo_url_slug}}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                                <div class="text"><a href="{{$page->seo_url_slug}}">{{$page->title}}...</a></div>
                                                <div class="post-info">{{ \Carbon\Carbon::parse($page->created_at)->day }} {{ \Carbon\Carbon::parse($page->created_at)->monthName }} - {{ \Carbon\Carbon::parse($page->created_at)->year }}</div>
                                            </article>
                                        @endforeach

                                    </div>
                                </div>


                            </aside>
                        </div>

                    </div>
                </div>
            </div>


    @endif
@endsection
        @section('script')

        @endsection
