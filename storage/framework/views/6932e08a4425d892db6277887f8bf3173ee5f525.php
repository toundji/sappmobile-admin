<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Les conducteurs approuvés</h4>
    </div>



    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Inscris le </th>
                    <th>Téléphone</th>
                    <th class="text-center">Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php $__currentLoopData = $conducteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $conducteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i + 1); ?></b></td>
                            <td>
                                <img src="<?php echo e(asset($conducteur->user->image_profil)); ?>" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="<?php echo e(route('finance.conducteur', ['id' => $conducteur->id, "type" => $type])); ?>"><?php echo e(ucfirst($conducteur->user->last_name).' '.ucfirst($conducteur->user->first_name)); ?></a></span>
                            </td>
                            <td><?php echo e($conducteur->created_at->format('d/m/Y')); ?></td>
                            <td><?php echo e($conducteur->user->phone); ?></td>
                            <td class="text-center"><a href="<?php echo e(route('finance.conducteur', ['id' => $conducteur->id, "type" => $type])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
        </div>


    </section>

</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/finance/conducteurs.blade.php ENDPATH**/ ?>