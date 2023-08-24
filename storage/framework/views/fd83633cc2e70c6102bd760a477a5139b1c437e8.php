<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Kategori Ekle <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Yeni Kategori Ekle <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php if(session('KategoriUpdateSuccess')): ?>
    <div class="alert alert-success"><?php echo e(session('KategoriUpdateSuccess')); ?>

    </div>
<?php endif; ?>

<form class="outer-repeater"  method="post" action="<?php echo e(route('kategorieklesave')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kategori Ekle</h4>

                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <input name="kategori_type" type="text" class="form-control"
                                   placeholder="Sayfa Başlığı*" value="<?php echo e($kategori->kategori_type); ?>" hidden>

                            <div class="form-group row mb-4">
                                <label for="kategori_title2" class="col-form-label col-lg-2">Kategori Başlığı</label>
                                <div class="col-lg-10">
                                    <input id="kategori_title2" name="kategori_title" type="text" class="form-control" placeholder="Kategori Başlığı" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="ckeditor-classic" class="col-form-label col-lg-2">Kategori Açıklaması</label>
                                <div class="col-lg-10">
                                    <textarea id="ckeditor-classic" name="kategori_aciklama" type="text" class="form-control" ></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="kategori_link" class="col-form-label col-lg-2">Kategori Link</label>
                                <div class="col-lg-10">
                                    <input id="kategori_link" name="kategori_link" type="text" class="form-control" placeholder="Kategori Link" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="banner_durumu" class="col-form-label col-lg-2">Banner Durumu</label>
                                <div class="col-lg-10">
                                    <div class="form-check form-switch mb-3" dir="ltr">
                                        <input type="checkbox" class="form-check-input" name="kategori_banner_status" id="customSwitch1" <?php if($kategori->kategori_banner_status == 1): ?> checked <?php endif; ?>>
                                        <label class="form-check-label" id="banner_durumu" for="customSwitch1">Banner Göster/Gizle</label>
                                    </div>
                                    
                                    <div class="col-lg-12" id="bannerhide"  <?php echo ($kategori->kategori_banner_status == 0) ? "style='display:none'":""; ?>>
                                        <input class="form-control mb-4" name="kategori_banner" type="file" id="banner">
                                        <img style="max-width: 600px;">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="kategori_status" class="col-form-label col-lg-2">Kategori Durumu</label>
                                <div class="col-lg-10">
                                    <div class="form-check form-switch mb-3" dir="ltr">
                                        <input type="checkbox" class="form-check-input" name="kategori_status" id="customSwitch2" <?php if($kategori->kategori_status == 1): ?> checked <?php endif; ?>>
                                        <label class="form-check-label" id="kategori_status" for="customSwitch2">Kategoriyi Göster/Gizle</label>
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
</form>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/@ckeditor/@ckeditor.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/form-editor.init.js')); ?>"></script>
    <script>
        const bannerHidden = document.querySelector('#bannerhide');
        $('#customSwitch1').change(function(){
            if(this.checked) {
                bannerHidden.style.display = "initial";
            }
            else {
                bannerHidden.style.display = "none";
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/dashboard/kategori-ekle.blade.php ENDPATH**/ ?>