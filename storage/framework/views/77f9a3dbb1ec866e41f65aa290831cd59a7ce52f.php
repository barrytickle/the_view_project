<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/app.css"/>
        <meta charset="utf-8"/>
        <title><?php echo $__env->yieldContent('title'); ?>;</title>
    </head>
    <body>
        
        <div class="container">
            <article class="row">
                <?php echo $__env->yieldContent('content'); ?>
            </article>
        </div>
    </body>
</html>