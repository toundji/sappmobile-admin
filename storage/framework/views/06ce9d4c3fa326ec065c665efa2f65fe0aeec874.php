<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Listes des Publications</h4>
    </div>

    <section class="row g-3 my-4">
        <?php $__currentLoopData = $publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 " >
                <div class="bg-white rounded border pb-1">
                    <img src="<?php echo e($publication->image); ?>" alt="" class="w-100" style="object-fit: cover; height: 200px">
                    <div class="mx-4 my-3">
                        <h6><?php echo e($publication['name']); ?></h6>
                        <?php if($publication['link'] !== "" && $publication['link'] !== null): ?>
                            <a href="<?php echo e($publication['link']); ?>" target="_blank" class="mb-2">En savoir plus</a>
                        <?php endif; ?>
                        <p style="text-align: justify; font-size: 14px">
                            <?php echo Str::limit($publication['description'], 350); ?>

                        </p>
                        <div class="hstack">
                            <?php if(autorisationAuth("publication_edit")): ?>
                                <a href="<?php echo e(route('admin.publication', ['id' => $publication['id']])); ?>" class="button">Editer</a>
                            <?php endif; ?>
                            <?php if(autorisationAuth("publication_delete")): ?>
                                <button wire:click="delete(<?php echo e($publication['id']); ?>)" class="ms-2 btn text-white" style="background-color: #f00">Supprimer</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/other/publications.blade.php ENDPATH**/ ?>