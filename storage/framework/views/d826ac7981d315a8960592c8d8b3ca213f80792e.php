<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Entreprise</h4>
    </div>



    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Ville </th>
                    <th>Agent</th>
                    <th class="text-center">Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                            <td>
                                <img src="<?php echo e($entreprise->logo); ?>" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="<?php echo e(route('admin.entreprise', ['id' => $entreprise->id])); ?>"><?php echo e($entreprise->name); ?></a></span>
                            </td>
                            <td><?php echo e($entreprise->ville); ?></td>
                            <td>
                                <?php if($entreprise->agent_entreprise): ?>
                                    <a href="<?php echo e(route('admin.client', ['id' => $entreprise->agent_entreprise->user->id])); ?>"><?php echo e(ucfirst($entreprise->agent_entreprise->user->last_name).' '.ucfirst($entreprise->agent_entreprise->user->first_name)); ?></a>
                                <?php endif; ?>
                            </td>
                            <td class="text-center"><a href="<?php echo e(route('admin.entreprise', ['id' => $entreprise->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
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
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/entreprise/entreprises.blade.php ENDPATH**/ ?>