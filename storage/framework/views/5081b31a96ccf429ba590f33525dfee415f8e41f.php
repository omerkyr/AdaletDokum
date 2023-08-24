<?php $__env->startSection('title'); ?>
    Sayfa Düzenle
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <meta name="_token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Sayfa Düzenle
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
           " <?php echo e($editpage->title); ?> " Sayfa Düzenle
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <?php if(session('SayfaUpdateSuccess')): ?>
        <div class="alert alert-success"><?php echo e(session('SayfaUpdateSuccess')); ?>

        </div>
    <?php endif; ?>



















































































    <div class="card-body">
        <!-- Nav tabs -->
         <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                    <span class="d-none d-sm-block">Ayarlar</span>
                </a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                    <span class="d-none d-sm-block">Fotoğraf Ekle (Slider)</span>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-3 text-muted">
            <div class="tab-pane active" id="home-1" role="tabpanel">

                <form class="outer-repeater" method="post" action="<?php echo e(route('sayfaupdate',['id'=>$editpage->id])); ?>" enctype="multipart/form-data"    >
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Sayfa Ekle</h4>
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div data-repeater-item class="outer">
                                            <div class="form-group row mb-4">
                                                <label for="sayfabaslik" class="col-form-label col-lg-2">Sayfa Başlığı*</label>
                                                <div class="col-lg-10">
                                                    <input id="sayfabaslik" name="title" type="text" value="<?php echo e($editpage->title); ?>" class="form-control"
                                                           placeholder="Sayfa Başlığı*" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="kisaaciklama" class="col-form-label col-lg-2">Sayfa Kısa Açıklaması*</label>
                                                <div class="col-lg-10">
                                                    <input id="kisaaciklama" name="kisa_aciklama" type="text" value="<?php echo e($editpage->kisa_aciklama); ?>" class="form-control"
                                                           placeholder="Sayfa Kısa Açıklaması*" required>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="example-date-input" class="col-form-label col-lg-2">Yayınlanma Tarihi</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" type="date" name="date" value="<?php echo e($editpage->date); ?>" id="example-date-input">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="sayfadetayi" class="col-form-label col-lg-2">Sayfa Detayı*</label>
                                                <div class="col-lg-10">
                                        <textarea id="editorCheck" name="details" type="text"
                                                  class="form-control"><?php echo e($editpage->details); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="photofile" class="col-form-label col-lg-2">Fotoğraf Yükle</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control" name="photo_file" type="file" id="photofile">
                                                    <img style="max-width:100px " src="<?php echo e(asset('/fronted/')); ?>/images/gallery/<?php echo e($editpage->photo_file); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="photofile" class="col-form-label col-lg-2">Dosya Yükle</label>
                                                <div class="col-lg-5">
                                                    <div class="file-pdf">
                                                        <a type="button" class="add_file_pdf">Dosya Ekle &nbsp;
                                                            <span style="font-size:16px; font-weight:bold;">+ </span>
                                                        </a>
                                                        <?php if(isset($sayfa)): ?>
                                                            <?php $__currentLoopData = $sayfa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="mb-2">
                                                                    <input class="form-control" name="attach_file[]" type="file" id="photofile">
                                                                    <p class="mb-2">  <img src="<?php echo e(asset('/images')); ?>/pdf.png" style="max-height: 20px">
                                                                        <?php echo e($attac->title); ?> </p><a data-dataid="<?php echo e($attac->id); ?>" data-title="<?php echo e($attac->title); ?>" style="cursor:pointer;" id="sa-pagefiledelete">Dosyayı Sil</a></div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php else: ?>
                                                            <div class="mb-2">
                                                                <input class="form-control" name="attach_file[]" type="file" id="photofile">
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label class="col-form-label col-lg-2">Site Durumu</label>
                                                <div class="col-lg-10">

                                                    <div class="form-check mb-3">
                                                        <?php echo Form::radio('status','1', ($editpage->status==1) ? true : false, array('id' => 'formRadios1','class'=>'form-check-input')); ?>

                                                        
                                                        <label class="form-check-label" for="formRadios1">
                                                            Aktif
                                                        </label>
                                                    </div>

                                                    <div class="form-check mb-3">
                                                        <?php echo Form::radio('status','0',($editpage->status==0) ? true : false, array('id' => 'formRadios2','class'=>'form-check-input')); ?>

                                                        
                                                        <label class="form-check-label" for="formRadios2">
                                                            Pasif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row mb-4">
                                                <label for="kategori_secimi" class="col-form-label col-lg-2">Kategori Seçimi</label>
                                                <div class="col-lg-10">
                                                    <div class="form-check form-switch mb-3" dir="ltr">
                                                        <input type="checkbox" class="form-check-input" name="menu_status" id="customSwitch1" <?php if($editpage->menu_status == 1): ?> checked <?php endif; ?>>
                                                        <label class="form-check-label" id="kategori_secimi" for="customSwitch1">Kategori Aktif/Pasif</label>
                                                    </div>
                                                    
                                                    <div class="col-lg-12" id="bannerhide"  <?php echo ($editpage->menu_status == 0) ? "style='display:none'":""; ?>>

                                                        <select id="kategori_secimi" name="kategori_id"  type="text" class="form-control">
                                                            <option value="0" >Seçiniz</option>
                                                            <?php $__currentLoopData = $kategorilist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value='<?php echo e($kategori->id); ?>' <?php if($kategori->id == $editpage->kategori_id): ?> selected <?php endif; ?>><?php echo e($kategori->kategori_title); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>

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
                                    <h4 class="card-title mb-4">Seo Ayarları</h4>
                                    <div data-repeater-list="outer-group" class="outer">
                                        <div data-repeater-item class="outer">

                                            <div class="form-group row mb-4">
                                                <label for="i-seotitle" class="col-form-label col-lg-2">Seo Title</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seotitle" name="seo_title" value="<?php echo e($editpage->seo_title); ?>" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="i-seodescription" class="col-form-label col-lg-2">Seo Açıklaması</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seodescription" name="seo_description" value="<?php echo e($editpage->seo_description); ?>" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="i-seo_keywords" class="col-form-label col-lg-2">Seo Anahtarı</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seokeywords" name="seo_keywords" value="<?php echo e($editpage->seo_keywords); ?>" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="i-seourlslug" class="col-form-label col-lg-2">Seo Url Slug</label>
                                                <div class="col-lg-10">
                                                    <input id="i-seourlslug" name="seo_url_slug" value="<?php echo e($editpage->seo_url_slug); ?>" type="text" class="form-control" placeholder="">
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
            </form>


            </div>

            <div class="tab-pane" id="profile-1" role="tabpanel">

                    <div class="card">

                        <div class="card-header">
                            <h4 class="card-title">Slide Resim Ekle</h4>
                            <p class="card-title-desc">Eklediğiniz resimleri görmek için sayfayı yenileyiniz.
                            </p>
                        </div>

                <form method="post" action="<?php echo e(url('image/upload/store')); ?>" enctype="multipart/form-data"
                      class="dropzone" id="dropzone">
                    <input hidden="" name="page_id" value="<?php echo e($editpage->id); ?>">
                    <?php echo csrf_field(); ?>
                </form>


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slide Resimleri</h4>
                            </div><!-- end card header -->

                            <div class="card-body">

                                <div class="row">

                                <?php $__currentLoopData = $imageLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imageList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="col-md-2">
                                        <div class="card">
                                        <img class="rounded me-2" alt="200x200" width="200" height="200" src="<?php echo e(asset('/images')); ?>/photo/<?php echo e($imageList->photo_file); ?>" data-holder-rendered="true">
                                        <p class=""><?php echo e($imageList->title); ?></p>
                                        <a   style="cursor:pointer;" data-dataid="<?php echo e($imageList->id); ?>" data-title="<?php echo e($imageList->title); ?>" id="sa-imageSlideDelete"><button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-block font-size-16 align-middle"></i></button></a>
                                    </div><!-- end col -->
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div><!-- end row -->

                            </div><!-- end card-body -->

                        </div><!-- end card -->

                    </div><!-- end col -->

                </div><!-- end row -->


            </div>
        </div>
        </div>


    </div><!-- end card-body -->





<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>



    <script src="<?php echo e(URL::asset('assets/dropzone/config.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/sweetalert.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/@ckeditor/@ckeditor.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-editor.init.js')); ?>"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '<?php echo e(url("image/delete")); ?>',
                    data: {filename: name},
                    success: function (data){
                        console.log("dosya Silme İşlemi Başarılı!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script>

    <script>
        // import Image from '@ckeditor/ckeditor5-image/src/image';
        // import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
        // import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
        // import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
        // import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';
        // import LinkImage from '@ckeditor/ckeditor5-link/src/linkimage';
        //
        // ClassicEditor
        //     .create( document.querySelector( '#ckeditor-classic' ), {
        //         plugins: [ Image, ImageToolbar, ImageCaption, ImageStyle, ImageResize, LinkImage ],
        //         image: {
        //             toolbar: [
        //                 'imageStyle:block',
        //                 'imageStyle:side',
        //                 '|',
        //                 'toggleImageCaption',
        //                 'imageTextAlternative',
        //                 '|',
        //                 'linkImage'
        //             ]
        //         }
        //     } )
        //     .then( /* ... */ )
        //     .catch( /* ... */ );

            ClassicEditor
            .create( document.querySelector( '#editorCheck' ),{
                ckfinder:{
                    uploadUrl: '<?php echo e(route('ckeditor.upload').'?_token='.csrf_token()); ?>'
                }
            } )
            .then( editor => {
            console.log( editor );
        } )
            .catch( error => {
            console.error( error );
        } );


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
    <script>
        $(document).ready(function() {
            var max_fields = 10;
            var wrapper = $(".file-pdf");
            var add_button = $(".add_file_pdf");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div class="mb-2"> <input class="form-control" name="attach_file[]" type="file" /><a href="#" class="delete">Delete</a> </div>'); //add input box
                } else {
                    alert('Limiti sayısını aştınız')
                }
            });

            $(wrapper).on("click", ".delete", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home9/adaletdokum/public_html/resources/views/dashboard/sayfa-duzenle.blade.php ENDPATH**/ ?>