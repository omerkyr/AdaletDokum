<?php $__env->startSection('title','Çelikten Kalite Atılan İmza'); ?>
<?php $__env->startSection('content'); ?>

<body>
<div class="cursor"></div>

<!-- PageWrapper -->
<div class="page-wrapper">

    <?php echo $__env->make('fronted.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<!-- Main Slider Two -->
    <section class="main-slider-two">
		<div class="main-slider-carousel owl-theme owl-carousel">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($slider->slider_status == 1): ?>
			<!-- Slide 01 -->
			<div class="slide">
				<div class="image-layer" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/slider/<?php echo e($slider->slider_resim); ?>)"></div>
				<div class="auto-container">
					<!-- Content Column -->
					<div class="content-column">
						<div class="inner-column">
							<div class="title">Adalet <span style="color: #d91684;">Döküm</span></div>
							<h1><?php echo e($slider->slider_title); ?></h1>
							<div class="text"><?php echo e($slider->slider_aciklama); ?></div>
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
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>

		<!-- Social Box -->
		<ul class="social-box">
			<li><a href="<?php echo e($ayar->sosyal_facebook); ?>" class="fa fa-facebook"> <span>Facebook</span></a></li>
			<li><a href="<?php echo e($ayar->sosyal_instagram); ?>" class="fa fa-instagram"> <span>Instagram</span></a></li>
		</ul>
		<!-- End Social Box -->
    </section>
    <!-- End Main Slider Section -->

	<!-- About Section Two -->
	<section class="about-section-two" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-14.png)">
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
							<img src="<?php echo e(asset('/fronted')); ?>/images/hakkimizda-501-489.jpg" alt="" />
						</div>
						<div class="image-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="<?php echo e(asset('/fronted')); ?>/images/hakkimizda-255-211.jpg" alt="" />
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

                <?php $__currentLoopData = $pagesblog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<!-- News Block Two -->
				<div class="news-block-two">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="<?php echo e($page->seo_url_slug); ?>"><img src="<?php echo e(asset('/fronted')); ?>/images/gallery/<?php echo e($page->photo_file); ?>" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="post-date"><?php echo e(\Carbon\Carbon::parse($page->created_at)->day); ?> <?php echo e(\Carbon\Carbon::parse($page->created_at)->monthName); ?> - <?php echo e(\Carbon\Carbon::parse($page->created_at)->year); ?></div>
							<h4><a href="<?php echo e($page->seo_url_slug); ?>"><?php echo e($page->title); ?></a></h4>
							<a class="plus-icon flaticon-plus" href="<?php echo e($page->seo_url_slug); ?>"></a>
						</div>
					</div>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</section>
	<!-- End News Section Two -->


    <?php $__env->stopSection(); ?>




<?php echo $__env->make('fronted.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/fronted/index.blade.php ENDPATH**/ ?>