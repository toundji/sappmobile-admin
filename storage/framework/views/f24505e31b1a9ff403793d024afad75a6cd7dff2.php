<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des Annonces</h4>
    </div>

    <section class="row g-3 my-4">
        <?php $__currentLoopData = $annonces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $annonce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 " >
                <div class="bg-white rounded border pb-1">
                    <img src="<?php echo e($annonce['image']); ?>" alt="" class="w-100" style="object-fit: cover; height: 200px">
                    <div class="mx-4 my-3">
                        <h6><?php echo e($annonce['name']); ?></h6>
                        <p style="text-align: justify; font-size: 14px"><?php echo e($annonce['description']); ?></p>
                        <div class="hstack">
                            <?php if(autorisationAuth("annonce_edit")): ?>
                                <a href="<?php echo e(route('admin.annonce', ['id' => $annonce['id']])); ?>" class="button">Editer</a>
                            <?php endif; ?>
                            <?php if(autorisationAuth("annonce_delete")): ?>
                                <button wire:click="delete(<?php echo e($annonce['id']); ?>)" class="ms-2 btn text-white" style="background-color: #f00">Supprimer</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sapp_api\resources\views/livewire/admin/other/annonces.blade.php ENDPATH**/ ?>