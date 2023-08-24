<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Yönetim Paneli <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Hoş Geldiniz ! <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Sayfa Sayısı</span>
                        <h4 class="mb-3">
                           Sayfa Sayısı: <span class="counter-value" data-target="<?php echo e($pagecount); ?>"><?php echo e($pagecount); ?></span>
                        </h4>
                    </div>

                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="file-text"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Haber Sayısı</span>
                        <h4 class="mb-3">
                           Haber Sayısı: <span class="counter-value" data-target="<?php echo e($blogcount); ?>"></span>
                        </h4>
                    </div>
                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="layers"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Menü Sayısı</span>
                        <h4 class="mb-3">
                           Header Menü Sayısı: <span class="counter-value" data-target="<?php echo e($menuheadercount); ?>"></span><br>
                           Footer Menü Sayısı: <span class="counter-value" data-target="<?php echo e($menufootercount); ?>"></span>
                        </h4>
                    </div>
                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="menu"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Toplam Slider Sayısı</span>
                        <h4 class="mb-3">
                           Slider Sayısı: <span class="counter-value" data-target="<?php echo e($slidercount); ?>"></span>
                        </h4>
                    </div>
                    <div class="col-lg-1">
                        <div class="ml-50"><i data-feather="sliders"></i></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/dashboard/index.blade.php ENDPATH**/ ?>