<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="/admin">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="#" class="has-arrow">
                        <i data-feather="menu"></i>
                        <span data-key="t-menu-list">Menu Listesi</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('menulist',1)); ?>" key="t-header">Header</a></li>
                        <li><a href="<?php echo e(route('menulist',2)); ?>" data-key="t-footer">Footer</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-page-setting">Sayfa Ayarları</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('sayfalist',1)); ?>" key="t-page-edit">Sayfa Düzenle</a></li>
                        <li><a href="<?php echo e(route('sayfaekle',1)); ?>" data-key="t-page-add">Sayfa Ekle</a></li>
                        <li><a href="<?php echo e(route('kategorilist',1)); ?>" data-key="t-page-add">Kategoriler</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow">
                        <i data-feather="package"></i>
                        <span data-key="t-page-project">Proje Sayfası</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('sayfalist',3)); ?>" key="t-page-edit">Sayfa Düzenle</a></li>
                        <li><a href="<?php echo e(route('sayfaekle',3)); ?>" data-key="t-page-add">Sayfa Ekle</a></li>
                        <li><a href="<?php echo e(route('kategorilist',3)); ?>" data-key="t-page-add">Kategoriler</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow">
                        <i class="fas fa-spider"></i>
                        <span data-key="t-page-setting">Blog Sayfası</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('sayfalist',2)); ?>" key="t-page-edit">Sayfa Düzenle</a></li>
                        <li><a href="<?php echo e(route('sayfaekle',2)); ?>" data-key="t-page-add">Sayfa Ekle</a></li>
                        <li><a href="<?php echo e(route('kategorilist',2)); ?>" data-key="t-page-add">Kategoriler</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/admin/slider-liste">
                        <i data-feather="sliders"></i>
                        <span data-key="t-news">Slider</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-pages"><?php echo app('translator')->get('translation.Settings'); ?></li>

                <li>
                    <a href="<?php echo e(route('genelayarlar')); ?>" >
                        <i data-feather="settings"></i>
                        <span data-key="t-authentication">Genel Ayarlar</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\laragon\www\adaletdokum\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>