<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Les classes de véhicule</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">

            <table class="table bg-primary- rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prix par M</th>
                    <th>Prix par KM</th>
                    <th class="text-center">Modifier</th>
                  </tr>
                </thead>
                <tbody  class="border-white bg-white">
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row">
                                <img src="<?php echo e(asset($category->image_category)); ?>" class="rounded-circle client-image" alt="">
                            </td>
                            <td><?php echo e($category->name); ?> </td>
                            <td><?php echo e($category->metter_price); ?> FCFA</td>
                            <td><?php echo e($category->km_price); ?> FCFA</td>
                            <td class="text-center">
                                <a href="<?php echo e(route('admin.edit_classe', ['id' => $category->id])); ?>">
                                    <i class="uil uil-edit icon-view"></i>
                                </a>
                            <td>
                        </tr>
                        <?php
                            $i++
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>


    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/vehicule/price.blade.php ENDPATH**/ ?>