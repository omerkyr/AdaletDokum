<?php $__env->startSection('title'); ?> Menü Listesi  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Yönetim Paneli <?php $__env->endSlot(); ?>

<?php $__env->slot('title'); ?> <?php echo e($menutipi['name']); ?> <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('menuekle',['id'=>$menutipi['type']])); ?>">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Menü Ekle
                    </button>
                </a>
                <h4 class="card-title">Menü Listesi</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle justify-content-center mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Menu Sırası</th>
                            <th>Üst Menü</th>
                            <th>Menü Başlığı</th>
                            <th>Menü Durumu</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($menu->id); ?></th>
                            <?php if($menu->menu_ust_id == 0): ?>
                            <td><?php echo e($menu->menu_sira); ?></td>
                            <td>-</td>
                            <?php else: ?>
                                <td><?php echo e($menu->ust_menu->menu_sira); ?> - <?php echo e($menu->menu_sira); ?> </td>
                                <td> <?php echo e($menu->ust_menu->menu_title); ?> </td>
                            <?php endif; ?>
                                <td><?php echo e($menu->menu_title); ?></td>
                            <?php if($menu->menu_status == 1): ?>
                                <td><a><i data-feather="check" style="color: green;"></i></a>
                            <?php else: ?>
                                <td><a><i data-feather="x" style="color: red;"></i></a>
                            <?php endif; ?>
                            <td><a href="/admin/menu-duzenle/<?php echo e($menu->id); ?>"><i style="color: green;" data-feather="edit"></i></a>/
                             <a style="cursor:pointer;" data-dataid="<?php echo e($menu->id); ?>" data-title="<?php echo e($menu->menu_title); ?>" id="sa-warning" ><i style="color: red;" data-feather="trash-2"></i></a>
                            </td>
                        </tr>

                            <?php if(\PHPUnit\Framework\isEmpty($menu->alt_menu)): ?>
                            <?php $__currentLoopData = $menu->alt_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                            <th scope="row"><?php echo e($altmenu->id); ?></th>
                            <?php if($altmenu->menu_ust_id == 0): ?>
                            <td><?php echo e($altmenu->menu_sira); ?></td>
                            <td>-</td>
                            <?php else: ?>
                            <td><?php echo e($altmenu->ust_menu->menu_sira); ?> - <?php echo e($altmenu->menu_sira); ?> </td>
                            <td> <?php echo e($altmenu->ust_menu->menu_title); ?> </td>
                            <?php endif; ?>
                            <td><?php echo e($altmenu->menu_title); ?></td>
                            <?php if($altmenu->menu_status == 1): ?>
                            <td><a><i data-feather="check" style="color: green;"></i></a>
                            <?php else: ?>
                            <td><a><i data-feather="x" style="color: red;"></i></a>
                            <?php endif; ?>
                            <td>
                                <a href="/admin/menu-duzenle/<?php echo e($altmenu->id); ?>">
                                    <i style="color: green;" data-feather="edit"></i></a>/
                                <a data-dataid="<?php echo e($altmenu->id); ?>" data-title="<?php echo e($altmenu->menu_title); ?>" style="cursor:pointer;" id="sa-warning">
                                    <i style="color: red;" data-feather="trash-2"></i></a>
                            </td>

                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>

                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>








                                    <!--<tr>
                                        <th scope="row">
                                            A Basic Message
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-basic">Click me</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            A Title with a Text Under
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-title">Click me</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            A success message!
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-success">Click me</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            A warning message, with a function attached to the "Confirm"-button...
                                        </th>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-warning">Click me</button>
                                        </td>
                                    </tr>--!>


                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                            <!-- end table responsive -->

                        </div>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\adaletdokum\resources\views/dashboard/menu-liste.blade.php ENDPATH**/ ?>