<?php $__env->startSection('title'); ?> Slider Liste  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Yönetim Paneli <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Slider Liste <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <a href="<?php echo e(route('sliderekle')); ?>">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Slider Ekle
                    </button>
                </a>
                <h4 class="card-title">Haberler</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Slider Başlığı</th>
                            <th>Slider Resim</th>
                            <th>Slider Türü</th>
                            <th>Slider Durum</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($slider->id); ?></th>
                                <td><?php echo e($slider->slider_title); ?></td>
                                <td><img class="rounded me-2" alt="taseli-turkuaz" width="90" src="<?php echo e(asset('/fronted/')); ?>/images/slider/<?php echo e($slider->slider_resim); ?>" data-holder-rendered="true"></td>
                                <?php if($slider->slider_tur == 1): ?>
                                    <td>Slider</td>
                                <?php else: ?>
                                    <td><?php echo e($slider->slider_tur); ?></td>
                                <?php endif; ?>

                                <?php if($slider->slider_status == 1): ?>
                                    <td><a><i data-feather="check" style="color: green;"></i></a>
                                <?php else: ?>
                                    <td><a><i data-feather="x" style="color: red;"></i></a>
                                <?php endif; ?>

                                <td>
                                    <a href="slider-duzenle/<?php echo e($slider->id); ?>"><i style="color: green;" data-feather="edit"></i></a>/
                                    <a data-dataid="<?php echo e($slider->id); ?>" data-title="<?php echo e($slider->slider_title); ?>" style="cursor:pointer;" id="sa-slidersil">
                                        <i style="color: red;" data-feather="trash-2"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/sweetalert.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/dashboard/slider-liste.blade.php ENDPATH**/ ?>