<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > <?php echo e($title); ?></h4>
    </div>



    <section class="page_content">

        <div class="hstack mb-4">
            <a href="<?php echo e(route('admin.conducteurs', ['type' => 'APPROUVE'])); ?>" class="<?php echo e(($ask_status === "APPROUVE") ? "button" : "button-outline"); ?> me-2">Approuver</a>
            <a href="<?php echo e(route('admin.conducteurs', ['type' => 'DEMANDE'])); ?>" class="<?php echo e(($ask_status === "DEMANDE") ? "button" : "button-outline"); ?> me-2">En cours</a>
            <a href="<?php echo e(route('admin.conducteurs', ['type' => 'REJETE'])); ?>" class="<?php echo e(($ask_status === "REJETE") ? "button" : "button-outline"); ?> me-2">Réjéter</a>
        </div>

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Nom</th>
                    <th>Inscris le </th>
                    <th>Téléphone</th>
                    <th>Status</th>
                    <th class="text-center">Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php $__currentLoopData = $conducteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $conducteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i + 1); ?></b></td>
                            <td>
                                <img src="$user->image_profil" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="<?php echo e(route('admin.conducteur', ['id' => $conducteur->id])); ?>"><?php echo e(ucfirst($conducteur->user->last_name).' '.ucfirst($conducteur->user->first_name)); ?></a></span>
                            </td>
                            <td><?php echo e($conducteur->created_at->format('d/m/Y')); ?></td>
                            <td><?php echo e($conducteur->user->phone); ?></td>
                            <td>
                                <?php echo e($conducteur->ask_status); ?>

                            </td>
                            <td class="text-center"><a href="<?php echo e(route('admin.conducteur', ['id' => $conducteur->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
              </table>
        </div>

        <style>
            svg {
                height: 20px;
            }
        </style>


    </section>

</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/conducteur/conducteurs.blade.php ENDPATH**/ ?>