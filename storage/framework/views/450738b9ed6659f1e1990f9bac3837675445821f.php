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
                            <strong>Şifrket Adres</strong>

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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Column -->

    <?php $__env->stopSection(); ?>




<?php echo $__env->make('fronted.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/fronted/iletisim.blade.php ENDPATH**/ ?>