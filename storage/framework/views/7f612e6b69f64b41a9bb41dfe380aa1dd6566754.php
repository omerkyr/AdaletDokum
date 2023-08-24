<?php $__env->startSection('title','Çelikten Kalite Atılan İmza'); ?>
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
                <li><a href="/">Anasayfa</a></li>
                <li>İletişim</li>
            </ul>
            <h2>İletişim</h2>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <!-- Sec Title Three -->
            <div class="sec-title-three centered">
                <h2>İletişim Bilgileri</h2>
            </div>

            <div class="row clearfix">

                <!-- Location Block -->
                <div class="location-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <span class="icon flaticon-message"></span>
                            <strong>E-Posta Adresi</strong>

                        </div>
                        <?php echo e($ayar->contact_email); ?>

                    </div>
                </div>

                <!-- Location Block -->
                <div class="location-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <span class="icon flaticon-call"></span>
                            <strong>Telefon Numarası</strong>

                        </div>
                        <?php echo e($ayar->contact_tel); ?><br>
                        <?php echo e($ayar->contact_tel2); ?>

                    </div>
                </div>

                <!-- Location Block -->
                <div class="location-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <span class="icon flaticon-home"></span>
                            <strong>Şirket Adres</strong>

                        </div>
                        <?php echo e($ayar->contact_adres); ?>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Location Section -->

    <!-- Map Column -->
    <section class="map-section">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Map Outer -->
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3147.7439967756127!2d32.53654741532162!3d37.91304607973446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzfCsDU0JzQ3LjAiTiAzMsKwMzInMTkuNSJF!5e0!3m2!1str!2str!4v1680854334403!5m2!1str!2str" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Column -->

    <?php $__env->stopSection(); ?>




<?php echo $__env->make('fronted.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/fronted/iletisim.blade.php ENDPATH**/ ?>