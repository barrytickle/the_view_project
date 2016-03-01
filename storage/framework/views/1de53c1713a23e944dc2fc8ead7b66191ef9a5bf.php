<?php $__env->startSection('title', 'View - Home'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content-banner">
        <?php foreach($content as $con): ?>
        <div class="content-hero-box">
            <h2 class="title"><?php echo e($con->title); ?></h2>
            <p><?php echo e($con->content); ?> </p>
           
        </div>
        <?php endforeach; ?>
    </div>

    <div class="grid clearfix">
        <div class=" content-blue grid-item">
            <div class="content-hero-box">
                <h2 class="title">Dell U2515H Review</h2>
                <p>Dell has newly released their latest addition to the ultrasharp series, this time providing us with a monitor giving us a 2k resolution at 60Hz...</p>
             
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
               
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
                
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
                
            </div>
        </div>
        <div class=" content-red grid-item">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
                
            </div>
        </div>
        <div class=" content-red grid-item grid-item-height2">
            <div class="content-hero-box">
                <h2 class="title">New Raspberry Pi Announcement</h2>
                <p>Raspberry Pi has been released, with its newest model "X" becoming the latest revolutionary device to provide laptop performance, at the size of a credit card...</p>
               
            </div>
        </div>
    </div>

        
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>