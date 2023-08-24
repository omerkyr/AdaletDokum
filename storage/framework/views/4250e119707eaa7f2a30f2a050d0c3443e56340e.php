<?php $__env->startSection('title', $kategori->seo_title); ?>
<?php $__env->startSection('description', $kategori->seo_description); ?>
<?php $__env->startSection('keywords', $kategori->seo_keywords); ?>
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
                    <?php if($kategori->kategori_type == 3): ?>
                    <li>Projelerimiz</li>
                    <?php elseif($kategori->kategori_type == 1): ?>
                        <li>Blog</li>
                    <?php endif; ?>
                </ul>
                <?php if($kategori->kategori_type == 3): ?>
                    <h2>Projelerimiz</h2>
                <?php elseif($kategori->kategori_type == 1): ?>
                    <h2>Blog</h2>
                <?php endif; ?>

            </div>
        </section>
        <!-- End Page Title -->
    <?php if($kategori->kategori_type == 3): ?>

        <!-- Project Page Section -->
        <div class="project-page-section">
            <div class="pattern-layer" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-25.png)"></div>
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
                            <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $metin = $kat->kategori_title;
                                    $metinParcalari = explode(".",$metin);
                                    ?>
                            <li class="filter" data-role="button" data-filter=".<?php echo $metinParcalari[0] ?>"><?php echo e($kat->kategori_title); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="filter-list row clearfix">


                        <?php $__currentLoopData = $kategori->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Project Block Two -->
                        <div class="project-block-two mix all <?php echo $metinParcalari[0] ?>  col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="<?php echo e(asset('/fronted')); ?>/images/gallery/<?php echo e($page->photo_file); ?>" alt="" />
                                    <div class="overlay-box">
                                        <a class="plus flaticon-plus" href="<?php echo e($page->seo_url_slug); ?>"></a>
                                        <div class="content">
                                            <div class="title"><?php echo e($page->title); ?></div>
                                            <h4><a href="<?php echo e($page->seo_url_slug); ?>"><?php echo e($page->kisa_aciklama); ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                </div>
            </div>
        </div>
        <!-- End Project Page Section -->

<?php elseif($kategori->kategori_type == 1): ?>

        <!-- Sidebar Page Container -->

        <div class="sidebar-page-container">
            <div class="pattern-layer" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-25.png)"></div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Side -->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-classic">

                            <?php $__currentLoopData = $kategori->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- News Block Four -->
                            <div class="news-block-four">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="<?php echo e($page->seo_url_slug); ?>"><img src="<?php echo e(asset('/fronted')); ?>/images/default-resim.jpg" alt="" /></a>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <?php if(isset($page->kategori->kategori_title)): ?>
                                            <li><?php echo e($page->kategori->kategori_title); ?></li>
                                            <?php endif; ?>
                                            <li><span class="icon flaticon-calendar"></span><?php echo e(\Carbon\Carbon::parse($page->created_at)->day); ?> <?php echo e(\Carbon\Carbon::parse($page->created_at)->monthName); ?> - <?php echo e(\Carbon\Carbon::parse($page->created_at)->year); ?></li>
                                        </ul>
                                        <h3><a href="<?php echo e($page->seo_url_slug); ?>"><?php echo e($page->title); ?></a></h3>
                                        <div class="text"><?php echo e($page->kisa_aciklama); ?> </div>
                                        <a class="explore" href="<?php echo e($page->seo_url_slug); ?>">Devamını Oku <span class="flaticon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
                                        <h4>Projelerimiz</h4>
                                    </div>
                                    <?php $__currentLoopData = $kategori->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <article class="post">
                                        <figure class="post-thumb"><img src="<?php echo e(asset('/fronted')); ?>/images/adokum58-68.png" alt=""><a href="blog-detail.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                        <div class="text"><a href="blog-detail.html"><?php echo e($page->title); ?>...</a></div>
                                        <div class="post-info"><?php echo e(\Carbon\Carbon::parse($page->created_at)->day); ?> <?php echo e(\Carbon\Carbon::parse($page->created_at)->monthName); ?> - <?php echo e(\Carbon\Carbon::parse($page->created_at)->year); ?></div>
                                    </article>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>

                            <!-- Gallery Widget -->














                        </aside>
                    </div>

                </div>
            </div>
        </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
        <?php $__env->startSection('script'); ?>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('fronted.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/fronted/liste.blade.php ENDPATH**/ ?>