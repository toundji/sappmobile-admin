<?php $__env->startSection('content'); ?>
<div class="container-fluid banner">
    <h4>SAPP MOBILE > Informations</h4>
</div>


<section class="bg-light- border">
    <div class="container px-5 pb-5 pt-4">

        <form action="<?php echo e(route('admin.p_informations')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <?php if(session()->has("success")): ?>
                <div class="alert alert-success mt-4">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php $__currentLoopData = $informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-3">
                    <label for="" class="mb-1"><?php echo e($information['option']); ?></label>
                    <input type="text" class="form-control-" value="<?php echo e($information['value']); ?>" name="<?php echo e($information['name']); ?>">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="mt-4">
                <input type="submit" value="Enregistrer" class="button">
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.base", ['title' => "Informations"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/informations.blade.php ENDPATH**/ ?>