<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

<link href="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('/assets/libs/flatpickr/flatpickr.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Genel Ayarlar <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Genel Ayarlar <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>


<form class="outer-repeater"  method="post" action="<?php echo e(route('ayarupdate',['id'=>$ayar->id])); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Gener Ayarları Düzenle</h4>

                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Site Başlığı</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="site_title" type="text" value="<?php echo e($ayar->site_title); ?>" class="form-control" placeholder="Site Başlığını Giriniz...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Site Keywords</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="site_keywords" type="text" value="<?php echo e($ayar->site_keywords); ?>" class="form-control" placeholder="Site Keywords Giriniz...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Site Açıklması</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="site_description" type="text" value="<?php echo e($ayar->site_description); ?>" class="form-control" placeholder="Site Açıklmasını Giriniz...">
                                </div>
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
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Stil Ayarları</h4>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">


                            <div class="inner-repeater mb-4">
                                <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                    <div  data-repeater-item class="inner col-lg-10 ms-md-auto">
                                        <div class="mb-3 row align-items-center">

                                            <div class="col-md-6">
                                                <label for="logo" class="col-form-label col-lg-2">Site Logo</label>
                                                <div class="mt-6 mt-md-0">
                                                    <input class="form-control" name="site_logo" type="file" id="logo">
                                                    <img style="max-width:100px " src="<?php echo e(asset('/images/')); ?>/<?php echo e($ayar->site_logo); ?>">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <label for="favicon" class="col-form-label col-lg-2">Site Favicon</label>
                                                <div class="mt-6 mt-md-0">
                                                    <input class="form-control" name="site_favicon" type="file" id="favicon">
                                                    <img style="max-width:100px " src="<?php echo e(asset('/images/')); ?>/<?php echo e($ayar->site_favicon); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="taskbudget" class="col-form-label col-lg-2">Sitenin Rengi</label>
                                                <div class="mt-6 mt-md-0">
                                                    <input type="color" name="site_color" class="form-control form-control-color mw-100" id="site_color" value="<?php echo e($ayar->site_color); ?>" title="Site Rengini Seçiniz">
                                                    <span class="input-group-addon" id="cpbg"><i></i></span>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
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
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Site Bilgileri</h4>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Adres</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="contact_adres" value="<?php echo e($ayar->contact_adres); ?>" type="text" class="form-control" placeholder="Adresi Giriniz...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Telefon </label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="contact_tel" value="<?php echo e($ayar->contact_tel); ?>" type="text" class="form-control" placeholder="Telefon Numarınızı Giriniz...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Telefon 2</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="contact_tel2" value="<?php echo e($ayar->contact_tel2); ?>" type="text" class="form-control" placeholder="Telefon Numarınızı Giriniz...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">E-Posta Adresi</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="contact_email" value="<?php echo e($ayar->contact_email); ?>" type="text" class="form-control" placeholder="E-Posta Adresini Giriniz...">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Çalışma Saati</label>
                                <div class="col-lg-10">
                                    <input type="text" name="contact_calismasaati" value="<?php echo e($ayar->contact_calismasaati); ?>" class="form-control" id="datepicker-timepicker">
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
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Sosyal Medya</h4>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">İnstagram</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="<?php echo e($ayar->sosyal_instagram); ?>" name="sosyal_instagram" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Facebook</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="<?php echo e($ayar->sosyal_facebook); ?>" name="sosyal_facebook" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Twitter</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="<?php echo e($ayar->sosyal_twitter); ?>" name="sosyal_twitter" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Linkedin</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="<?php echo e($ayar->sosyal_linkedin); ?>" name="sosyal_linkedin" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Youtube</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="<?php echo e($ayar->sosyal_youtube); ?>" name="sosyal_youtube" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Whatsapp</label>
                                <div class="col-lg-10">
                                    <input id="taskname" value="<?php echo e($ayar->sosyal_whatsapp); ?>" name="sosyal_whatsapp" type="number" class="form-control">
                                </div>
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
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/admin-resources/admin-resources.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/pages/form-advanced.init.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/dashboard/genel-ayarlar.blade.php ENDPATH**/ ?>