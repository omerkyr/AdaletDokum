<?php $__env->startSection('title'); ?> Sayfa Listesi  <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Yönetim Paneli <?php $__env->endSlot(); ?>

<?php $__env->slot('title'); ?> <?php echo e($kategori['name']); ?> Sayfa Listesi <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php if(session('PageDeleteSuccess')): ?>
    <div class="alert alert-success"><?php echo e(session('PageDeleteSuccess')); ?>

    </div>
<?php endif; ?>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('sayfaekle',['page_type'=>$kategori['type']])); ?>">
                    <button type="button" class="btn btn-outline-success waves-effect waves-light" style="float: right;">
                        <i data-feather="plus"></i> Yeni Sayfa Ekle
                    </button>
                </a>
                <h4 class="card-title">Sayfa Listesi</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle justify-content-center mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Sayfa Adı</th>
                            <th>Sayfa Ziyareti</th>
                            <th>Sayfa Durumu</th>
                            <th>Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($page->id); ?></th>

                            <td><?php echo e($page->title); ?></td>

                            <td><?php echo e($page->visits); ?></td>

                            <?php if($page->status == 1): ?>
                                <td><a><i data-feather="check" style="color: green;"></i></a>
                            <?php else: ?>
                                <td><a><i data-feather="x" style="color: red;"></i></a>
                            <?php endif; ?>
                            <td><a href="<?php echo e(route('sayfaduzenle',['id'=>$page->id])); ?>"><i style="color: green;" data-feather="edit"></i></a>/
                             <a style="cursor:pointer;" data-dataid="<?php echo e($page->id); ?>" data-title="<?php echo e($page->title); ?>" id="sa-page" ><i style="color: red;" data-feather="trash-2"></i></a>
                            </td>
                        </tr>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/dashboard/sayfa-liste.blade.php ENDPATH**/ ?>