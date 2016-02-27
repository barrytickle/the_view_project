<?php $__env->startSection('title', 'sample home page'); ?>
<?php $__env->startSection('content'); ?>
    <p>This is the content</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>