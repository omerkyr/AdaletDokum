<?php $__env->startSection('title'); ?> Slider Liste  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Yönetim Paneli <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Slider Düzenle <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php if(session('SliderAddSaveSuccess')): ?>
    <div class="alert alert-success"><?php echo e(session('SliderAddSaveSuccess')); ?>

    </div>
<?php endif; ?>

<form class="outer-repeater"  method="post" action="<?php echo e(route('slidersave')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Gener Ayarları Düzenle</h4>

                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="baslik" class="col-form-label col-lg-2">Slider Başlığı</label>
                                <div class="col-lg-10">
                                    <input id="baslik" name="slider_title" type="text" class="form-control" placeholder="Slider Başlığını Giriniz...">
                                </div>
                            </div>

                            <div class="inner-repeater mb-4">
                                <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                    <div  data-repeater-item class="inner col-lg-10 ms-md-auto">
                                        <div class="mb-3 row align-items-center">

                                            <div class="col-md-12">
                                                <label for="logo" class="col-form-label col-lg-2">Slider (1500x635)</label>
                                                <div class="mt-6 mt-md-0">
                                                    <input class="form-control" name="slider_resim" type="file" id="logo">
                                                    <img style="max-width: 600px;" src="<?php echo e(asset('/fronted/')); ?>/images/slider/">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row mb-4">
                                <label for="aciklama" class="col-form-label col-lg-2">Slider Açıklaması</label>
                                <div class="col-lg-10">
                                    <textarea id="aciklama" name="slider_aciklama" type="text" class="form-control" placeholder="Slider Açıklmasını Giriniz..."></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="url" class="col-form-label col-lg-2">Slider Url</label>
                                <div class="col-lg-10">
                                    <input id="url" name="slider_url" type="text" value="" class="form-control" placeholder="Slider Urlsini giriniz...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label col-lg-2">Site Durumu</label>
                        <div class="col-lg-10">

                            <div class="form-check mb-3">
                                <?php echo Form::radio('slider_status','1', "", array('id' => 'formRadios1','class'=>'form-check-input')); ?>


                                <label class="form-check-label" for="formRadios1">
                                    Aktif
                                </label>
                            </div>

                            <div class="form-check mb-3">
                                <?php echo Form::radio('slider_status','0', "", array('id' => 'formRadios2','class'=>'form-check-input')); ?>


                                <label class="form-check-label" for="formRadios2">
                                    Pasif
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/dashboard/slider-ekle.blade.php ENDPATH**/ ?>