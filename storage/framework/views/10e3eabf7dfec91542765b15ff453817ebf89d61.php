<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Véhicules</h4>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Matricule</th>
                    <th>Catégorie </th>
                    <th>Model</th>
                    <th>Entreprise</th>
                    <th>Conducteur</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php $__currentLoopData = $vehicules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $vehicule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i + 1); ?></b></td>
                            <td>
                                <a href="<?php echo e(route('finance.vehicule', ['id' => $vehicule->id, "type" => $type])); ?>"><?php echo e($vehicule->matricule); ?></a>
                            </td>
                            <td>
                                <?php if($vehicule->category): ?>
                                    <?php echo e($vehicule->category->name); ?>

                                <?php endif; ?>
                            </td>
                            <td><?php echo e($vehicule->model); ?></td>
                            <td>
                                <?php if($vehicule->entreprise): ?>
                                    <a href="<?php echo e(route('finance.entreprise', ['id' => $vehicule->entreprise->id, "type" => $type])); ?>"><?php echo e($vehicule->entreprise->name); ?></a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($vehicule->conducteur): ?>
                                    <a href="<?php echo e(route('finance.conducteur', ['id' => $vehicule->conducteur->id, "type" => $type])); ?>"><?php echo e(ucfirst($vehicule->conducteur->user->last_name ?? null).' '.ucfirst($vehicule->conducteur->user->first_name ?? null)); ?></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
        </div>

    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/finance/vehicules.blade.php ENDPATH**/ ?>