<div>
    <div class="container-fluid banner">
        <h4>SAPP MOBILE > Liste des opérations et Gains du client <span class="text-primary-"><?php echo e($user->last_name." ".$user->first_name); ?></span></h4>
    </div>

    <div class="bg-warning py-2 px-2 rounded hstack mt-3">
        <p class="text-white- mb-0">Total des gains</p>
        <p class="text-white- fw-bold ms-auto mb-0"><?php echo e($total); ?> F</p>
    </div>


    <div class="row mt-3">
        <div class="<?php echo e($type == "interval" ? "col-4" : "col-6"); ?>">
            <p class="mt-3 mb-0">Filtre par <?php echo e($filter); ?></p>
        </div>
        <div class="col-3 text-center">
            <select name="" id="" wire:model.lazy="payement_mode" class="form-control text-center">
                <option value="all">Tout Moyen</option>
                <option value="ESPECE">Espèce</option>
                <option value="COMPLICE">Complice</option>
                <option value="ELECTRONIQUE">Electronique</option>
            </select>
        </div>
        <div class="<?php echo e($type == "interval" ? "col-5" : "col-3"); ?>">
            <?php if($type == "month"): ?>
                <input type="month" wire:model.lazy="month" class="form-control">
            <?php elseif($type == "year"): ?>
                <input type="year" wire:model.lazy="year" class="form-control">
            <?php elseif($type == "interval"): ?>
                <div class="hstack">
                    <input type="date" wire:model.lazy="start" class="form-control">
                    <input type="date" wire:model.lazy="end" class="form-control ms-3">
                </div>
            <?php else: ?>
                <input type="date" wire:model.lazy="date" class="form-control">
            <?php endif; ?>
        </div>
    </div>

    <section class="page_content">

        <div class="table-responsive-sm">
            <table id="example" class="table bg-white rounded align-middle">
                <thead class="bg-primary- border-bottom-black">
                  <tr class="border-white text-white">
                    <th>#</th>
                    <th>Date et heure</th>
                    <th>Conducteur</th>
                    <th>Montant</th>
                  </tr>
                </thead>
                <tbody  class="border-white">
                    <?php $__currentLoopData = $transports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-white">
                            <td scope="row"><b class="text-primary-"><?php echo e($i+1); ?></b></td>
                            <td><?php echo e($transport->created_at->format('d/m/Y à H:i:s')); ?></td>
                            <td>
                                <img src="<?php echo e($transport->conducteur->user->image_profil); ?>" class="rounded-circle client-image" alt="">
                                <span class="ms-2"><a href="<?php echo e(route('admin.conducteur', ['id' => $transport->conducteur->user->id])); ?>"><?php echo e(ucfirst($transport->conducteur->user->last_name).' '.ucfirst($transport->conducteur->user->first_name)); ?></a></span>
                            </td>
                            <td><?php echo e($transport->price); ?> FCFA</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
        </div>

    </section>
</div>
<?php /**PATH G:\Projets\Laravel\sappmobile\resources\views/livewire/finance/client.blade.php ENDPATH**/ ?>