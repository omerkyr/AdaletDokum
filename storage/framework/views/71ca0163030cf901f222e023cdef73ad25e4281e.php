<?php $__env->startSection('title'); ?> Menü Düzenle  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Yönetim Paneli <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Menü Düzenle <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php if(session('menuUpdateSuccess')): ?>
    <div class="alert alert-success"><?php echo e(session('menuUpdateSuccess')); ?>

    </div>
<?php endif; ?>

<form class="outer-repeater"  method="post" action="<?php echo e(route('menusupdate',['id'=>$newmenu->id])); ?>" enctype="multipart/form-data" autocomplete="off">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Menü Düzenle</h4>
                    <input id="menu_type" name="menu_type" type="text" class="form-control" placeholder="Menü Başlığı" value="<?php echo e($newmenu->menu_type); ?>" hidden>
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">

                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Menü Başlığı*</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="menu_title" type="text" class="form-control" value="<?php echo e($newmenu->menu_title); ?>" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="menu_ust_id1" class="col-form-label col-lg-2">Üst Menü</label>
                                <div class="col-lg-10">
                                    <select id="menu_ust_id1" name="menu_ust_id"  type="text" class="form-control">
                                    <option value="0" >Seçiniz</option>
                                            <?php $__currentLoopData = $ustmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ustm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($ustm->id); ?>" <?php if($ustm->id == $newmenu->menu_ust_id): ?> selected <?php endif; ?>><?php echo e($ustm->menu_title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskname" class="col-form-label col-lg-2">Menü Sırası</label>
                                <div class="col-lg-10">
                                    <input id="taskname" name="menu_sira" type="number" value="<?php echo e($newmenu->menu_sira); ?>" class="form-control" placeholder="Menü Sırası*" required>
                                </div>
                            </div>


                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                        </div>
                    </div>


                    <div class="form-group row mb-4">
                        <label for="link_status" class="col-form-label col-lg-2">Menü Türü Seç</label>
                        <div class="col-lg-10">

                            <div class="radio">
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('menu_link_type','0',($newmenu->menu_link_type==0) ? true : false, array('id' => 'status1','class'=>'form-check-input','onclick'=>'document.getElementById("link_div").style.display="none";document.getElementById("cat_div").style.display="block";document.getElementById("kategori_div").style.display="none";')); ?>

                                    <i class="dark-white"></i>
                                    Link
                                </label>
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('menu_link_type','1',($newmenu->menu_link_type==1) ? true : false, array('id' => 'status2','class'=>'form-check-input','onclick'=>'document.getElementById("cat_div").style.display="none";document.getElementById("link_div").style.display="block";document.getElementById("kategori_div").style.display="none";')); ?>

                                    <i class="dark-white"></i>
                                    Sayfa Seçimi
                                </label>
                                <label class="ui-check ui-check-md">
                                    <?php echo Form::radio('menu_link_type','2',($newmenu->menu_link_type==2) ? true : false, array('id' => 'status3','class'=>'form-check-input','onclick'=>'document.getElementById("kategori_div").style.display="block";document.getElementById("cat_div").style.display="none";document.getElementById("link_div").style.display="none";')); ?>

                                    <i class="dark-white"></i>
                                    Kategori Sayfası Seçimi
                                </label>
                            </div>

                            <div id="cat_div" class="form-group row mb-2 mt-4" style="<?php echo e(($newmenu->menu_link_type ==0)? "":"display: none"); ?>">
                                
                                <div class="col-lg-12">
                                    <input id="menulink" name="menu_link" type="text" value="<?php echo e($newmenu->menu_link); ?>"  class="form-control" placeholder="Menü Link" required>
                                </div>
                            </div>
                            <div id="link_div" class="form-group row mb-2 mt-4" style="<?php echo e(($newmenu->menu_link_type ==1)? "":"display: none"); ?>">
                                
                                <div class="col-lg-12">
                                    <select class="form-select" name="menu_page_id">
                                        <option value="0">Sayfa Seçiniz</option>
                                        <?php $__currentLoopData = $selectpages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selectpage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value='<?php echo e($selectpage->id); ?>' <?php if($selectpage->id == $newmenu->menu_page_id): ?> selected <?php endif; ?>><?php echo e($selectpage->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div id="kategori_div" class="form-group row mb-2 mt-4" style="<?php echo e(($newmenu->menu_link_type ==2)? "":"display: none"); ?>">
                                
                                <div class="col-lg-12">
                                    <select class="form-select" name="kategori_id">
                                        <option value="0">Kategori Sayfası Seçimi</option>
                                        <?php $__currentLoopData = $kategorilist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value='<?php echo e($kategori->id); ?>' <?php if($kategori->id == $newmenu->kategori_id): ?> selected <?php endif; ?>><?php echo e($kategori->kategori_title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="form-group row mb-4">
                        <label class="col-form-label col-lg-2">Site Durumu</label>

                        <div class="col-lg-10">

                            <div class="form-check mb-3">
                                <?php echo Form::radio('menu_status',1, ($newmenu->menu_status==1) ? true : false, array('id' => 'formRadios1','class'=>'form-check-input')); ?>

                                
                                <label class="form-check-label" for="formRadios1">
                                    Aktif
                                </label>
                            </div>

                            <div class="form-check mb-3">
                                <?php echo Form::radio('menu_status',0,($newmenu->menu_status==0) ? true : false, array('id' => 'formRadios2','class'=>'form-check-input')); ?>

                                
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/dashboard/menu-duzenle.blade.php ENDPATH**/ ?>