@extends('fronted.layouts.master')
@section('title','Çelikten Kalite Atılan İmza')
@section('content')

<body>
<div class="cursor"></div>

<!-- PageWrapper -->
<div class="page-wrapper">

    @include('fronted.layouts.header')

	<!-- Main Slider Two -->
    <section class="main-slider-two">
		<div class="main-slider-carousel owl-theme owl-carousel">
            @foreach($sliders as $slider)
                @if($slider->slider_status == 1)
			<!-- Slide 01 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url({{asset('/fronted')}}/images/slider/{{$slider->slider_resim}})"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Adalet <span style="color: #d91684;">Döküm</span></div>
							<h1>{{$slider->slider_title}}</h1>
							<div class="text">{{$slider->slider_aciklama}}</div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="button-box">
                                        <a href="/iletisim" class="theme-btn btn-style-two clearfix">
									<span class="btn-wrap">
										<span class="text-one">İletişim</span>
										<span class="text-two">İletişim</span>
									</span>
                                            <span class="plus flaticon-plus"></span>
                                        </a>
									</div>
								</div>
								<div class="pull-left">
									<div class="phone-box">
										<div class="box-inner">
											<span class="icon flaticon-telephone"></span>
											İletişim Numaramız
											<strong>+90 332 342 22 77</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Slide 01 -->
                @endif
            @endforeach
		</div>

		<!-- Social Box -->
		<ul class="social-box">
			<li><a href="{{$ayar->sosyal_facebook}}" class="fa fa-facebook"> <span>Facebook</span></a></li>
			<li><a href="{{$ayar->sosyal_instagram}}" class="fa fa-instagram"> <span>Instagram</span></a></li>
		</ul>
		<!-- End Social Box -->
    </section>
    <!-- End Main Slider Section -->

	<!-- About Section Two -->
	<section class="about-section-two" style="background-image:url({{asset('/fronted')}}/images/background/pattern-14.png)">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="year-box">
							<h2><span class="odometer" data-count="20"></span>+</h2>
							Yıl
						</div>
						<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{asset('/fronted')}}/images/hakkimizda-501-489.jpg" alt="" />
						</div>
						<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{asset('/fronted')}}/images/hakkimizda-255-211.jpg" alt="" />
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">Hakkımızda</div>
							<h2>Tecrübe ve başarı</h2>
							<div class="text">10 Yılı aşkın tecrübesiyle sahip olduğumuz donanım ve tecrübe ile vana parçaları, otomotiv sektörüne parça üretimi yapmaktayız. Misyonumuz, hizmet ve ürün kalitesiyle tüketicinin birinci tercihi olarak sürekliliği sağlamaktır.
                            </div>
						</div>
						<div class="row clearfix">

							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-planet-earth"></span>
									<h6>Yurtiçi Hizmet</h6>
									<div class="text">Türkiye içi her yere himzetimiz vermekteyiz.</div>
								</div>
							</div>

							<!-- Feature Block Two -->
							<div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<span class="icon flaticon-trophy-2"></span>
									<h6>Kaliteli Hizmet</h6>
									<div class="text">Çıkarmış olduğumuz ürünler kaliteye memnuniyete önem bir firmayız.</div>
								</div>
							</div>

						</div>

						<!-- Button Box -->
						<div class="button-box">
							<a href="/biz-kimiz" class="theme-btn btn-style-two clearfix">
								<span class="btn-wrap">
									<span class="text-one">Devamını Gör</span>
									<span class="text-two">Devamını Gör</span>
								</span>
								<span class="plus flaticon-plus"></span>
							</a>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End About Section Two -->

	<!-- News Section Two -->
	<section class="news-section-two">
		<div class="auto-container">
			<div class="sec-title-two">
				<div class="title">Blog</div>
				<h2>Son Yazılarımız</h2>
			</div>
			<div class="three-item-carousel-two owl-carousel owl-theme">

                @foreach($pagesblog as $page)
				<!-- News Block Two -->
				<div class="news-block-two">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{$page->seo_url_slug}}"><img src="{{asset('/fronted')}}/images/gallery/{{$page->photo_file}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date">{{ \Carbon\Carbon::parse($page->created_at)->day }} {{ \Carbon\Carbon::parse($page->created_at)->monthName }} - {{ \Carbon\Carbon::parse($page->created_at)->year }}</div>
							<h4><a href="{{$page->seo_url_slug}}">{{$page->title}}</a></h4>
							<a class="plus-icon flaticon-plus" href="{{$page->seo_url_slug}}"></a>
						</div>
					</div>
				</div>
                @endforeach

			</div>
		</div>
	</section>
	<!-- End News Section Two -->


    @endsection



