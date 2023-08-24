<?php
// Get list of footer menu links by group Id
$HeaderMenuLinks = Helper::MenuList(0,1);
$link = "";$i=1;
?>

































<!-- scrollToTop start -->
<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
    </svg>
</div>
<!-- scrollToTop end -->

<!-- Main Header / Header Style Two -->
<header class="main-header header-style-two">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo"><a href="/"><img src="<?php echo e(asset('/images/')); ?>/<?php echo e($ayar->site_logo); ?>" alt="<?php echo e($ayar->site_title); ?>" title="<?php echo e($ayar->site_title); ?>"></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box" >
                        <div class="icon-box" style="background: #75154d;"><span class="flaticon-customer-support-1" style="color: white"></span></div>
                        <ul>
                            <li>7/24 <br> Müşteri Desteği</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box" style="background: #75154d;"><span class="flaticon-checked" style="color: white"></span></div>
                        <ul>
                            <li>ISO 9001 <br> Certification Company</li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box" style="background: #75154d;"><span class="flaticon-win" style="color: white"></span></div>
                        <ul>
                            <li>İşinde Nitelikli ve<br> Uzman Ekip</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Header Upper -->

    <!-- Header Upper -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container clearfix">

                <div class="nav-outer">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="/">Anasayfa</a></li>

                                <?php $__currentLoopData = $HeaderMenuLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php
                                        $link="";
                                        if($menuitem->menu_link_type==2){
                                            $link="";
                                        } elseif ($menuitem->menu_link_type==1){
                                            $link= $menuitem->selectpage->seo_url_slug !=""?$menuitem->selectpage->seo_url_slug:"";
                                        } else{
                                            $link= $menuitem->menu_link ==""?"":$menuitem->menu_link;
                                        }
                                        $classs = "dropdown";
                                        ?>

                                <li <?php if(count($menuitem->alt_menu)>0 ): ?> class="<?php echo e($classs); ?>" <?php endif; ?>  ><a href="<?php echo e($link); ?>"><?php echo e($menuitem->menu_title); ?></a>
                                    <?php if($menuitem->alt_menu): ?>
                                    <ul>
                                        <?php $__currentLoopData = $menuitem->alt_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altmenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                $link12="/";
                                                if($altmenu->menu_link_type==2){
                                                    $link1="";
                                                } elseif ($altmenu->menu_link_type==1){
                                                    $link1= $altmenu->selectpage->seo_url_slug !=""?$altmenu->selectpage->seo_url_slug:"";
                                                } else{
                                                    $link1= "";
                                                }
                                                ?>
                                            <?php if($altmenu->selectpage != null && $altmenu->selectpage->status == 1): ?>
                                            <li><a href="<?php echo e($link1); ?>"><?php echo e($altmenu->menu_title); ?></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php
                                $i++
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">

                        <!-- Btn Box -->
                        <div class="btn-box">
                            <a href="/iletisim" class="theme-btn btn-style-two clearfix">
									<span class="btn-wrap">
										<span class="text-one">İletişim</span>
										<span class="text-two">İletişim</span>
									</span>
                                <span class="plus flaticon-plus"></span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="/" title=""><img src="<?php echo e(asset('/fronted')); ?>/images/logo-small.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->

                </nav><!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu-3"></span></div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-close"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="<?php echo e(asset('/images/')); ?>/<?php echo e($ayar->site_logo); ?>" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
<?php /**PATH /home9/adaletdokum/public_html/resources/views/fronted/layouts/header.blade.php ENDPATH**/ ?>