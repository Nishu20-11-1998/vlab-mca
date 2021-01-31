

<?php $__env->startSection('title'); ?>
<title>SPIT R & D</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="main mt-4">
    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
     
                <div class="col-md-12">

                    <div class="container mt-2">
                        <?php if(count($errors) > 0): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php echo e($error); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php if(session('Success')): ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo e(session('Success')); ?>

                            </div>  
                        <?php endif; ?>

                        <?php if(session('Error')): ?>
                            <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo e(session('Error')); ?>

                            </div>  
                        <?php endif; ?>
                    </div>

                    <h2 class="page-title">Manage Reports</h2>
                    <hr>

                    </div>
            </div>
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\iedc\resources\views/pages/report.blade.php ENDPATH**/ ?>