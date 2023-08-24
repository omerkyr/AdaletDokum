<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Starter_Page'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Haber Düzenle
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Yeni Sayfa Ekle
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(session('PageSuccess')): ?>
        <div class="alert alert-success"><?php echo e(session('PageSuccess')); ?>

        </div>
    <?php endif; ?>
    <form class="outer-repeater" method="post" action="<?php echo e(route('sayfaeklesave')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sayfa Ekle</h4>
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">

                                <input name="page_type" type="text" class="form-control"
                                       placeholder="Sayfa Başlığı*" value="<?php echo e($page_type); ?>" hidden>

                                <div class="form-group row mb-4">
                                    <label for="sayfabaslik" class="col-form-label col-lg-2">Sayfa Başlığı*</label>
                                    <div class="col-lg-10">
                                        <input id="sayfabaslik" name="title" type="text" class="form-control"
                                               placeholder="Sayfa Başlığı*" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="sayfadetayi" class="col-form-label col-lg-2">Sayfa Detayı*</label>
                                    <div class="col-lg-10">
                                        <textarea id="ckeditor-classic" name="details" type="text"
                                                  class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="photofile" class="col-form-label col-lg-2">Fotoğraf Yükle</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="photo_file" type="file" id="photofile">
                                        <img style="max-width:100px " src="<?php echo e(asset('/fronted/')); ?>">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Site Durumu</label>
                                    <div class="col-lg-10">

                                        <div class="form-check mb-3">
                                            <?php echo Form::radio('status','1', array('id' => 'formRadios1','class'=>'form-check-input')); ?>

                                            
                                            <label class="form-check-label" for="formRadios1">
                                                Aktif
                                            </label>
                                        </div>

                                        <div class="form-check mb-3">
                                            <?php echo Form::radio('status','0', array('id' => 'formRadios2','class'=>'form-check-input')); ?>

                                            
                                            <label class="form-check-label" for="formRadios2">
                                                Pasif
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="sayfa_type1" class="col-form-label col-lg-2">Kategori Türü Seç</label>
                                    <div class="col-lg-10">
                                        <select id="sayfa_type1" name="kategori_id"  type="text" class="form-control">
                                            <option value="0" >Seçiniz</option>
                                            <?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->kategori_title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
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
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/@ckeditor/@ckeditor.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-editor.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/dashboard/sayfa-ekle.blade.php ENDPATH**/ ?>