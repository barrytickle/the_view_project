<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css"/>
        <link rel="stylesheet" href="/assets/css/queries.css"/>
        <meta charset="utf-8"/>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
    <body>
        <div class="navbar">
            <?php echo $__env->make('includes.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <script src="/assets/js/masonry.pkgd.min.js"></script>
    </body>
</html>