<!-- Footer Style Two -->
<footer class="footer-style-two">
    <div class="pattern-layer" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-23.png)"></div>
    <div class="pattern-layer-two" style="background-image:url(<?php echo e(asset('/fronted')); ?>/images/background/pattern-24.png)"></div>
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="/"><img src="<?php echo e(asset('/images/')); ?>/<?php echo e($ayar->site_logo); ?>" alt="" /></a>
                                </div>
                                <div class="text"><?php echo e($ayar->site_description); ?></div>
                                <ul class="social-box">
                                    <li><a href="<?php echo e($ayar->sosyal_facebook); ?>" class="fa fa-facebook"></a></li>
                                    <li><a href="<?php echo e($ayar->sosyal_twitter); ?>" class="fa fa-twitter"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">


                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <h5>İletişim Bilgileri</h5>
                                <ul class="contact-list">
                                    <li>
                                        <span class="icon flaticon-telephone"></span>
                                        Telefon Numarası
                                        <a href="mailto:<?php echo e(str_replace(" ","",$ayar->contact_tel)); ?>"><?php echo e($ayar->contact_tel); ?></a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-email"></span>
                                        E-Posta Adresi
                                        <a href="mailto:<?php echo e($ayar->contact_email); ?>"><?php echo e($ayar->contact_email); ?></a>
                                    </li>
                                    <li>
                                        <span class="icon flaticon-home"></span>
                                        Adres
                                        <a href="#"><?php echo e($ayar->contact_adres); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="copyright">&copy; 2023 Adalet Döküm - Tüm Hakları Saklıdır. Geliştiren <a href="http://qryazilim.com" style="color: red">QR Yazılım</a></div>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- End Footer Style Two -->

</div>
<!-- End Page Wrapper -->


<?php echo $__env->yieldContent('script'); ?>


<script src="<?php echo e(asset('/fronted')); ?>/js/jquery.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/popper.min.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/magnific-popup.min.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/appear.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/parallax.min.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/tilt.jquery.min.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/jquery.paroller.min.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/owl.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/wow.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/mixitup.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/odometer.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/slick.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/backToTop.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/jquery-ui.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/cursor-script.js"></script>
<script src="<?php echo e(asset('/fronted')); ?>/js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?php echo e(asset('/fronted/')); ?>/js/respond.js"></script><![endif]-->
<?php /**PATH /home9/adaletdokum/public_html/resources/views/fronted/layouts/footer.blade.php ENDPATH**/ ?>