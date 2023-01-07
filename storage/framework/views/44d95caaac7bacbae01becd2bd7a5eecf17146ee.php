<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des opérations </h4>
    </div>

    <section class="page_content">

        <div class="d-block g-4 mb-4">
            <a href="<?php echo e(route('admin.operations', ['type' => "DEMANDE"])); ?>" class="<?php echo e(($status == "DEMANDE") ? "button" : "button-outline"); ?> m-2">DEMANDE</a>
            <a href="<?php echo e(route('admin.operations', ['type' => "RECHERCHE"])); ?>" class="<?php echo e(($status == "RECHERCHE") ? "button" : "button-outline"); ?> m-2">RECHERCHE</a>
            <a href="<?php echo e(route('admin.operations', ['type' => "NEGOCIATION"])); ?>" class="<?php echo e(($status == "NEGOCIATION") ? "button" : "button-outline"); ?> m-2">NEGOCIATION</a>
            <a href="<?php echo e(route('admin.operations', ['type' => "VALIDE"])); ?>" class="<?php echo e(($status == "VALIDE") ? "button" : "button-outline"); ?> m-2">VALIDE</a>
            <a href="<?php echo e(route('admin.operations', ['type' => "ATTENTE"])); ?>" class="<?php echo e(($status == "ATTENTE") ? "button" : "button-outline"); ?> m-2">ATTENTE</a>
            <a href="<?php echo e(route('admin.operations', ['type' => "EN COURS"])); ?>" class="<?php echo e(($status == "EN COURS") ? "button" : "button-outline"); ?> m-2">EN COURS</a>
            <a href="<?php echo e(route('admin.operations', ['type' => "TERMINE"])); ?>" class="<?php echo e(($status == "TERMINE") ? "button" : "button-outline"); ?> m-2">TERMINE</a>
            <a href="<?php echo e(route('admin.operations', ['type' => "ANNULE"])); ?>" class="<?php echo e(($status == "ANNULE") ? "button" : "button-outline"); ?> m-2">ANNULE</a>
        </div>

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Date et heure</th>
                    <th>Client</th>
                    <th>Conducteur</th>
                    <th>Montant</th>
                    <th>Status</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $transports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i); ?></b></td>
                            <td><?php echo e($transport->created_at->format('d/m/Y à H:i:s')); ?></td>
                            <td>
                                <img src="<?php echo e($transport->user->image_profil); ?>" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="<?php echo e(route('admin.client', ['id' => $transport->user->id])); ?>"><?php echo e(ucfirst($transport->user->last_name).' '.ucfirst($transport->user->first_name)); ?></a></span>
                            </td>
                            <td>
                                <img src="<?php echo e($transport->conducteur->user->image_profil); ?>" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="<?php echo e(route('admin.conducteur', ['id' => $transport->conducteur->user->id])); ?>"><?php echo e(ucfirst($transport->conducteur->user->last_name).' '.ucfirst($transport->conducteur->user->first_name)); ?></a></span>
                            </td>
                            <td><?php echo e($transport->price); ?> FCFA</td>
                            <td>
                                <?php
                                    if($transport->status === 1) {
                                        echo "Terminer";
                                    } elseif ($transport->status === 0) {
                                        echo "En cours";
                                    } elseif ($transport->status === -1) {
                                        echo "Annuler";
                                    }
                                ?>
                            </td>
                            <td class="text-center"><a href="<?php echo e(route('admin.operation', ['id' => $transport->id])); ?>"><i class="uil uil-eye icon-view"></i></a></td>
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
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/admin/operation/operations.blade.php ENDPATH**/ ?>