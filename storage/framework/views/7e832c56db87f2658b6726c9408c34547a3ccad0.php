<?php $__env->startSection('title', $sayfa->seo_title); ?>
<?php $__env->startSection('description', $sayfa->seo_description); ?>
<?php $__env->startSection('keywords', $sayfa->seo_keywords); ?>
<?php $__env->startSection('content'); ?>

    <body>
    <div class="cursor"></div>

    <!-- PageWrapper -->
    <div class="page-wrapper">

        <?php echo $__env->make('fronted.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Title -->
        <section class="page-title" style="background-image: url(<?php echo e(asset('/fronted')); ?>/images/background/9.jpg)">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="">Anasayfa</a></li>
                    <?php if($sayfa->page_type == 3): ?>
                    <li>Projelerimiz</li>
                    <li><?php echo e($sayfa->title); ?></li>
                    <?php elseif($sayfa->page_type == 1): ?>
                        <li>Blog</li>
                        <li><?php echo e($sayfa->title); ?></li>
                    <?php endif; ?>
                </ul>
                <?php if($sayfa->page_type == 3): ?>
                    <h2><?php echo e($sayfa->title); ?></h2>
                <?php elseif($sayfa->page_type == 1): ?>
                    <h2><?php echo e($sayfa->title); ?></h2>
                <?php endif; ?>

            </div>
        </section>
        <!-- End Page Title -->
    <?php if($sayfa->page_type == 3): ?>

            <!-- Project Detail Section -->
            <div class="project-detail-section">
                <div class="pattern-layer" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-25.png)"></div>
                <div class="pattern-layer-two" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-31.png)"></div>
                <div class="auto-container">
                    <!-- Upper Box -->
                    <div class="upper-box">
                        <div class="image">
                            <img src="<?php echo e(asset('/fronted')); ?>/images/gallery/<?php echo e($sayfa->photo_file); ?>" alt="<?php echo e($sayfa->title); ?>" />
                        </div>
                        <!-- Info Box -->
                        <div class="info-box">
                            <div class="title"><?php echo e($sayfa->title); ?></div>
                            <ul class="info-list">
                                <li>Adı:<span><?php echo e($sayfa->title); ?></span></li>
                                <li>Tarih:<span><?php echo e(\Carbon\Carbon::parse($sayfa->created_at)->day); ?> <?php echo e(\Carbon\Carbon::parse($sayfa->created_at)->monthName); ?> - <?php echo e(\Carbon\Carbon::parse($sayfa->created_at)->year); ?></span></li>
                                <li>Etiketler:<span><?php echo e($sayfa->title); ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Upper Box -->

                    <!-- Middle Box -->
                    <div class="middle-box">
                        <h3>Proje Açıklaması</h3>
                     <?php echo $sayfa->details; ?>





                    </div>
                    <!-- End Middle Box -->

                    <div class="gallery-box">
                        <div class="row clearfix">
                            <?php $__currentLoopData = $sayfa->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="image">
                                        <img src="<?php echo e(asset('/images')); ?>/photo/<?php echo e($imageList->photo_file); ?>" alt="<?php echo e($imageList->title); ?>" />
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>


                </div>
            </div>
            <!-- End Project Detail Section -->

        <?php elseif($sayfa->page_type == 1 ): ?>


            <!-- Team Detail Section -->
            <section class="team-detail-section">

                <div class="auto-container">
                    <div class="row clearfix">

                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                            <h3><?php echo e($sayfa->title); ?></h3>
                            <?php echo $sayfa->details; ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End Team Page Section -->



    <?php elseif($sayfa->page_type == 2): ?>


            <div class="sidebar-page-container">
                <div class="pattern-layer" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-25.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Content Side -->
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">
                            <!-- News Detail -->
                            <div class="news-detail">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="<?php echo e(asset('/fronted')); ?>/images/gallery/<?php echo e($sayfa->photo_file); ?>" alt="" />
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li>Blog</li>
                                            <li><span class="icon flaticon-calendar"></span><?php echo e(\Carbon\Carbon::parse($sayfa->created_at)->day); ?> <?php echo e(\Carbon\Carbon::parse($sayfa->created_at)->monthName); ?> - <?php echo e(\Carbon\Carbon::parse($sayfa->created_at)->year); ?></li>
                                        </ul>
                                        <h3><?php echo e($sayfa->title); ?></h3>
                                        <?php echo $sayfa->details; ?>


                                        <div class="gallery-box">
                                            <div class="row clearfix">
                                                <!-- Carousel Column -->
                                                <div class="carousel-column col-lg-6 col-md-6 col-sm-12">
                                                    <div class="single-item-carousel owl-carousel owl-theme">
                                                        <?php $__currentLoopData = $sayfa->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="slide">
                                                            <div class="image">
                                                                <img src="<?php echo e(asset('/images')); ?>/photo/<?php echo e($imageList->photo_file); ?>" alt="<?php echo e($imageList->title); ?>" />
                                                            </div>
                                                        </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                <li><a href="<?php echo e($ayar->sosyal_facebook); ?>"><span class="fa fa-facebook-f"></span></a></li>
                                                <li><a href="<?php echo e($ayar->sosyal_instagram); ?>"><span class="fa fa-instagram"></span></a></li>
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
                                <?php $__currentLoopData = $kategoripages->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- News Block Three -->
                                    <div class="news-block-three">
                                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                            <div class="image">
                                                <a href="<?php echo e($page->seo_url_slug); ?>"><img src="<?php echo e(asset('/fronted')); ?>/images/gallery/<?php echo e($sayfa->photo_file); ?>" alt="" /></a>
                                            </div>
                                            <div class="lower-content">
                                                <ul class="post-info">
                                                    <li><span class="icon flaticon-calendar"></span><?php echo e(\Carbon\Carbon::parse($page->created_at)->day); ?> <?php echo e(\Carbon\Carbon::parse($page->created_at)->monthName); ?> - <?php echo e(\Carbon\Carbon::parse($page->created_at)->year); ?></li>
                                                </ul>
                                                <h4><a href="<?php echo e($page->seo_url_slug); ?>"><?php echo e($page->title); ?></a></h4>
                                                <a class="explore" href="<?php echo e($page->seo_url_slug); ?>">Devamını Oku <span class="flaticon-plus"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                                            <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e($kategori->seo_url_slug); ?>"><?php echo e($kategori->kategori_title); ?> <span><?php echo e(count($kategori->pages)); ?></span></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Popular Posts -->
                                <div class="sidebar-widget popular-posts">
                                    <div class="widget-content">
                                        <div class="sidebar-title-two">
                                            <h4>Son Haberler</h4>
                                        </div>
                                        <?php $__currentLoopData = $kategori->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <article class="post">
                                                <figure class="post-thumb"><img src="<?php echo e(asset('/fronted')); ?>/images/adokum58-68.png" alt=""><a href="<?php echo e($page->seo_url_slug); ?>" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                                <div class="text"><a href="<?php echo e($page->seo_url_slug); ?>"><?php echo e($page->title); ?>...</a></div>
                                                <div class="post-info"><?php echo e(\Carbon\Carbon::parse($page->created_at)->day); ?> <?php echo e(\Carbon\Carbon::parse($page->created_at)->monthName); ?> - <?php echo e(\Carbon\Carbon::parse($page->created_at)->year); ?></div>
                                            </article>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>


                            </aside>
                        </div>

                    </div>
                </div>
            </div>


    <?php endif; ?>
<?php $__env->stopSection(); ?>
        <?php $__env->startSection('script'); ?>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('fronted.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/fronted/sayfa.blade.php ENDPATH**/ ?>