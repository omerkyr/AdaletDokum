<!DOCTYPE html>
<html>
<?php echo $__env->make('fronted.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('head'); ?>
<?php echo $__env->yieldContent('header'); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->yieldContent('footer'); ?>
<?php echo $__env->make('fronted.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH C:\laragon\www\adaletdokum\resources\views/fronted/layouts/master.blade.php ENDPATH**/ ?>