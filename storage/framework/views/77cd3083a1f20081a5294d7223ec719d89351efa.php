<?php $__env->startSection('title'); ?>
Giriş Yap
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xxl-3 col-lg-4 col-md-5">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="<?php echo e(url('www.qryazilim.com')); ?>" class="d-block auth-logo">
                                    <img src="<?php echo e(URL::asset('images/qryazilim.png')); ?>" alt="qryazilim" height="32">
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">Giriş Yap !</h5>
                                    <p class="text-muted mt-2">QR Yazılım Yönetim Paneline Giriş Yapıyorsunuz.</p>
                                </div>
                                <form class="mt-4 pt-2" action="<?php echo e(route('login')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="" id="input-username" placeholder="Enter User Name" name="email">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <label for="input-username">Kullanıcı Adı / E-Posta Adresi</label>
                                        <div class="form-floating-icon">
                                        <i data-feather="users"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                        <input type="password" class="form-control pe-5 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" id="password-input" placeholder="Şifreyi Griniz">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                        </button>
                                        <label for="input-password">Şifre</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>













                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Giriş Yap</button>
                                    </div>
                                </form>

































                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> QR Yazılım</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            <div class="col-xxl-9 col-lg-8 col-md-7">
                <div class="auth-bg pt-md-5 p-4 d-flex">
                    <div class="bg-overlay"></div>
                    <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- end bubble effect -->
                    <div class="row justify-content-center align-items-end">
                        <div class="col-xl-7">
                            <div class="p-0 p-sm-4 px-xl-0">
                                <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">

















                                    <!-- end carousel-inner -->
                                </div>
                                <!-- end review carousel -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/js/pages/pass-addon.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/feather-icon.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>